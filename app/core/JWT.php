<?php
namespace App\Core;

use Firebase\JWT\JWT as FirebaseJWT;
use Firebase\JWT\Key;

class JWT {
    public static function create($payload) {
        $key = JWT_SECRET;
        $payload['iat'] = time();
        $payload['exp'] = time() + 3600;
        return FirebaseJWT::encode($payload, $key, 'HS256');
    }

    public static function verify($token) {
        try {
            return FirebaseJWT::decode($token, new Key(JWT_SECRET, 'HS256'));
        } catch (\Exception $e) {
            return null;
        }
    }
}