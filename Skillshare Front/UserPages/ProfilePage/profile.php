<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../../MainPage/MainImg/favicon-removebg-preview.png">
    <link rel="stylesheet" href="../../MainPage/Css/header.css">
    <link rel="stylesheet" href="../../MainPage/Css/footer.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="../Components/Card/courseCard.css">
    <link rel="stylesheet" href="./Css/ongoing.css">
    <link rel="stylesheet" href="./Css/profile.css">
    <title>Skillshare360</title>
    <script
        src="https://code.jquery.com/jquery-3.3.1.js"
        integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
        crossorigin="anonymous">
    </script>
    <script> 
        $(function(){
            $("#header").load("../Components/Header/header.php"); 
            $("#footer").load("../Components/Footer/footer.php"); 
            $(".course-card").load("../Components/Card/card.php");
        });
    </script> 
</head>
<body>
    <section id="header"></section>
    <section id="profile-section">
        <div id="profile-info-container">
            <div id="profile-info">
                <div id="profile-img-container">
                    <img src="https://media.movieassets.com/static/images/items/people/profiles/500/100/adria-rae-a8e9d40adad0aaa181be43ca27d9e29e.jpg" alt="Avatar" class="avatar">
                </div>
                <div id="profile-info-text">
                    <h2 id="username"><?php if(isset($_SESSION['username'])){echo $_SESSION['username'];} ?></h2>
                    <h2 id="email"><?php if(isset($_SESSION['email'])){echo $_SESSION['email'];} ?></h2>
                    <h2 id="phone"><?php if(isset($_SESSION['phone'])){echo $_SESSION['phone'];} ?></h2>
                    <h2 id="level"><?php if(isset($_SESSION['type'])){echo $_SESSION['type'];} ?></h2>
                </div>
            </div>
            <div id="profile-info-buttons">
                <button id="edit-profile-button">Edit Profile</button>
                <button id="change-password-button">Change Password</button>
            </div>
        </div>
    </section>

    <section class="activeCourses" id="ongoing">
        <h1>On going courses</h1>

        <div class=all-Courses>

            <div class="course-card"></div>
            <div class="course-card"></div>
            <div class="course-card"></div>
        </div> 
    </section>

    <section class="activeCourses" id="finished">
        <h1>Finished Courses</h1>

        <div class=all-Courses>
            <div class="course-card"></div>
            <div class="course-card"></div>
            <div class="course-card"></div>
            <div class="course-card"></div>
            <div class="course-card"></div>
            <div class="course-card"></div>
        </div>    
    </section>   

    <section class="activeCourses" id="mycourses">

        <div id="Mysourses-Top">
            <h1>My courses</h1>
             <button id="createCourse" onclick = "window.location.href = '../CoursePagee/courseForm/courseForm.php';">
                <span class="material-symbols-outlined">
                    add_circle
                 </span>
            </button>
        </div>
        
        <div class=all-Courses>
            <div class="course-card"></div>
            <div class="course-card"></div>
            <div class="course-card"></div>
        </div>
    </section>

    <section id="footer"></section>
    <!-- <script src="logedUser.js"></script> -->

</body>
</html>