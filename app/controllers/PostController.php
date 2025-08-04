<?php
namespace App\Controllers;

use App\Core\Controller;
use App\Core\Auth;
use App\Models\User;
use function App\Helpers\getCurrentUrl;
use function App\Helpers\uploadFile;

class PostController extends Controller
{
    public function index()
    {
        $token_data = Auth::check();
        $USER = (new User())->getUserById($token_data->id);
        if (!$USER) {
            header('Location: ' . BASE_URL);
            exit;
        }

        $posts = $this->loadModel('Post')->getAllPostsByUser($USER["id"]);
        $this->setLayout('dashboard/index');
        $this->renderView('', ['user' => $USER, 'posts' => $posts], "Dashboard - Home");
    }
    public function addNewPost()
    {
        $token_data = Auth::check();
        $USER = (new User())->getUserById($token_data->id);
        if (!$USER) {
            header('Location: ' . BASE_URL);
            exit;
        }
        $this->setLayout('dashboard/create-post'); // Set the layout for create post

        // Check if the form is submitted
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            // Vaidate post inputs
            $valid_input = $this->validatePostInput($_POST);
            if (isset($valid_input['errors'])) {
                // If there are validation errors, render the create post view with errors
                header('Location: ' . getCurrentUrl() . '?errors=' . urlencode(json_encode($valid_input['errors'])));
                exit;
            }
            $valid_input["post_image"] = "";

            // Handle file upload if cover_image is set
            if (isset($_FILES['cover_image'])) {
                $upload_result = uploadFile("cover_image", "posts");
                if (!(isset($upload_result['success']))) {
                    // Handle upload error
                    header('Location: ' . getCurrentUrl() . '?error=' . urlencode($upload_result['error'] ?? 'File upload failed.'));
                    exit;
                }
                $valid_input["post_image"] = $upload_result['file_path'];
            }

            // Save post data
            $post_id = $this->loadModel('Post')->addNewPost($USER["id"], $valid_input);

            // Create post meta
            $this->loadModel('PostMeta')->addPostMeta($post_id, $valid_input);

            header('Location: ' . BASE_URL);
            exit;
        }

        $categories = $this->loadModel('Post')->getAllCategories();
        $this->renderView('', ["user" => $USER, "categories" => $categories], "Dashboard - Create Post");
    }

    public function editPost()
    {
        $this->setLayout('dashboard/create-post'); // Set the layout for create post
        $this->renderView('', [], "Dashboard - Edit Post");
    }

    public function getPosts()
    {
        $token_data = Auth::check();
        $USER = (new User())->getUserById($token_data->id) ?? null;
        if (!$USER) {
            header('Location: ' . BASE_URL . 'dashboard/');
            exit;
        }

        $posts = $this->loadModel('Post')->getAllPostsByUser($USER->id);
        $this->renderView('dashboard/posts', ['user' => $USER, 'posts' => $posts], "Dashboard - Posts");
    }

    private function validatePostInput(array $data): array
    {
        $errors = [];

        // 1. Required Fields
        $required = [
            'meta_title',
            'meta_description',
            'meta_keywords',
            'post_title',
            'post_category',
            'post_description',
            'content',
            'blog_author',
            'post_unique'
        ];

        foreach ($required as $field) {
            if (empty($data[$field])) {
                $errors[$field] = ucfirst(str_replace('_', ' ', $field)) . ' is required.';
            }
        }

        // 2. Specific Field Rules
        if (!empty($data['post_category']) && !ctype_digit($data['post_category'])) {
            $errors['post_category'] = 'Post category must be a numeric ID.';
        }

        if (!empty($data['post_unique']) && !preg_match('/^[a-z0-9\-]+$/', $data['post_unique'])) {
            $errors['post_unique'] = 'Post slug must only contain lowercase letters, numbers, and hyphens.';
        }

        if (!empty($data['meta_keywords']) && strlen($data['meta_keywords']) > 255) {
            $errors['meta_keywords'] = 'Meta keywords must not exceed 255 characters.';
        }

        // 3. Strip unwanted HTML (optional – for safety)
        $cleanData = array_map(function ($value) {
            return is_string($value) ? htmlspecialchars(trim($value), ENT_QUOTES, 'UTF-8') : $value;
        }, $data);

        // Return errors or clean data
        if (!empty($errors)) {
            return ['errors' => $errors];
        }

        return ['data' => $cleanData];
    }

}
