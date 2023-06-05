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
$instructor_courses = [];
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

$the_sql = "SELECT * FROM course WHERE UserId = :userid";
$msg = $pdo->prepare($the_sql);
$msg->bindParam(':userid',$user_id['UserId']);
$msg->execute();
$insp_courses = $msg->fetchAll();
$obj_ins;
for($i = 0; $i < $msg->rowCount(); $i++){
    $obj_ins = new Course($insp_courses[$i]['CourseId'], $insp_courses[$i]['CourseName'],$insp_courses[$i]['ImageUrl'],$insp_courses[$i]['Description'],$insp_courses[$i]['Tag'],$insp_courses[$i]['Ongoing'],$insp_courses[$i]['CoursePrice'],$insp_courses[$i]['UserId'] );
    array_push($instructor_courses,$obj_ins);
}

$_SESSION['theinstcourse'] = $instructor_courses;


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