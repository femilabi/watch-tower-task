<?php
namespace App\Controllers;

use App\Core\Controller;
use App\Models\User;
class PostController extends Controller
{
    public function index()
    {
        $token_data = $this->requireAuth();
        $USER = (new User())->getUserById($token_data->id);
        if (!$USER) {
            header('Location: ' . BASE_URL);
            exit;
        }

        $posts = $this->loadModel('Post')->getAllPostsByUserId($USER["id"]);
        $this->setLayout('dashboard/index');
        $this->renderView('', ['user' => $USER, 'posts' => $posts], "Dashboard - Home");
    }
    public function addNewPost()
    {
        $token_data = $this->requireAuth();
        $USER = (new User())->getUserById($token_data->id);
        if (!$USER) {
            header('Location: ' . BASE_URL);
            exit;
        }

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            // Validate input data
            // 
            $post_data = $_POST;
            $this->loadModel('Post')->addPost($USER["id"], $post_data);
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
        $token_data = $this->requireAuth();
        $USER = (new User())->getUserById($token_data->id);
        if (!$USER) {
            header('Location: ' . BASE_URL . 'dashboard/');
            exit;
        }

        $posts = $this->loadModel('Post')->getAllPostsByUserId($USER->id);
        $this->renderView('dashboard/posts', ['user' => $USER, 'posts' => $posts], "Dashboard - Posts");
    }
    
    public function upload() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['file'])) {
            $targetDir = __DIR__ . '/../uploads/';
            if (!is_dir($targetDir)) {
                mkdir($targetDir, 0777, true);
            }
            $fileName = basename($_FILES['file']['name']);
            $targetFile = $targetDir . $fileName;
            $uploadOk = 1;
            $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

            // Allow certain file formats (add more as needed)
            $allowedTypes = ['jpg', 'png', 'jpeg'];
            if (!in_array($fileType, $allowedTypes)) {
                $uploadOk = 0;
                $error = 'Sorry, only JPG, JPEG, PNG are allowed.';
            }

            if ($uploadOk && move_uploaded_file($_FILES['file']['tmp_name'], $targetFile)) {
                return [
                    'success' => 'The file ' . htmlspecialchars($fileName) . ' has been uploaded.',
                    'file_path' => BASE_URL . 'uploads/' . $fileName // Return the file path for further use
                ];
            } else {
                return [
                    'error' => isset($error) ? $error : 'Sorry, there was an error uploading your file.'
                ];
            }
        }
    }
}
