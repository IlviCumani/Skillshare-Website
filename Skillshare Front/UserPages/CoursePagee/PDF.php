<?php 

class PDF{

    public $filename;
    public $courseId;

    public function __construct($filename, $courseId)
    {
        $this->filename = $filename;
        $this->courseId = $courseId;
        
    }


}

?>