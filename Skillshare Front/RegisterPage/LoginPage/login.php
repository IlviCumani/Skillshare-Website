<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <link rel="icon" href="../../MainPage/MainImg/favicon-removebg-preview.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Skillshare360</title>
</head>
<body>
        <div class="container">
            <div class="screen">
                <div class="screen__content">
                    <form class="login" method="get" action="">
                        <h1>Login</h1>

                        <div class="login__field">
                            <i class="login__icon fas fa-user"></i>
                            <input type="text" class="login__input" id="emailTF" placeholder="User name / Email">
                        </div>

                        <div class="login__field">
                            <i class="login__icon fas fa-lock"></i>
                            <input type="password" class="login__input" id="passwordTF" placeholder="Password">
                        </div>

                        <button type="button" class="button login__submit">
                            <span class="button__text">Log In Now</span>
                            <i class="button__icon fas fa-chevron-right" id="right_arrow"></i>
                            <div class="loader" id="loader"></div>
                        </button>	
                        <button type="button" class="button cancel__submit">
                            <span class="button__text">Go Back</span>
                            <i class="button__icon fas fa-chevron-left"></i>
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
        
        <script>
            const user = {
                name: "Ilvi",
                surname: "Cumani",
                token: "1234567890"
            }
            const cancel = document.querySelector('.cancel__submit');
            const login = document.querySelector('.login__submit');
            const loader = document.getElementById('loader');
            const emailTF = document.getElementById('emailTF');
            const passwordTF = document.getElementById('passwordTF');
            const right_arrow = document.getElementById('right_arrow');
            
            login.addEventListener('click', () => {
                loader.style.display = "block";
                

                setTimeout(() => {
                    
                    if(emailTF.value == "ilvi" && passwordTF.value == "1234"){
                        // Convert object to a string
                        const loggedUser = JSON.stringify(user);

                        // Store the string representation in local storage
                        localStorage.setItem("user", loggedUser);
                        localStorage.setItem("token", JSON.stringify(user.token));
                        window.location.href = "../../UserPages/ProfilePage/profile.php";
                    }

                    else{
                        loader.style.display = "none";
                        alert("Wrong username or password");
                    }

                    // if(){
                    //     // Convert object to a string
                    //     const loggedUser = JSON.stringify(user);

                    //     // Store the string representation in local storage
                    //     localStorage.setItem("user", loggedUser);
                    //     localStorage.setItem("token", JSON.stringify(user.token));
                    //     window.location.href = "../../UserPages/ProfilePage/profile.php";
                    // }

                    // else{
                    //     loader.style.display = "none";
                    //     alert("Wrong username or password");
                    // }
                }, 1000);
            });;
            
            cancel.addEventListener('click', () => {
                console.log("clicked");
                window.location.href = "../../home.php";
            });
        </script>
</body>
</html>

<!-- put this on top dhe fix it to the database for the page to work
<?php
// Connect to the MySQL database
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$database = "your_database_name";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $email = $_GET['email'];
    $password = $_GET['password'];

    // Prepare the SQL statement to check email and password
    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // User credentials are correct, redirect to the profile page
        header("Location: ../../UserPages/ProfilePage/profile.php");
        exit();
    } else {
        // User credentials are incorrect
        echo "<script>alert('Wrong username or password');</script>";
    }
}

$conn->close();
?> -->