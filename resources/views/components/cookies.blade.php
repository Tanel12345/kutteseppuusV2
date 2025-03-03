<div id="cookie-banner" class="cookie-banner">
    <p class="cookie-message">
        Küttesepa lehel ei kasutata isikupärastatud reklaame.<br> Kasutatavate küpsistega analüüsime külastatavust, parandame teie kogemust ja pakume soovitud sisu.<br> Saate valida, milliseid küpsiseid lubate. Klõpsates "Nõustun kõigiga", nõustute küpsiste kasutamisega.
        <a href="{{ route('privaatsuspoliitika') }}" class="cookie-link" target="_blank">Privaatsuspoliitika</a>
    </p>
    <div class="cookie-options">
        <label>
            <input type="checkbox" id="necessary-cookies" disabled checked>
            <span class="cookie-label">Kohustuslikud küpsised (nõutavad)</span>
        </label>
        <label>
            <input type="checkbox" id="analytics-cookies">
            <span class="cookie-label">Analüütika küpsised (lehekülastuse analüüsiks)</span>
        </label>
        <button id="user-cookies-preferences" aria-label="user-cookies-preferences" class="user-cookies-preferences">Salvesta eelistused</button>
    </div>

    
    <div class="cookie-actions">
        <button id="kohanda-cookies" class="cookie-button kohanda">Kohanda <img src="{{ Vite::asset('resources/images/icons/down.png') }}" style="padding-left:5px; width:20px; height:auto; "></button>
        <button id="accept-cookies" aria-label="Reject cookies" class="cookie-button accept">Nõustu kõigiga</button>
    </div>
</div>

<!-- Küpsiste ikoon -->
<div id="cookie-icon" class="cookie-icon" onclick="toggleBanner()" aria-hidden="true">🍪</div>