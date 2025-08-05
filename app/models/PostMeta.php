<?php
namespace App\Models;
use App\Core\Database;

// Define a class named Post this will be the Post model
class PostMeta
{

    // Declare a private property to hold the database connection
    private $db;
    const table = "post_meta";
    // Constructor method to initialize the database connection
    public function __construct()
    {
        // Create a new instance of the Database class and assign it to $db
        $this->db = new Database();
    }

    // Method to retrieve all posts from the database
    public function getPostMetas($post_id)
    {
        // Prepare a SQL query to select all records from the post meta table
        $this->db->query("SELECT * FROM " . self::table . " WHERE post_id = :post_id");
        $this->db->bind(':post_id', $post_id);
        return $this->db->results();
    }

    // Method to add a new post to the database
    public function addPostMeta($post_id, $post_meta)
    {
        // Prepare a SQL query to insert a new record into the post table
        $this->db->query("INSERT INTO " . self::table . " (post_id, meta_title, meta_description, meta_keywords, meta_canonical) VALUES (:post_id, :meta_title, :meta_description, :meta_keywords, :meta_canonical)");
        $this->db->bind(':post_id', $post_id);
        $this->db->bind(':meta_title', $post_meta['meta_title']);
        $this->db->bind(':meta_description', $post_meta['meta_description']);
        $this->db->bind(':meta_keywords', $post_meta['meta_keywords']);
        $this->db->bind(':meta_canonical', '  ');
        $this->db->execute();
        return $this->db->lastInsertId();
    }
}
