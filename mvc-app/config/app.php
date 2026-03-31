<?php

// Redirect to a different page
function redirect($url) {
    header('Location: ' . $url);
    exit;
}

// Check if the user is logged in
function isLoggedIn() {
    return isset($_SESSION['user_id']);
}

// Check if the user is an admin
function isAdmin() {
    return isset($_SESSION['user_role']) && $_SESSION['user_role'] === 'admin';
}

// Get the ID of the logged-in user
function getUserId() {
    return $_SESSION['user_id'] ?? null;
}

// Require login for certain pages
function requireLogin() {
    if (!isLoggedIn()) {
        redirect('login.php');
    }
}

?>