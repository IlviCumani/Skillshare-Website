<?php
include 'thedatab.php';
$pdo = pdo_connect_mysql();
session_start();
if($_SESSION['type'] != "Instructor")
    exit("You have no access!!");
if(!empty($_POST)){
    $coursetitle = isset($_POST['coursetitle']) ? validate($_POST['coursetitle']): ''; 
    $coursedescription = isset($_POST['coursedescription']) ? validate($_POST['coursedescription']): '';
    $courseimage = isset($_POST['imgurl']) ? validate($_POST['imgurl']) : '';
    $courseprice = isset($_Post['courseprice']) ? (float)validate($_POST['courseprice']): '';
    $ongoing = 1;
    $tag = isset($_POST['coursetag']) ? validate($_POST['coursetag']) : '';
    $sql = 'SELECT CourseName FROM course where CourseName = :coursename';
    $statement = $pdo->prepare($sql);
    $statement->bindParam(':coursename',$coursetitle,PDO::PARAM_STR);
    if($statement->rowCount() > 0){
        $_SESSION['course_creation'] = "Error! Course Already Exists";
        header("location: courseForm.php");
        exit("Exit from this file");
    }
    $the_sql = 'SELECT UserId FROM users WHERE email = :email';
    $msg = $pdo->prepare($the_sql);
    $msg->bindParam(':email',$_SESSION['email'],PDO::PARAM_STR);
    $msg->execute();
    $logged_user= $msg->fetchAll();
    $the_user_id = $logged_user[0]['UserId'];    
    $sql = 'INSERT INTO `course` (`CourseId`, `CourseName`, `ImageUrl`, `Description`, `Tag`, `Ongoing`, `CoursePrice`, `UserId`) VALUES (:courseid, :coursetitle, :courseimage,:coursedescript, :coursetag, :courseongoing, :courseprice, :userid);';
    $statement = $pdo->prepare($sql);
    $statement->bindValue(':courseid',NULL);
    $statement->bindValue(':coursetitle',$coursetitle);
    $statement->bindValue(':courseimage',$courseimage,PDO::PARAM_STR);
    $statement->bindValue(':coursedescript',$coursedescription,PDO::PARAM_STR);
    $statement->bindValue(':coursetag',$tag,PDO::PARAM_STR);
    $statement->bindValue(':courseongoing',$ongoing,PDO::PARAM_STR);
    $statement->bindValue(':courseprice',$courseprice);
    $statement->bindValue(':userid',$the_user_id,PDO::PARAM_INT);

    try{
    $statement->execute();
    }
    catch(PDOException $e){
        exit ("SQL".$sql." not working".$e->getMessage());
    }
    
    header("location: ../courses.php");

}

