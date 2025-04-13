// sildes
let currentSlide = 0;
const slides = document.querySelectorAll('.slide');

function showSlide(index) {
    slides.forEach(slide => slide.classList.remove('active'));
    slides[index].classList.add('active');
}

function nextSlide() {
    currentSlide = (currentSlide + 1) % slides.length;
    showSlide(currentSlide);
}

showSlide(currentSlide);

setInterval(nextSlide, 4000);

// plans popup
document.getElementById("btn").addEventListener("click", function(){
    document.querySelector(".pop").style.display="flex";

})
document.getElementById("close").addEventListener("click", function(){
    document.querySelector(".pop").style.display="none";

})
//register popup
document.getElementById("register").addEventListener("click", function(){
    document.querySelector(".popR").style.display="flex";

})
document.getElementById("klose").addEventListener("click", function(){
    document.querySelector(".popR").style.display="none";

})

//Login popup
// document.getElementById("login").addEventListener("click", function(){
//     document.querySelector(".popL").style.display="flex";

// })
// document.getElementById("end").addEventListener("click", function(){
//     document.querySelector(".popL").style.display="none";

// })

