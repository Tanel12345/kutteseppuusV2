
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