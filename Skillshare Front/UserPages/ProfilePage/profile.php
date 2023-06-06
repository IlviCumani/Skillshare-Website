<?php
require 'show_courses_profile.php';

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
    <link rel="stylesheet" href="../../MainPage/Css/scroll.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="../Components/Card/courseCard.css">
    <link rel="stylesheet" href="./Css/ongoing.css">
    <link rel="stylesheet" href="./Css/profile.css">
    <title>Profile Page</title>
    <link rel="shortcut icon" type="image/x-icon" href="">
    <link rel="icon" href="./MainPage/MainImg/favicon-removebg-preview.png">
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/ad806ed620.js" crossorigin="anonymous"></script>
    <script
        src="https://code.jquery.com/jquery-3.3.1.js"
        integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
        crossorigin="anonymous">
    </script>
    <script>
        $(function(){
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

        // Close the popup when clicking outside
        window.onclick = function(event) {
            if (event.target.classList.contains('popup')) {
                event.target.style.display = 'none';
            }
        };

        // Close the popup when pressing ESC key
        document.onkeydown = function(event) {
            event = event || window.event;
            if (event.keyCode === 27) {
                var popups = document.getElementsByClassName('popup');
                for (var i = 0; i < popups.length; i++) {
                    popups[i].style.display = 'none';
                }
            }
        };
    </script>

</head>
<body>
    <section id="header">
        <?php require "../Components/Header/header.php" ?>
    </section>
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
      <form id="edit-profile-form" action="update-profile.php" method="GET">
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
  
        <button type="submit">Confirm</button>
        <button type="button" onclick="event.stopPropagation(); closeEditProfilePopup()">Back</button>
      </form>
    </div>
  </div>
  
  <script>
    function updateProfile() {
      event.preventDefault(); // Prevent the default form submission
  
      var form = document.getElementById("edit-profile-form");
      var name = document.getElementById("edit-name").value;
      var email = document.getElementById("edit-email").value;
      var phone = document.getElementById("edit-phone").value;
      var userType = document.getElementById("user-type").value;
  
      var xhr = new XMLHttpRequest();
      var url = form.getAttribute("action");
  
      // Construct the query string with the form data
      var queryString = "?edit-name=" + encodeURIComponent(name) +
                        "&edit-email=" + encodeURIComponent(email) +
                        "&edit-phone=" + encodeURIComponent(phone) +
                        "&user-type=" + encodeURIComponent(userType);
  
      xhr.open("GET", url + queryString, true);
  
      xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
          // Request was successful
          console.log(xhr.responseText);
          // Process the response or perform any other actions
        }
      };
  
      xhr.send();
    }
  
    // Attach the updateProfile function to the form submission event
    document.getElementById("edit-profile-form").addEventListener("submit", updateProfile);
  </script>
  

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
            <button onclick="event.stopPropagation(); closeChangePasswordPopup()">Back</button>
        </div>
    </div>


    <section class="activeCourses" id="ongoing">
        <h1>On going courses</h1>

        <div class=all-Courses>

            <!-- <div class="course-card"></div>
            <div class="course-card"></div>
            <div class="course-card"></div> -->
        <?php foreach($_SESSION['myprofilecourses'] as $the_course):?>
            <div class="course-card">
                <div id="course-img-container">
                    <img src="<?php echo $the_course->ImageUrl?>" alt="Avatar" class="course-Img">
                </div>
                <div id="course-info">
                    <h2 id="course-name"> <?php echo $the_course->CourseName?></h2>
                    <h3 id="course-category"><?php echo $the_course->Tag ?></h2>
                    <h3 id="instructor"><?php echo find_Instructor($the_course->UserId)?></h2>
                </div>
                <button id="course-button">Continue</button> 
            </div>
        <?php endforeach;?>

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

        <?php //print_r($_SESSION['theinstcourse']); ?>
        
        <div class="all-Courses">
            <?php foreach($_SESSION['theinstcourse'] as $show_course): ?>
            <div class="course-card">
                <div id="course-img-container">
                    <img src="<?php echo($show_course->ImageUrl) ?>" alt="Avatar" class="course-Img">
                </div>
                <div id="course-info">
                    <h2 id="course-name"><?php echo $show_course->CourseName ?></h2>
                    <h3 id="course-category"><?php echo $show_course->Tag ?></h2>
                    <h3 id="instructor"><?php echo find_Instructor($show_course->UserId)?></h2>
                </div>
                <button id="course-button">Continue</button> 
            </div>
            <?php endforeach;?>
        
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
        const my_courses = document.getElementById('mycourses');
        const active_courses = document.getElementById('ongoing');
        const finished_courses = document.getElementById('finished');

        function displayCourses(id) {
            my_courses.style.display = 'none';
            active_courses.style.display = 'none';
            finished_courses.style.display = 'none';

            document.getElementById(id).style.display = 'block';
        }
    </script>
    <script>
        document.getElementById('createCourse').addEventListener('click', function () {
            window.location.href = '../CoursePagee/courseForm/courseForm.php';
        });

    </script>
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
