<?php
namespace App\Core;

// Define the Controller class
class Controller
{
    // Default layout file
    protected $layout = 'home';

    // Method to render a view
    // Takes the view path, data array, and optional title as parameters
    protected function renderView($viewPath = "", $data = [], $title = "Watch Tower")
    {
        // Extract the data array into individual variables
        extract($data);
        // Include the layout file from the views directory
        require_once "app/views/" . $this->layout . ".php";
    }
    
    protected function setLayout($layout) {
        $this->layout = $layout;
    }
}
