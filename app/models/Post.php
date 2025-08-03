<?php
namespace App\Models;
use App\Core\Database;

// Define a class named Book this will be the Book model
class Post
{

    // Declare a private property to hold the database connection
    private $db;

    // Constructor method to initialize the database connection
    public function __construct()
    {
        // Create a new instance of the Database class and assign it to $db
        $this->db = new Database();
    }

    // Method to retrieve all books from the database
    public function getAllPostsByUserId($id)
    {
        // Prepare a SQL query to select all records from the post table
        $this->db->query("SELECT * FROM posts WHERE user_id = :user_id");
        $this->db->bind(':user_id', $id);
        return $this->db->results();
    }

    // Method to add a new book to the database
    public function addNewPost($user_id, $post_data)
    {
        // Prepare a SQL query to insert a new record into the post table
        $this->db->query("INSERT INTO posts (user_id, post_title, cate_id, reference, post_description, post_content) VALUES (:user_id, :post_title, :category_id, :reference, :post_description, :post_content)");
        $this->db->bind(':user_id', $user_id);
        $this->db->bind(':post_title', $post_data['title']);
        $this->db->bind(':category_id', $post_data['category_id']);
        $this->db->bind(':reference', 0);
        $this->db->bind(':post_description', $post_data['description']);
        $this->db->bind(':post_content', $post_data['post_content']);
        $this->db->bind(':post_unique', self::getSlug($post_data['post_title']));
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

    static function isValidSlug($stext)
    {
        //$rename = "/^([[:alnum:]]+[_\-]{0,1})+([[:alnum:]]+)$/i";
        $rename = "/^[a-z0-9]+(?:[_\-][a-z0-9]+)*$/";
        return preg_match($rename, $stext);
    }

    static function removeAccent($str)
    {
        $a = array('À', 'Á', 'Â', 'Ã', 'Ä', 'Å', 'Æ', 'Ç', 'È', 'É', 'Ê', 'Ë', 'Ì', 'Í', 'Î', 'Ï', 'Ð', 'Ñ', 'Ò', 'Ó', 'Ô', 'Õ', 'Ö', 'Ø', 'Ù', 'Ú', 'Û', 'Ü', 'Ý', 'ß', 'à', 'á', 'â', 'ã', 'ä', 'å', 'æ', 'ç', 'è', 'é', 'ê', 'ë', 'ì', 'í', 'î', 'ï', 'ñ', 'ò', 'ó', 'ô', 'õ', 'ö', 'ø', 'ù', 'ú', 'û', 'ü', 'ý', 'ÿ', 'Ā', 'ā', 'Ă', 'ă', 'Ą', 'ą', 'Ć', 'ć', 'Ĉ', 'ĉ', 'Ċ', 'ċ', 'Č', 'č', 'Ď', 'ď', 'Đ', 'đ', 'Ē', 'ē', 'Ĕ', 'ĕ', 'Ė', 'ė', 'Ę', 'ę', 'Ě', 'ě', 'Ĝ', 'ĝ', 'Ğ', 'ğ', 'Ġ', 'ġ', 'Ģ', 'ģ', 'Ĥ', 'ĥ', 'Ħ', 'ħ', 'Ĩ', 'ĩ', 'Ī', 'ī', 'Ĭ', 'ĭ', 'Į', 'į', 'İ', 'ı', 'Ĳ', 'ĳ', 'Ĵ', 'ĵ', 'Ķ', 'ķ', 'Ĺ', 'ĺ', 'Ļ', 'ļ', 'Ľ', 'ľ', 'Ŀ', 'ŀ', 'Ł', 'ł', 'Ń', 'ń', 'Ņ', 'ņ', 'Ň', 'ň', 'ŉ', 'Ō', 'ō', 'Ŏ', 'ŏ', 'Ő', 'ő', 'Œ', 'œ', 'Ŕ', 'ŕ', 'Ŗ', 'ŗ', 'Ř', 'ř', 'Ś', 'ś', 'Ŝ', 'ŝ', 'Ş', 'ş', 'Š', 'š', 'Ţ', 'ţ', 'Ť', 'ť', 'Ŧ', 'ŧ', 'Ũ', 'ũ', 'Ū', 'ū', 'Ŭ', 'ŭ', 'Ů', 'ů', 'Ű', 'ű', 'Ų', 'ų', 'Ŵ', 'ŵ', 'Ŷ', 'ŷ', 'Ÿ', 'Ź', 'ź', 'Ż', 'ż', 'Ž', 'ž', 'ſ', 'ƒ', 'Ơ', 'ơ', 'Ư', 'ư', 'Ǎ', 'ǎ', 'Ǐ', 'ǐ', 'Ǒ', 'ǒ', 'Ǔ', 'ǔ', 'Ǖ', 'ǖ', 'Ǘ', 'ǘ', 'Ǚ', 'ǚ', 'Ǜ', 'ǜ', 'Ǻ', 'ǻ', 'Ǽ', 'ǽ', 'Ǿ', 'ǿ');
        $b = array('A', 'A', 'A', 'A', 'A', 'A', 'AE', 'C', 'E', 'E', 'E', 'E', 'I', 'I', 'I', 'I', 'D', 'N', 'O', 'O', 'O', 'O', 'O', 'O', 'U', 'U', 'U', 'U', 'Y', 's', 'a', 'a', 'a', 'a', 'a', 'a', 'ae', 'c', 'e', 'e', 'e', 'e', 'i', 'i', 'i', 'i', 'n', 'o', 'o', 'o', 'o', 'o', 'o', 'u', 'u', 'u', 'u', 'y', 'y', 'A', 'a', 'A', 'a', 'A', 'a', 'C', 'c', 'C', 'c', 'C', 'c', 'C', 'c', 'D', 'd', 'D', 'd', 'E', 'e', 'E', 'e', 'E', 'e', 'E', 'e', 'E', 'e', 'G', 'g', 'G', 'g', 'G', 'g', 'G', 'g', 'H', 'h', 'H', 'h', 'I', 'i', 'I', 'i', 'I', 'i', 'I', 'i', 'I', 'i', 'IJ', 'ij', 'J', 'j', 'K', 'k', 'L', 'l', 'L', 'l', 'L', 'l', 'L', 'l', 'l', 'l', 'N', 'n', 'N', 'n', 'N', 'n', 'n', 'O', 'o', 'O', 'o', 'O', 'o', 'OE', 'oe', 'R', 'r', 'R', 'r', 'R', 'r', 'S', 's', 'S', 's', 'S', 's', 'S', 's', 'T', 't', 'T', 't', 'T', 't', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'W', 'w', 'Y', 'y', 'Y', 'Z', 'z', 'Z', 'z', 'Z', 'z', 's', 'f', 'O', 'o', 'U', 'u', 'A', 'a', 'I', 'i', 'O', 'o', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'A', 'a', 'AE', 'ae', 'O', 'o');
        return str_replace($a, $b, $str);
    }

    static function postSlug($str)
    {
        return trim(strtolower(preg_replace(
            array('/[^a-zA-Z0-9 -]+/', '/[ -]+/', '/^-|-$/'),
            array('-', '-', ''),
            self::removeAccent($str)
        )));
    }

    public function getSlug($str, $prefered_suffix = '')
    {
        $slug = self::postSlug($str);
        return $this->verifySlug($slug, $prefered_suffix);
    }

    public function verifySlug($slug, $prefered_suffix = '')
    {
        if (!$slug)
            return;
        $exists = 0;

        //check for existence
        $this->db->query("SELECT * FROM posts WHERE title_unique = :title_unique");
        $this->db->bind(':title_unique', $slug);
        $post = $this->db->result();
        if ($post)
            $exists = 1;

        //recalculate or return
        if ($exists) {
            if ($prefered_suffix && !(strlen($slug) > strlen($prefered_suffix) && substr($slug, -(strlen($prefered_suffix) + 1)) == '-' . $prefered_suffix))
                return $this->verifySlug($slug . '-' . $prefered_suffix);
            if (strpos($slug, '-') === false) {
                $slug .= '-1';
            } else {
                $fragments = explode('-', $slug);
                if (is_numeric($fragments[count($fragments) - 1])) {
                    $fragments[count($fragments) - 1] += 1;
                    $slug = implode('-', $fragments);
                    if ($fragments[count($fragments) - 1] > 99)
                        $slug .= '-1';
                } else {
                    $slug .= '-1';
                }
            }
            return $this->verifySlug($slug);
        }
        return $slug;
    }
}
