const toggle = document.getElementById("menuToggle");
const nav = document.getElementById("nav");

if (toggle) {
    toggle.addEventListener("click", () => {
        nav.classList.toggle("active");
    });
}

// Header al hacer scroll
const header = document.querySelector(".header");
window.addEventListener("scroll", () => {
    if(window.scrollY > 40){
        header.classList.add("scrolled");
    }else{
        header.classList.remove("scrolled");
    }

});

// Slider Hero
const slides = document.querySelectorAll(".hero-slide");

let current = 0;

function nextSlide(){

    slides[current].classList.remove("active");

    current = (current + 1) % slides.length;

    slides[current].classList.add("active");

}

if(slides.length > 1){

    setInterval(nextSlide,5000);

}