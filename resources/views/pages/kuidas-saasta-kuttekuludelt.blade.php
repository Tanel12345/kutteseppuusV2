<x-layout 
    :title="'Kuidas säästa küttekuludelt – nutikas juhtimine ja õiged seadistused | Küttesepp'"
    :metaDescription="'Uuri, kuidas vähendada küttekulusid soojuspumba, kütteautomaatika ja õigete seadistuste abil. Küttesepp aitab optimeerida küttesüsteemi ja hoida raha kokku.'"
    :metaKeywords="'küttekulude säästmine, kuidas säästa küttekuludelt, kütteautomaatika, soojuspumba seadistamine, küttekõver, energiasääst, Küttesepp'"
    :metaAuthor="'Tanel Sepp'"
    :robots="'index, follow'"
    :viteCssAssets="[
        'resources/css/app.css',
        'resources/css/navbar.css',
        'resources/css/footer.css',
        'resources/css/staticCarouselkuttesepp.css',
        'resources/css/tootjasektsioon2.css',
        'resources/css/upscroller.css',
        'resources/css/cookies.css',
    ]"
    :viteJsAssets="[
        'resources/js/app.js',
        'resources/js/navbar.js',
        'resources/js/lenis.js',
        'resources/js/upscroller.js',
        'resources/js/hamburger.js',
        'resources/js/cookies.js',
        'resources/js/accordeon.js',
        'resources/js/lazyLoading.js',
    ]"
>

{{-- HERO --}}
<section class="uper" id="uperid">
    <div class="carousel">
        <div class="taustadiv">
            <div class="textholderdiv">
                <div class="textholder">
                    <h1>Kuidas säästa küttekuludelt?</h1>
                </div>
            </div>
            <img class="taust"
                 src="{{ Vite::asset('resources/images/taustad/kuidas-saasta-taust.webp') }}"
                 alt="Küttekulude raha säästmine ">
        </div>
    </div>
</section>

<section class="tootjasektsioon">
    <div class="tootjast">
        <div class="ettevotte">
            <div class="content">

                <h2><span>Küttekulude säästmine</span> algab õigetest otsustest</h2>

                <p>
                    Küttekulud moodustavad Eesti kodudes suure osa igakuistest püsikuludest.
                    Õigesti valitud ja seadistatud küttesüsteem võimaldab
                    <strong>vähendada energiakulu 15–40%</strong> ilma elamismugavust ohverdamata.
                </p>

                <p>
                    Küttesepp aitab leida küttelahendused, mis sobivad just sinu hoonele –
                    olgu selleks <a href="{{ route('soojuspumbad.index') }}">soojuspump</a>,
                    <a href="{{ route('tahkekutteseadmed.index') }}">katel</a>
                    või olemasoleva süsteemi optimeerimine.
                </p>

                <hr class="red-line">

                <h3>Miks on küttekulud sageli liiga suured?</h3>

                <ul class="rohelise-linnukesega" style="font-size:18px;">
                    <li>küttesüsteem töötab liiga kõrgete temperatuuridega</li>
                    <li>küttekõver ei ole hoonele sobiv</li>
                    <li>kütteautomaatika puudub või on valesti seadistatud</li>
                    <li>soojuspump või katel töötab sagedase sisse-välja tsükliga</li>
                    <li>ruumide temperatuur on kõrgem kui tegelikult vajalik</li>
                </ul>
                <div class="pildidiv">
                        <img class="tootjastpilt" src=""
                            data-src="{{ Vite::asset('resources/images/vaikesed/kuidas-saasta-kuttekuludelt/hoiuporsas.webp') }}"
                            alt="kuidas säästa raha">
                    </div>


                <hr class="red-line">

                <h3>Kütteautomaatika – suurim kokkuhoiu allikas</h3>

                <p>
                    Kütteautomaatika juhib küttesüsteemi vastavalt välisõhu temperatuurile,
                    hoone soojapidavusele ja kasutusharjumustele.
                    See võimaldab toota soojust täpselt nii palju, kui vaja – mitte rohkem.
                </p>

                <ul class="rohelise-linnukesega" style="font-size:18px;">
                    <li>alandab pealevoolu temperatuuri</li>
                    <li>pikendab soojuspumba ja katla eluiga</li>
                    <li>vähendab elektri- ja kütusekulu</li>
                    <li>tagab ühtlase sisekliima</li>
                </ul>

                <div class="pildidiv" style="justify-self:flex-end;">
                        <img class="tootjastpilt"  src=""
                            data-src="{{ Vite::asset('resources/images/vaikesed/kutteautomaatika/naine-kutteautomaatikaga.webp') }}"
                            alt="Kütteautomaatikaga naine">
                    </div>

                 <hr class="red-line" style="justify-self:flex-end;">


                <h3>Ilmastikukompensatsioon – sääst enne, kui ruum jahtub</h3>

                <p>
                    Ilmastikukompensatsiooniga süsteem reageerib juba
                    <strong>välisõhu temperatuuri muutusele</strong>,
                    mitte alles siis, kui ruumides hakkab jahe.
                </p>

                <p>
                    See hoiab soojusallika töö stabiilsena ja vähendab
                    energiatarbimist kogu kütteperioodi vältel.
                </p>
                <div class="pildidiv" >
                        <img class="tootjastpilt"  src=""
                            data-src="{{ Vite::asset('resources/images/vaikesed/kutteautomaatika/weathercompensation.webp') }}"
                            alt="Ilmastikukompensatsioon">
                    </div>

                <hr class="red-line">

                <h3>Praktilised sammud küttekulude vähendamiseks</h3>

                <ul class="rohelise-linnukesega" style="font-size:18px;">
                    <li>langeta ruumitemperatuuri 1–2 °C</li>
                    <li>kontrolli ja seadista küttekõver</li>
                    <li>väldi tarbetult kõrgeid tarbevee temperatuure</li>
                    <li>lisa või uuenda kütteautomaatikat</li>
                    <li>kasuta professionaalset seadistust</li>
                </ul>

                {{-- FAQ --}}
                <div class="faq-container" itemscope itemtype="https://schema.org/FAQPage">

                    <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <h3 itemprop="name" class="faq-question">
                            <span class="faq-icon">&#10003;</span>
                            Kui palju on võimalik küttekuludelt säästa?
                        </h3>
                        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" class="faq-answer">
                            <p itemprop="text">
                                Sõltuvalt hoonest ja süsteemist on võimalik säästa 15–40%,
                                eriti kui automaatika ja küttekõver on õigesti seadistatud.
                            </p>
                        </div>
                    </div>

                    <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <h3 itemprop="name" class="faq-question">
                            <span class="faq-icon">&#10003;</span>
                            Kas Küttesepp aitab olemasolevat süsteemi optimeerida?
                        </h3>
                        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" class="faq-answer">
                            <p itemprop="text">
                                Jah. Teostame küttesüsteemide seadistamist, eelkõige küll seadmetele ja süsteemidele mida oleme ise paigaldanud või mida tunneme, pakume.
                            </p>
                        </div>
                    </div>

                </div>

                <div class="links" style="margin-top:30px;">
                    <div class="kusipakkumist">
                        <a href="/#form">
                            <p>KÜSI LISAINFOT</p>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<x-up-scroller />
<x-cookies />

</x-layout>