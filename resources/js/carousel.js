

// //Slider carousel
// const slides = document.querySelectorAll(".carousel-ul");
// const navbutton = document.querySelectorAll(".carousel-indicator");
// const next = document.querySelector(".carousel-button-next .arrow-img");
// const back = document.querySelector(".carousel-button-back .arrow-img");
// let counter = 1;
// const auto = true;
// const intervalTime = 80000;
// let slideInterval;
// const nextSlide = () => {
//   const currentSlide = document.querySelector(".carousel-ul.active");
//   const currentIndicator = document.querySelector(".carousel-indicator.active1");

//   let nextIndex = Array.from(slides).indexOf(currentSlide) + 1;

//   // Kui jõuame lõppu, mine tagasi algusesse
//   if (nextIndex >= slides.length) {
//     nextIndex = 0;
//   }

//   // Eemalda aktiivsed klassid
//   currentSlide.classList.remove("active");
//   currentIndicator.classList.remove("active1");

//   // Lisa uuele
//   slides[nextIndex].classList.add("active");
//   navbutton[nextIndex].classList.add("active1");

//   // Animatsioon
//   currentSlide.style.animation = "slide-rightout 1s ease-in-out";
//   currentSlide.addEventListener("animationend", () => {
//     currentSlide.style.opacity = "";
//     currentSlide.style.animation = "";
//   }, { once: true });
// };
// const prevSlide = () => {
//   const currentSlide = document.querySelector(".carousel-ul.active");
//   const currentIndicator = document.querySelector(".carousel-indicator.active1");

//   let prevIndex = Array.from(slides).indexOf(currentSlide) - 1;

//   if (prevIndex < 0) {
//     prevIndex = slides.length - 1;
//   }

//   currentSlide.classList.remove("active");
//   currentIndicator.classList.remove("active1");

//   slides[prevIndex].classList.add("active");
//   navbutton[prevIndex].classList.add("active1");

//   currentSlide.style.animation = "slide-leftout 1s ease-in-out";
//   currentSlide.addEventListener("animationend", () => {
//     currentSlide.style.opacity = "";
//     currentSlide.style.animation = "";
//   }, { once: true });
// };
// next.addEventListener("click", () => {
//   nextSlide();
//   //Resetib intervalli
//   if (auto) {
//     clearInterval(slideInterval);
//     slideInterval = setInterval(nextSlide, intervalTime);
//   }
// });
// back.addEventListener("click", () => {
//   prevSlide();
//   if (auto) {
//     clearInterval(slideInterval);
//     slideInterval = setInterval(nextSlide, intervalTime);
//   }
// });
// // Auto intervall
// if (auto) {
//   slideInterval = setInterval(nextSlide, intervalTime);
// }
//H1 teksti slider
const slides = document.querySelectorAll(".carousel-ul");
const indicators = document.querySelectorAll(".carousel-indicator");
const nextBtn = document.querySelector(".carousel-button-next .arrow-img");
const backBtn = document.querySelector(".carousel-button-back .arrow-img");

const auto = true;
const intervalTime = 80000;
let slideInterval;
let isAnimating = false;

function ensureImageLoaded(slide) {
  const img = slide.querySelector("img[data-src]");
  if (img && !img.src) {
    img.src = img.dataset.src;
  }
}

function getActiveIndex() {
  return [...slides].findIndex(slide => slide.classList.contains("active"));
}

function goToSlide(newIndex, direction = "next") {
  if (isAnimating) return;

  const currentIndex = getActiveIndex();
  if (currentIndex === -1 || currentIndex === newIndex) return;

  isAnimating = true;

  const currentSlide = slides[currentIndex];
  const currentIndicator = indicators[currentIndex];

  const targetSlide = slides[newIndex];
  const targetIndicator = indicators[newIndex];

  ensureImageLoaded(targetSlide);

  currentIndicator.classList.remove("active1");
  targetIndicator.classList.add("active1");

  const outAnimation =
    direction === "prev" ? "slide-leftout" : "slide-rightout";

  // uus slaid aktiivseks
  targetSlide.classList.add("active");

  // vana slaid välja
  currentSlide.style.animation = `${outAnimation} 1s ease-in-out`;

  currentSlide.addEventListener(
    "animationend",
    () => {
      currentSlide.classList.remove("active");
      currentSlide.style.animation = "";
      isAnimating = false;
    },
    { once: true }
  );
}

function nextSlide() {
  let index = getActiveIndex() + 1;
  if (index >= slides.length) index = 0;

  goToSlide(index, "next");

  const preloadIndex = index + 1 < slides.length ? index + 1 : 0;
  ensureImageLoaded(slides[preloadIndex]);
}

function prevSlide() {
  let index = getActiveIndex() - 1;
  if (index < 0) index = slides.length - 1;

  goToSlide(index, "prev");

  const preloadIndex = index - 1 >= 0 ? index - 1 : slides.length - 1;
  ensureImageLoaded(slides[preloadIndex]);
}

nextBtn.addEventListener("click", () => {
  nextSlide();
  if (auto) resetInterval();
});

backBtn.addEventListener("click", () => {
  prevSlide();
  if (auto) resetInterval();
});

indicators.forEach((btn, index) => {
  btn.addEventListener("click", () => {
    const currentIndex = getActiveIndex();
    const direction = index < currentIndex ? "prev" : "next";

    goToSlide(index, direction);

    if (auto) resetInterval();
  });
});

function resetInterval() {
  clearInterval(slideInterval);
  slideInterval = setInterval(nextSlide, intervalTime);
}

if (auto) {
  slideInterval = setInterval(nextSlide, intervalTime);
}