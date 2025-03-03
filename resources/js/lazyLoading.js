//Jälgib eraldi pilte ja konteinereid
// Select images and elements to observe
const images = document.querySelectorAll("[data-src]");
const elementsToObserve = [
  ...document.querySelectorAll(".piltlink"),
  ...document.querySelectorAll(".kusipakkumist"),
  ...document.querySelectorAll(".ettevottest"),
  ...document.querySelectorAll(".ettevottest1")
];

// Preload image function
function preloadImage(img) {
  const src = img.getAttribute("data-src");
  if (src) {
    img.src = src;
  }
}

// Observer options for images (load images 500px before they appear)
const imgOptions = { threshold: 0, rootMargin: "0px 0px 500px 0px" };

// Observer options for other elements (load when they appear in the viewport)
const elementOptions = { threshold: 0, rootMargin: "0px 0px 200px 0px" };

// Callback for the intersection observer
const observerCallback = (entries, observer) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      // If it's an image, preload it
      if (entry.target.tagName === 'IMG') {
        preloadImage(entry.target);
        entry.target.classList.add("inverse"); // Add class for loaded images
      } else {
        // Add class for other elements
        entry.target.classList.add("inverse1");
      }
      observer.unobserve(entry.target); // Stop observing the element once it has loaded
    }
  });
};

// Create observers
const imgObserver = new IntersectionObserver(observerCallback, imgOptions);
const elementObserver = new IntersectionObserver(observerCallback, elementOptions);

// Start observing images
images.forEach((image) => {
  imgObserver.observe(image);
});

// Start observing other elements
elementsToObserve.forEach((el) => {
  elementObserver.observe(el);
});










