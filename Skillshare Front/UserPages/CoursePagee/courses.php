<?php 
require_once 'show_all_courses.php';
//session_start();
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
    <link rel="stylesheet" href="course.css">
    <link rel="stylesheet" href="searchBar.css">
    <title>Skillshare360 Courses Page</title>
    <script
        src="https://code.jquery.com/jquery-3.3.1.js"
        integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
        crossorigin="anonymous">
    </script>
    <link rel="shortcut icon" type="image/x-icon" href="">
    <link rel="icon" href="./MainPage/MainImg/favicon-removebg-preview.png">
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/ad806ed620.js" crossorigin="anonymous"></script>
    <script>
        $(function(){
            $("#header").load("../Components/Header/header.php");
            $("#footer").load("footer.php");
        });
    </script>
</head>
<body>
    <section id="header"></section>
    <section class="hero-section">
        <div class="hero-content">
            <h1>Courses Page</h1>
            <p>Explore thousands of courses in various categories</p>
            <div class="box">
                <form name="search" onsubmit="submitForm(event)">
                    <input id="searchInput" type="text" class="input" name="txt" onmouseout="this.value = ''; this.blur();">
                </form>
                <i class="fas fa-search"></i>
            </div>
        </div>
    </section>
    
    <section class="course-section">
    <h2>Popular Courses</h2>
        <?php if(empty($_GET)): ?>
        <div class="course-container">
            <?php $cnt = 0 ?>
            <?php foreach($_SESSION['all_courses_show'] as $the_course): ?>
              
                <div class="course-card">
                    <img src="<?php echo $the_course->ImageUrl;?>" alt="Course 1">
                    <h3><?php echo $the_course->CourseName;?></h3>
                    <p><?php echo $the_course->Description;?></p>
                    <button class="btn" value="<?php echo $the_course->CourseId?>" onclick="joinCourse(event)">Join course</button>
                    <?php $cnt++?>
                    <?php if($cnt>=3){
                        break;
                    } ?>
                </div>
            <?php endforeach;?>
        </div>
        <?php else: ?>
            <div class="course-container">
            <?php $cnt = 0 ?>
            <?php foreach($_SESSION['search_course'] as $the_course): ?>
              
                <div class="course-card">
                    <img src="<?php echo $the_course->ImageUrl;?>" alt="Course 1">
                    <h3><?php echo $the_course->CourseName;?></h3>
                    <p><?php echo $the_course->Description;?></p>
                    <button class="btn" value="<?php echo $the_course->CourseId?>" onclick="joinCourse(event)">Join course</button>
                    <?php $cnt++?>
                    <?php if($cnt>=3){
                        break;
                    } ?>
                </div>
            <?php endforeach;?>
        </div>
        <?php endif ?> 
    </section>

    <section class="hero-section">
        <h2>Visit all of our courses</h2>
        <div class="course-container">
           <a href="all_courses_page.php"><button class="btn" style="margin-top: -40px;">Explore</button></a>
        </div>
    </section>

    <script>
        function submitForm(event) {
        event.preventDefault(); // Prevent form submission
        var inputValue = document.getElementById("searchInput").value;
        var url = "searchBar.php?input=" + inputValue;
        window.location.href = url;
        console.log("In the file");
        }
    </script>

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
      <script src="../Skillshare Front/MainPage/Script/navig.js"></script>
      <script src="./MainPage/Script/menu.js"></script>
      <script>
        function joinCourse(event){
            const _courseId = event.target.value;
            window.location.href = './user_takes_course.php?courseId=' + _courseId;
        }
      </script>
</body>
</html>