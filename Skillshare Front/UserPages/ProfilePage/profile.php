<?php
require 'show_courses_profile.php';
//session_start();

// // Check if the user type is set in the session, if not, set it to 'learner' as the default
if (!isset($_SESSION['type'])) {
    $_SESSION['type'] = 'learner';
}

// Function to generate the selected attribute for the user type options
function isSelected($type, $selectedType)
{
    if ($type === $selectedType) {
        return 'selected';
    }
    return '';
}

// Handle the form submission to update the user type
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['user-type'])) {
        $_SESSION['type'] = $_POST['user-type'];
    }
}
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
            //$(".course-card").load("../Components/Card/card.php");
        });

        function openEditProfilePopup() {
            document.getElementById("edit-profile-popup").style.display = "block";
        }

        function closeEditProfilePopup() {
            document.getElementById("edit-profile-popup").style.display = "none";
        }

        function openChangePasswordPopup() {
            document.getElementById("change-password-popup").style.display = "block";
        }

        function closeChangePasswordPopup() {
            document.getElementById("change-password-popup").style.display = "none";
        }
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
                    <h2 id="level"><?php echo $_SESSION['type']; ?></h2>
                    <!-- <h2 id="level">Instructor</h2> -->
                </div>
            </div>
            <div id="profile-info-buttons">
                <button id="edit-profile-button" onclick="openEditProfilePopup()">Edit Profile</button>
                <button id="change-password-button" onclick="openChangePasswordPopup()">Change Password</button>
            </div>
        </div>
    </section>

    
    <!-- Edit Profile Popup -->
    <div id="edit-profile-popup" class="popup">
        <div class="popup-content">
            <label for="edit-name">Name:</label>
            <input type="text" id="edit-name" name="edit-name">

            <label for="edit-email">Email:</label>
            <input type="email" id="edit-email" name="edit-email">

            <label for="edit-phone">Phone Number:</label>
            <input type="text" id="edit-phone" name="edit-phone">
            
            <label for="user-type">User Type:</label>
            <select id="user-type" name="user-type">
                <option value="learner" <?php echo isSelected('learner', $_SESSION['type']); ?>>Learner</option>
                <option value="premium" <?php echo isSelected('premium', $_SESSION['type']); ?>>Premium</option>
                <option value="instructor" <?php echo isSelected('instructor', $_SESSION['type']); ?>>Instructor</option>
            </select>

            <button onclick="closeEditProfilePopup()">Confirm</button>
        </div>
    </div>

    <!-- Change Password Popup -->
    <div id="change-password-popup" class="popup">
        <div class="popup-content">
            <label for="current-password">Current Password:</label>
            <input type="password" id="current-password" name="current-password">

            <label for="new-password">New Password:</label>
            <input type="password" id="new-password" name="new-password">

            <label for="confirm-password">Confirm New Password:</label>
            <input type="password" id="confirm-password" name="confirm-password">

            <button onclick="closeChangePasswordPopup()">Confirm</button>
        </div>
    </div>


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

    <section class="footer">
        <nav class="icons_width">
          <div class="icons">
            <a><i class="fab fa-facebook-square fa-2x"></i></a>
            <a><i class="fab fa-instagram fa-2x"></i></a>
            <a><i class="fas fa-envelope fa-2x"></i></a>
          </div>
          <p id="rights">Skillshare360 © 2023.<br>All rights reserved.</p>
        </nav>
    </section>
    <!-- <script src="logedUser.js"></script> -->
    <script>
        const mycourses = document.getElementById("mycourses");
        const level = document.getElementById("level");

        if(level.innerHTML === "Instructor"){
            mycourses.style.display = "block";
        }
        else{
            mycourses.style.display = "none";
        }
    </script>
</body>
</html>
