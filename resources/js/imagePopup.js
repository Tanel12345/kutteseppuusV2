// Popup-images
const popupimage = document.querySelector(".popup-image");
const popupimageimage = document.querySelector(".popup-image .img");
const body = document.querySelector("body");
const image = document.querySelectorAll(".carousel-li img");
image.forEach((image) => {
  image.onclick = () => {
    body.style.position = "fixed";
    popupimage.style.display = "block";
    popupimageimage.src = image.getAttribute("src");
  };
});
document.querySelector(".popup-image .x").onclick = () => {
  popupimage.style.display = "none";
  body.style.position = "static";
};