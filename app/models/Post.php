<?php
namespace App\Models;
use App\Core\Database;
use App\Models\User;
use App\Models\PostCategory;

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
        $this->db->query("INSERT INTO " . self::table . " (user_id, post_title, cate_id, reference, post_description, post_content, post_unique, post_image) VALUES (:user_id, :post_title, :cate_id, :reference, :post_description, :post_content, :post_unique, :post_image)");
        $this->db->bind(':user_id', $user_id);
        $this->db->bind(':post_title', $post_data['post_title']);
        $this->db->bind(':cate_id', $post_data['post_category']);
        $this->db->bind(':reference', 0);
        $this->db->bind(':post_description', $post_data['post_description']);
        $this->db->bind(':post_content', $post_data['content']);
        $this->db->bind(':post_unique', $post_data['post_unique']);
        $this->db->bind(':post_image', $post_data['post_image']);
        $this->db->execute();
        return $this->db->lastInsertId();
    }
    public function getAllCategories()
    {
        // Prepare a SQL query to select all records from the category table
        $this->db->query("SELECT * FROM " . PostCategory::table . " WHERE is_active = true");
        return $this->db->results();
    }

    public function getTrendingPosts()
    {
        // Prepare a SQL query to select all records from the post table
        $this->db->query(
            "SELECT 
                p.*, 
                u.first_name AS poster_firstname,
                u.last_name AS poster_lastname,
                u.avatar AS poster_avatar,
                pc.cate_name AS post_category_name
            FROM " . self::table . " p
            LEFT JOIN " . User::table . " u ON u.id = p.user_id
            LEFT JOIN " . PostCategory::table . " pc ON pc.cate_id = p.cate_id 
            ORDER BY post_views DESC LIMIT 4"
        );
        return $this->db->results();
    }

    public function getLatestPosts()
    {
        // Prepare a SQL query to select all records from the post table
        $this->db->query(
            "SELECT 
                p.*, 
                u.first_name AS poster_firstname,
                u.last_name AS poster_lastname,
                u.avatar AS poster_avatar,
                pc.cate_name AS post_category_name
            FROM " . self::table . " p
            LEFT JOIN " . User::table . " u ON u.id = p.user_id
            LEFT JOIN " . PostCategory::table . " pc ON pc.cate_id = p.cate_id 
            ORDER BY created_at DESC LIMIT 12"
        );
        return $this->db->results();
    }
}
