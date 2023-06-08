<?php
// update-profile.php
session_start();
require 'thedatab.php';


$pdo = pdo_connect_mysql();
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // if(!isset($_GET['user-type'])){
    //     echo "Please enter your name!";
    //     header('Location: ../CoursePagee/courses.php');
    //     exit();
    // }
    // Retrieve the submitted form data
    
    $name = isset($_GET['edit-name']) ? validate($_GET['edit-name']) : $_SESSION['username'];
    //$email = $_GET['edit-email'];
    $phone = isset($_GET['edit-phone']) ? validate($_GET['edit-phone']) : $_SESSION['phone'];
    $userType = isset($_GET['user-type']) ? validate($_GET['user-type']) : $_SESSION['type'];

    echo $_SESSION['email'];
    $query = 'UPDATE users SET Username = :name, Phone = :phone, Type = :userType WHERE email = :email';
    $statement = $pdo->prepare($query);
    $statement->bindParam(':name', $name);
    
    $statement->bindParam(':phone', $phone);
    $statement->bindParam(':userType', $userType);
    $statement->bindParam(':email', $_SESSION['email']);
    $statement->execute();
    header('Location: profile.php');
} else {
    // Invalid request method
    echo "Invalid request method!";
}
?>
