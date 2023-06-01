const username = document.getElementById("username");
const email = document.getElementById("email");
const phone = document.getElementById("phone");
const level = document.getElementById("level");

const userString = localStorage.getItem('user');
const user = JSON.parse(userString);

username.innerHTML = user['name'];
email.innerHTML = user['email'];
phone.innerHTML = user['phone'];
level.innerHTML = user['level'];
