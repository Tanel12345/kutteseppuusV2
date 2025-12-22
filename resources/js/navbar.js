

// const header = document.querySelector("header");
// // First-time load animation
//   if (!sessionStorage.getItem("firstTimeAnimation")) {
//       header.classList.add("animate");
//       sessionStorage.setItem("firstTimeAnimation", "true");
//   }



  
  
//   const headerContainer = document.querySelector(".header-container");
//   const background = document.querySelector(".taust");
//   let lastScrollY = window.scrollY;
//   const triggerPoint = 130;
//   // Scroll event listener
//   window.addEventListener("scroll", () => {
//       const currentScrollY = window.scrollY;

//       // Reset classes when fully scrolled to the top
//       if (currentScrollY === 0) {
//           headerContainer.classList.remove("scroll-up", "scroll-down");
//       } else if (currentScrollY > triggerPoint && currentScrollY > lastScrollY) {
//           // Scrolled past the trigger point while scrolling down
//           headerContainer.classList.add("scroll-down");
//           headerContainer.classList.remove("scroll-up");
//       } else if (currentScrollY <= triggerPoint && currentScrollY < lastScrollY) {
//           // Scrolled past the trigger point while scrolling up
//           headerContainer.classList.add("scroll-up");
//           headerContainer.classList.remove("scroll-down");
//       }

//       // Update the last scroll position
//       lastScrollY = currentScrollY;

//       // Parallax effect
//       const scrollPosition = window.scrollY;
//       const speed = 0.3;
//       if (background) {
//           background.style.transform = `translateY(${scrollPosition * speed}px)`;
//       }
//   });


const header = document.querySelector("header");
const headerContainer = document.querySelector(".header-container");
const background = document.querySelector(".taust");

let lastScrollY = window.scrollY;
let currentScrollY = window.scrollY;
let ticking = false;

const triggerPoint = 130;
const speed = 0.3;

//
// ✅ FIRST LOAD ANIMATION
//
if (!sessionStorage.getItem("firstTimeAnimation")) {
    header.classList.add("animate");
    sessionStorage.setItem("firstTimeAnimation", "true");
}

//
// ✅ PARALLAX ACTIVE ONLY WHEN VISIBLE
//
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

//
// ✅ SCROLL LISTENER (LIGHTWEIGHT)
//
window.addEventListener("scroll", () => {
    currentScrollY = window.scrollY;

    if (!ticking) {
        requestAnimationFrame(update);
        ticking = true;
    }
});

//
// ✅ MAIN UPDATE LOOP (1x per frame)
//
function update() {

    // HEADER LOGIC
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

    // PARALLAX (only if visible)
    if (background && parallaxActive) {
        background.style.transform =
            `translate3d(0, ${currentScrollY * speed}px, 0)`;
    }

    lastScrollY = currentScrollY;
    ticking = false;
}
  


