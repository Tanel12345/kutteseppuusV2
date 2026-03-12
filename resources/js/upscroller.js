//Screeni scrollimine ülesse automaatselt
const upscroller = document.querySelector(".upscroller");

window.addEventListener("scroll", () => {

    if (window.scrollY > 1050) {
        upscroller.classList.add("visible");
    } else {
        upscroller.classList.remove("visible");
    }

});

upscroller.addEventListener("click", () => {
    window.scrollTo({
        top: 0,
        behavior: "smooth"
    });
});