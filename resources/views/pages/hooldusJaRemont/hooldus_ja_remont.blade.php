<x-layout :title="'Küttesüsteemide hooldus ja remont Tallinnas | Küttesepp'" :metaDescription="'Küttesüsteemide hooldus ja remont Tallinnas ja Harjumaal. Küttesepp OÜ teostab süsteemi kontrolli, soojuspumpade hooldust ja remonti, küttesüsteemi läbipesu, küttevee demineraliseerimist ja inhibiitori lisamist.'" :ogImage="asset('images/serp/kuttesepp-og-hooldus.webp')" :metaAuthor="'Tanel Sepp'" :robots="'index, follow'" :viteCssAssets="['resources/css/pages/teenustelehed.css', 'resources/css/soojuspumbaKaardid.css']"
    :viteJsAssets="['resources/js/pages/teenustelehed.js']">

    {{-- HERO --}}
    <section class="uper" id="uperid">
        <div class="carousel">
            <div class="taustadiv">
                <div class="textholderdiv">
                    <div class="textholder">
                        <h1>Küttesüsteemide hooldus ja remont</h1>
                    </div>
                </div>
                <img class="taust" src="{{ asset('images/taustad/kuttesusteemide-hooldus.webp') }}"
                    alt="Küttesüsteemide hooldus ja remont">
            </div>
        </div>
    </section>

    <section class="tootjasektsioon" id="tootjaid">
        <div class="tootjast">
            <div class="ettevotte">
                <div class="content">

                    <h2><span>Hooldus ja remont</span> – millal kutsuda spetsialist?</h2>

                    <p>
                        Küttesüsteem ei anna tavaliselt endast märku enne, kui midagi on juba paigast ära.
                        Toas on jahedam kui peaks, elektrikulu kasvab, süsteemis on müra või töö ei ole enam
                        selline nagu varem. Sageli algab kõik väikestest asjadest – filter on must, rõhk on
                        muutunud, süsteemi on kogunenud õhku või küttevesi ei ole enam puhas.
                    </p>

                    <p>
                        <strong>Küttesepp OÜ</strong> teostab eelkõige
                        <strong>Tallinnas ja Harjumaal</strong> soojuspumpade hooldust ja remonti ning
                        küttesüsteemi tööga seotud hooldus- ja puhastustöid.
                        Samuti teostan vee kvaliteedi hindamist ning torustiku ja süsteemi erinevate osade kontrolli.
                        Enamasti teen töid eramajades ja ridaelamutes.
                    </p>

                    <p>
                        Hooldus ei tähenda alati ainult seadme puhastamist ja selle parameetrite kontrollimist.
                        Sageli tuleb üle vaadata kogu süsteem – filtrid, rõhud, paisupaak, ringluspumbad,
                        automaatika ja küttevesi. Kui on põhjust, kontrollin ka seadme tööd tervikuna,
                        et aru saada, kas probleem on seadmes endas või hoopis mõnes küttesüsteemi teises osas.
                        Olenevalt vajadusest võib töö juurde kuuluda ka
                        <a href="{{ route('kuttesusteemi-labipesu') }}">küttesüsteemi läbipesu</a>,
                        <a href="{{ route('kuttevee-demineraliseerimine') }}">küttevee demineraliseerimine</a>
                        või
                        <a href="{{ route('kuttevee-inhibiitorid') }}">inhibiitori lisamine</a>.
                    </p>

                    <p>
                        Arusaadavatel põhjustel tegelen eelkõige kaubamärkide ja brändidega,
                        millega olen ise kokku puutunud või mida ise müün.
                        Samas on küttesüsteemide tööpõhimõtted suures osas sarnased ning kui varuosad
                        on saadaval või olemasolev lahendus on remonditav, saan aidata ka teiste
                        tootjate seadmete puhul.
                    </p>

                    <div class="pildidiv">
                        <img class="tootjastpilt" src=""
                            data-src="{{ asset('images/vaikesed/kuttesusteemide-hooldus/puhas-kuttesusteem.webp') }}"
                            alt="Küttesüsteemi hooldus ja remont">
                    </div>

                    <hr class="red-line">

                    <h3>Hoolduse ja remondiga seotud teenused</h3>

                    <p>
                        Mõnikord on probleem seadmes endas, teinekord hoopis küttesüsteemi vees,
                        torustikus või ringluses. Allpool saad liikuda otse sobiva teenuse juurde.
                    </p>

                    {{-- ALAMLEHTEDE KAARDID --}}
                    <div class="heatpump-page">
                        <div class="heatpump-container">
                            <div class="heatpump-packages-grid">

                                <article class="heatpump-package">
                                    <div class="heatpump-package__top">
                                        <span class="heatpump-package__number">01</span>
                                        <p class="heatpump-package__method">Regulaarne kontroll</p>
                                        <h3>Soojuspumpade hooldus</h3>
                                    </div>

                                    <div class="heatpump-package__image">
                                        <img data-src="{{ asset('images/vaikesed/kuttesusteemide-hooldus/kuttesusteemi-hoolustood.webp') }}"
                                            alt="Soojuspumpade hooldus">
                                    </div>

                                    <ul class="heatpump-checklist">
                                        <li>Õhk-õhk soojuspumbad</li>
                                        <li>Õhk-vesi soojuspumbad</li>
                                        <li>Maasoojuspumbad</li>
                                        <li>Tööparameetrite kontroll</li>
                                    </ul>

                                    <p class="heatpump-package__description">
                                        Regulaarne kontroll, puhastus ja seadme ning
                                        küttesüsteemi tööparameetrite ülevaatus.
                                    </p>

                                    <a href="{{ route('soojuspumpade-hooldus') }}"
                                        class="heatpump-btn heatpump-btn--secondary">
                                        Vaata soojuspumpade hooldust
                                    </a>
                                </article>

                                <article class="heatpump-package">
                                    <div class="heatpump-package__top">
                                        <span class="heatpump-package__number">02</span>
                                        <p class="heatpump-package__method">Diagnostika ja veaotsing</p>
                                        <h3>Soojuspumpade remont</h3>
                                    </div>

                                    <div class="heatpump-package__image">
                                        <img data-src="{{ asset('images/vaikesed/kuttesusteemide-hooldus/soojuspumba-remont.webp') }}"
                                            alt="Soojuspumpade remont">
                                    </div>

                                    <ul class="heatpump-checklist">
                                        <li>Veaotsing ja defekteerimine</li>
                                        <li>Elektrilised ja mehhaanilised rikked</li>
                                        <li>Andurid ja automaatika</li>
                                        <li>Pumbad, ventilaatorid ja komponendid</li>
                                    </ul>

                                    <p class="heatpump-package__description">
                                        Kui soojuspump annab veateate, ei küta korralikult või töötab
                                        ebastabiilselt, tuleb esmalt leida rikke tegelik põhjus.
                                    </p>

                                    <a href="{{ route('soojuspumpade-remont') }}"
                                        class="heatpump-btn heatpump-btn--secondary">
                                        Vaata soojuspumpade remonti
                                    </a>
                                </article>
                                <article class="heatpump-package">
                                    <div class="heatpump-package__top">
                                        <span class="heatpump-package__number">03</span>
                                        <p class="heatpump-package__method">Külmaringi diagnostika ja remont</p>
                                        <h3>Külmaringi probleemid</h3>
                                    </div>
                                    <div class="heatpump-package__image">
                                        <img data-src="{{ asset('images/vaikesed/kuttesusteemide-hooldus/soojuspumba-aurusti-defekt.webp') }}"
                                            alt="Soojuspumba külmaringi diagnostika ja remont">
                                    </div>
                                    <ul class="heatpump-checklist">
                                        <li>Külmaringi tööparameetrite kontroll</li>
                                        <li>Külmaine lekke otsing</li>
                                        <li>Kompressori ja külmaringi komponentide kontroll</li>
                                        <li>Remont, vaakum ja külmaine täitmine pärast remonti</li>
                                    </ul>
                                    <p class="heatpump-package__description">
                                        Kui rike on seotud külmaringi, kompressori või külmaine lekkega,
                                        teen põhjalikuma diagnostika ja vajadusel külmaringi remondi.
                                    </p>
                                    <a href="{{ route('kulmaringi-diagnostika-ja-remont') }}"
                                        class="heatpump-btn heatpump-btn--secondary">
                                        Vaata külmaringi diagnostikat
                                    </a>
                                </article>

                                <article class="heatpump-package">
                                    <div class="heatpump-package__top">
                                        <span class="heatpump-package__number">03</span>
                                        <p class="heatpump-package__method">Torustik ja ringlus</p>
                                        <h3>Küttesüsteemi läbipesu</h3>
                                    </div>

                                    <div class="heatpump-package__image">
                                        <img data-src="{{ asset('images/vaikesed/kuttesusteemide-hooldus/labipesu-ja-demineraliseerimine-rae-vald.webp') }}"
                                            alt="Küttesüsteemi läbipesu">
                                    </div>

                                    <ul class="heatpump-checklist">
                                        <li>Põrandakütte läbipesu</li>
                                        <li>Radiaatorite läbipesu</li>
                                        <li>Hüdropneumaatiline impulsspesu</li>
                                        <li>Vajadusel keemiline puhastus</li>
                                    </ul>

                                    <p class="heatpump-package__description">
                                        Muda, sette ja muu mustuse eemaldamine ning
                                        küttesüsteemi ringluse taastamine.
                                    </p>

                                    <a href="{{ route('kuttesusteemi-labipesu') }}"
                                        class="heatpump-btn heatpump-btn--secondary">
                                        Vaata küttesüsteemi läbipesu
                                    </a>
                                </article>

                                <article class="heatpump-package">
                                    <div class="heatpump-package__top">
                                        <span class="heatpump-package__number">04</span>
                                        <p class="heatpump-package__method">VDI 2035 küttevesi</p>
                                        <h3>Küttevee demineraliseerimine</h3>
                                    </div>

                                    <div class="heatpump-package__image">
                                        <img data-src="{{ asset('images/vaikesed/kuttesusteemi-vesi/VDI-2035_radiaator.webp') }}"
                                            alt="Küttevee demineraliseerimine">
                                    </div>

                                    <ul class="heatpump-checklist">
                                        <li>Demineraliseeritud küttevesi</li>
                                        <li>Elektrijuhtivuse kontroll</li>
                                        <li>pH kontroll</li>
                                        <li>Järeltäite lahendused</li>
                                    </ul>

                                    <p class="heatpump-package__description">
                                        Küttesüsteemi täitmine madala juhtivusega
                                        töödeldud veega VDI 2035 põhimõtetel.
                                    </p>

                                    <a href="{{ route('kuttevee-demineraliseerimine') }}"
                                        class="heatpump-btn heatpump-btn--secondary">
                                        Vaata küttevee demineraliseerimist
                                    </a>
                                </article>

                                <article class="heatpump-package">
                                    <div class="heatpump-package__top">
                                        <span class="heatpump-package__number">05</span>
                                        <p class="heatpump-package__method">Korrosioonikaitse</p>
                                        <h3>Küttevee inhibiitorid</h3>
                                    </div>

                                    <div class="heatpump-package__image">
                                        <img data-src="{{ asset('images/vaikesed/kuttesusteemi-vesi/inhibiitor.webp') }}"
                                            alt="Küttevee inhibiitorid">
                                    </div>

                                    <ul class="heatpump-checklist">
                                        <li>Korrosiooni vähendamine</li>
                                        <li>Setete tekkeriski vähendamine</li>
                                        <li>Kontsentratsiooni kontroll</li>
                                        <li>Vajadusel koos läbipesuga</li>
                                    </ul>

                                    <p class="heatpump-package__description">
                                        Sobiv küttevee lisaaine aitab vähendada korrosiooni,
                                        sette ja muude süsteemiprobleemide tekkimise riski.
                                    </p>

                                    <a href="{{ route('kuttevee-inhibiitorid') }}"
                                        class="heatpump-btn heatpump-btn--secondary">
                                        Vaata küttevee inhibiitoreid
                                    </a>
                                </article>

                            </div>
                        </div>
                    </div>

                    <hr class="red-line">

                    <h3>Millal tasub kutsuda spetsialist süsteemi hooldama või remontima?</h3>

                    <p>
                        Küttesüsteemi ja soojuspumba hooldusvajadus sõltub konkreetsest
                        seadmest, kasutusest ja tootja juhistest.
                        Kui süsteemi käitumine on muutunud, tasub see kindlasti üle vaadata.
                    </p>

                    <ul class="rohelise-linnukesega" style="font-size:18px; font-weight:500;">
                        <li>Soojuspump ei küta enam piisavalt või töötab tavapärasest pikemalt</li>
                        <li>Elektrikulu on tõusnud ilma selge põhjuseta</li>
                        <li>Süsteemis on müra, õhumulle või ebaühtlast soojajaotust</li>
                        <li>Filtrid, mudapüüdurid või soojusvahetid on mustad või ummistunud</li>
                        <li>Rõhk langeb või kõigub</li>
                        <li>Seade annab veateate või käitub ebastabiilselt</li>
                        <li>Küttesüsteemis on vana või töötlemata täitevesi</li>
                        <li>Hooldust ei ole tehtud pikka aega või selle ajalugu on teadmata</li>
                    </ul>

                    <p>
                        Alati ei ole probleem ainult seadmes endas.
                        Näiteks võib seadme kehv töö olla seotud hoopis määrdunud kütteveega,
                        vale vooluhulgaga, ummistunud mudapüüduriga või tasakaalustamata
                        küttesüsteemiga.
                    </p>

                    <div class="pildidiv" style="justify-self:flex-end;">
                        <img class="tootjastpilt" src=""
                            data-src="{{ asset('images/vaikesed/kuttesusteemide-hooldus/samsung-valisosa.webp') }}"
                            alt="Soojuspumba hooldus ja küttesüsteemi kontroll">
                    </div>

                    <hr class="red-line" style="justify-self:flex-end;">

                    <h3>Mida hoolduse või veaotsingu käigus tavaliselt kontrollitakse?</h3>

                    <p>
                        Iga süsteem on erinev ja töö sisu sõltub konkreetsest
                        seadmest ning probleemist.
                        Tavaliselt vaadatakse üle vähemalt järgmised asjad:
                    </p>

                    <ul class="rohelise-linnukesega" style="font-size:18px; font-weight:500;">
                        <li>Lekete ja ühenduste kontroll</li>
                        <li>Mudapüüniste ja filtrite kontroll ning puhastus</li>
                        <li>Süsteemi rõhkude ja paisupaagi kontroll</li>
                        <li>Peale- ja tagasivoolu temperatuuride hindamine</li>
                        <li>Ringluspumpade töörežiimide kontroll</li>
                        <li>Andurite, automaatika ja elektriühenduste kontroll</li>
                        <li>Seadme tööparameetrite üldine hindamine</li>
                        <li>Küttevee kvaliteedi hindamine ja soovitus edasiseks hoolduseks</li>
                    </ul>

                    <div class="pildidiv">
                        <img class="tootjastpilt" src=""
                            data-src="{{ asset('images/vaikesed/kuttesusteemide-hooldus/Tanel Soojuspumbaga.png') }}"
                            alt="Soojuspumba hooldus ja veaotsing">
                    </div>

                    <hr class="red-line">

                    <h3>Milliseid seadmeid ja süsteeme hooldame?</h3>

                    <p>
                        Olenevalt brändist ja olukorrast pakun hooldust või remonti
                        järgmistele seadmetele ja süsteemidele:
                    </p>

                    <ul class="rohelise-linnukesega" style="font-size:18px; font-weight:500;">
                        <li>Õhk-õhk soojuspumbad</li>
                        <li>Õhk-vesi soojuspumbad</li>
                        <li>Maakütte ehk maa-vesi soojuspumbad</li>
                        <li>Küttesüsteemid radiaatorite ja põrandaküttega</li>
                    </ul>

                    <p>
                        Küttesüsteemide hooldus- ja remonditöid teen peamiselt
                        Tallinnas ja Harjumaal. Objekti ja töö iseloomu järgi
                        saan vajadusel tulla ka kaugemale.
                    </p>

                    {{-- FAQ --}}
                    <div class="faq-container" itemscope itemtype="https://schema.org/FAQPage">

                        <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                            <h3 itemprop="name" class="faq-question">
                                <span class="faq-icon">&#10003;</span>
                                Milliseid seadmeid Küttesepp hooldab ja remondib?
                            </h3>
                            <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"
                                class="faq-answer">
                                <p itemprop="text">
                                    Küttesepp tegeleb eelkõige õhk-õhk,
                                    õhk-vesi ja maasoojuspumpade hoolduse ning
                                    remondiga. Vajadusel kontrollin ka maja
                                    vesiküttesüsteemi, ringlust, filtreid ja
                                    küttevee seisukorda.
                                </p>
                            </div>
                        </div>

                        <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                            <h3 itemprop="name" class="faq-question">
                                <span class="faq-icon">&#10003;</span>
                                Kas iga probleem tähendab kohe remonti?
                            </h3>
                            <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"
                                class="faq-answer">
                                <p itemprop="text">
                                    Mitte alati. Sageli on põhjuseks hooldamata
                                    süsteem, mustus, vale rõhk, õhk süsteemis,
                                    ummistunud filter või kehv küttevesi.
                                    Mõnikord piisab hooldusest või
                                    küttesüsteemi läbipesust ilma suurema remondita.
                                </p>
                            </div>
                        </div>

                        <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                            <h3 itemprop="name" class="faq-question">
                                <span class="faq-icon">&#10003;</span>
                                Kas Küttesepp hooldab ja remondib kõiki brände?
                            </h3>
                            <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"
                                class="faq-answer">
                                <p itemprop="text">
                                    Eelkõige tegelen seadmetega, mida ise müün,
                                    paigaldan või hästi tunnen.
                                    Teiste tootjate seadmete puhul sõltub töö
                                    võimalikkus konkreetsest mudelist,
                                    rikkest ja varuosade saadavusest.
                                </p>
                            </div>
                        </div>

                        <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                            <h3 itemprop="name" class="faq-question">
                                <span class="faq-icon">&#10003;</span>
                                Millal on hoolduse kõrval vaja ka vee töötlust?
                            </h3>
                            <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"
                                class="faq-answer">
                                <p itemprop="text">
                                    Kui küttesüsteemis on palju setteid,
                                    kõrge juhtivusega täitevett, korrosiooni märke
                                    või korduvaid ummistusi, ei pruugi tavalisest
                                    hooldusest piisata. Sellisel juhul võib olla vaja
                                    läbipesu, demineraliseerimist või inhibiitori lisamist.
                                </p>
                            </div>
                        </div>

                    </div>

                    {{-- CTA --}}
                    <div class="links" style="margin-top:40px;">
                        <div class="kusipakkumist">
                            <a href="/#form" title="Emaili vormile">
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
