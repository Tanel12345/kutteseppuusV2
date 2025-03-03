//Screeni scrollimine ülesse automaatselt
var upscroller = document.querySelector(".upscroller");
window.onscroll = function () {
  if (window.pageYOffset > 1050) {
    upscroller.style.opacity = "1";
  } else {
    upscroller.style.opacity = "0";
  }
};