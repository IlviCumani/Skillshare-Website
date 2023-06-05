
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Profile</title>
    <link rel="icon" href="../../MainPage/MainImg/favicon-removebg-preview.png">
    <link rel="stylesheet" href="../../MainPage/Css/header.css">
    <link rel="stylesheet" href="../../MainPage/Css/footer.css">
    <link rel="stylesheet" href="../../MainPage/Css/scroll.css">
    <link rel="stylesheet" href="../../UserPages/ProfilePage/Css/profile.css">
    <link rel="stylesheet" href="../UserPages/Components/Card/courseCard.css">
    <link rel="stylesheet" href="course.css">
    <link rel="stylesheet" href="searchBar.css"><script
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
                    <!-- <h2 id="level">Instructor</h2> -->
                </div>
            </div>
            <div id="profile-info-buttons">
            </div>
        </div>
    </section>
        
        <section class="course-details">
            <div>
                <h2>Course Title</h2>
                <p>Course description goes here</p>
            </div>
            <div> 
                <h3>Course Assignment</h3>
                <p>Lorem ipsum </p>
            </div>
            <div class="course-buttons">
                <a href="../../UserPages/ProfilePage/profile.php"><button class="btn">Join Course</button></a>
                <!--<button class="btn">Create Assignment</button>--> 
                <!--<button class="btn">Edit course page</button> -->
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
      <script src="../Skillshare Front/MainPage/Script/navig.js"></script>
      <script src="./MainPage/Script/menu.js"></script>
      
</body>
</html>
