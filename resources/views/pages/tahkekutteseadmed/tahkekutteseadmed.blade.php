<x-layout 
    :title="'Tahkekütteseadmed – pelletikatlad, kaminad ja keskküttepliidid | Küttesepp'" 
   :metaDescription="'Tahkekütteseadmed – pelletikatlad, pelletkaminad ning keskküttepliidid ja -kaminad. Küttesepp aitab valida sobiva tahkeküttesüsteemi, teostab paigalduse ja nõustab ohutu ning tõhusa kütmise osas.'"
   :metaKeywords="'tahkekütteseadmed, pelletikatlad, pelletkaminad, keskküttepliidid, keskküttekaminad, kaminaküte, tahkeküte'" 
    :metaAuthor="'Tanel Sepp'"
    :robots="'index, follow'"
    :ogImage="asset('images/serp/kuttesepp-og-tahkekutteseadmed.webp')"
    :viteCssAssets="[
    'resources/css/pages/tootelehed.css',
  ]">

{{-- ✅ ÜLEMINE ÜLDTAUST JA TEKST --}}
<x-static_carousel 
    title="TAHKEKÜTTESEADMED <br><br><span><span>Puiduküte – halupuu või pellet kodu kütmiseks</span>"
    content="Tahkekütteseadmed on ennast ajas tõestatud - küttelahendus, mis võib toimida sõltumatult elektrist ning tagab kodus kindla ja stabiilse soojuse ka keerulistes oludes.

    <br><br>Küttesepa pakutavad tahkeküttel töötavad seadmed – pelletikatlad, kaminad ja keskküttepliidid – sobivad hästi nii põhi- kui ka varukütteks. Need on eriti hinnatud just maapiirkondades ja kohtades, kus soovitakse osalist või täielikku energiasõltumatust.

    <br><br>Küttesepp aitab planeerida sinu kodu jaoks sobivaima tahkeküttesüsteemi, pakub nii seadme, eriosad, teostab paigalduse ja süsteemi välja ehitamise, teostab hooldust ning nõustab ka küttesüsteemi ohutu ja tõhusa kasutamise osas."
    image="images/taustad/keskkutteseadmed.webp"
    imageAlt="Tahkekütteseadmed – pelletikatlad ja keskküttepliidid"
    :textholderStyle="''"
/>

{{-- ✅ ALAKATEGOORIATE VALIK --}}
<section class="piltlingid" id="piltlingid">
   <div style="margin-top:50px" class="piltlingidiv">

    {{-- 🔥 PELLETIKATLAD JA -KAMINAD --}}
    <div class="piltlink">
        <a href="{{ route('pelletikatladJaKaminad.index') }}" title="Pelletikatlad ja -kaminad">
            
            <div class="piltlingipilt">
                <img 
                    src="" 
                    data-src="{{ asset('images/vaikesed/extraflame/extraflame.webp') }}" 
                    alt="Extraflame pelletkamin Küttesepalt" 
                    title="Pelletikamin"
                />
            </div>

            <div class="piltlingitekst">
                <img 
                    src="{{ asset('images/icons/küttesepp.png') }}" 
                    alt="Küttesepp"
                />
                <h2>Pelletikatlad ja -kaminad</h2>
            </div>

            <p class="piltlink-kirjeldus"
               style="font-size:16px; line-height:1.55; font-weight:300; margin:10px 0 20px 0;">
                Pelletiküte on automaatne, mugav ja energiatõhus. Sobib hästi nii uutesse kui ka
                renoveeritavatesse hoonetesse.<br>
                Pelletikatlad ja -kaminad pakuvad stabiilset lokaalset tahkel kütusel soojust väikese
                kasutajapoolse sekkumisega.
            </p>

        </a>
    </div>

    {{-- 🔥 KESKKÜTTEPLIIDID JA -KAMINAD --}}
    <div class="piltlink">
        <a href="{{ route('keskkuttepliididJaKaminad.index') }}" title="Keskküttepliidid ja -kaminad">
            
            <div class="piltlingipilt">
                <img 
                    src="" 
                    data-src="{{ asset('images/vaikesed/keskkuttepliidid/Alfa-Plam-keskkuttepliit.webp') }}" 
                    alt="Keskküttepliit Küttesepalt" 
                    title="Keskküttepliit"
                />
            </div>

            <div class="piltlingitekst">
                <img 
                    src="{{ asset('images/icons/küttesepp.png') }}" 
                    alt="Küttesepp"
                />
                <h2>Keskküttepliidid ja -kaminad</h2>
            </div>

            <p class="piltlink-kirjeldus"
               style="font-size:16px; line-height:1.55; font-weight:300; margin:10px 0 20px 0;">
                Keskküttega pliidid ja -kaminad ühendavad halupuu kütte ja võimaluse selle sooja juhtida
                üle kogu maja turvaliselt ja müratult.
            </p>

        </a>
    </div>

    {{-- 📩 KONTAKT --}}
    <div class="kusipakkumist">
        <a href="/#form" title="Võta Küttesepaga ühendust">
            <p style="margin:35px 5px;">KÜSI LISAINFOT</p>
        </a>
    </div>

</div>
</section>

<x-up_scroller />
<x-cookies />
</x-layout>