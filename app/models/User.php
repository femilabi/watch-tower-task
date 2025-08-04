<?php
namespace App\Models;
use App\Core\Database;
use PDO;

class User
{
    // Declare a private property to hold the database connection
    private $db;
    const table = "users";

    // Constructor method to initialize the database connection
    public function __construct()
    {
        // Create a new instance of the Database class and assign it to $db
        $this->db = new Database();
    }

    public function findOrCreate($googleUser)
    {
        // echo json_encode($googleUser); exit; // Debugging line to check the structure of $googleUser
        $this->db->query("SELECT * FROM " . self::table . " WHERE email = :email");
        $this->db->bind(":email", $googleUser->email);
        $user = $this->db->result();

        if (!$user) {
            $this->db->query("INSERT INTO " . self::table . " (reference, first_name, last_name, email, avatar) VALUES (:reference, :firstname, :lastname, :email, :avatar)");
            $this->db->bind(":reference", $googleUser->id);
            $this->db->bind(":firstname", $googleUser->givenName);
            $this->db->bind(":lastname", $googleUser->familyName);
            $this->db->bind(":email", $googleUser->email);
            $this->db->bind(":avatar", $googleUser->picture);
            $this->db->execute();
            $user_id = $this->db->lastInsertId();
            $user = $this->getUserById($user_id);
        }

        return $user;
    }

    public function getUserById($id)
    {
        $this->db->query("SELECT * FROM " . self::table . " WHERE id = :id");
        $this->db->bind(":id", $id);
        return $this->db->result();
    }
    public function getUserByEmail($email)
    {
        $this->db->query("SELECT * FROM " . self::table . " WHERE email = :email");
        $this->db->bind(":email", $email);
        return $this->db->result();
    }
}
