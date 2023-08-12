// Images Slider
let slides = document.querySelectorAll(".slide-container");
let index = 0;

function next() {
    slides[index].classList.remove("active");
    index = (index + 1) % slides.length;
    slides[index].classList.add("active");
}

function prev() {
    slides[index].classList.remove("active");
    index = (index - 1 + slides.length) % slides.length;
    slides[index].classList.add("active");
}

setInterval(next, 5000);

let profil = document.querySelectorAll(".profil-container");
let index_profil = 0;

function lanjut() {
    profil[index_profil].classList.remove("active");
    index_profil = (index_profil + 1) % profil.length;
    profil[index_profil].classList.add("active");
}

function ulang() {
    profil[index_profil].classList.remove("active");
    index_profil = (index_profil - 1 + profil.length) % profil.length;
    profil[index_profil].classList.add("active");
}

// Logo
var copy = document.querySelector(".logos-slide").cloneNode(true);
document.querySelector(".logos").appendChild(copy);

// Navbar

const header = document.querySelector("header");
window.addEventListener("scroll", function () {
    header.classList.toggle("bg-[#0082e6]", window.scrollY > 5);
});

const bgnav = document.querySelector(".dropnav");
window.addEventListener("scroll", function () {
    bgnav.classList.toggle("droplink", window.scrollY > 5);
});
const bgnav2 = document.querySelector(".dropnav2");
window.addEventListener("scroll", function () {
    bgnav2.classList.toggle("droplink2", window.scrollY > 5);
});
