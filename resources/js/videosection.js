document.addEventListener("DOMContentLoaded", () => {
  const section = document.querySelector("#videosection");
  if (!section) return;

  const slider = section.querySelector(".video-slider");
  const prevBtn = section.querySelector(".carousel-button-back");
  const nextBtn = section.querySelector(".carousel-button-next");

  const gap = 20;
  let isAnimating = false;

  /* ===============================
     YOUTUBE API – PAUSILOOGIKA
  =============================== */

  let ytPlayers = [];

  window.onYouTubeIframeAPIReady = function () {
    section.querySelectorAll("iframe").forEach((iframe, i) => {
      ytPlayers[i] = new YT.Player(iframe);
    });
  };

  function pauseAllVideos() {
    ytPlayers.forEach(p => {
      if (p && typeof p.pauseVideo === "function") {
        p.pauseVideo();
      }
    });
  }

  /* ===============================
     SLIDERI ABI-FUNKTSIOONID
  =============================== */

  function step() {
    const first = slider.querySelector(".video-slide");
    if (!first) return 0;
    return first.getBoundingClientRect().width + gap;
  }

  function disableTransition() {
    slider.style.transition = "none";
  }

  function enableTransition() {
    slider.style.transition = "transform 0.45s ease";
  }

  function forceReflow() {
    void slider.offsetHeight;
  }

  /* ===============================
     EDASI
  =============================== */

  function goNext() {
    if (isAnimating) return;
    isAnimating = true;

    pauseAllVideos(); // 🔴 PEATA VIDEOD

    const s = step();
    if (!s) {
      isAnimating = false;
      return;
    }

    enableTransition();
    slider.style.transform = `translateX(-${s}px)`;

    slider.addEventListener(
      "transitionend",
      () => {
        const first = slider.firstElementChild;
        if (first) slider.appendChild(first);

        disableTransition();
        slider.style.transform = "translateX(0)";
        forceReflow();
        enableTransition();

        isAnimating = false;
      },
      { once: true }
    );
  }

  /* ===============================
     TAGASI
  =============================== */

  function goPrev() {
    if (isAnimating) return;
    isAnimating = true;

    pauseAllVideos(); // 🔴 PEATA VIDEOD

    const s = step();
    if (!s) {
      isAnimating = false;
      return;
    }

    const last = slider.lastElementChild;
    if (last) slider.insertBefore(last, slider.firstElementChild);

    disableTransition();
    slider.style.transform = `translateX(-${s}px)`;
    forceReflow();

    enableTransition();
    slider.style.transform = "translateX(0)";

    slider.addEventListener(
      "transitionend",
      () => {
        isAnimating = false;
      },
      { once: true }
    );
  }

  nextBtn.addEventListener("click", goNext);
  prevBtn.addEventListener("click", goPrev);

  window.addEventListener("resize", () => {
    pauseAllVideos();
    disableTransition();
    slider.style.transform = "translateX(0)";
    forceReflow();
    enableTransition();
  });
});
