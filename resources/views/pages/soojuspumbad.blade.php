<x-layout :title="'Soojuspumbad Tallinnas ja Harjumaal | Õhk-õhk, õhk-vesi ja maasoojuspumbad | Küttesepp'" :metaDescription="'Soojuspumbad Tallinnas ja Harjumaal. Võrdle õhk-õhk, õhk-vesi ja maasoojuspumpasid ning leia oma kodule sobiv küttelahendus koos asjatundliku nõustamisega.'" :metaKeywords="'soojuspumbad, õhksoojuspump, õhk-vesi soojuspump, maasoojuspump, kütmine, energiasääst, küttesüsteemid'" 
:ogImage="asset('images/serp/kuttesepp-og-soojuspumbad.webp')"
:metaAuthor="'Tanel Sepp'" :robots="'index, follow'" :viteCssAssets="[
    'resources/css/pages/tootelehed.css',]"> <x-static_carousel
       title="SOOJUSPUMBAD <br><br><span>Tõhusaim ja nutikaim valik sinu kodu kütmiseks</span>"
       content="Soojuspump on energiatõhus küttelahendus, mis kasutab ära välisõhus, maapinnas või muus keskkonnas leiduvat soojusenergiat ning suunab selle sinu elamisse. Erinevad soojuspumba tüübid – õhk-õhk, õhk-vesi ja maasoojuspumbad – sobivad erinevatele hoonetele, vajadustele ja eelarvetele. <br><br>Õige valik sõltub muu hulgas hoone suurusest, olemasolevast küttesüsteemist, soojustusest, tarbevee vajadusest ja sellest, kas soovid lisaks küttele ka jahutust. Küttesepp aitab võrrelda eri lahendusi ning leida sinu objektile tehniliselt ja majanduslikult sobivaima variandi. <br><br>Kui otsid soojuspumpa <strong>Tallinnas või Harjumaal</strong>, saad siit alustada erinevate tüüpide võrdlemisest ja sobiva lahenduse valikust."
        image="images/taustad/soojuspumbad-üldtaust.webp" imageAlt="Soojuspumpad Tallinnas ja Harjumaal"
        eriStiil="object-position: bottom;" :textholderStyle="''" />
<section class="piltlingid" id="piltlingid">

    <h2 style="font-size:32px;font-weight:400;margin:50px 15px 0 15px;text-align:center;">
       LEIA ENDALE SOBIV SOOJUSPUMBA TÜÜP
    </h2>

    <hr class="red-line">

   <div class="piltlingidiv">

    <!-- ÕHK-ÕHK SOOJUSPUMBAD -->
    <div class="piltlink">
        <a href="{{ route('soojuspumbad.type', 'ohk-ohk-soojuspumbad') }}">

            <div class="piltlingipilt">
                <img data-src="{{ asset('images/vaikesed/bosch/Bosch.webp') }}"
                     alt="ÕHK-õhk soojuspumbad">
            </div>

            <div class="piltlingitekst">
                <img src="{{ asset('images/icons/küttesepp.png') }}">
                <h2>ÕHK-ÕHK SOOJUSPUMBAD</h2>
            </div>

            <p class="piltlink-kirjeldus">
                Õhk-õhk soojuspump on kiire ja soodne küttelahendus, mis pakub ka tõhusat jahutust.
            </p>

            <ul class="Lisalingid">
                <li>
                    <a href="{{ route('brand.page', 'bosch') }}?type=ohk-ohk-soojuspumbad">
                        <img src="{{ asset('images/vaikesed/bosch/Bosch.png') }}" alt="Bosch">
                        Bosch
                    </a>
                </li>
                <li>
                    <a href="{{ route('brand.page', 'midea') }}?type=ohk-ohk-soojuspumbad">
                        <img src="{{ asset('images/vaikesed/midea/MIDEA.avif') }}" alt="Midea">
                        Midea
                    </a>
                </li>
                <li>
                    <a href="{{ route('brand.page', 'samsung') }}?type=ohk-ohk-soojuspumbad">
                        <img src="{{ asset('images/vaikesed/samsung/samsunglogo.png') }}" alt="Samsung">
                        Samsung
                    </a>
                </li>
            </ul>

        </a>
    </div>

    <!-- ÕHK-VESI SOOJUSPUMBAD -->
    <div class="piltlink">
        <a href="{{ route('soojuspumbad.type', 'ohk-vesi-soojuspumbad') }}">

            <div class="piltlingipilt">
                <img data-src="{{ asset('images/vaikesed/es/Es_soojuspump_vaike.webp') }}"
                     alt="ÕHK-vesi soojuspumbad">
            </div>

            <div class="piltlingitekst">
                <img src="{{ asset('images/icons/küttesepp.png') }}">
                <h2>ÕHK-VESI SOOJUSPUMBAD</h2>
            </div>

            <p class="piltlink-kirjeldus">
                Õhk-vesi soojuspump kütab teie radiaatoreid, põrandaküttet ja tarbevett.
            </p>

            <ul class="Lisalingid">
                <li>
                    <a href="{{ route('brand.page', 'es') }}?type=ohk-vesi-soojuspumbad">
                        <img src="{{ asset('images/vaikesed/es/eslogo.webp') }}">
                        Energy Save
                    </a>
                </li>
                <li>
                    <a href="{{ route('brand.page', 'alpha-innotec') }}?type=ohk-vesi-soojuspumbad">
                        <img src="{{ asset('images/vaikesed/alpha/alpha.png') }}">
                        Alpha-InnoTec
                    </a>
                </li>
                <li>
                    <a href="{{ route('brand.page', 'samsung') }}?type=ohk-vesi-soojuspumbad">
                        <img src="{{ asset('images/vaikesed/samsung/samsunglogo.png') }}">
                        Samsung
                    </a>
                </li>
                <li>
                    <a href="{{ route('brand.page', 'bosch') }}?type=ohk-vesi-soojuspumbad">
                        <img src="{{ asset('images/vaikesed/bosch/Bosch.png') }}">
                        Bosch
                    </a>
                </li>
            </ul>

        </a>
    </div>

    <!-- MAASOOJUSPUMBAD -->
    <div class="piltlink">
        <a href="{{ route('soojuspumbad.type', 'maasoojuspumbad') }}">

            <div class="piltlingipilt">
                <img data-src="{{ asset('images/vaikesed/alpha/alpha2.webp') }}"
                     alt="Maasoojuspumbad">
            </div>

            <div class="piltlingitekst">
                <img src="{{ asset('images/icons/küttesepp.png') }}">
                <h2>MAASOOJUSPUMBAD</h2>
            </div>

            <p class="piltlink-kirjeldus">
                Kõrgeim kasutegur ja stabiilne töö kogu aasta vältel.
            </p>

            <ul class="Lisalingid">
                <li>
                    <a href="{{ route('brand.page', 'alpha-innotec') }}?type=maasoojuspumbad">
                        <img src="{{ asset('images/vaikesed/alpha/alpha.png') }}">
                        Alpha-InnoTec
                    </a>
                </li>
                <li>
                    <a href="{{ route('brand.page', 'bosch') }}?type=maasoojuspumbad">
                        <img src="{{ asset('images/vaikesed/bosch/Bosch.png') }}">
                        Bosch
                    </a>
                </li>
            </ul>

        </a>
    </div>

   

</div>
</section>
    <section style="max-width:1300px;margin:0 auto;padding:20px 15px 70px 15px;">
        <h2 style="font-size:32px;font-weight:400;text-align:center;margin:20px 0 0 0;">
            KUIDAS VALIDA SOBIV SOOJUSPUMP?
        </h2>

        <hr class="red-line">

        <div style="max-width:900px;margin:0 auto;font-size:18px;line-height:1.8;">
            <p>
                Sobiva soojuspumba valik sõltub eelkõige sinu hoone eripärast. Väiksematesse ja hästi jaotatud ruumidega
                elamutesse sobib sageli hästi õhk-õhk soojuspump, mis on soodne ja pakub lisaks küttele ka jahutust.
                Kui eesmärk on kütta veega töötavat põrandakütet, radiaatoreid ja tarbevett, on enamasti sobivam
                õhk-vesi soojuspump. Kui soovid maksimaalselt stabiilset kasutegurit ja oled valmis suuremaks
                alginvesteeringuks, tasub kaaluda maasoojuspumpa.
            </p>
<br>
            <p>
                Õige lahenduse valimisel tuleks arvestada hoone suurust, soojustust, olemasolevat küttesüsteemi,
                tarbevee vajadust, elektriliitumist ja kasutusharjumusi. Samuti mängib rolli, kas soovid ainult
                küttelahendust või ka ruumide jahutust suvisel ajal.
            </p>
<br>
            <p>
                Küttesepp aitab hinnata, milline soojuspumba tüüp on sinu objektile kõige mõistlikum. Kui vajad lisaks
                ka terviklikku teostust, vaata eraldi
                <a style="font-weight:700" href="{{ route('soojuspumpade-paigaldus') }}" title="Soojuspumba paigalduse teenus">
                    soojuspumba paigalduse teenuselehte
                </a>,
                kus on täpsemalt kirjeldatud paigalduse, projekti ja dokumentatsiooni poolega seotud teemad.
            </p>
        </div>
         <!-- KONTAKT -->
<div style="width:100%; display:flex; justify-content:center;">
    <div class="kusipakkumist">
        <a href="{{ route('index') }}#form">
            <p style="margin:35px 5px;">KÜSI LISAINFOT</p>
        </a>
    </div>
</div>
    </section>

<x-up_scroller />
<x-cookies />
</x-layout>