<?php

class Course
{

    public function __construct($CourseId, $CourseName, $ImageUrl, $Description, $Tag, $Ongoing, $Price, $UserId)
    {
        $this->CourseId = $CourseId;
        $this->CourseName = $CourseName;
        $this->ImageUrl = $ImageUrl;
        $this->Description = $Description;
        $this->Tag = $Tag;
        $this->Ongoing = $Ongoing;
        $this->Price = $Price;
        $this->UserId = $UserId;
        // $this->stored_courses = json_decode(file_get_contents($this->storage), true);
        // $this->new_course = [
        //     "CourseId" => $this->CourseId,
        //     "CourseName" => $this->CourseName,
        //     "ImageUrl" => $this->ImageUrl,
        //     "Description" => $this->Description,
        //     "Tag" => $this->Tag,
        //     "Ongoing" => $this->Ongoing,
        //     "Price" => $this->Price,
        //     "UserId" => $this->UserId,
        // ];

        // if($this->checkFieldValues()){
        //     $this->insertCourse();
        //  }
    }
    

    public $CourseId;
    public $CourseName;
    public $ImageUrl;
    public $Description;
    public $Tag;
    public $Ongoing;
    public $Price;
    public $UserId;
    // public $error;
    // public $success;
    // private $storage = "data.json";
    // private $stored_courses; // array
    // private $new_course; // array

    
    // private function checkFieldValues(){
    //     if(empty($this->CourseName) || empty($this->Description)){
    //         $this->error = "Both fields are required.";
    //         return false;
    //      }else{
    //         return true;
    //      }
    // } // Checking for empty fields.

    // private function insertCourse(){
    //     $this->stored_courses[] = $this->new_course;
    //     file_put_contents($this->storage, json_encode($this->stored_courses));
    //     $this->success = "Course added successfully";
    //  }
    


    
    }
    ?>