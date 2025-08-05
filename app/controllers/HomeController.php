<?php
namespace App\Controllers;

use App\Core\Controller;
class HomeController extends Controller
{
    public function index()
    {

        $trending_posts = $this->loadModel('Post')->getTrendingPosts();
        $latest_posts = $this->loadModel('Post')->getLatestPosts();
        $post_categories = $this->loadModel('Post')->getAllCategories();

        $this->renderView('home', ["trending_posts" => $trending_posts, "latest_posts" => $latest_posts, "post_categories" => $post_categories], "Watch Tower - Home");
    }
}
