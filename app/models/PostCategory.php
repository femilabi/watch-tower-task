<?php
namespace App\Models;
use App\Core\Database;

// Define a class named Post this will be the Post model
class PostCategory
{

    // Declare a private property to hold the database connection
    private $db;
    const table = "post_category";
    // Constructor method to initialize the database connection
    public function __construct()
    {
        // Create a new instance of the Database class and assign it to $db
        $this->db = new Database();
    }
}
