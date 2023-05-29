<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../SignUpPage/signup.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,300,1,0" />
    <link rel="icon" href="../../MainPage/MainImg/favicon-removebg-preview.png">
    <title>Skillshare360</title>
</head>
<body>
    <div class="container">
        <div class="screen">
            <div class="screen__content">
                <form class="login" method="get" action="">
                    <h1>SignUp</h1>

                    <div class="login__field">
                        <span class="material-symbols-outlined login__icon">person</span>
                        <input type="text" name="username" id="username" class="login__input" required placeholder="Username">
                    </div>

                    <div class="login__field">
                        <span class="material-symbols-outlined login__icon">mail</span>
                        <input type="email" name="email" id="email" class="login__input" required placeholder="Email">
                    </div>

                    <div class="login__field">
                        <span class="material-symbols-outlined login__icon">lock</span>
                        <input type="password" name="password" id="password" class="login__input" required placeholder="Password">
                    </div>

                    <div class="login__field">
                        <span class="material-symbols-outlined login__icon">lock</span>
                        <input type="password" name="password" id="password" class="login__input" required placeholder="Confirm Password">
                    </div>

                    <div class="login__field" id="file_input">
                        <span class="material-symbols-outlined login__icon">upload</span>
                        <input type="file" name="file" id="file" class="login__input" required placeholder="Upload CV">
                    </div>

                    <div class="login__field" id="level">
                        <select class="login__submit">
                            <option value="0">Select Level</option>
                            <option value="1">Learner</option>
                            <option value="2">Premium</option>
                            <option value="3">Instructor</option>
                        </select>
                    </div>
                    <button type="button" class="button login__submit">
                        <span class="button__text">SignUp Now</span>
                        <span class="material-symbols-outlined button__icon">arrow_forward_ios</span>
                        <div class="loader" id="loader"></div>
                    </button>	
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
</body>
</html>