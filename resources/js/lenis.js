import Lenis from 'lenis';



    document.addEventListener("DOMContentLoaded", () => {
        // Initialize Lenis with optimized settings
        const lenis = new Lenis({
            duration: 1,
            easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
            smooth: true,
            direction: 'vertical',
            smoothWheel: true,
            smoothTouch: true,
            touchMultiplier: 2,
        });
    
        // Animation frame for Lenis
        function raf(time) {
            lenis.raf(time);
            requestAnimationFrame(raf);
        }
    
        requestAnimationFrame(raf);
    
        // Smooth scroll for #uperid
            const upscroller = document.querySelector('a[href="#uperid"]');
            if (upscroller) {
            upscroller.addEventListener('click', (e) => {
                e.preventDefault();  // Prevent default anchor behavior
    
                const targetElement = document.getElementById('uperid');
                if (targetElement) {
                    lenis.scrollTo(targetElement, {
                        offset: -180,  // Adjust the offset if needed
                        duration: 1.5,
                        easing: (t) => 1 - Math.pow(1 - t, 3),
                    });
                }
            });
    }
    
    // Smooth scroll for #ettevottestid
        const ettevottestScroller = document.querySelector('a[href="/#ettevottestid"]');
        if (ettevottestScroller) {
            ettevottestScroller.addEventListener('click', (e) => {
                //e.preventDefault();  // Prevent default anchor behavior
    
             
                    const targetElement = document.getElementById("ettevottestid");
                    if (targetElement) {
                        // Smooth scroll to the target section
                        lenis.scrollTo(targetElement, {
                            offset: -70,
                            duration: 1.5,
                            easing: (t) => 1 - Math.pow(1 - t, 3),
                        });
                    }
                    document.querySelector('.bottom-rightdiv').classList.remove('showing');
                
            });
        }
    
        // Handle smooth scrolling if the page is loaded with the hash
        const hash = window.location.hash;
        if (hash === "#ettevottestid") {
            const targetElement = document.getElementById("ettevottestid");
            if (targetElement) {
                lenis.scrollTo(targetElement, {
                    offset: -70,
                    duration: 1.5,
                    easing: (t) => 1 - Math.pow(1 - t, 3),
                });
            }
            document.querySelector('.bottom-rightdiv').classList.remove('showing');
        }

        
        
        // Smooth scroll for #ettevottestid
        const contactScroller = document.querySelector('a[href="/#form"]');
        if (ettevottestScroller) {
            contactScroller.addEventListener('click', (e) => {
                //e.preventDefault();  // Prevent default anchor behavior
    
             
                    const targetElement = document.getElementById("contact");
                    if (targetElement) {
                        // Smooth scroll to the target section
                        lenis.scrollTo(targetElement, {
                            offset: -70,
                            duration: 1.5,
                            easing: (t) => 1 - Math.pow(1 - t, 3),
                        });
                    }
                    document.querySelector('.bottom-rightdiv').classList.remove('showing');
                
            });
        }
    
        // Handle smooth scrolling if the page is loaded with the hash
        const hash2 = window.location.hash;
        if (hash2 === "#form") {
            const targetElement = document.getElementById("contact");
            if (targetElement) {
                lenis.scrollTo(targetElement, {
                    offset: -70,
                    duration: 1.5,
                    easing: (t) => 1 - Math.pow(1 - t, 3),
                });
            }
            document.querySelector('.bottom-rightdiv').classList.remove('showing');
        }


       
        const piltlingidScrollers = document.querySelectorAll('a[href="/#piltlingid"]');
        piltlingidScrollers.forEach((link) => {
            link.addEventListener('click', (e) => {
                //e.preventDefault();  // Uncomment if you don't want URL hash change
        
                const targetElement = document.getElementById("piltlingid");
                if (targetElement) {
                    lenis.scrollTo(targetElement, {
                        offset: -70,
                        duration: 1.5,
                        easing: (t) => 1 - Math.pow(1 - t, 3),
                    });
                }
                document.querySelector('.bottom-rightdiv').classList.remove('showing');
            });
        });
    
        // Handle smooth scrolling if the page is loaded with the hash
        const hash1 = window.location.hash;
        if (hash1 === "#piltlingid") {
            const targetElement = document.getElementById("piltlingid");
            if (targetElement) {
                lenis.scrollTo(targetElement, {
                    offset: -70,
                    duration: 1.5,
                    easing: (t) => 1 - Math.pow(1 - t, 3),
                });
            }
            document.querySelector('.bottom-rightdiv').classList.remove('showing');
        }

        
    });
