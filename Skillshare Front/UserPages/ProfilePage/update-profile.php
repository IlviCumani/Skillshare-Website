<?php
// update-profile.php
session_start();
require 'thedatab.php';
require 'profile.php';

$pdo = pdo_connect_mysql();
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Retrieve the submitted form data
    $name = $_GET['edit-name'];
    $email = $_GET['edit-email'];
    $phone = $_GET['edit-phone'];
    $userType = $_GET['user-type'];

    $userId = $_SESSION['UserId'];
    $query = "UPDATE users SET Username = '$name', email = '$email', Phone = '$phone', Type = '$userType' WHERE UserId = $userId";
    $statement = $pdo->prepare($query);
    $statement->execute();

    

    // Output a response
    echo "Profile updated successfully!";
} else {
    // Invalid request method
    echo "Invalid request method!";
}
?>
