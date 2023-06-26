
<!DOCTYPE html>
<html lang="en">
<?php 
session_start();
require 'thedatab.php';
require 'course.php';

if(!empty($_GET)){
    $pdo = pdo_connect_mysql();
    $couseId = isset($_GET['courseId']) ? $_GET['courseId'] : '';
    $sql = 'SELECT * FROM course where CourseId = :courseid';
    $statement = $pdo->prepare($sql);
    $statement->bindParam(':courseid',$couseId);
    $statement->execute();
    $_wantedCourse = $statement->fetch();
    $showCourse = new Course($couseId,$_wantedCourse['CourseName'], $_wantedCourse['ImageUrl'], $_wantedCourse['Description'], $_wantedCourse['Tag'], $_wantedCourse['Ongoing'], $_wantedCourse['CoursePrice'], $_wantedCourse['UserId']);

}
?>
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
<style>
.description {
  background-color: #f1f3f4;
  padding: 20px;
  margin: 20px;
  border-radius: 4px;
  border: 1px solid #ddd;
  box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
  float: left;
  width: calc(30% - 10px);
  margin-right: 20px;
}

.description:last-child {
  margin-right: 0;
}

.videos {
  background-color: #f1f3f4;
  padding: 20px;
  margin: 20px;
  border-radius: 4px;
  border: 1px solid #ddd;
  box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
  float: right; 
  width: calc(65% - 10px); 
  margin-left: 20px;
}

.videos:last-child {
  margin-left: 0; 
}

.description h2, .videos h2 {
  font-size: 24px;
  margin-bottom: 10px;
  color: #333;
  text-transform: uppercase;
  font-weight: bold;
  text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.1);
}

.description p, .videos p {
  font-size: 14px;
  line-height: 1.5;
  
}



.card-container {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}

.card {
  border: 1px solid #ccc;
  border-radius: 4px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  flex-basis: calc(50% - 10px); /* Adjust the width as per your preference */
  margin-bottom: 20px;
  overflow: hidden;
}

.video-container {
  position: relative;
  padding-bottom: 50%; 
  overflow: hidden;
}

.video-container iframe {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}

.card-content {
  padding: 16px;
}

.card-title {
  font-size: 20px;
  margin-bottom: 8px;
}

.card-description {
  font-size: 14px;
  margin-bottom: 16px;
}

</style>
</head>
<body>
    <section id="header"></section>
    <section id="profile-section">
        <div id="profile-info-container">
            <div id="profile-info">
                <div id="profile-img-container">
                    <img src="<?php if(isset($showCourse->ImageUrl)){echo $showCourse->ImageUrl;} ?>" alt="Avatar" class="avatar">
                </div>
                <div id="profile-info-text">
                    <h2 id="title"><?php if(isset($showCourse->CourseName)){echo $showCourse->CourseName;} ?></h2>
                    <h2 id="tag"><?php if(isset($showCourse->Tag)){echo $showCourse->Tag;} ?></h2>
                    <!-- <h2 id="phone"><?php if(isset($_SESSION['phone'])){echo $_SESSION['phone'];} ?></h2>
                    <h2 id="level"><?php if(isset($_SESSION['type'])){echo $_SESSION['type'];} ?></h2> -->
                    <!-- <h2 id="level">Instructor</h2> -->
                </div>
            </div>
            <div id="profile-info-buttons">
            </div>
        </div>
    </section>
        
        <section class="description">
            <div>
                <h2><?php echo $showCourse->CourseName; ?></h2>
                <p><?php echo $showCourse->Description; ?></p>
            </div>
        </section>

        <section class="videos">
            <div>
                <h2>Videos</h2>
                <div class="card-container">
                    <div class="card">
                        <div class="video-container">
                        <iframe src="https://www.youtube.com/embed/VIDEO_ID" frameborder="0" allowfullscreen></iframe>
                        </div>
                        <div class="card-content">
                        <h2 class="card-title">Video Title 1</h2>
                        <p class="card-description">Video description goes here...</p>
                        </div>
                    </div>
                    
                    <div class="card">
                        <div class="video-container">
                        <iframe src="https://www.youtube.com/embed/VIDEO_ID" frameborder="0" allowfullscreen></iframe>
                        </div>
                        <div class="card-content">
                        <h2 class="card-title">Video Title 2</h2>
                        <p class="card-description">Video description goes here...</p>
                        </div>
                    </div>
                    </div>

            </div>
            <div>
                <h2>Lecture</h2>
            </div>
        </section>

        <div class="course-buttons">
                <a href="../../UserPages/ProfilePage/profile.php"><button class="btn">Back</button></a>
                <!--<button class="btn">Add Lecture</button>--> 
                <!--<button class="btn">Add video</button> -->
            </div>
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
