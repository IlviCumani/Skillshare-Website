<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css"> -->
        <link rel="icon" href="../../../MainPage/MainImg/favicon-removebg-preview.png">
        <link rel="stylesheet" href="./courseForm.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
        <title>SkillShare360</title>
    </head>
    <body>
        <div class="container">
            <div id="form-container">
                <h1>Course Form</h1>

                <div id="form-div">
                    <form method="post" action="CourseFormValidate.php" >
                        <div id="form-input-grid">
                            <div class="inp-div">
                                <input type="text" name="coursetitle" id="TitleTF" class="formInputs" placeholder="Course title">
                                <span class="material-symbols-outlined icon">match_case</span>
                            </div>

                            <div class="inp-div">
                                <input type="text" name="coursedescription" id="DescriptionTF" class="formInputs" placeholder="Course description">
                                <span class="material-symbols-outlined icon">description</span>
                            </div>
                            
                            <div class="inp-div">
                                <input type="url" id="UrlTF" name="imgurl" class="formInputs" placeholder="Image Url">
                                <span class="material-symbols-outlined icon">photo_camera</span>
                            </div>

                            <div class="inp-div">
                                <input type="number" id="PriceTF" name="courseprice" class="formInputs" placeholder="Price" min="0">
                                <span class="material-symbols-outlined icon">attach_money</span>
                            </div>

                            <div  id="special-fuccking-kid">
                                <input type="file" id="FileTF" name="coursecertificate" class="formInputs" placeholder="Certificate">
                                <span class="material-symbols-outlined icon">upload</span>
                            </div>
                            
                            <div class="inp-div">
                                <input type="date" name="coursedatecreated" id="dateTf" class="formInputs">
                            </div>
                            
                            
                            <div class="custom-select" name="coursetype" style="width:200px;">
                                <select name="coursetag">
                                    <option value="0">Select Type</option>
                                    <option value="Programming">Programming</option>
                                    <option value="Dancing">Dancing</option>
                                    <option value="Cooking">Cooking</option>
                                    <option value="Drawing">Drawing</option>
                                    <option value="Photography">Photography</option>
                                    <option value="Music">Music</option>
                                    <option value="Language">Language</option>
                                    <option value="Fitness">Fitness</option>
                                    <option value="Business">Business</option>
                                    <option value="Marketing">Marketing</option>
                                    <option value="Design">Design</option>
                                    <option value="Calculus">Calculus</option>
                                    <option value="Physics">Physics</option>
                                    <option value="Chemistry">Chemistry</option>
                                    <option value="Biology">Biology</option>
                                    <option value="Psychology">Psychology</option>
                                    <option value="History">History</option>
                                    <option value="Geography">Geography</option>
                                </select>
                            </div>
                        </div>
                        <div id="btndiv">
                            <input type="button" value="Go Back" class="action-btn" id="cancelBtn">
                            <input type="submit" class="action-btn" value="Create">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        <script src="./courseform.js"></script>
        <script>
            const cancelBtn = document.getElementById("cancelBtn");

            cancelBtn.addEventListener("click", () => {
                window.location.href = "../../ProfilePage/profile.php";
            });
        </script>
    </body>
</html>