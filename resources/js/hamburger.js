document.addEventListener("DOMContentLoaded", function () {
    const hamburger = document.querySelector(".hamburger");
    const menuBtn = document.querySelector(".menu-btn");
    const bottomRightdiv = document.querySelector(".bottom-rightdiv");
    const submenuToggles = document.querySelectorAll(".submenu-toggle");

    if (hamburger && menuBtn && bottomRightdiv) {
        hamburger.addEventListener("click", function (e) {
            e.stopPropagation();

            menuBtn.classList.toggle("open");
            bottomRightdiv.classList.toggle("showing");

            // kui mobiilimenüü pannakse kinni, sulge ka kõik popupid
            if (!bottomRightdiv.classList.contains("showing")) {
                document.querySelectorAll(".popup.show").forEach((popup) => {
                    popup.classList.remove("show");
                });
            }
        });
    }

    submenuToggles.forEach((toggle) => {
        toggle.addEventListener("click", function (e) {
            e.preventDefault();
            e.stopPropagation();

            const li = toggle.closest("li");
            const popup = li ? li.querySelector(".popup") : null;

            if (!popup) return;

            const isOpen = popup.classList.contains("show");

            // sulge teised popupid
            document.querySelectorAll(".popup.show").forEach((p) => {
                if (p !== popup) {
                    p.classList.remove("show");
                }
            });

            // ava või sulge klikitud popup
            popup.classList.toggle("show", !isOpen);
        });
    });

    // klikk väljaspool sulgeb popupid
    document.addEventListener("click", function (e) {
        const clickedPopup = e.target.closest(".popup");
        const clickedToggle = e.target.closest(".submenu-toggle");
        const clickedHamburger = e.target.closest(".hamburger");
        const clickedInsideMenu = e.target.closest(".bottom-rightdiv");

        if (!clickedPopup && !clickedToggle) {
            document.querySelectorAll(".popup.show").forEach((popup) => {
                popup.classList.remove("show");
            });
        }

        // mobiilis klikk menüüst välja sulgeb kogu menüü
        if (
            window.innerWidth <= 755 &&
            bottomRightdiv &&
            bottomRightdiv.classList.contains("showing") &&
            !clickedInsideMenu &&
            !clickedHamburger
        ) {
            bottomRightdiv.classList.remove("showing");
            menuBtn.classList.remove("open");

            document.querySelectorAll(".popup.show").forEach((popup) => {
                popup.classList.remove("show");
            });
        }
    });

    // kui minna desktopi laiuseks tagasi, nulli mobiilimenüü olek
    window.addEventListener("resize", function () {
        if (window.innerWidth > 755 && bottomRightdiv) {
            bottomRightdiv.classList.remove("showing");
            menuBtn.classList.remove("open");

            document.querySelectorAll(".popup.show").forEach((popup) => {
                popup.classList.remove("show");
            });
        }
    });
});