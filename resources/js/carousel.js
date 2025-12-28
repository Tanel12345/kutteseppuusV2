

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

// ==============================
// CAROUSEL – OPTIMEERITUD JS
// ==============================

const slides = document.querySelectorAll(".carousel-ul");
const indicators = document.querySelectorAll(".carousel-indicator");
const nextBtn = document.querySelector(".carousel-button-next .arrow-img");
const backBtn = document.querySelector(".carousel-button-back .arrow-img");

const auto = true;
const intervalTime = 80000;
let slideInterval;

/**
 * Laeb pildi ainult siis, kui vaja
 */
function ensureImageLoaded(slide) {
  const img = slide.querySelector("img[data-src]");
  if (img && !img.src) {
    img.src = img.dataset.src;
  }
}

/**
 * Tagastab aktiivse slaidi indeksi
 */
function getActiveIndex() {
  return [...slides].findIndex(slide =>
    slide.classList.contains("active")
  );
}

/**
 * Üldine slaidi vahetus (ühtlane animatsioon)
 */
function goToSlide(newIndex, direction = "next") {
  const currentIndex = getActiveIndex();
  if (currentIndex === newIndex) return;

  const currentSlide = slides[currentIndex];
  const currentIndicator = indicators[currentIndex];

  const targetSlide = slides[newIndex];
  const targetIndicator = indicators[newIndex];

  // Lazy-load enne näitamist
  ensureImageLoaded(targetSlide);

  // Indikaatorid
  currentIndicator.classList.remove("active1");
  targetIndicator.classList.add("active1");

  // UUS SLAID KOHE NÄHTAVAKS
  targetSlide.classList.add("active");

  // VANA SLAIDI VÄLJUMISE ANIMATSIOON
  const outAnimation =
    direction === "prev" ? "slide-leftout" : "slide-rightout";

  currentSlide.style.animation = `${outAnimation} 1s ease-in-out`;

  currentSlide.addEventListener(
    "animationend",
    () => {
      // Alles PÄRAST animatsiooni
      currentSlide.classList.remove("active");
      currentSlide.style.animation = "";
    },
    { once: true }
  );
}
/**
 * Järgmine slaid
 */
function nextSlide() {
  let index = getActiveIndex() + 1;
  if (index >= slides.length) index = 0;

  goToSlide(index, "next");

  const preloadIndex = index + 1 < slides.length ? index + 1 : 0;
  ensureImageLoaded(slides[preloadIndex]);
}

/**
 * Eelmine slaid
 */
function prevSlide() {
  let index = getActiveIndex() - 1;
  if (index < 0) index = slides.length - 1;

  goToSlide(index, "prev");

  const preloadIndex = index - 1 >= 0 ? index - 1 : slides.length - 1;
  ensureImageLoaded(slides[preloadIndex]);
}
/**
 * Nupud
 */
nextBtn.addEventListener("click", () => {
  nextSlide();
  if (auto) resetInterval();
});

backBtn.addEventListener("click", () => {
  prevSlide();
  if (auto) resetInterval();
});

/**
 * Indikaatorid (täpid)
 */
indicators.forEach((btn, index) => {
  btn.addEventListener("click", () => {
    goToSlide(index);
    if (auto) resetInterval();
  });
});

/**
 * Auto-slide
 */
function resetInterval() {
  clearInterval(slideInterval);
  slideInterval = setInterval(nextSlide, intervalTime);
}

if (auto) {
  slideInterval = setInterval(nextSlide, intervalTime);
}
