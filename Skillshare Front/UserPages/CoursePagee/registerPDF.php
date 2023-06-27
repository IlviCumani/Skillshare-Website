<?php 
require 'thedatab.php';

$pdo = pdo_connect_mysql();

if(!empty($_GET)){
    $filePDF = isset($_GET['pdf']) ? $_GET['pdf'] : '';
    $courseId = isset($_GET['courseId']) ? $_GET['courseId'] : '';
    $sql = 'INSERT INTO file VALUES(:pdf, :courseId)';
    $statement = $pdo->prepare($sql);
    $statement->bindParam(':pdf',$filePDF);
    $statement->bindParam(':courseId', $courseId);
    $statement->execute();

    $next = "Location: course_profile_page.php?courseId=".$courseId."&stp=3";
    header($next);
}

?>