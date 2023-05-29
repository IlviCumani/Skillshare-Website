<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./MainPage/Css/hero.css">
    <link rel="stylesheet" href="./MainPage/Css/header.css">
    <link rel="stylesheet" href="./MainPage/Css/product.css">
    <link rel="stylesheet" href="./MainPage/Css/about.css">
    <link rel="stylesheet" href="./MainPage/Css/Contact.css">
    <link rel="stylesheet" href="./MainPage/Css/footer.css">
    <link rel="stylesheet" href="./MainPage/Css/scroll.css">
    <!-- <link rel="stylesheet" href="Css/modal.css"> -->
    <link rel="shortcut icon" type="image/x-icon" href="">
    <link rel="icon" href="./MainPage/MainImg/favicon-removebg-preview.png">
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@700&display=swap" rel="stylesheet">
    
    <title>Skillshare360</title>
    <script src="https://kit.fontawesome.com/ad806ed620.js" crossorigin="anonymous"></script>
</head>
<body>
    <header id="header">
        <div class="logo">
            <img src="./MainPage/MainImg/favicon-removebg-preview.png" alt="logo">
            <h1>Skillshare360</h1>
        </div>
        <nav>
                <button class="menu-button">
                  <span>...</span>
                </button>
                <ul class="nav-list">
                    <li><a href="#hero">Home</a></li>
                    <li><a href="#about-us">About</a></li>
                    <li><a href="#contact">Contact Us</a></li>
                    <li><a href="./RegisterPage/LoginPage/login.php">Login</a></li>
                </ul>
        </nav>
    </header>
    <section class="hero" id="hero">
        <div class="content">
            <h2>Your all-in-one learning destination</h2>
            <p>Unlock your potential with our expert-led courses. Whether you're looking to learn a new skill, deepen your knowledge, or jumpstart your career, we have everything you need to succeed. Join our community of learners and start your journey today!</p>
        </div>
        <div class="waves"></div>
    </section>
    <section id="product">
        <div class="user-levels">

            <div class="user-level" id = "Learner">
              <h2>Learner</h2>
                <ol>
                    <li>Access thousands of courses taught by experts</li>
                    <li>Learn at your own pace</li>
                    <li>Join a community of learners</li>
                    <li>Take many quizzes and assignments</li>
                    <li>Access courses on any device</li>
                    <li>Get a certificate of completion</li>
                </ol>
                <button class="JoinUs-btn">Join us for free</button>
            </div>
            <div class="user-level" id="Premium">
              <h2>Premium</h2>
                <ol>
                    <li>All Learner Beneffits</li>
                    <li>Access to exclusive courses</li>
                    <li>Create your own comunity to study with your friends</li>
                    <li>Recomandet courses based on your selection</li>
                    <li>Many discaunts</li>
                    <li>Early access to new courses</li>
                    <li>Contact the instructor at any time</li>
                    <li>Attend webinars with industry experts</li>
                    <li>Free access to downloadable resources</li>
                    <li>Priority support</li>
                </ol>
                <button class="JoinUs-btn">10.99$ / month</button>
            </div>
            <div class="user-level" id="Instructor">
                <h2>Instructor</h2>
                <ol>
                    <li>All of the Premium benefits</li>
                    <li>Create and publish your own courses</li>
                    <li>Get insights into your course's performance</li>
                    <li>Access to instructor-only resources</li>
                    <li>Customize course content and materials</li>
                    <li>Join the instructor community and share knowledge</li>
                </ol>
                <button class="JoinUs-btn">20.99$ / month</button>
            </div>
          </div>
    </section>
    <section id="about-us">
        <h2>About Us</h2>
            <div id="about-us-paragraph">
                <p>We are a team of passionate educators and technology enthusiasts who believe that everyone has the right to access quality education. Our mission is to make learning more accessible, fun, and engaging for everyone, anywhere.</p>
                <p>At Skillshare360, we are passionate about helping people 
                learn and develop new skills. Our online learning platform offers
                a wide range of courses on various subjects, taught by experienced instructors
                from around the world. Our mission is to make education more accessible and affordable
                for everyone, regardless of their background or location. We believe that everyone has 
                the potential to learn and grow, and we are here to support them every step of the way. 
                Join our community today and start your learning journey with Skillshare360!
                </p>
                <p>Join us today and take the first step towards your learning journey!</p>
            </div>
    </section>
    <section class="contact" id="contact">
          <h1>Contact</h1>
          <p>You can contact us by e-mail by clicking the icon below or by using social media linked at the footer.</p>
          <div>
            <a><i class="fas fa-envelope fa-5x"></i></a>
            <p class="email">Email</p>
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