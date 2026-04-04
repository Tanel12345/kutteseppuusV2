document.addEventListener('DOMContentLoaded', function () {
    const cookieBanner = document.getElementById('cookie-banner');
    const cookieOptions = document.querySelector('.cookie-options');
    const acceptCookiesButton = document.getElementById('accept-cookies');
    const kohandaButton = document.getElementById('kohanda-cookies');
    const rejectAnalyticsButton = document.getElementById('reject-analytics');
    const analyticsCheckbox = document.getElementById('analytics-cookies');
    const userCookiesPreferenceButton = document.getElementById('user-cookies-preferences');

    const cookiesAccepted = localStorage.getItem('cookiesAccepted');
    const analyticsCookies = localStorage.getItem('analyticsCookies');

    function analyticsLoad() {
        if (document.getElementById('google-analytics')) return;

        const gtagScript = document.createElement('script');
        gtagScript.id = 'google-analytics';
        gtagScript.async = true;
        gtagScript.src = 'https://www.googletagmanager.com/gtag/js?id=G-W55JKH7E9W';
        document.head.appendChild(gtagScript);

        gtagScript.onload = function () {
            window.dataLayer = window.dataLayer || [];
            window.gtag = function () { window.dataLayer.push(arguments); };

            window.gtag('js', new Date());
            window.gtag('config', 'G-W55JKH7E9W', {
                anonymize_ip: true,
                allow_google_signals: false,
                allow_ad_personalization_signals: false
            });
        };
    }

    function analyticsDisable() {
        const analyticsScript = document.getElementById('google-analytics');
        if (analyticsScript) analyticsScript.remove();

        window['ga-disable-G-W55JKH7E9W'] = true;
    }

    if (cookieBanner && analyticsCheckbox) {
        if (!cookiesAccepted) {
            cookieBanner.style.display = 'block';
            analyticsCheckbox.checked = false;
        } else {
            const consent = analyticsCookies === 'true';
            analyticsCheckbox.checked = consent;
            if (consent) analyticsLoad();
        }
    }

    if (acceptCookiesButton && cookieBanner && analyticsCheckbox) {
        acceptCookiesButton.addEventListener('click', function () {
            localStorage.setItem('cookiesAccepted', 'true');
            localStorage.setItem('analyticsCookies', 'true');
            analyticsCheckbox.checked = true;
            analyticsLoad();
            cookieBanner.style.display = 'none';
        });
    }

    if (rejectAnalyticsButton && cookieBanner && analyticsCheckbox) {
        rejectAnalyticsButton.addEventListener('click', function () {
            localStorage.setItem('cookiesAccepted', 'true');
            localStorage.setItem('analyticsCookies', 'false');
            analyticsCheckbox.checked = false;
            analyticsDisable();
            cookieBanner.style.display = 'none';
        });
    }

    if (userCookiesPreferenceButton && cookieBanner && analyticsCheckbox) {
        userCookiesPreferenceButton.addEventListener('click', function () {
            const analyticsConsent = analyticsCheckbox.checked;

            localStorage.setItem('cookiesAccepted', 'true');
            localStorage.setItem('analyticsCookies', analyticsConsent ? 'true' : 'false');

            if (analyticsConsent) {
                window['ga-disable-G-W55JKH7E9W'] = false;
                analyticsLoad();
            } else {
                analyticsDisable();
            }

            cookieBanner.style.display = 'none';
        });
    }

    if (kohandaButton && cookieOptions) {
        kohandaButton.addEventListener('click', function () {
            cookieOptions.classList.toggle('visible');
        });
    }

    window.toggleBanner = function () {
        if (!cookieBanner) return;

        cookieBanner.style.display =
            (cookieBanner.style.display === 'none' || cookieBanner.style.display === '') ? 'block' : 'none';
    };
});