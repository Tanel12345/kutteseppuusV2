<x-layout :title="'Küttesüsteemide hooldus ja remont Tallinnas | Küttesepp'"
    :metaDescription="'Küttesüsteemide hooldus ja remont Tallinnas ja Harjumaal. Küttesepp OÜ teostab süsteemi kontrolli, soojuspumpade hooldust ja remonti, küttesüsteemi läbipesu, küttevee demineraliseerimist ja inhibiitori lisamist.'"
    :metaKeywords="'küttesüsteemide hooldus,
küttesüsteemi remont,
hooldus ja remont,
soojuspumpade hooldus,
soojuspumpade remont,
küttesüsteemi läbipesu,
küttevee demineraliseerimine,
küttevee inhibiitorid,
õhk-vesi soojuspumba hooldus,
maakütte hooldus'"
    :ogImage="asset('images/serp/kuttesepp-og-hooldus.webp')"
    :metaAuthor="'Tanel Sepp'"
    :robots="'index, follow'"
    :viteCssAssets="['resources/css/pages/teenustelehed.css']"
    :viteJsAssets="['resources/js/pages/teenustelehed.js']">

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
                        Toas on jahedam kui peaks, elektrikulu kasvab, süsteemis on müra või töö ei ole enam selline nagu varem.
                        Sageli algab kõik väikestest asjadest – filter on must, rõhk on muutunud,
                        süsteemi on kogunenud õhku või küttevesi ei ole enam puhas.
                    </p>

                    <p>
                        <strong>Küttesepp OÜ</strong> teostab eelkõige <strong>Tallinnas ja Harjumaal</strong>
                        küttesüsteemide hooldust ja remonti. Selle alla kuuluvad nii
                        soojuspumbad, osad tahkekütteseadmed kui ka soojusjaotus süsteemi üldine kontroll. Samuti teostan vee kvaliteedi hindamist ning torustiku ja eriosade ülevaatus.
                        Enamasti teen töid eramajades ja ridaelamutes.
                    </p>

                    <p>
                        Hooldus ei tähenda alati ainult seadme puhastamist ja selle parameetrite kontrollimist.
                        Sageli tuleb üle vaadata kogu süsteem – filtrid, rõhud, paisupaak, ringluspumbad,
                        automaatika ja küttevesi. Kui on põhjust, siis kontrollin ka seadme tööd tervikuna,
                        et aru saada, kas probleem on seadmes endas või hoopis mõnes küttesüsteemi teises osas.
                        Olenevalt vajadusest võib töö juurde kuuluda ka
                        <a href="{{ route('kuttesusteemi-labipesu') }}">küttesüsteemi läbipesu</a>,
                        <a href="{{ route('kuttevee-demineraliseerimine') }}">küttevee demineraliseerimine</a>
                        või
                        <a href="{{ route('kuttevee-inhibiitorid') }}">inhibiitori lisamine</a>.
                    </p>

                    <p>
                        Arusaadavatel põhjustel tegelen eelkõige kaubamärkide ja brändidega, millega olen ise kokku puutunud või mida ise müün.
                        Samas on küttesüsteemide tööpõhimõtted suures osas sarnased ning kui varuosad on saadaval
                        või olemasolev lahendus on remonditav, saan aidata ka teiste tootjate seadmete puhul.
                    </p>

                    <div class="pildidiv">
                        <img class="tootjastpilt" src=""
                            data-src="{{ asset('images/vaikesed/kuttesusteemide-hooldus/puhas-kuttesusteem.webp') }}"
                            alt="Küttesüsteemi hooldus ja remont">
                    </div>

                    <hr class="red-line">

                    <h3>Mida selle lehe alt leiad?</h3>

                    <p>
                        Siit lehelt leiad Küttesepa peamised hoolduse ja remondiga seotud teenused.
                        Mõnikord on probleem seadmes endas, teinekord hoopis küttesüsteemi vees,
                        torustikus või automaatikas.
                    </p>

                    <ul class="rohelise-linnukesega" style="font-size:18px; font-weight:500;">
                       
                        <li>
                            <a href="{{ route('soojuspumpade-hooldus') }}"><strong>Soojuspumpade hooldus</strong></a> –
                            regulaarne kontroll, puhastus ja tööparameetrite ülevaatus
                        </li>
                         <li>
                            <a href="{{ route('soojuspumpade-remont') }}"><strong>Soojuspumpade remont</strong></a> –
                            veaotsing, rikked, töö taastamine ja süsteemi kontroll
                        </li>
                        <li>
                            <a href="{{ route('kuttesusteemi-labipesu') }}"><strong>Küttesüsteemi läbipesu</strong></a> –
                            sette, mustuse ja magnetiidi eemaldamine süsteemist
                        </li>
                        <li>
                            <a href="{{ route('kuttevee-demineraliseerimine') }}"><strong>Küttevee demineraliseerimine</strong></a> –
                            süsteemi täitmine või korrigeerimine madala juhtivusega veega
                        </li>
                        <li>
                            <a href="{{ route('kuttevee-inhibiitorid') }}"><strong>Küttevee inhibiitorid</strong></a> –
                            korrosiooni, katlakivi ja muda tekke ennetamine
                        </li>
                    </ul>

                    <hr class="red-line" style="justify-self:flex-end;">

                    <h3>Millal tasub kutsuda spetsialist süsteemi hooldama või remontima?</h3>

                    <p>
                        Küttesüsteemi tasub hooldada regulaarselt, <strong> keskmiselt kord aastas</strong>, mitte alles siis, kui see enam korralikult ei tööta.
                        Hooldus on ennetav töö, mis aitab vältida suuremaid rikkeid ja tarbetut energiakulu.
                        Täpsem hooldusvälp sõltub konkreetsest seadmest ja tootja juhistest,
                        kuid kui süsteemi käitumine on muutunud, tasub see kindlasti üle vaadata.
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
                        Näiteks võib seadme kehv töö olla seotud hoopis määrdunud kütteveega, vale vooluhulgaga, ummistunud mudapüüduriga või tasakaalustamata küttesüsteemiga.
                    </p>

                    <div class="pildidiv" style="justify-self:flex-end;">
                        <img class="tootjastpilt" src=""
                            data-src="{{ asset('images/vaikesed/kuttesusteemide-hooldus/samsung-valisosa.webp') }}"
                            alt="Küttesüsteemi hooldus ja remont">
                    </div>

                    <hr class="red-line" style="justify-self:flex-end;">

                    <h3>Mida hoolduse või veaotsingu käigus tavaliselt kontrollitakse?</h3>

                    <p>
                        Iga süsteem on erinev ja töö sisu sõltub konkreetsest seadmest ning probleemist.
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
                            alt="Küttesüsteemi hooldus ja veaotsing">
                    </div>

                    <hr class="red-line">

                    <h3>Milliseid seadmeid ja süsteeme hooldame?</h3>

                    <p>
                        Olenevalt brändist ja olukorrast pakume hooldust või remonti järgmistele seadmetele ja süsteemidele:
                    </p>

                    <ul class="rohelise-linnukesega" style="font-size:18px; font-weight:500;">
                        <li>Õhk-õhk soojuspumbad</li>
                        <li>Õhk-vesi soojuspumbad</li>
                        <li>Maakütte ehk maa-vesi soojuspumbad</li>
                        <li>Küttesüsteemid radiaatorite ja põrandaküttega</li>
                        <li>Pelletikatlad ja pelletikaminad</li>
                        <li>Keskkütte pliidid ja kaminad</li>
                    </ul>

                    <div class="faq-container" itemscope itemtype="https://schema.org/FAQPage">
                        <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                            <h3 itemprop="name" class="faq-question">
                                <span class="faq-icon">&#10003;</span> Milliseid seadmeid Küttesepp hooldab ja remondib?
                            </h3>
                            <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" class="faq-answer">
                                <p itemprop="text">
                                    Küttesepp hooldab ja vajadusel remondib küttesüsteeme tervikuna, nii kütteseadme kui maja poolt. Kütteseadmete valik on nii soojuspumbad kui tahkeküttekaminad ja -pliidid.
                                    Siit lehelt saab edasi liikuda soojuspumpade remondi,
                                    soojuspumpade hoolduse ning küttesüsteemi vee ja torustikuga seotud tööde juurde.
                                </p>
                            </div>
                        </div>

                        <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                            <h3 itemprop="name" class="faq-question">
                                <span class="faq-icon">&#10003;</span> Kas iga probleem tähendab kohe remonti?
                            </h3>
                            <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" class="faq-answer">
                                <p itemprop="text">
                                    Mitte alati. Sageli on põhjuseks hooldamata süsteem, mustus, vale rõhk, õhk süsteemis,
                                    ummistunud filter või kehv küttevesi. Mõnikord piisab hooldusest või küttesüsteemi läbipesust,
                                    ilma et oleks vaja suuremat remonti.
                                </p>
                            </div>
                        </div>

                        <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                            <h3 itemprop="name" class="faq-question">
                                <span class="faq-icon">&#10003;</span> Kas Küttesepp hooldab ja remondib kõiki brände?
                            </h3>
                            <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" class="faq-answer">
                                <p itemprop="text">
                                    Eelkõige tegelen seadmetega, mida ise müün, paigaldan või hästi tunnen.
                                    Teiste tootjate seadmete puhul sõltub töö võimalikkus konkreetsest mudelist,
                                    rikkest ja varuosade saadavusest.
                                </p>
                            </div>
                        </div>

                        <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                            <h3 itemprop="name" class="faq-question">
                                <span class="faq-icon">&#10003;</span> Millal on hoolduse kõrval vaja ka vee töötlust?
                            </h3>
                            <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" class="faq-answer">
                                <p itemprop="text">
                                    Kui küttesüsteemis on palju setteid, magnetiiti, kõrge juhtivusega täitevett,
                                    korrosiooni märke või korduvaid ummistusi, ei pruugi tavalisest hooldusest piisata.
                                    Sellisel juhul võib olla vaja läbipesu, demineraliseerimist või inhibiitori lisamist.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div style="display:flex; flex-wrap:wrap; justify-content:center; gap:3px; margin-top:40px; font-weight:600;">

                        <div style="display:flex; flex-wrap:wrap; justify-content:center; gap:3px; margin-top:40px; font-weight:600;">
                            

                            <div style="width:300px; text-align:center;">
                                <a href="{{ route('soojuspumpade-hooldus') }}">
                                    | Soojuspumpade hooldus |
                                </a>
                            </div>
                            <div style="width:300px; text-align:center;">
                                <a href="{{ route('soojuspumpade-remont') }}">
                                    | Soojuspumpade remont |
                                </a>
                            </div>

                            <div style="width:300px; text-align:center;">
                                <a href="{{ route('kuttesusteemi-labipesu') }}">
                                    | Küttesüsteemi läbipesu |
                                </a>
                            </div>

                            <div style="width:300px; text-align:center;">
                                <a href="{{ route('kuttevee-demineraliseerimine') }}">
                                    | Küttevee demineraliseerimine |
                                </a>
                            </div>

                            <div style="width:300px; text-align:center;">
                                <a href="{{ route('kuttevee-inhibiitorid') }}">
                                    | Küttevee inhibiitorid |
                                </a>
                            </div>
                        </div>

                        <div class="links" style="margin-top:20px;">
                            <div class="kusipakkumist">
                                <a href="/#form" title="Emaili vormile">
                                    <p>KÜSI LISAINFOT</p>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-up_scroller />
    <x-cookies />
</x-layout>