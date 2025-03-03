

//Slider carousel
const slides = document.querySelectorAll(".carousel-ul");
const navbutton = document.querySelectorAll(".carousel-indicator");
const next = document.querySelector(".carousel-button-next .arrow-img");
const back = document.querySelector(".carousel-button-back .arrow-img");
let counter = 1;
const auto = true;
const intervalTime = 80000;
let slideInterval;
const nextSlide = () => {
  const current = document.querySelector(".active");
  current.classList.remove("active");
  const current1 = document.querySelector(".active1");
  if (current.nextElementSibling) {
    current1.classList.remove("active1");
    current1.nextElementSibling.classList.add("active1");
    current.nextElementSibling.classList.add("active");
    current.style.animation = "slide-rightout 1s ease-in-out ";
    current.addEventListener("animationend", () => {
      current.style.opacity = "";
      current.style.animation = "";
    });
  } else {
    slides[0].classList.add("active");
    navbutton[0].classList.add("active1");
    navbutton[3].classList.remove("active1");
    current.style.animation = "slide-rightout 1s ease-in-out ";
    current.addEventListener("animationend", () => {
      current.style.opacity = "";
      current.style.animation = "";
    });
  }
  setTimeout(() => current.classList.remove("active"));
};
const prevSlide = () => {
  const current = document.querySelector(".active");
  current.classList.remove(".active");
  current.style.opacity = "1";
  const current1 = document.querySelector(".active1");
  if (current.previousElementSibling) {
    current1.classList.remove("active1");
    current1.previousElementSibling.classList.add("active1");
    current.style.animation = "slide-leftout 1s ease-in-out ";
    current.previousElementSibling.classList.add("active");
    current.addEventListener("animationend", () => {
      current.style.opacity = "";
      current.style.animation = "";
    });
  } else {
    slides[slides.length - 1].classList.add("active");
    navbutton[slides.length - 1].classList.add("active1");
    navbutton[0].classList.remove("active1");
    current.style.opacity = "1";
    current.style.animation = "slide-leftout 1s ease-in-out ";
    current.addEventListener("animationend", () => {
      current.style.opacity = "";
      current.style.animation = "";
    });
  }
  setTimeout(() => current.classList.remove("active"));
};
next.addEventListener("click", () => {
  nextSlide();
  //Resetib intervalli
  if (auto) {
    clearInterval(slideInterval);
    slideInterval = setInterval(nextSlide, intervalTime);
  }
});
back.addEventListener("click", () => {
  prevSlide();
  if (auto) {
    clearInterval(slideInterval);
    slideInterval = setInterval(nextSlide, intervalTime);
  }
});
// Auto intervall
if (auto) {
  slideInterval = setInterval(nextSlide, intervalTime);
}
//H1 teksti slider
const headingh1 = document.querySelector(".heading h1");
const headingh2 = document.querySelector(".heading h2");
const headingh3 = document.querySelector(".heading h3");
const headingH1logo = document.querySelector(".heading .h1logo");
const firsttextout = () => {
  headingh1.style.animation = "slide-rightout 5s ease-out";
  headingh2.style.animation = "slide-rightout 5s ease-out";
  secondtextout();
};
const secondtextout = () => {
  headingh3.style.animation =
    "slide-leftin 5s ease-out forwards, slide-rightouth3 5s ease-out 8s forwards ";
};
const logoout = () => {
  headingH1logo.style.animation = "logoslide 5s ease-out forwards";
};
const firstagain = () => {
  headingH1logo.style.opacity = "0";
  headingh1.style.animation = "h1slide 1s ease-in-out 1s forwards";
  headingh2.style.animation = "h2slide 1s ease-in-out 2s forwards";
};
setTimeout(firsttextout, 8000);
setTimeout(logoout, 16000);
setTimeout(firstagain, 28000);


