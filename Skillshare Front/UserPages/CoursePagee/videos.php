<?php 

class Video{
    public $yturl;
    public $courseId;

    public function __construct($yturl, $courseId){
        $this->courseId = $courseId;
        $this->yturl = $yturl;
    }
    
}
