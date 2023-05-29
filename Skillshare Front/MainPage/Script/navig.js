const joinButtons = document.querySelectorAll('.JoinUs-btn');

          
joinButtons.forEach(button => {
    button.addEventListener('click', () => {
        window.location.href = '../Skillshare Front/RegisterPage/SignUpPage/signup.html';
    });
});

