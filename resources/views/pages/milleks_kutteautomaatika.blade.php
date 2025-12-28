<x-layout :title="'Milleks kütteautomaatika – täpne juhtimine, mugavus ja energiasääst | Küttesepp'" :metaDescription="'Kütteautomaatika juhib soojuspumpa, katelt ja küttesüsteemi tööd vastavalt ilmastikule ja hoone vajadusele. Küttesepp paigaldab ja seadistab töökindla kütteautomaatika.'" :metaKeywords="'kütteautomaatika, küttesüsteemi juhtimine, küttekõver, ilmastikukompensatsioon, soojuspumba automaatika, katla automaatika, ruumitermostaat, Küttesepp'" :metaAuthor="'Tanel Sepp'" :robots="'index, follow'" :viteCssAssets="[
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
        'resources/js/lazyLoading.js',
        'resources/js/hamburger.js',
        'resources/js/navbar.js',
        'resources/js/lenis.js',
        'resources/js/upscroller.js',
        'resources/js/cookies.js',
        'resources/js/accordeon.js',
    ]">

    <section class="uper" id="uperid">
        <div class="carousel">
            <div class="taustadiv">
                <div class="textholderdiv">
                    <div class="textholder">
                        <h1>Milleks kütteautomaatika?</h1>
                    </div>
                </div>
                <img class="taust" src="{{ Vite::asset('resources/images/taustad/kutteautomaatika-taust.webp') }}"
                    alt="Kütteautomaatika juhib küttesüsteemi tööd">
            </div>
        </div>
    </section>

    <section class="tootjasektsioon" id="tootjaid">
        <div class="tootjast">
            <div class="ettevotte">
                <div class="content">

                    <h2><span>Kütteautomaatika</span> – küttesüsteemi aju</h2>


                    <p>
                        Kütteautomaatika on kogu vesiküttesüsteemi keskne juhtimissüsteem.
                        See otsustab, <strong>millal, kui palju ja millise temperatuuriga</strong> soojust toodetakse
                        ning kuidas see hoones laiali jaotub.
                    </p>

                    <p>
                        Ilma korrektse automaatikata ei tööta efektiivselt ei
                        <a href="{{ route('soojuspumbad.index') }}">soojuspump</a>,
                        katel ega
                        <a href="{{ route('tahkekutteseadmed.index') }}">tahkekütteseade</a>.
                        Just automaatika seob soojusallika, küttesüsteemi ja hoone käitumise üheks tervikuks.
                    </p>

                    <hr class="red-line">

                    <h3>Mida kütteautomaatika juhib?</h3>

                    <ul class="rohelise-linnukesega" style="font-size:18px; font-weight:500;">
                        <li>Soojuspumba või katla sisse- ja väljalülitamist</li>
                        <li>Küttekõverat vastavalt välisõhu temperatuurile</li>
                        <li>Põranda- ja radiaatorkütte ringe</li>
                        <li>Ringluspumpade tööd ja võimsust</li>
                        <li>Tarbevee soojendamist</li>
                        <li>Lisakütteallikate rakendumist</li>
                    </ul>

                    <div class="pildidiv">
                        <img class="tootjastpilt" src=""
                            data-src="{{ Vite::asset('resources/images/vaikesed/kutteautomaatika/esbe-crb221-wireless-controller.webp') }}"
                            alt="Esbe reguleer segamisventiil">
                    </div>

                    <hr class="red-line">

                    <h3>Ilmastikukompensatsioon – miks see on oluline?</h3>

                    <p>
                        Kaasaegne kütteautomaatika töötab ilmastikukompensatsiooni põhimõttel.
                        See tähendab, et süsteem ei oota ruumide jahtumist,
                        vaid reageerib juba <strong>välisõhu temperatuuri muutusele</strong>.
                    </p>

                    <p>
                        Tulemuseks on stabiilne sisekliima, väiksem energiakulu
                        ja soojusallika väiksem koormus.
                    </p>

                    <div class="pildidiv" style="justify-self:flex-end;">
                        <img class="tootjastpilt" src=""
                            data-src="{{ Vite::asset('resources/images/vaikesed/kutteautomaatika/weathercompensation.webp') }}"
                            alt="Kliima kompensatsioon">
                    </div>

                    <hr class="red-line" style="justify-self:flex-end;">

                    <h3>Kütteautomaatika ja küttesüsteemi eluiga</h3>

                    <p>
                        Vale või seadistamata automaatika põhjustab sagedast
                        sisse-välja lülitamist, kõrgeid temperatuure ja tarbetut koormust.
                        See lühendab kompressori, pumba ja ventiilide eluiga.
                    </p>

                    <p>
                        Küttesepp seadistab automaatika alati vastavalt:
                    </p>

                    <ul class="rohelise-linnukesega" style="font-size:18px; font-weight:500;">
                        <li>hoone soojapidavusele</li>
                        <li>küttesüsteemi tüübile (põrand / radiaator)</li>
                        <li>soojusallikale</li>
                        <li>kasutusharjumustele</li>
                    </ul>
                    <div class="pildidiv">
                        <img class="tootjastpilt" src=""
                            data-src="{{ Vite::asset('resources/images/vaikesed/kutteautomaatika/naine-kutteautomaatikaga.webp') }}"
                            alt="Naine reguleerimas kütteautomaatika juhtseadet">
                    </div>


                    <hr class="red-line" style="margin-top:40px; margin-bottom:40px;">

                   
                    <!-- FAQ -->
                    <div class="faq-container" itemscope itemtype="https://schema.org/FAQPage">

                        <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                            <h3 itemprop="name" class="faq-question">
                                <span class="faq-icon">&#10003;</span> Kas kütteautomaatika on alati vajalik?
                            </h3>
                            <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"
                                class="faq-answer">
                                <p itemprop="text">
                                    Jah. Ilma automaatikata ei ole võimalik saavutada stabiilset temperatuuri,
                                    madalat energiakulu ega süsteemi pikka eluiga.
                                </p>
                            </div>
                        </div>

                        <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                            <h3 itemprop="name" class="faq-question">
                                <span class="faq-icon">&#10003;</span> Kas Küttesepp seadistab ka olemasoleva
                                automaatika?
                            </h3>
                            <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"
                                class="faq-answer">
                                <p itemprop="text">
                                    Jah. Teostame nii uute kui olemasolevate süsteemide
                                    automaatika seadistust ja optimeerimist.
                                </p>
                            </div>
                        </div>

                    </div>
                     <div
                        style="display:flex;
                                flex-wrap:wrap;
                                justify-content:center;
                                gap:3px;
                                margin-top:40px;
                                font-weight:600;
                            ">

                        <div style="width:300px; text-align:center;">
                            <a href="{{ route('soojuspumbad.type', 'ohk-ohk-soojuspumbad') }}">
                                | Õhk-õhk soojuspumbad |
                            </a>
                        </div>

                        <div style="width:300px; text-align:center;">
                            <a href="{{ route('soojuspumbad.type', 'ohk-vesi-soojuspumbad') }}">
                                | Õhk-vesi soojuspumbad |
                            </a>
                        </div>

                        <div style="width:300px; text-align:center;">
                            <a href="{{ route('soojuspumbad.type', 'maasoojuspumbad') }}">
                                | Maaküte |
                            </a>
                        </div>

                        <div style="width:300px; text-align:center;">
                            <a href="{{ route('tahkekutteseadmed.index') }}">
                                | Tahkekütteseadmed |
                            </a>
                        </div>

                    </div>

                    <div class="links" style="margin-top:20px;">
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

    <x-up_scroller />
    <x-cookies />
</x-layout>
