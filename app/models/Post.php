<?php
namespace App\Models;
use App\Core\Database;
use function App\Helpers\getSlug;
use function App\Helpers\purifyHtml;

// Define a class named Post this will be the Post model
class Post
{

    // Declare a private property to hold the database connection
    private $db;
    const table = "posts";
    // Constructor method to initialize the database connection
    public function __construct()
    {
        // Create a new instance of the Database class and assign it to $db
        $this->db = new Database();
    }

    // Method to retrieve all posts from the database
    public function getAllPostsByUser($id)
    {
        // Prepare a SQL query to select all records from the post table
        $this->db->query("SELECT * FROM " . self::table . " WHERE user_id = :user_id");
        $this->db->bind(':user_id', $id);
        return $this->db->results();
    }

    // Method to add a new post to the database
    public function addNewPost($user_id, $post_data)
    {
        // Prepare a SQL query to insert a new record into the post table
        $this->db->query("INSERT INTO " . self::table . " (user_id, post_title, cate_id, reference, post_description, post_content) VALUES (:user_id, :post_title, :category_id, :reference, :post_description, :post_content)");
        $this->db->bind(':user_id', $user_id);
        $this->db->bind(':post_title', $post_data['title']);
        $this->db->bind(':category_id', $post_data['category_id']);
        $this->db->bind(':reference', 0);
        $this->db->bind(':post_description', $post_data['description']);
        $this->db->bind(':post_content', purifyHtml($post_data['post_content']));
        $this->db->bind(':post_unique', getSlug($post_data['post_title'], self::table));
        $this->db->bind(':post_image', $post_data['post_image']);
        $this->db->bind(':post_status', "approved");
        $this->db->execute();
    }
    public function getAllCategories()
    {
        // Prepare a SQL query to select all records from the category table
        $this->db->query("SELECT * FROM post_category WHERE is_active = true");
        return $this->db->results();
    }
}
