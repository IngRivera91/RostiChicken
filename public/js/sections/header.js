function initHeader(){

    const toggle=document.getElementById("menuToggle");

    const nav=document.getElementById("nav");

    const header=document.querySelector(".header");

    if(toggle){

        toggle.addEventListener("click",()=>{

            nav.classList.toggle("active");

        });

    }

    window.addEventListener("scroll",()=>{

        if(window.scrollY>40){

            header.classList.add("scrolled");

        }else{

            header.classList.remove("scrolled");

        }

    });

}