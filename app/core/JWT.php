<?php
namespace App\Core;

use Firebase\JWT\JWT as FirebaseJWT;
use Firebase\JWT\Key;

class JWT {
    private static $key = JWT_SECRET;

    public static function create($payload) {
        $payload['iat'] = time();
        $payload['exp'] = time() + 3600;
        return FirebaseJWT::encode($payload, self::$key, 'HS256');
    }

    public static function verify($token) {
        try {
            return FirebaseJWT::decode($token, new Key(self::$key, 'HS256'));
        } catch (\Exception $e) {
            return null;
        }
    }
}