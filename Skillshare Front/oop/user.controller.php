<?php

include "thedatab.php";

$method = $_SERVER['REQUEST_METHOD'];

if ($method === 'UPDATE'){
        $name = isset($_GET['username']) ? validate($_GET['username']) : '';
        $password = isset($_GET['password']) ? validate($_GET['password']): '';
        $phone = isset($_GET['phone']) ? validate($_GET['phone']): '';
        $type = isset($_GET['type'])? $_GET['type']: '';
        $email = isset($_GET['email']) && !empty($_GET['email']) ? validate($_GET['email']): '';
        $result = NULL;
        //$result = updateProduct($id);

        header('Location: ./index.php');
        echo json_encode($result);
    
}