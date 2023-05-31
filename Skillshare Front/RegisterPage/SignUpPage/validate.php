<?php
include 'thedatab.php';
$pdo = pdo_connect_mysql();
$msg = '';
// Check if POST data is not empty
if (!empty($_POST)) {
    // Post data not empty insert a new record
    // Set-up the variables that are going to be inserted, we must check if the POST variables exist if not we can default them to blank
    //$id = 2;//Kujdes!!!
    //$id = isset($_POST['id']) && !empty($_POST['id']) && $_POST['id'] != 'auto' ? $_POST['id']:NULL;
    // Check if POST variable "name" exists, if not default the value to blank, basically the same for all variables
    $name = isset($_POST['username']) ? validate($_POST['username']) : '';
    $password = isset($_POST['password']) ? validate($_POST['password']): '';
    $phone = "355699145020";
    $type = isset($_POST['type'])? $_POST['type']: '';//"isset($_POST['type']) ? $_POST['type']: ''";
    $email = isset($_POST['email']) && !empty($_POST['email']) ? validate($_POST['email']): '';
    // Insert new record into the contacts table
    $the_sql = 'SELECT email FROM users WHERE email = :email';
    $msg = $pdo->prepare($the_sql);
    $msg->bindParam(':email',$email,PDO::PARAM_STR);
    $msg->execute();
    //$result = $msg->fetchAll(PDO::FETCH_OBJ);
    if($msg->rowCount()>0){

        echo '<script>alert("Welcome to Geeks for Geeks")</script>';
        header("Location: signup.php");
        exit();
    }
    $stmt = $pdo->prepare('INSERT INTO users VALUES (?,?, ?, ?, ?, ?)');
    $stmt->execute([NULL,$name, $password, $type, $phone, $email]);
    // Output message
    $msg = 'Created Successfully!';
    header("Location: ../../UserPages/ProfilePage/profile.php");
}
?>