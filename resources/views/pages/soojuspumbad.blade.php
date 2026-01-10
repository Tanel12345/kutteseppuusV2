<x-layout :title="'Soojuspumbad – Õhk-õhk, õhk-vesi ja maasoojuspumbad Tallinnas | Küttesepp'" :metaDescription="'Kõik soojuspumba tüübid – õhk-õhk, õhk-vesi ja maasoojuspumbad. Vastavalt sinu kodu vajadustele aitab Küttesepp valida sobivaima lahenduse ja teostab paigalduse.'" :metaKeywords="'soojuspumbad, õhksoojuspump, õhk-vesi soojuspump, maasoojuspump, kütmine, energiasääst, küttesüsteemid'" 
:ogImage="asset('images/serp/kuttesepp-og-soojuspumbad.webp')"
:metaAuthor="'Tanel Sepp'" :robots="'index, follow'" :viteCssAssets="[
    'resources/css/pages/tootelehed.css',]"> <x-static_carousel
        title="SOOJUSPUMBAD <br><br><span>Tõhusaimad lahendused sinu kodu kütmiseks</span>"
        content="Soojuspumpade peamine eesmärk on toota soojust võimalikult madala energiakuluga. Kõik soojuspumba tüübid – õhk-õhk, õhk-vesi ja maasoojuspumbad – kasutavad ära looduslikku soojusenergiat ning kannavad selle sinu elamisse. <br><br>Soojuspumbad erinevad üksteisest selle järgi, millisest keskkonnast nad soojust koguvad ja kuidas nad selle sinu küttevõrku või ruumidesse edasi annavad. Kui soovid säästa küttekuludelt, tõsta kodu energiatõhusust ja suurendada mugavust, on soojuspump üks parimaid valikuid. <br><br>Küttesepp aitab valida sinu hoone jaoks sobivaima lahenduse, koostab vajalikud projektid ning teostab professionaalse paigalduse ja seadistamise. Paigaldusteenust pakume nii enda lähedal <strong>Tallinna ja Harjumaa piirkonnas</strong> kui ka kaugemal üle Eesti."
        image="images/taustad/soojuspumbad-üldtaust.webp" imageAlt="Soojuspumpade üldinfo taust"
        eriStiil="object-position: bottom;" :textholderStyle="''" />
<section class="piltlingid" id="piltlingid">

    <h2 style="font-size:32px;font-weight:400;margin:50px 15px 0 15px;text-align:center;">
        VALI SOBIV SOOJUSPUMBA TÜÜP
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
                Õhk-vesi soojuspump kütab radiaatorid, põrandakütte ja tarbevee.
            </p>

            <ul class="Lisalingid">
                <li>
                    <a href="{{ route('brand.page', 'es') }}?type=ohk-vesi-soojuspumbad">
                        <img src="{{ asset('images/vaikesed/es/Energy Save logo.jpg') }}">
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

    <!-- KONTAKT -->
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