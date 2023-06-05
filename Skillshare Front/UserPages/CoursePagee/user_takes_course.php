<?php
require 'thedatab.php';
session_start();
$pdo = pdo_connect_mysql();
$sql = 'SELECT UserId FROM users WHERE email = :email';
$statement = $pdo->prepare($sql);
$statement->bindParam(':email', $_SESSION['email']);
$statement->execute();
$user_id = $statement->fetch();
$the_sql = 'INSERT INTO take VALUES (:finished, :courseid, :userid)';
$the_statement = $pdo->prepare($the_sql);
$finished = 0;
$the_statement->bindParam(':finished', $finished);
$the_statement->bindParam(':courseid',$_GET['courseId']);
$the_statement->bindParam(':userid',$user_id['UserId']);
$the_statement->execute();
header("Location: ../ProfilePage/profile.php");

function redirect_page($course_id){
    $_SESSION['wanted_course_id'] = $course_id;
    header("Location: user_takes_course.php");

}