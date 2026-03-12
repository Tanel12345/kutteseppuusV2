document.addEventListener("DOMContentLoaded", () => {
    const hamburger = document.querySelector(".hamburger");
    const menuBtn = document.querySelector(".menu-btn");
    const mobileMenu = document.querySelector(".bottom-rightdiv");
    const submenuToggles = document.querySelectorAll(".submenu-toggle");

    if (!hamburger || !menuBtn || !mobileMenu) return;

    function closeAllPopups() {
        document.querySelectorAll(".popup.show").forEach((popup) => {
            popup.classList.remove("show");
        });
    }

    function openMobileMenu() {
        menuBtn.classList.add("open");
        mobileMenu.classList.add("showing");
    }

    function closeMobileMenu() {
        menuBtn.classList.remove("open");
        mobileMenu.classList.remove("showing");
        closeAllPopups();
    }

    function toggleMobileMenu() {
        if (mobileMenu.classList.contains("showing")) {
            closeMobileMenu();
        } else {
            openMobileMenu();
        }
    }

    hamburger.addEventListener("click", (e) => {
        e.preventDefault();
        e.stopPropagation();
        toggleMobileMenu();
    });

    submenuToggles.forEach((toggle) => {
        toggle.addEventListener("click", (e) => {
            e.preventDefault();
            e.stopPropagation();

            const li = toggle.closest("li");
            const popup = li ? li.querySelector(".popup") : null;

            if (!popup) return;

            const isOpen = popup.classList.contains("show");

            closeAllPopups();

            if (!isOpen) {
                popup.classList.add("show");
            }
        });
    });

    document.addEventListener("click", (e) => {
        const clickedInsideMenu = e.target.closest(".bottom-rightdiv");
        const clickedHamburger = e.target.closest(".hamburger");
        const clickedPopup = e.target.closest(".popup");
        const clickedToggle = e.target.closest(".submenu-toggle");

        if (!clickedPopup && !clickedToggle) {
            closeAllPopups();
        }

        if (
            window.innerWidth <= 755 &&
            mobileMenu.classList.contains("showing") &&
            !clickedInsideMenu &&
            !clickedHamburger
        ) {
            closeMobileMenu();
        }
    });
});