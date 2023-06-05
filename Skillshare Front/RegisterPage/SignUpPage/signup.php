<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../SignUpPage/signup.css">
    <link rel="stylesheet" href="../../MainPage/Css/scroll.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,300,1,0" />
    <link rel="icon" href="../../MainPage/MainImg/favicon-removebg-preview.png">
    <title>Skillshare360</title>
</head>
<body>
    <div class="container">
        <div class="screen">
            <div class="screen__content">
                <form class="login" method="post" action="validate.php">
                    <h1>SignUp</h1>
                    <?php
                    if(isset($_SESSION['user_login'])){
                    echo "<p style=\"color: Red;\">".$_SESSION['user_login']."</p>";
                    
                    }
                    ?>
                    <div class="login__field">
                        <span class="material-symbols-outlined login__icon">person</span>
                        <input type="text" name="username" id="username" class="login__input" required placeholder="Username">
                    </div>
                    <div class="login__field">
                        <span class="material-symbols-outlined login__icon">mail</span>
                        <input type="email" name="email" id="email" class="login__input" required placeholder="Email">
                    </div>
                    <div class="login__field">
                        <span class="material-symbols-outlined login__icon">Phone</span>
                        <input type="phone" name="phone" id="phone" class="login__input" required placeholder="Phone">
                    </div>
                    <div class="login__field">
                        <span class="material-symbols-outlined login__icon">lock</span>
                        <input type="password" name="password" id="password" class="login__input" required placeholder="Password">
                    </div>
                    <div class="login__field">
                        <span class="material-symbols-outlined login__icon">lock</span>
                        <input type="password" name="passwordConfirm" id="passwordConfirm" class="login__input" required placeholder="Confirm Password">
                    </div>
                    <div class="login__field" id="file_input">
                        <span class="material-symbols-outlined login__icon">upload</span>
                        <input type="file" name="file" id="file" class="login__input" placeholder="Upload CV">
                    </div>
                    <div class="login__field" id="level">
                        <select class="login__submit" name="type" id="level">
                            <option value="0">Select Level</option>
                            <option value="Learner">Learner</option>
                            <option value="Premium">Premium</option>
                            <option value="Instructor">Instructor</option>
                        </select>
                    </div>
                    <button class="button login__submit" id="Sign_Up_Button">
                        <span class="button__text">SignUp Now</span>
                        <span class="material-symbols-outlined button__icon">arrow_forward_ios</span>
                        <div class="loader" id="loader"></div>
                    </button>	
                    <button class="button cancel__submit">
                            <span class="material-symbols-outlined button__icon">arrow_back_ios</span>
                            <span class="button__text">Go Back</span>
                    </button>
                    <script>
                        const goBackButton = document.querySelector('.cancel__submit');
                        goBackButton.addEventListener('click', function(){
                            window.history.back();
                        });
                    </script>
                </form>
            </div>
            <div class="screen__background">
                <span class="screen__background__shape screen__background__shape4"></span>
                <span class="screen__background__shape screen__background__shape3"></span>		
                <span class="screen__background__shape screen__background__shape2"></span>
                <span class="screen__background__shape screen__background__shape1"></span>
            </div>		
        </div>
    </div>
    <script>
        const level =document.getElementById('level');
        const file =document.getElementById('file_input');
        console.log(file);
        
        level.addEventListener('change', function(event){
            console.log(event.target.value);
            if(event.target.value == "Instructor"){
                file.classList.add("show")
            }else{
                file.classList.remove("show");
            }
        });
    </script>
</body>
</html>
