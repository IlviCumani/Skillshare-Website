<?php
include 'thedatab.php';
$pdo = pdo_connect_mysql();
$msg = '';
// Check if POST data is not empty
if (!empty($_POST)) {
    // Post data not empty insert a new record
    // Set-up the variables that are going to be inserted, we must check if the POST variables exist if not we can default them to blank
    $id = 2;//Kujdes!!!
    // Check if POST variable "name" exists, if not default the value to blank, basically the same for all variables
    $name = isset($_POST['username']) ? validate($_POST['username']) : '';
    $password = isset($_POST['password']) ? validate($_POST['password']): '';
    $phone = "355699145020";
    $type = "Learner";//"isset($_POST['type']) ? $_POST['type']: ''";
    $email = isset($_POST['email']) ? validate($_POST['email']): '';
    // Insert new record into the contacts table
    $stmt = $pdo->prepare('INSERT INTO users VALUES (?, ?, ?, ?, ?, ?)');
    $stmt->execute([$id, $name, $password, $type, $phone, $email]);
    // Output message
    $msg = 'Created Successfully!';
}
?>