<?php 
//require 'thedatab.php';
require 'PDF.php';

$pdo = pdo_connect_mysql();

$sql = 'SELECT * FROM file';
$statement = $pdo->prepare($sql);
$statement->execute();
$filerows = $statement->fetchAll();
$thearr = [];

if($statement->rowCount() > 0){
    for($i = 0; $i < $statement->rowCount(); $i++){
        $wantedFile = new PDF($filerows[$i]['FileName'],$filerows[$i]['CourseId']);
        array_push($thearr,$wantedFile);
    }

}

$_SESSION['showpdf'] = $thearr;




?>