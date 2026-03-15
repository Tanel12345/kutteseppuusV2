document.addEventListener("DOMContentLoaded", function () {
    const hamburger = document.querySelector(".hamburger");
    const menuBtn = document.querySelector(".menu-btn");
    const bottomRightdiv = document.querySelector(".bottom-rightdiv");
    const toggles = document.querySelectorAll(".submenu-toggle");
    const submenuItems = document.querySelectorAll(".has-submenu");

    if (!hamburger || !menuBtn || !bottomRightdiv) return;

    const menuLinks = bottomRightdiv.querySelectorAll("a");

    function isMobileMenu() {
        return window.innerWidth <= 755;
    }

    function closeAllSubmenus() {
        submenuItems.forEach((item) => {
            item.classList.remove("open");
        });
    }

    function closeMobileMenu() {
        bottomRightdiv.classList.remove("showing");
        menuBtn.classList.remove("open");
        document.body.classList.remove("menu-open");
        closeAllSubmenus();
    }

    hamburger.addEventListener("click", function (e) {
        e.stopPropagation();

        menuBtn.classList.toggle("open");
        bottomRightdiv.classList.toggle("showing");
        document.body.classList.toggle("menu-open");

        if (!bottomRightdiv.classList.contains("showing")) {
            closeAllSubmenus();
        }
    });

    toggles.forEach((toggle) => {
        toggle.addEventListener("click", (e) => {
            e.preventDefault();
            e.stopPropagation();

            const parentItem = toggle.closest(".has-submenu");
            if (!parentItem) return;

            const isOpen = parentItem.classList.contains("open");

            closeAllSubmenus();

            if (!isOpen) {
                parentItem.classList.add("open");
            }
        });
    });

    menuLinks.forEach((link) => {
        link.addEventListener("click", () => {
            if (isMobileMenu()) {
                closeMobileMenu();
            }
        });
    });

    bottomRightdiv.addEventListener("click", (e) => {
        e.stopPropagation();
    });

    document.addEventListener("click", () => {
        if (isMobileMenu()) {
            closeMobileMenu();
        }
    });

    window.addEventListener("resize", () => {
        if (!isMobileMenu()) {
            closeMobileMenu();
        }
    });
});