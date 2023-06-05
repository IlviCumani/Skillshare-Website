<?php
include 'thedatab.php';
session_start();

$pdo = pdo_connect_mysql();

if(!empty($_POST)){
    $email = isset($_POST['email']) ? validate($_POST['email']): '';
    $password = isset($_POST['password']) ? validate($_POST['password']): '';
    $sql = 'SELECT email, Username, Password, Type, Phone FROM users WHERE email = :email';
    $statement = $pdo->prepare($sql);
    $statement->bindParam(':email',$email, PDO::PARAM_STR);
    $statement->execute();
    //var_dump($statement->fetch());
    //echo "Before Check";
    if($statement->rowCount() > 0){
        $the_data = $statement->fetch();
        if($password === $the_data['Password']){
            $_SESSION['username'] =  $the_data['Username'];
            $_SESSION['email'] = $the_data['email'];
            $_SESSION['type'] = $the_data['Type'];
            $_SESSION['phone'] = $the_data['Phone'];
            //echo "Found";
            header("Location: ../../UserPages/ProfilePage/profile.php");
            exit();
        }
        else{
        $_SESSION['user_finding'] = "Try Again!"; 
        //echo "Not Found";
        header("Location: login.php");
        exit();

        }
    }
    else{

        $_SESSION['user_finding'] = "Not Registered!";
        header("Location: login.php");
        exit();
    }

}

?>