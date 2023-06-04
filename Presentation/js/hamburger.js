
//making burgermenu interactive->menu options appeare on click

const hamburger = document.querySelector('.hamburger');
const navMenu = document.querySelector('.nav-menu');
const logospace = document.querySelector('.logospace');
const navbar = document.querySelector('.navbar');

hamburger.addEventListener("click", () => {
    hamburger.classList.toggle("active");
    navMenu.classList.toggle("active");
    logospace.classList.toggle("active");
    navbar.classList.toggle("active");

});


//burgermenu closes when a link is clicked
document.querySelectorAll(".nav-link").forEach(n => n.addEventListener('click', () => {
    hamburger.classList.remove("active");
    navMenu.classList.remove("active");
    logospace.classList.remove("active");
    navbar.classList.remove("active");
}));
