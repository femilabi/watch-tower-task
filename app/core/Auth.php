<?php
namespace App\Middleware;

use App\Core\App;
use App\Core\JWT;

class Auth {
    public static function check() {
        $token = $_COOKIE['token'] ?? null;

        if (!$token) {
            App::redirectToLogin();
        }

        $token_data = JWT::verify($token);

        if (!$token_data) {
            App::redirectToLogin();
        }

        return $token_data; // decoded payload (e.g. user id/email)
    }
}
