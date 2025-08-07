<?php
namespace App\Controllers;

use App\Core\Controller;
use App\Core\Database;
class HomeController extends Controller
{
    public function index()
    {

        $trending_posts = Database::loadModel('Post')->getTrendingPosts();
        $latest_posts = Database::loadModel('Post')->getLatestPosts();
        $post_categories = Database::loadModel('Post')->getAllCategories();

        $this->renderView('home', ["trending_posts" => $trending_posts, "latest_posts" => $latest_posts, "post_categories" => $post_categories], "Watch Tower - Home");
    }
}
