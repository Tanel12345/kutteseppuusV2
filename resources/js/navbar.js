const header = document.querySelector("header");
const headerContainer = document.querySelector(".header-container");
const background = document.querySelector(".taust");

let lastScrollY = window.scrollY;
let currentScrollY = window.scrollY;
let ticking = false;

const triggerPoint = 130;
const speed = 0.3;

if (header && !sessionStorage.getItem("firstTimeAnimation")) {
    header.classList.add("animate");
    sessionStorage.setItem("firstTimeAnimation", "true");
}

let parallaxActive = false;

if (background) {
    const observer = new IntersectionObserver(
        ([entry]) => {
            parallaxActive = entry.isIntersecting;
        },
        { threshold: 0 }
    );

    observer.observe(background);
}

window.addEventListener("scroll", () => {
    currentScrollY = window.scrollY;

    if (!ticking) {
        requestAnimationFrame(update);
        ticking = true;
    }
}, { passive: true });

function update() {
    if (headerContainer) {
        if (currentScrollY === 0) {
            headerContainer.classList.remove("scroll-up", "scroll-down");
        } 
        else if (currentScrollY > triggerPoint && currentScrollY > lastScrollY) {
            headerContainer.classList.add("scroll-down");
            headerContainer.classList.remove("scroll-up");
        } 
        else if (currentScrollY <= triggerPoint && currentScrollY < lastScrollY) {
            headerContainer.classList.add("scroll-up");
            headerContainer.classList.remove("scroll-down");
        }
    }

    if (background && parallaxActive) {
        background.style.transform = `translate3d(0, ${currentScrollY * speed}px, 0)`;
    }

    lastScrollY = currentScrollY;
    ticking = false;
}