<?php

$routes = [
    // Route for the home page, maps to the 'index' method of 'HomeController'
    '' => ['controller' => 'App\\Controllers\\HomeController', 'method' => 'index'],

    // Route for the login page, maps to the 'index' method of 'AuthController'
    'auth/login' => ['controller' => 'App\\Controllers\\AuthController', 'method' => 'login'],

    // Route for Google login, maps to the 'loginWithGoogle' method of 'AuthController'
    'auth/google-login' => ['controller' => 'App\\Controllers\\AuthController', 'method' => 'loginWithGoogle'],

    // Route for Google callback, maps to the 'callback' method of 'AuthController'
    'auth/google-login-callback' => ['controller' => 'App\\Controllers\\AuthController', 'method' => 'callback'],

    // Route for adding a new post, maps to the 'index' method of 'PostController'
    'dashboard' => ['controller' => 'App\\Controllers\\PostController', 'method' => 'index'],

    // Route for adding a new post, maps to the 'addNewPost' method of 'PostController'
    'dashboard/create-post' => ['controller' => 'App\\Controllers\\PostController', 'method' => 'addNewPost'],

    // Route for adding a new post, maps to the 'logout' method of 'AuthController'
    'dashboard/logout' => ['controller' => 'App\\Controllers\\AuthController', 'method' => 'logout'],

    // Route for updating a 404 page, maps to the 'update' method of 'HomeController'
    '404' => ['controller' => 'App\\Controllers\\NotFoundController', 'method' => 'index']
];