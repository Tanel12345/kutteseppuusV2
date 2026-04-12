const slides = document.querySelectorAll(".carousel-ul");
const indicators = document.querySelectorAll(".carousel-indicator");
const nextBtn = document.querySelector(".carousel-button-next");
const backBtn = document.querySelector(".carousel-button-back");

const auto = true;
const intervalTime = 80000;
let slideInterval;
let isAnimating = false;

function getActiveIndex() {
  return [...slides].findIndex(slide => slide.classList.contains("active"));
}

function goToSlide(newIndex, direction = "next") {
  if (isAnimating) return;

  const currentIndex = getActiveIndex();
  if (currentIndex === -1 || currentIndex === newIndex) return;

  isAnimating = true;

  const currentSlide = slides[currentIndex];
  const targetSlide = slides[newIndex];
  const currentIndicator = indicators[currentIndex];
  const targetIndicator = indicators[newIndex];

  currentIndicator.classList.remove("active1");
  targetIndicator.classList.add("active1");

  const outAnimation =
    direction === "prev" ? "slide-leftout" : "slide-rightout";

  // vana slaid uue ette, et väljalend jääks nähtav
  currentSlide.style.zIndex = "3";
  targetSlide.style.zIndex = "2";

  // eemalda vana entering klass, kui see jäi külge
  targetSlide.classList.remove("entering");
  void targetSlide.offsetWidth;

  targetSlide.classList.add("active", "entering");
  currentSlide.style.animation = `${outAnimation} 1s ease-in-out forwards`;

  currentSlide.addEventListener(
    "animationend",
    () => {
      currentSlide.classList.remove("active");
      currentSlide.style.animation = "";
      currentSlide.style.zIndex = "";
      targetSlide.style.zIndex = "";
      targetSlide.classList.remove("entering");
      isAnimating = false;
    },
    { once: true }
  );
}

function nextSlide() {
  let index = getActiveIndex() + 1;
  if (index >= slides.length) index = 0;
  goToSlide(index, "next");
}

function prevSlide() {
  let index = getActiveIndex() - 1;
  if (index < 0) index = slides.length - 1;
  goToSlide(index, "prev");
}

nextBtn?.addEventListener("click", () => {
  nextSlide();
  if (auto) resetInterval();
});

backBtn?.addEventListener("click", () => {
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
