<?php 
require 'thedatab.php';
require 'videos.php';
session_start();

$pdo = pdo_connect_mysql();

$sql = 'SELECT * from video';
$statement = $pdo->prepare($sql);
$statement->execute();
$videos = $statement->fetchAll();
$thearr = [];
if($statement->rowCount() > 0){
    for($i = 0; $i < $statement->rowCount(); $i++){
        $thevid = new Video($videos[$i]['VideoName'],$videos[$i]['CourseId']);
        array_push($thearr,$thevid);
    }

    $_SESSION['wantedVideos'] = $thearr;
    

}


?>