
//Küpsistebanneri js kood
document.addEventListener('DOMContentLoaded', function () {
    const cookieBanner = document.getElementById('cookie-banner');
    const cookieOptions = document.querySelector('.cookie-options');
    const acceptCookiesButton = document.getElementById('accept-cookies');
    const kohandaButton = document.getElementById('kohanda-cookies');

    const cookiesAccepted = localStorage.getItem('cookiesAccepted');
    const analyticsCookies = localStorage.getItem('analyticsCookies');
   

    const analyticsCheckbox = document.getElementById('analytics-cookies');

    const userCookiesPreferenceButton = document.getElementById('user-cookies-preferences');
    

    

    // Function to load Google Analytics
    function analyticsLoad() {
        if (!document.getElementById('google-analytics')) {
            // Create a single script for both loading and configuration
            const gtagCombinedScript = document.createElement('script');
            gtagCombinedScript.id = 'google-analytics';
            gtagCombinedScript.async = true;
            gtagCombinedScript.src = "https://www.googletagmanager.com/gtag/js?id=UA-160195597-1";
            gtagCombinedScript.onload = function () {
                window.dataLayer = window.dataLayer || [];
                function gtag() { dataLayer.push(arguments); }
                gtag('js', new Date());
                gtag('config', 'UA-160195597-1');
            };

            // Prepend the combined script to the head
            document.head.prepend(gtagCombinedScript);
        }
    }


    if (!cookiesAccepted) {
        // If cookies are not accepted yet, show the banner and set checkboxes to default (checked)
        cookieBanner.style.display = 'block';
        
        
    } else {
        // If cookies are already accepted, set checkboxes based on localStorage values
        if (analyticsCookies === 'true') {
            analyticsCheckbox.checked = true;
            analyticsLoad(); // Automatically load analytics if cookies are accepted
        } else {
            analyticsCheckbox.checked = false;
        }
    }
    
    
    // Accept cookies handler
    acceptCookiesButton.addEventListener('click', function () {
      
        localStorage.setItem('cookiesAccepted', true);
        localStorage.setItem('analyticsCookies', true);
        analyticsCheckbox.checked = true;
        analyticsLoad(); // Load analytics scripts
        cookieBanner.style.display = 'none'; // Hide the banner
       
    });

    // Salvesta eelistused button

    userCookiesPreferenceButton.addEventListener('click', function () {

        const analyticsConsent = analyticsCheckbox.checked;
        localStorage.setItem('cookiesAccepted', true);
        localStorage.setItem('analyticsCookies', analyticsConsent);
        if (analyticsConsent) {
            // Load Google Analytics script if consent is given
            analyticsLoad();
        } else {
            // Remove Google Analytics script if consent is not given
            const analyticsScript = document.getElementById('google-analytics');
            if (analyticsScript) {
                analyticsScript.remove();  // Removes the Google Analytics script from the page
            }
        }
        cookieBanner.style.display = 'none'; // Hide the banner
    });



    
    kohandaButton.addEventListener('click', function () {
        cookieOptions.classList.toggle('visible'); // Toggle the 'visible' class
    });

    // Function to toggle cookie banner visibility
    window.toggleBanner = function () {
        // Show or hide the banner based on its current state
        cookieBanner.style.display = (cookieBanner.style.display === 'none' || cookieBanner.style.display === '') ? 'block' : 'none';
    };

  
});