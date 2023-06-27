<?php
require 'thedatab.php';

$pdo = pdo_connect_mysql();

if(!empty($_GET)){
    $videourl = isset($_GET['yturl']) ? $_GET['yturl'] : '';
    $courseId = isset($_GET['courseId']) ? $_GET['courseId'] : '';
    $sql = 'INSERT INTO video VALUES(:yturl, :courseId)';
    $statement = $pdo->prepare($sql);
    $statement->bindParam(':yturl',$videourl);
    $statement->bindParam(':courseId', $courseId);
    $statement->execute();

    $next = "Location: course_profile_page.php?courseId=".$courseId."&stp=3";
    header($next);
}




?>