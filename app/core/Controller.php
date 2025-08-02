<?php
namespace App\Core;
use App\Core\JWT;

// Define the Controller class
class Controller
{
    // Default layout file
    protected $layout = 'home';
    // Method to load a model
    // Takes the model name as a parameter

    // This will load the model from the models directory
    protected function loadModel($model)
    {
        // Include the model file from the models directory
        $modelClass = 'App\\Models\\' . $model;
        // Instantiate and return the model object
        return new $modelClass;
    }

    // Method to render a view
    // Takes the view path, data array, and optional title as parameters
    protected function renderView($viewPath = "", $data = [], $title = "Watch Tower")
    {
        // Extract the data array into individual variables
        extract($data);
        // Include the layout file from the views directory
        require_once "app/views/" . $this->layout . ".php";
    }

    protected function requireAuth()
    {
        $token = $_COOKIE['token'] ?? null;
        $token_data = $token ? JWT::verify($token) : null;
        if (!$token_data) {
            header("Location: " . BASE_URL);
            exit;
        }

        return $token_data;
    }
    
    protected function setLayout($layout) {
        $this->layout = $layout;
    }
}
