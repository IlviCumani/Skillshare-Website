<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../../MainPage/MainImg/favicon-removebg-preview.png">
    <link rel="stylesheet" href="../../MainPage/Css/header.css">
    <link rel="stylesheet" href="course.css">
    <link rel="stylesheet" href="searchBar.css"> 
    <link rel="stylesheet" href="all_courses.css"> 
    <title>Skillshare360 Courses Page</title>
    <script src="all_courses_page.js"></script>
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
    <section id="filter_bar">
        <div id="myBtnContainer">
            <button class="filter active" onclick="filterSelection('all')"> Show all</button>
            <button class="filter" onclick="filterSelection('programming')"> Programming</button>
            <button class="filter" onclick="filterSelection('dancing')"> Dancing</button>
            <button class="filter" onclick="filterSelection('cooking')"> Cooking</button>
            <button class="filter" onclick="filterSelection('drawing')"> Drawing</button>
            <button class="filter" onclick="filterSelection('Photo')"> Photography</button>
            <button class="filter" onclick="filterSelection('music')"> Music</button>
            <button class="filter" onclick="filterSelection('language')"> Language</button>
            <button class="filter" onclick="filterSelection('fit')"> Fitness</button>
            <button class="filter" onclick="filterSelection('business')"> Business</button>
            <button class="filter" onclick="filterSelection('market')"> Marketing</button>
            <button class="filter" onclick="filterSelection('design')"> Design</button>
            <button class="filter" onclick="filterSelection('calc')"> Calculus</button>
            <button class="filter" onclick="filterSelection('physics')">Physics</button>
            <button class="filter" onclick="filterSelection('chem')"> Chemistry</button>
            <button class="filter" onclick="filterSelection('bio')"> Biology</button>
            <button class="filter" onclick="filterSelection('psy')"> Psychology</button>
            <button class="filter" onclick="filterSelection('history')"> History</button>
            <button class="filter" onclick="filterSelection('geo')"> Geography</button>
        </div>
    </section>
    <section class="course-section">
        <div class="course-container">
            <div class="course-card">
                <img src="course1.png" alt="Course 1">
                <h3>Course Title</h3>
                <p>Course description goes here</p>
                <button class="btn" id="but">Visit course</button>
            </div>
            <div class="course-card">
                <img src="course2.png" alt="Course 2">
                <h3>Course Title</h3>
                <p>Course description goes here</p>
                <button class="btn" id="but">Visit course</button>
            </div>
            <div class="course-card">
                <img src="course2.png" alt="Course 2">
                <h3>Course Title</h3>
                <p>Course description goes here</p>
                <button class="btn" id="but">Visit course</button>
            </div>
            <div class="course-card">
                <img src="course2.png" alt="Course 2">
                <h3>Course Title</h3>
                <p>Course description goes here</p>
                <button class="btn" id="but">Visit course</button>
            </div>
            <div class="course-card">
                <img src="course2.png" alt="Course 2">
                <h3>Course Title</h3>
                <p>Course description goes here</p>
                <button class="btn" id="but">Visit course</button>
            </div>
            <div class="course-card">
                <img src="course2.png" alt="Course 2">
                <h3>Course Title</h3>
                <p>Course description goes here</p>
                <button class="btn" id="but">Visit course</button>
            </div>
            <div class="course-card">
                <img src="course2.png" alt="Course 2">
                <h3>Course Title</h3>
                <p>Course description goes here</p>
                <button class="btn" id="but">Visit course</button>
            </div>
            <div class="course-card">
                <img src="course2.png" alt="Course 2">
                <h3>Course Title</h3>
                <p>Course description goes here</p>
                <button class="btn" id="but">Visit course</button>
            </div>
            <div class="course-card">
                <img src="course2.png" alt="Course 2">
                <h3>Course Title</h3>
                <p>Course description goes here</p>
                <button class="btn" id="but">Visit course</button>
            </div>
            <div class="course-card">
                <img src="course2.png" alt="Course 2">
                <h3>Course Title</h3>
                <p>Course description goes here</p>
                <button class="btn" id="but">Visit course</button>
            </div>
            <div class="course-card">
                <img src="course2.png" alt="Course 2">
                <h3>Course Title</h3>
                <p>Course description goes here</p>
                <button class="btn" id="but">Visit course</button>
            </div>
            <div class="course-card">
                <img src="course2.png" alt="Course 2">
                <h3>Course Title</h3>
                <p>Course description goes here</p>
                <button class="btn" id="but">Visit course</button>
            </div>
            <div class="course-card">
                <img src="course2.png" alt="Course 2">
                <h3>Course Title</h3>
                <p>Course description goes here</p>
                <button class="btn" id="but">Visit course</button>
            </div>
            <div class="course-card">
                <img src="course2.png" alt="Course 2">
                <h3>Course Title</h3>
                <p>Course description goes here</p>
                <button class="btn" id="but">Visit course</button>
            </div>
            <div class="course-card">
                <img src="course2.png" alt="Course 2">
                <h3>Course Title</h3>
                <p>Course description goes here</p>
                <button class="btn" id="but" >Visit course</button>
            </div>
            <div class="course-card">
                <img src="course2.png" alt="Course 2">
                <h3>Course Title</h3>
                <p>Course description goes here</p>
                <button class="btn" id="but" >Visit course</button>
            </div>
        </div>
    </section>

    <section class="footer">
        <nav class="icons_width">
          <div >
            <a class="icons"><i class="fab fa-facebook-square fa-2x"></i></a>
            <a class="icons"><i class="fab fa-instagram fa-2x"></i></a>
            <a class="icons"><i class="fas fa-envelope fa-2x"></i></a>
          </div>
          <p id="rights">Skillshare360 © 2023.<br>All rights reserved.</p>
        </nav>
      </section>
      <script src="../Skillshare Front/MainPage/Script/navig.js"></script>
      <script src="./MainPage/Script/menu.js"></script>
</body>
</html>