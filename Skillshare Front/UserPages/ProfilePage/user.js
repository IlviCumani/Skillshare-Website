const username = document.getElementById("username");
const email = document.getElementById("email");
const phone = document.getElementById("phone");
const level = document.getElementById("level");
const editBtn = document.getElementById("edit-profile-button");
const changePassBtn = document.getElementById("change-password-button");

const user = {
    name: "Ilvio Cumani",
    email: "icumani21@epoka.edu.al",
    phone: "069 123 4567",
    level: "Premium",
    password: "123456"
};

username.innerHTML = user.name;
email.innerHTML = user.email;
phone.innerHTML = user.phone;
level.innerHTML = user.level;

editBtn.addEventListener("click", () => {
    user.name = prompt("Enter your new name: ");
    user.email = prompt("Enter your new email: ");
    user.phone = prompt("Enter your new phone number: ");
});

/*
const username = document.getElementById("username");
const email = document.getElementById("email");
const phone = document.getElementById("phone");
const level = document.getElementById("level");
const editBtn = document.getElementById("edit-profile-button");
const changePassBtn = document.getElementById("change-password-button");

let user = {};

//?Function to fetch user data from the server

async function fetchUserData() {
    try {
        const response = await fetch("your-api-endpoint"); // Replace "your-api-endpoint" with your actual API endpoint to fetch user data
        if (response.ok) {
            user = await response.json();
            displayUserData();
        } else {
            console.log("Failed to fetch user data from the server.");
        }
    } catch (error) {
        console.log("An error occurred while fetching user data:", error);
    }
}

//? Function to display user data on the webpage
function displayUserData() {
    username.innerHTML = user.name;
    email.innerHTML = user.email;
    phone.innerHTML = user.phone;
    level.innerHTML = user.level;
}

editBtn.addEventListener("click", () => {
    user.name = prompt("Enter your new name: ");
    user.email = prompt("Enter your new email: ");
    user.phone = prompt("Enter your new phone number: ");
});

//? Fetch user data when the page loads
fetchUserData();

*/