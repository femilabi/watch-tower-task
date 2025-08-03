<?php
// Define the base URL for the application
define('BASE_URL', 'http://localhost/watch-tower/');

// Define the database config
define('DB_HOST', '');
define('DB_USER', '');
define('DB_PASS', '');
define('DB_NAME', '');
define('DB_PORT', '');


// Define the JWT secret key for encoding and decoding tokens
define('JWT_SECRET', 'your-secret-key-here');

// Define the google config for the application
define('GOOGLE_CLIENT_ID', 'your-google-client-id-here');
define('GOOGLE_CLIENT_SECRET', 'your-google-client-secret-here');
define('GOOGLE_REDIRECT_URI', BASE_URL . 'auth/google-login-callback');

?>