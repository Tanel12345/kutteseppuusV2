
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
    // ära lae uuesti, kui juba olemas
    if (document.getElementById('google-analytics')) return;

    // lae GA4 gtag.js
    const gtagScript = document.createElement('script');
    gtagScript.id = 'google-analytics';
    gtagScript.async = true;
    gtagScript.src = 'https://www.googletagmanager.com/gtag/js?id=G-QCX3G9KSPC';
    document.head.appendChild(gtagScript);

    gtagScript.onload = function () {
        window.dataLayer = window.dataLayer || [];
        function gtag(){ dataLayer.push(arguments); }

        // märgi, et analytics on lubatud (consent juba saadud)
        gtag('js', new Date());

        gtag('config', 'G-QCX3G9KSPC', {
            anonymize_ip: true,                    // GDPR
            allow_google_signals: false,           // ei mingit reklaami/profiile
            allow_ad_personalization_signals: false
        });
    };
}


    // Initial state
    if (!cookiesAccepted) {
        cookieBanner.style.display = 'block';
        // GDPR mõttes: analüütika peab olema vaikimisi OFF
        analyticsCheckbox.checked = false;
    } else {
        const consent = (analyticsCookies === 'true');
        analyticsCheckbox.checked = consent;
        if (consent) analyticsLoad();
    }

    // "Nõustu kõigiga" = nõustu analüütikaga
    acceptCookiesButton.addEventListener('click', function () {
        localStorage.setItem('cookiesAccepted', 'true');
        localStorage.setItem('analyticsCookies', 'true');
        analyticsCheckbox.checked = true;
        analyticsLoad();
        cookieBanner.style.display = 'none';
    });

    // "Ainult vajalikud" = keeldu analüütikast
    if (rejectAnalyticsButton) {
        rejectAnalyticsButton.addEventListener('click', function () {
            localStorage.setItem('cookiesAccepted', 'true');
            localStorage.setItem('analyticsCookies', 'false');
            analyticsCheckbox.checked = false;

            // Kui script on juba lehel (nt varem lubatud), eemalda script tag
            const analyticsScript = document.getElementById('google-analytics');
            if (analyticsScript) analyticsScript.remove();

            cookieBanner.style.display = 'none';
        });
    }

    // "Salvesta eelistused"
    userCookiesPreferenceButton.addEventListener('click', function () {
        const analyticsConsent = analyticsCheckbox.checked;

        localStorage.setItem('cookiesAccepted', 'true');
        localStorage.setItem('analyticsCookies', analyticsConsent ? 'true' : 'false');

        if (analyticsConsent) {
            analyticsLoad();
        } else {
            const analyticsScript = document.getElementById('google-analytics');
            if (analyticsScript) analyticsScript.remove();
        }

        cookieBanner.style.display = 'none';
    });

    // Kohanda toggle
    kohandaButton.addEventListener('click', function () {
        cookieOptions.classList.toggle('visible');
    });

    // Banner show/hide via cookie icon
    window.toggleBanner = function () {
        cookieBanner.style.display =
            (cookieBanner.style.display === 'none' || cookieBanner.style.display === '') ? 'block' : 'none';
    };
});