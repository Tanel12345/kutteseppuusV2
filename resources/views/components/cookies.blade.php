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

        <button
            id="user-cookies-preferences"
            class="user-cookies-preferences"
            aria-label="Salvesta küpsiste eelistused">
            Salvesta eelistused
        </button>
    </div>

    <div class="cookie-actions">
        <button
            id="kohanda-cookies"
            class="cookie-button kohanda"
            aria-label="Kohanda küpsiseid">
            Kohanda
            <img
                src="{{ asset('images/icons/down.png') }}"
                alt=""
                style="padding-left:5px;width:20px;height:auto;">
        </button>

        <button style="background-color: darkblue"
            id="reject-analytics"
            class="cookie-button reject"
            aria-label="Ainult vajalikud küpsised">
            Ainult vajalikud
        </button>

        <button 
            id="accept-cookies"
            class="cookie-button accept"
            aria-label="Nõustu kõigi küpsistega">
            Nõustu kõigiga
        </button>
    </div>

</div>

<!-- Küpsiste ikoon -->
<div
    id="cookie-icon"
    class="cookie-icon"
    onclick="toggleBanner()"
    aria-hidden="true">
    🍪
</div>