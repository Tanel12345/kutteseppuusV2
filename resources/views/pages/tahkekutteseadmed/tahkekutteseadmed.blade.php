<x-layout 
    :title="'Tahkekütteseadmed – pelletikatlad, kaminad ja keskküttepliidid | Küttesepp'" 
    :metaDescription="'Tahkekütteseadmed – pelletikatlad ja -kaminad ning keskküttepliidid ja -kaminad. Küttesepp aitab valida sobiva lahenduse ja teostab professionaalse paigalduse.'" 
    :metaKeywords="'tahkekytteseadmed, pelletikatlad, pelletkaminad, keskküttepliidid, keskküttekaminad, kaminaküte, tahkeküte'" 
    :metaAuthor="'Tanel Sepp'"
    :robots="'index, follow'"
    :viteCssAssets="[
        'resources/css/app.css',
        'resources/css/navbar.css',
        'resources/css/footer.css',
        'resources/css/staticCarousel.css',
        'resources/css/tootesektsioon.css',
        'resources/css/upscroller.css',
        'resources/css/soojuspumbad-piltlingid.css',
        'resources/css/cookies.css'
    ]"
    :viteJsAssets="[
        'resources/js/app.js',
        'resources/js/hamburger.js',
        'resources/js/navbar.js',
        'resources/js/lenis.js',
        'resources/js/upscroller.js',
        'resources/js/cookies.js',
        'resources/js/lazyLoading.js'
    ]"
>

{{-- ✅ ÜLEMINE ÜLDTAUST JA TEKST --}}
<x-static-carousel 
    title="TAHKEKÜTTESEADMED <br><br><span>Puiduküte - halupuu või pellet </span>"
    content="Tahkekütteseadmed on ennast ajas tõestatud - küttelahendus, mis võib toimida sõltumatult elektrist ning tagab kodus kindla ja stabiilse soojuse ka keerulistes oludes.

    <br><br>Küttesepa pakutavad tahkeküttel töötavad seadmed – pelletikatlad, kaminad ja keskküttepliidid – sobivad hästi nii põhi- kui ka varukütteks. Need on eriti hinnatud just maapiirkondades ja kohtades, kus soovitakse osalist või täielikku energiasõltumatust.

    <br><br>Küttesepp aitab planeerida sinu kodu jaoks sobivaima tahkeküttesüsteemi, pakub nii seadme, eriosad, teostab paigalduse ja süsteemi välja ehitamise, teostab hooldust ning nõustab ka küttesüsteemi ohutu ja tõhusa kasutamise osas."
    image="resources/images/taustad/keskkutteseadmed.webp"
    imageAlt="Tahkekütteseadmed – pelletikatlad ja keskküttepliidid"
    :textholderStyle="''"
/>

{{-- ✅ ALAKATEGOORIATE VALIK --}}
<section class="piltlingid" id="piltlingid">
    <h2 style="font-size: 32px; font-weight: 400; margin: 154px 0 0 0; text-align: center;">
        VALI SOBIV TAHKEKÜTTESEADME KATEGOORIA
    </h2>
    <hr class="red-line" >

    <div class="piltlingidiv">

        {{-- 🔥 PELLETIKATLAD JA -KAMINAD --}}
        <div class="piltlink">
            <a href="{{ route('pelletikatladJaKaminad.index') }}" title="Pelletikatlad ja -kaminad">
                <div class="piltlingipilt">
                <img src="" data-src="{{ Vite::asset('resources/images/vaikesed/extraflame/extraflame.webp') }}" alt="Extraflame kamin" title="Pelletikamin" />
                </div>

                <div class="piltlingitekst">
                    <img src="{{ Vite::asset('resources/images/icons/küttesepp.png') }}" alt="Küttesepp" />
                    <h2>
                        <a href="{{ route('pelletikatladJaKaminad.index') }}">
                            Pelletikatlad ja -kaminad
                        </a>
                    </h2>
                </div>

                <p class="piltlink-kirjeldus"
                   style="font-size:16px; line-height:1.55; font-weight:300; margin:10px 0 20px 0;">
                    Pelletiküte on automaatne, mugav ja energiatõhus. Sobib hästi nii uutesse kui ka
                    renoveeritavatesse hoonetesse.<br> Pelletikatlad ja -kaminad pakuvad stabiilset lokaalset tahkel küttel soojust väikese
                    kasutajapoolse sekkumisega.
                </p>
            </a>
        </div>

        {{-- 🔥 KESKKÜTTEPLIIDID JA -KAMINAD --}}
        <div class="piltlink">
            <a href="{{ route('keskkuttepliididJaKaminad.index') }}" title="Keskküttepliidid ja -kaminad">
                 <div class="piltlingipilt">
                <img src="" data-src="{{ Vite::asset('resources/images/vaikesed/keskkuttepliidid/Alfa-Plam-keskkuttepliit.webp') }}" alt="keskküttepliit Küttesepalt" title="keskküttepliit" />
                </div>

                <div class="piltlingitekst">
                    <img src="{{ Vite::asset('resources/images/icons/küttesepp.png') }}" alt="Küttesepp" />
                    <h2>
                        <a href="{{ route('keskkuttepliididJaKaminad.index') }}">
                            Keskküttepliidid ja -kaminad
                        </a>
                    </h2>
                </div>

                <p class="piltlink-kirjeldus"
                   style="font-size:16px; line-height:1.55; font-weight:300; margin:10px 0 20px 0;">
                    Keskküttega pliidid ja -kaminad ühendavad halupuu kütte ja võimaluse selle sooja juhtida üle teie maja turvaliselt ja müratult.
                </p>
            </a>
        </div>

        {{-- 📩 KONTAKT --}}
        <div class="kusipakkumist">
            <a href="/#form" title="Kontakt">
                <p style="margin:35px 5px;">KÜSI LISAINFOT</p>
            </a>
        </div>

    </div>
</section>

<x-up-scroller />
<x-cookies />
</x-layout>