<div id="cookie-banner" class="cookie-banner">

    <p class="cookie-message">
        Küttesepa lehel ei kasutata isikupärastatud reklaame.<br>
        Lehe turvalisuse tagamiseks ja asukoha kuvamiseks
        võivad vajalikud küpsised alati rakenduda.<br>
        Valikuline on ainult analüütika (Google Analytics), millega mõõdame
        lehe külastatavust ja parandame teenust.
        <a href="{{ route('privaatsuspoliitika') }}" class="cookie-link" target="_blank">
            Privaatsuspoliitika
        </a>
    </p>

    <div class="cookie-options">
        <label>
            <input type="checkbox" id="necessary-cookies" disabled checked>
            <span class="cookie-label">
                Kohustuslikud küpsised (turvalisus, kaart)
            </span>
        </label>

        <label>
            <input type="checkbox" id="analytics-cookies">
            <span class="cookie-label">
                Analüütika küpsised (Google Analytics)
            </span>
        </label>

        <button id="user-cookies-preferences" class="user-cookies-preferences"
            aria-label="Salvesta küpsiste eelistused">
            Salvesta eelistused
        </button>
    </div>

    <div class="cookie-actions">

        <button id="kohanda-cookies" class="submenu-toggle" type="button" aria-label="Kohanda küpsiseid">
    Kohanda
    <svg aria-hidden="true" viewBox="0 0 24 24" width="20" height="20">
        <path d="M6 9l6 6 6-6"
              fill="none"
              stroke="currentColor"
              stroke-width="2.3"
              stroke-linecap="round"
              stroke-linejoin="round" />
    </svg>
</button>

        <button style="background-color: darkblue" id="reject-analytics" class="cookie-button reject"
            aria-label="Ainult vajalikud küpsised">
            Ainult vajalikud
        </button>

        <button id="accept-cookies" class="cookie-button accept" aria-label="Nõustu kõigi küpsistega">
            Nõustu kõigiga
        </button>
    </div>

</div>

<!-- Küpsiste ikoon -->
<div id="cookie-icon" class="cookie-icon" onclick="toggleBanner()" aria-hidden="true">
    🍪
</div>
