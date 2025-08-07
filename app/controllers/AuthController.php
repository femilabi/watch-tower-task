<?php
namespace App\Controllers;

use App\Core\Controller;
use App\Core\Database;
use App\Core\JWT;
use Google_Client;
use Google_Service_Oauth2;

class AuthController extends Controller
{
    public function __construct() {
        $this->setLayout('login'); // Set the layout for authentication pages
    }

    public function login() {
        // Render the login view
        $this->renderView('login', [], "Login - Watch Tower");
    }

    public function loginWithGoogle()
    {
        // Check if the user is already authenticated
        if (isset($_COOKIE['token'])) {
            $token_data = JWT::verify($_COOKIE['token']);
            if ($token_data) {
                header("Location: " . BASE_URL . "dashboard/");
                exit;
            }
        }

        // Redirect to Google OAuth login
        $this->redirectToGoogleLogin();
    }

    private function redirectToGoogleLogin()
    {
        // Create a Google Client and redirect to the OAuth login URL
        $client = $this->getGoogleClient();
        $url = $client->createAuthUrl();
        header("Location: $url");
        exit;
    }

    public function callback()
    {
        $client = $this->getGoogleClient();

        if (!isset($_GET['code'])) {
            die('No code provided');
        }

        $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
        if (isset($token['error'])) {
            die('Error fetching token ' . $token['error']);
        }

        $client->setAccessToken($token['access_token']);
        $oauth = new Google_Service_Oauth2($client);
        $userInfo = $oauth->userinfo->get();

        $userModel = Database::loadModel('User');
        $user = $userModel->findOrCreate($userInfo);
        $jwt = JWT::create([
            'id' => $user['id'],
            'email' => $user['email']
        ]);

        setcookie('token', $jwt, time() + 3600, "/");
        header("Location: " . BASE_URL . "dashboard/");
    }

    private function getGoogleClient()
    {
        $client = new Google_Client();
        $client->setClientId(GOOGLE_CLIENT_ID);
        $client->setClientSecret(GOOGLE_CLIENT_SECRET);
        $client->setRedirectUri(GOOGLE_REDIRECT_URI);
        $client->addScope('email');
        $client->addScope('profile');
        return $client;
    }

    public function logout() {
        setcookie('token', '', time() - 3600, "/");
        header("Location: " . BASE_URL . "auth/login");
        exit;
    }
}
