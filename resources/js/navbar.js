const header = document.querySelector("header");
const headerContainer = document.querySelector(".header-container");
const background = document.querySelector(".taust");
const hero = document.querySelector(".uper");

let lastScrollY = window.scrollY;
let currentScrollY = window.scrollY;
let ticking = false;
let isMobile = window.innerWidth <= 755;

const triggerPoint = 130;
const topResetPoint = 170;
const scrollDelta = 4;

const backgroundStartOffset = 0;
const parallaxFactor = 0.5;

if (!sessionStorage.getItem("firstTimeAnimation")) {
    if (headerContainer) {
        headerContainer.classList.add("animate");
        headerContainer.addEventListener(
            "animationend",
            () => {
                headerContainer.classList.remove("animate");
            },
            { once: true }
        );
    }
    sessionStorage.setItem("firstTimeAnimation", "true");
}

window.addEventListener(
    "scroll",
    () => {
        currentScrollY = window.scrollY;

        if (!ticking) {
            requestAnimationFrame(update);
            ticking = true;
        }
    },
    { passive: true }
);

window.addEventListener("resize", () => {
    isMobile = window.innerWidth <= 755;
    currentScrollY = window.scrollY;
    update();
});

window.addEventListener("load", () => {
    isMobile = window.innerWidth <= 755;
    currentScrollY = window.scrollY;
    update();
});

function update() {
    const diff = currentScrollY - lastScrollY;

    if (headerContainer) {
        // täiesti üleval → navbar nähtav
        if (currentScrollY <= topResetPoint) {
            headerContainer.classList.remove("scroll-down");
            headerContainer.classList.add("scroll-up");
        }

        // alla scroll → peida navbar
        else if (currentScrollY > triggerPoint && diff > scrollDelta) {
            headerContainer.classList.add("scroll-down");
            headerContainer.classList.remove("scroll-up");
        }

        // üles scroll → ÄRA tee midagi
        // (navbar jääb peitu kuni jõuad üles)
    }

    // --- su parallax jääb samaks ---
    if (background && hero) {
        if (isMobile) {
            background.style.transform = `translateY(${backgroundStartOffset}px)`;
        } else if (currentScrollY < hero.offsetHeight) {
            background.style.transform = `translateY(${backgroundStartOffset + currentScrollY * parallaxFactor}px)`;
        } else {
            background.style.transform = `translateY(${backgroundStartOffset}px)`;
        }
    }

    lastScrollY = currentScrollY;
    ticking = false;
}