<?php
require 'thedatab.php';
require 'course.php';
session_start();
try{
$pdo = pdo_connect_mysql();}
catch(PDOException $e){
    exit("DataBase not Found".$e);
}
//echo "In the FIle";
$the_sql = 'SELECT UserId FROM users WHERE email = :email';
$the_statement = $pdo->prepare($the_sql);
$the_statement->bindParam(':email', $_SESSION['email']);
$the_statement->execute();
$user_id = $the_statement->fetch();
$sql = 'SELECT * FROM course where CourseId NOT IN (SELECT CourseId from take WHERE UserId = :userid)';
$statement = $pdo->prepare($sql);
$statement->bindParam(':userid',$user_id['UserId']);
$statement->execute();
$the_courses = $statement->fetchAll();
$all_courses = [];
$obj_course;
for($i = 0; $i < $statement->rowCount(); $i++){
        if($the_courses[$i]['UserId'] != $user_id['UserId']){
            $obj_course = new Course($the_courses[$i]['CourseId'],$the_courses[$i]['CourseName'],$the_courses[$i]['ImageUrl'],$the_courses[$i]['Description'],$the_courses[$i]['Tag'],$the_courses[$i]['Ongoing'],$the_courses[$i]['CoursePrice'],$the_courses[$i]['UserId']);
        
            if(!isset($obj_course)){
                header('Location: courses.php');
                exit();
            }

            array_push($all_courses,$obj_course);
        }  
}

$_SESSION['all_courses_show'] = $all_courses;


