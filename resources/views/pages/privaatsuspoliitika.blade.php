<x-layout
    :title="'Privaatsuspoliitika - Küttesepp'"
    :metaDescription="'Privaatsuspoliitika - Küttesepp OÜ'"
    :metaKeywords="'Privaatsuspoliitika, küpsised, GDPR, Küttesepp'"
    :metaAuthor="'Tanel Sepp'"
    :robots="'noindex, nofollow'"
    :viteCssAssets="[
        'resources/css/app.css',
        'resources/css/navbar.css',
        'resources/css/footer.css',
        'resources/css/upscroller.css',
        'resources/css/ettevottest.css',
        'resources/css/cookies.css'
    ]"
    :viteJsAssets="[
        'resources/js/app.js',
        'resources/js/hamburger.js',
        'resources/js/upscroller.js',
        'resources/js/navbar.js',
        'resources/js/lenis.js',
        'resources/js/cookies.js'
    ]"
>

<style>
.close-link {
    display: block;        /* mitte inline-block */
    width: fit-content;    /* võtab lingi laiuse */
    margin: 40px auto 20px auto;  /* keskele */
    padding: 10px 18px;
    font-size: 15px;
    color: #ff0100;
    text-decoration: none;
    font-weight: bold;
    border: 2px solid #ff0100;
    border-radius: 20px;
}

.close-link:hover {
    color: #ff4d4d;
    border-color: #ff4d4d;
}
.kusipakkumist {
    width: 170px;
    height: 170px;
    background-image: radial-gradient(#ff0100, #ff0100, rgb(206, 7, 7));
    padding: 6px 10px;
    margin: 100px auto 30px auto;
    color: white;
    transition-duration: 0.3s;
    box-shadow: 5px 5px 8px rgba(0, 0, 0, 0.3);
    border-radius: 40% 60% 60% 40% / 50% 70% 25% 30%;
}
.kusipakkumist h3 {
    font-weight: 600;
    font-size: 20px;
    line-height: 25px;
    text-align: center;
    color: #ffffff;
    margin: 40px 12px;
    padding: 18px;
    transform: rotate(30deg) translateX(-3px);
}
.kusipakkumist h3:hover {
    background-color: #00000071;
}
.kusipakkumist:hover {
    transform: translateY(-7px);
    box-shadow: 10px 14px 10px rgba(0, 0, 0, 0.3);
    cursor: pointer;
}
/* Privaatsuspoliitika pealkirjad */
.ahjumees h2 {
    font-weight: 600;          /* varasemast kergem */
      /* rohkem õhku all */
    margin-top: 40px;          /* ühtlane rütm */
    line-height: 1.35;
}

/* Kui h2 sees on span (nagu sul on) */
.ahjumees h2 span {
    display: inline-block;
}

/* Teksti lõigud – et <br><br><br> ei tunduks “kokku kukkunud” */
.ahjumees p {
    margin-bottom: 36px;
    line-height: 1.6;
}
</style>

<body>
<main>
<section class="ettevottestsekts">
<div class="ettevõttest">
<div class="ahjumees" style="margin-top:50px;">

<h2><span>Privaatsusinfo<br></span></h2>

<p>
Viimati uuendatud: 16.01.2025<br><br><br>
Meie veebileht <strong>www.kuttesepp.ee</strong> (edaspidi „meie“)
austab teie privaatsust ja on pühendunud isikuandmete kaitsmisele vastavalt
Euroopa Liidu isikuandmete kaitse üldmäärusele (GDPR).
</p>

<h2>Mis on küpsised?</h2>
<p>
Küpsised on väikesed andmefailid, mis salvestatakse teie seadmesse,
kui külastate veebisaiti. Küpsised aitavad tagada veebilehe
korrektse toimimise ja kasutajakogemuse parandamise.
</p>

<h2>Miks me kasutame küpsiseid?</h2>
<p>
Kasutame ainult hädavajalikke ja statistilisi küpsiseid.
Me EI kasuta sihitud reklaame ega turunduslikku jälgimist.
</p>

<h2>Kuidas ma saan küpsiseid kontrollida?</h2>
<p>
Saate oma küpsiste eelistusi hallata küpsiste teavitusbänneri kaudu
või oma veebibrauseri seadetes.
</p>

<h2>Google Analytics</h2>
<p>
Kasutame Google Analyticsit anonüümse statistika kogumiseks
(nt lehtede külastused ja külastuse kestus).
Andmeid kasutatakse ainult veebilehe täiustamiseks.
</p>

<h2>reCAPTCHA küpsised</h2>
<p>
Kasutame Google reCAPTCHA teenust, et kaitsta kontaktvormi
automatiseeritud rämpspäringute eest.
</p>

<h2>Google Mapsi küpsised</h2>
<p>
Google Maps võimaldab kuvada ettevõtte asukohta.
Teenuse kasutamisel võivad rakenduda Google’i küpsised.
</p>

<h2>E-posti saatmine ja isikuandmed</h2>
<p>
Kontaktvormi kaudu edastatud andmeid kasutatakse ainult
päringule vastamiseks.
Neid ei salvestata andmebaasi ega kasutata muudel eesmärkidel.
</p>

<h2>Kuidas me teie andmeid kaitseme</h2>
<p>
Rakendame tehnilisi ja korralduslikke meetmeid,
et kaitsta andmeid loata juurdepääsu eest.
</p>

<h2>Muudatused privaatsusinfos</h2>
<p>
Võime privaatsuspoliitikat ajakohastada.
<br><br>
Kontakt: <strong>tanel@kuttesepp.ee</strong>
</p>



</div>
</div>

<x-up_scroller/>
<x-cookies/>

<a href="javascript:void(0);" onclick="window.close();" class="close-link">
    Sulge leht
</a>

</section>
</main>
</body>
</x-layout>










