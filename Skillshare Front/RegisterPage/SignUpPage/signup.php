<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection configuration
    $servername = "localhost"; //Input database credintials here
    $username = "your_username";
    $password = "your_password";
    $dbname = "your_database_name";

    // Create a new connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get the form input values
    $username = $_POST["username"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirm_password"];
    $level = $_POST["level"];

    // Insert the data into the database
    $sql = "INSERT INTO users (username, email, phone, password, level) VALUES ('$username', '$email', '$phone', '$password', '$level')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>

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
                <form class="login" method="post" action="">
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
                        <span class="material-symbols-outlined login__icon">Phone</span>
                        <input type="phone" name="phone" id="phone" class="login__input" required placeholder="Phone">
                    </div>

                    <div class="login__field">
                        <span class="material-symbols-outlined login__icon">lock</span>
                        <input type="password" name="password" id="password" class="login__input" required placeholder="Password">
                    </div>

                    <div class="login__field">
                        <span class="material-symbols-outlined login__icon">lock</span>
                        <input type="password" name="confirm_password" id="confirm_password" class="login__input" required placeholder="Confirm Password">
                    </div>

                    <div class="login__field" id="file_input">
                        <span class="material-symbols-outlined login__icon">upload</span>
                        <input type="file" name="file" id="file" class="login__input" required placeholder="Upload CV">
                    </div>

                    <div class="login__field" id="level">
                        <select class="login__submit" name="level">
                            <option value="0">Select Level</option>
                            <option value="1">Learner</option>
                            <option value="2">Premium</option>
                            <option value="3">Instructor</option>
                        </select>
                    </div>
                    <button type="submit" class="button login__submit">
                        <span class="button__text">SignUp Now</span>
                        <span class="material-symbols-outlined button__icon">arrow_forward_ios</span>
                        <div class="loader" id="loader"></div>
                    </button>	
                    <button type="button" class="button cancel__submit">
                            <span class="button__text">Go Back</span>
                            <i class="button__icon fas fa-chevron-left"></i>
                        </button>
                        <script>
                            const goBackButton = document.querySelector('.cancel__submit');
                            goBackButton.addEventListener('click', function() {
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
</body>
</html>
