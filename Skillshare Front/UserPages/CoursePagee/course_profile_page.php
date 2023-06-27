<!DOCTYPE html>
<html lang="en">
<?php 
//session_start();
// require 'thedatab.php';
require 'course.php';
require 'showVideos.php';
// require 'videos.php';

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
    <link rel="stylesheet" href="course_profile_page.css">
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
<script>
    function openVideoForm() {
      document.getElementById("videoForm").classList.add("active");
    }

    function closeVideoForm() {
      document.getElementById("videoForm").classList.remove("active");
    }

    function submitVideoForm() {
      var videoUrl = document.getElementById("videoUrl").value;
    }
  </script>
  <script>
    function openLectureForm() {
      document.getElementById("lectureForm").classList.add("active");
    }

    function closeLectureForm() {
      document.getElementById("lectureForm").classList.remove("active");
    }

    function submitLectureForm() {
      var lecture = document.getElementById("lecture").value;
    }
  </script>
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
                   <!-- <h2 id="tag"></h2> -->
                   <br>
                    <h2 id="phone"><?php if(isset($showCourse->Tag)){echo $showCourse->Tag;} ?><h2>
                    <h2 id="level"><h2>
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
               
                <div style="display: flex;width:100%; margin-bottom:2%; padding-left:2%;padding-right:2%">
                    <h2 style="margin-right: 70%; @media screen and (max-width:500px) {margin-right:20%;}; @media screen and (max-width:800px) {margin-right:40%;}">Videos</h2> 
                    <?php if(count($_GET) > 1 && $_GET['stp'] && $_GET['stp'] == "3"): ?>
                    <button onclick="openVideoForm()" class="btn" style="width: 30% ;">Add Video</button>
                    <?php  endif?>
                </div>
                
                <div id="videoForm" class="form-container">
                    <form action="">
                    <input type="text" id="videoUrl" placeholder="Enter YouTube video URL" required>
                    <button value="<?php echo $showCourse->CourseId?>" onclick="registerVideo(event)" class="btn"  style="width: 49%; margin-right: 0.75%;" >Submit</button>
                    <button onclick="closeVideoForm()" class="btn"  style="width: 49%;">Close</button>
                    </form>
                </div>
                <div class="card-container">
                <?php foreach($_SESSION['wantedVideos'] as $wantedVideos): ?>
                <?php if($wantedVideos->courseId == $showCourse->CourseId): ?>
                    <div class="card">
                        <div class="video-container">
                        <iframe width="1122" height="631" src="<?php echo $wantedVideos->yturl;?>" title="Title" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>
                    </div>
                <?php endif; ?>
                <?php endforeach;?>
                </div>
            </div>
            <div style="display: flex;width:100%; margin-bottom:2%; padding-left:2%;padding-right:2%;">
                    <h2 style="margin-right: 65%; @media screen and (max-width:500px) {margin-right:10%;}; @media screen and (max-width:800px) {margin-right:40%;}">Lectures</h2> 
                    <?php if(count($_GET) > 1 && $_GET['stp'] && $_GET['stp'] == "3"): ?>
                    <button onclick="openLectureForm()" class="btn" style="width: 30% ;">Add Lecture</button>
                    <?php endif ?>
            </div>
                <div id="lectureForm" class="form-container">
                    <input type="file" id="lecture" placeholder="Enter PDF" required class="upload">
                    <button onclick="submitLectureForm()" class="btn"  style="width: 49%; margin-right: 0.75%;" >Submit</button>
                    <button onclick="closeLectureForm()" class="btn"  style="width: 49%;">Close</button>
                </div>
                <div class="pdf-card">
                    <div class="pdf-container">
                        <embed src="link" type="application/pdf" width="100%" height="100%" />
                    </div>
                    <a href="link" class="pdf-link" target="_blank">View PDF</a>
                </div>
            </div>
        </section>

        <section id="button_back">
            <div class="course-buttons">
                <a href="../../UserPages/ProfilePage/profile.php"><button class="back_button">Back</button></a>
                <!--<button class="btn">Add Lecture</button>--> 
                <!--<button class="btn">Add video</button> -->
            </div>
        </section>
        <script>
            function registerVideo(event){
                event.preventDefault();
                //console.log(event.target.value);
                const __courseid = event.target.value;
                const youtubeLink = document.getElementById("videoUrl").value;
                const youtubeUrlPattern = /youtube\.com\/watch\?v=([\w-]+)/;
                const match = youtubeLink.match(youtubeUrlPattern);

                if (match && match[1]) {
                    const videoId = match[1];
                    const embeddedLink = `https://www.youtube.com/embed/${videoId}`;
                    window.location.href = "registerVideo.php?yturl="+embeddedLink+"&courseId="+__courseid;
                }
                
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
</body>
</html>
