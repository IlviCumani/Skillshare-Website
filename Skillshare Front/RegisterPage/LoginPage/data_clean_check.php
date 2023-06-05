<?php
require 'thedatab.php';

session_start();

function the_validation($data){
    $data = trim($data);
    
    $data = stripslashes($data);

    $data = htmlspecialchars($data);

    return $data;

}

function check($data){

    return isset($data);
 
}

function the_empty($data){
    return empty($data);
}

function to_compare($data1, $data2){
    if($data1 > $data2){
        return $data1;
    }
    else{
        return $data2;
    }
    
}