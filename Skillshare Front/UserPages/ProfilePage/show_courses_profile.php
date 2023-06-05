<?php
session_start();
require 'thedatab.php';
require 'course.php';

$pdo = pdo_connect_mysql();
$the_sql = 'SELECT UserId FROM users WHERE email = :email';
$the_statement = $pdo->prepare($the_sql);
$the_statement->bindParam(':email', $_SESSION['email']);
$the_statement->execute();
$user_id = $the_statement->fetch();
$sql = 'SELECT * FROM course WHERE CourseId IN (SELECT CourseId FROM take WHERE UserId = :userid)';
$statement = $pdo->prepare($sql);
$statement->bindParam(':userid',$user_id['UserId']);
$statement->execute();
$the_courses = $statement->fetchAll();
$all_courses = [];
$obj_course;
for($i = 0; $i < $statement->rowCount(); $i++){
        $obj_course = new Course($the_courses[$i]['CourseId'],$the_courses[$i]['CourseName'],$the_courses[$i]['ImageUrl'],$the_courses[$i]['Description'],$the_courses[$i]['Tag'],$the_courses[$i]['Ongoing'],$the_courses[$i]['CoursePrice'],$the_courses[$i]['UserId']);
        if(!isset($obj_course)){
            echo "Nothing";
            header('Location: courses.php');
            exit();
        }
        array_push($all_courses,$obj_course);
}
$_SESSION['myprofilecourses'] = $all_courses;

function find_Instructor($the_user_id){
    global $pdo;
    $sql = 'SELECT Username FROM users Where UserId = :userid';
    $statement = $pdo->prepare($sql);
    $statement->bindParam(':userid',$the_user_id);
    $statement->execute();
    $name = $statement->fetch();
    return $name['Username'];

}


?>