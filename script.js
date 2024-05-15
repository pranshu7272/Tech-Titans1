var crsr=document.querySelector("#cursor");
var blur=document.querySelector("#cursor-blur");
document.addEventListener("mousemove",function(e){
    crsr.style.left= e.x + "px"
    crsr.style.top=e.y + "px" 
    blur.style.left= e.x - 250 + "px"
    blur.style.top=e.y - 250 + "px" 
});

gsap.to(".nav",{
    backgroundColor: "#616161",
    duration: 0.5,
    height: 110,
    scrollTrigger:{
        trigger:".nav",
        scroller:"body",
        // markers:true,
        start: "top -10%",
        end: "top -11%;",
        scrub:1
    }
})

gsap.to("#main",{
    backgroundColor:"#000",
    scrollTrigger:{
        trigger:"#main",
        scroller: "body",
        // markers:true,
        start: "top -25%",
        end: "top -70%",
        scrub: 2
    }
})


gsap.from("#about-us img, #about-us-in",{
    y:90,
    opacity:0,
    duration: 1.5,
    
    scrollTrigger:{
        trigger: "#about-us",
        scroller: "body",
        // markers:true,
        start: "top 60%",
        end:"top 20%",
        scrub:2
    }
});

gsap.from(".card",{
    scale: 0.8,
    opacity:0,
    duration: 0.9,
    stagger:0.2,
    scrollTrigger:{
        trigger: "#cards-container",
        scroller: "body",
        // markers:true,
        start: "top 70%",
        end:"top 65%",
        scrub:3,
    }
});

gsap.from("#colon1",{
    x:-70,
    y:-70,
    scrollTrigger:{
        trigger:"#colon1",
        scroller:"body",
        // markers: true,
        start: "top 55%",
        end: "top 45%",
        scrub:4
    }
});

gsap.from("#colon2",{
    x:+70,
    y:+70,
    scrollTrigger:{
        trigger:"#colon1",
        scroller:"body",
        // markers: true,
        start: "top 55%",
        end: "top 45%",
        scrub:4,
    }
});

gsap.from("#page4 h1",{
    y:50,
    scrollTrigger:{
        trigger:"#page4 h1",
        scroller: "body",
        // marker: true,
        start: "top: 75%",
        end: "top 70%",
        scrub: 3,
    }
});


gsap.from("#footer.img", {
    x: 20,
    opacity: 0, // Adding opacity animation for better visibility
    duration: 1, // Adjust duration as needed
    scrollTrigger: {
      trigger: "#footer", // Use the footer itself as the trigger
      scroller: "body",
      start: "top 60%",
      end: "top 80%",
      scrub: 3,
    }
  });

  gsap.from("#footer.img",{
    x:20,
    scrollTrigger:{
        trigger:"#footer .img",
        scroller: "body",
        marker: true,
        start: "top: 75%",
        end: "top 70%",
        scrub: 3
    }
});

// galary section 

let currentSlide = 0;

function showSlide(index) {
    const slides = document.querySelectorAll('.slide');
    if (index >= slides.length) {
        currentSlide = 0;
    } else if (index < 0) {
        currentSlide = slides.length - 1;
    } else {
        currentSlide = index;
    }
    const offset = -currentSlide * 100;
    document.querySelector('.slides').style.transform = `translateX(${offset}%)`;
}

function nextSlide() {
    showSlide(currentSlide + 1);
}

function prevSlide() {
    showSlide(currentSlide - 1);
}

// Optional: Auto-slide every 5 seconds
setInterval(() => {
    nextSlide();
}, 5000);

// Initial display
showSlide(currentSlide);

// contect form 

 let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0;i < slides.length;i++) {
    slides[i].style.display = "none";
  }
  for (i = 0;i < dots.length;i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}


  
