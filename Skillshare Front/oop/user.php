<?php

class User
{

    public function __construct($userID, $username, $password, $email, $phone, $type)
    {
        $this->userID = $userID;
        $this->username = $username;
        $this->password = $password;
        $this->email = $email;
        $this->phone = $phone;
        $this->type = $type;
        $this->stored_users = json_decode(file_get_contents($this->storage), true);
        $this->new_user = [
            "userID" => $this->userID,
            "username" => $this->username,
            "password" => $this->password,
            "email" => $this->email,
            "phone" => $this->phone,
            "type" => $this->type,
        ];

        if($this->checkFieldValues()){
            $this->insertUser();
         }
    }

    private $userID;
    private $username;
    private $password;
    private $email;
    private $phone;
    private $type;
    public $error;
    public $success;
    private $storage = "data.json";
    private $stored_users; // array
    private $new_user; // array

   
    private function checkFieldValues(){
        if(empty($this->username) || empty($this->password) || empty($this->email) || empty($this->phone) || empty($this->type)){
            $this->error = "All fields are required.";
            return false;
         }else{
            return true;
         }
    } // Checking for empty fields.

    private function insertUser(){
        $this->stored_users[] = $this->new_user;
        file_put_contents($this->storage, json_encode($this->stored_users));
        $this->success = "User registered successfully.";
    } // Inserting new user to the json file.


}
