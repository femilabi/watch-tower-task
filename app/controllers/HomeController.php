<?php
namespace App\Controllers;

use App\Core\Controller;
class HomeController extends Controller
{
    public function index()
    {

        $trending_posts = $this->loadModel('Post')->getTrendingPosts();
        $latest_posts = $this->loadModel('Post')->getLatestPosts();

        $this->renderView('home', ["trending_posts" => $trending_posts, "latest_posts" => $latest_posts], "Watch Tower - Home");
    }
}
