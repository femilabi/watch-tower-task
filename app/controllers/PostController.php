<?php
namespace App\Controllers;

use App\Core\Controller;
use App\Core\Auth;
use App\Models\User;
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

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            if (isset($_FILES['cover_image'])) {
                $upload_result = uploadFile("cover_image", "posts");
                if (!(isset($upload_result['success']))) {
                    // Handle upload error
                    $this->renderView('dashboard/create-post', ['user' => $USER, 'error' => $upload_result['error'] ?? "File upload failed."], "Dashboard - Create Post");
                    return;
                }
            }
            $post_data = $_POST;
            $this->loadModel('Post')->addNewPost($USER["id"], $post_data);
            header('Location: ' . BASE_URL . 'dashboard/posts');
            exit;
        }

        $categories = $this->loadModel('Post')->getAllCategories();
        $this->setLayout('dashboard/create-post'); // Set the layout for create post
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
        $USER = (new User())->getUserById($token_data->id);
        if (!$USER) {
            header('Location: ' . BASE_URL . 'dashboard/');
            exit;
        }

        $posts = $this->loadModel('Post')->getAllPostsByUser($USER->id);
        $this->renderView('dashboard/posts', ['user' => $USER, 'posts' => $posts], "Dashboard - Posts");
    }
}
