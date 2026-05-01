
const header = document.querySelector("header");
const headerContainer = document.querySelector(".header-container");
const background = document.querySelector(".taust");
const hero = document.querySelector(".uper");

let lastScrollY = window.scrollY;
let currentScrollY = window.scrollY;
let ticking = false;

let isMobile = window.innerWidth <= 755;
let heroVisible = true;
let heroHeight = hero ? hero.offsetHeight : 0;

const triggerPoint = 130;
const topResetPoint = 170;
const scrollDelta = 4;

const backgroundStartOffset = 0;
const parallaxFactor = 0.5;

// Esimese laadimise header animation
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

// Jälgib, kas hero osa on nähtav
if (hero) {
    const observer = new IntersectionObserver(
        (entries) => {
            heroVisible = entries[0].isIntersecting;
        },
        {
            root: null,
            threshold: 0
        }
    );

    observer.observe(hero);
}

// Scroll
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

// Resize
window.addEventListener("resize", () => {
    isMobile = window.innerWidth <= 755;
    heroHeight = hero ? hero.offsetHeight : 0;
    currentScrollY = window.scrollY;
    update();
});

// Load
window.addEventListener("load", () => {
    isMobile = window.innerWidth <= 755;
    heroHeight = hero ? hero.offsetHeight : 0;
    currentScrollY = window.scrollY;
    update();
});

function update() {
    const diff = currentScrollY - lastScrollY;

    // Header
    if (headerContainer) {
        if (currentScrollY <= topResetPoint) {
            headerContainer.classList.remove("scroll-down");
            headerContainer.classList.add("scroll-up");
        } else if (currentScrollY > triggerPoint && diff > scrollDelta) {
            headerContainer.classList.add("scroll-down");
            headerContainer.classList.remove("scroll-up");
        }
    }

    // Parallax taust
    if (background && hero) {
        if (isMobile) {
            background.style.transform = `translateY(${backgroundStartOffset}px)`;
        } else {
            const maxTranslate =
                backgroundStartOffset + heroHeight * parallaxFactor;

            let translateY =
                backgroundStartOffset + currentScrollY * parallaxFactor;

            // Ei lase väärtusel üle maksimumi minna
            if (translateY > maxTranslate) {
                translateY = maxTranslate;
            }

            // Ei lase alla algväärtuse minna
            if (translateY < backgroundStartOffset) {
                translateY = backgroundStartOffset;
            }

            // Kui hero on nähtav või oleme veel hero alas, uuenda transformi
            if (heroVisible || currentScrollY < heroHeight) {
                background.style.transform = `translateY(${translateY}px)`;
            }
        }
    }

    lastScrollY = currentScrollY;
    ticking = false;
}