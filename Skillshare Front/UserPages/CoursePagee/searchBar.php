<?php
require 'thedatab.php';
require 'course.php';
session_start();

$pdo = pdo_connect_mysql();

// echo "Hello";
//check if get is not empty
if(!empty($_GET)){
    //get the input from the user and check if iy is set
    $input = isset($_GET['input']) ? $_GET['input'] : '';
    //the sql code to search for the wanted USER ID
    $the_sql = 'SELECT UserId FROM users WHERE email = :email';
    $the_statement = $pdo->prepare($the_sql);
    //bind the parameters 
    $the_statement->bindParam(':email', $_SESSION['email']);
    //execute the query
    $the_statement->execute();
    //fetch what we got from the query
    $user_id = $the_statement->fetch();
    //another query to check 
    $sql = 'SELECT * FROM course where CourseId NOT IN (SELECT CourseId from take WHERE UserId = :userid)';
    $statement = $pdo->prepare($sql);
    //bind parameteters for the search 
    $statement->bindParam(':userid',$user_id['UserId']);
    $statement->execute();
    //fetch all
    $the_courses = $statement->fetchAll();
    //array that contains the searched elements 
    $courseArr = [];
    $j = 0;
    // echo "In the if statement";
    //the row count will check how many courses we have selected from the db
    for($i = 0; $i < $statement->rowCount(); $i++){
        //check if the input from users is contained in the array of elements 
        if(str_contains($the_courses[$i]['CourseName'],$input)){
            //create new course if the condition is true 
            $new_course = new Course($the_courses[$i]['CourseId'],$the_courses[$i]['CourseName'],$the_courses[$i]['ImageUrl'],$the_courses[$i]['Description'],$the_courses[$i]['Tag'],$the_courses[$i]['Ongoing'],$the_courses[$i]['CoursePrice'],$the_courses[$i]['UserId']);
            //push the course in the array
            array_push($courseArr,$new_course);
        }
    }
    //save the array of courses in the session 
    $_SESSION['search_course'] = $courseArr;
    //direct it to the courses.php with plus a get for the if condition to be true in the courses.php
    $location = "location: courses.php?txt=".$input;
    header($location);

}
