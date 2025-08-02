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
            $post_data = json_encode($_POST);
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
}
