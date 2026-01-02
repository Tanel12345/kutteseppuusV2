
   <x-layout 
    :title="'Küttevee demineraliseerimine – miks ja millal seda kasutada küttesüsteemis | Küttesepp'" 
    :metaDescription="'Demineraliseeritud küttevesi vastab VDI 2035 nõuetele ning kaitseb küttesüsteemi katlakivi ja korrosiooni eest. Küttesepp selgitab, millal see on vajalik ja kuidas seda õigesti teha.'" 
    :metaKeywords="'küttevee demineraliseerimine,
demineraliseeritud küttevesi,
VDI 2035,
küttesüsteemi vesi,
katlakivi vältimine,
korrosioonikaitse,
küttesüsteemi täitmine,
soojuspumba hooldus'" 
    :metaAuthor="'Tanel Sepp'" 
    :robots="'index, follow'" 
:viteCssAssets="['resources/css/pages/teenustelehed.css']"
    :viteJsAssets="['resources/js/pages/teenustelehed.js']">

<section class="uper" id="uperid">
    <div class="carousel">
        <div class="taustadiv">
            <div class="textholderdiv">
                <div class="textholder">
                    <h1>Küttevee demineraliseerimine – puhas vesi, pikk eluiga</h1>
                </div>
            </div>
            <img class="taust"
                 src="{{ asset('images/taustad/VDI-2035_taust.webp') }}"
                 alt="Küttevee demineraliseerimine ja VDI 2035 nõuded">
        </div>
    </div>
</section>

<section class="tootjasektsioon" id="tootjaid">
    <div class="tootjast">
        <div class="ettevotte">
            <div class="content">

                <h2><span>Demineraliseeritud küttevesi</span> – kaitse süsteemi katlakivi ja korrosiooni eest.</h2>
            

                <p>
                    Küttevee demineraliseerimine tähendab vee puhastamist kõigist lahustunud sooladest ja mineraalidest,
                    mis muidu põhjustaksid süsteemi sees katlakivi, korrosiooni ja muda teket. Kui me lisame siia veel PH ehk happelisuse stabiliseerijat saavutame tulemuseks vee, mis vastab standardile <strong>VDI 2035</strong> – ideaalne keskkond
                    pikaealiseks ja tõrkevabaks küttesüsteemi tööks.
                </p>

                <p>
                    Kui küttekontuur täidetakse demineraliseeritud ja aluselise veega, väheneb oluliselt hooldusvajadus, süsteemi efektiivsus püsib kõrge ning soojusvahetid ja pumbad töötavad optimaalselt aastaid.
                    See on eelkõige soovitatav uutele või ka renoveeritud süsteemidele. <br>
                    <strong>
                        Küttesepp OÜ teostab alati ennem küttevee töötlemist
                        <a href="{{ route('kuttesusteemi-labipesu') }}">
                            küttesüsteemi läbipesu enne demineraliseerimist.
                        </a>
                        Olenevalt vajadusest kas keemiaga või ilma.
                    </strong>
                </p>

                <div class="pildidiv">
                    <img class="tootjastpilt" src=""
                         data-src="{{ asset('images/vaikesed/kuttesusteemi-vesi/VDI-2035_radiaator.webp') }}"
                         alt="Demineraliseeritud kütteveega radiaator">
                </div>
                <hr class="red-line">

                <h3>Miks demineraliseeritud vesi on vajalik?</h3>
                <p>
                    Kui küttevõrk täidetakse tavalise kraaniveega, satuvad sinna kaltsiumi-, magneesiumi- ja
                    kloriidioonid, nende konsendratsiooni mõõdetakse elektrijuhtivuse mõõtmise teel. Lisaks tektab probleeme ebapiisav PH tase ja liigse hapniku osakaal. See kokku soojenenud küttesüsteemis sadestub torustikus ja soojusvahetites katlakivina. Samal ajal kiireneb ka korrosioon ja korrosioonijääk, muda. Demineraliseeritud vesi eemaldab need riskid:
                </p>

                <ul class="rohelise-linnukesega" style="font-weight:500; font-size:18px;">
                    <li>vältides katlakivi teket isegi kõrgel temperatuuril</li>
                    <li>vähendades metallide korrosiooni ohtu</li>
                    <li>tagades süsteemi vaikse ja energiatõhusa töö</li>
                </ul>

                <div class="pildidiv" style="justify-self:flex-end;">
                    <img class="tootjastpilt" src=""
                         data-src="{{ asset('images/vaikesed/kuttesusteemi-vesi/vdi-2035.webp') }}"
                         alt="VDI 2035 standard">
                </div>
                <hr class="red-line" style="justify-self:flex-end;">

                <h3>VDI 2035 – kvaliteedistandard demineraliseeritud veele</h3>

                <p>
                    Standard <strong>VDI 2035</strong> määrab, millised peavad olema küttesüsteemi täitmiseks kasutatava
                    vee omadused. Peamised parameetrid on:
                </p>
                <ul class="rohelise-linnukesega" style="font-weight:500; font-size:18px;">
                    <li>madal elektrijuhtivus (tavaliselt alla 100 µS/cm)</li>
                    <li>Madala hapnikusisaldus (&lt; 0.1 mg/l)</li>
                    <li>pH vahemikus 8,2–10. Alumiiniumist komponentide puhul 6.5–8.5</li>
                </ul>

                <p>
                    Selline vesi ei tekita katlakivi, ei soodusta galvanilist korrosiooni ning tagab süsteemi
                    stabiilse töö aastaid. See on ka enamikku soojuspumpade ja kondensatsioonikatelde tootjate
                    ametlik soovitus.
                </p>

                <div class="pildidiv">
                    <img class="tootjastpilt" src=""
                         data-src="{{ asset('images/vaikesed/kuttesusteemi-vesi/Täitefilter thermaliQ_HB2.webp') }}"
                         alt="Demineraliseeritud vee eelised">
                </div>

                <hr class="red-line">

                <h3>Kuidas toimub demineraliseerimine?</h3>
                <p>
                    Demineraliseerimine tehakse tavaliselt spetsiaalse ioonvahetusfiltri abil.
                    Filtrid eemaldavad soolad ja mineraalid, jättes alles vaid puhta vee molekulid. 
                    Küttesepp mõõdab täitmisvee juhtivuse ja pH enne ja pärast süsteemi täitmist ning vajadusel viib läbi vee ettevalmistuse vastavalt abivahendite
                    tootja ja VDI 2035 nõuetele.
                </p>

                <p>
                    Pärast täitmist soovitame küttevee parameetreid regulaarselt kontrollida, et tagada süsteemi püsiv kaitse. <br>
                    <strong>
                        Hilisem süsteemi juurde täitmine tavalise veega vähendab puhta vee osa süsteemis. Soovitame süsteemile lisada spetsiaalse juurdetäite filtri.
                    </strong>
                </p>

                <hr class="red-line" style="margin-top:40px; margin-bottom:40px;">

                <!-- FAQ AKORDION -->
                <div class="faq-container" itemscope itemtype="https://schema.org/FAQPage">

                    <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <h3 itemprop="name" class="faq-question">
                            <span class="faq-icon">&#10003;</span> Mis on demineraliseeritud vesi?
                        </h3>
                        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" class="faq-answer">
                            <p itemprop="text">
                                Demineraliseeritud vesi on puhastatud vesi, millest on eemaldatud kõik lahustunud soolad ja
                                mineraalid. Selle elektrijuhtivus on väga madal, mistõttu ei teki katlakivi ega galvanilist
                                korrosiooni. See on VDI 2035 standardi kohane täitmisvesi.
                            </p>
                        </div>
                    </div>

                    <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <h3 itemprop="name" class="faq-question">
                            <span class="faq-icon">&#10003;</span> Millal tuleks süsteem täita demineraliseeritud veega?
                        </h3>
                        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" class="faq-answer">
                            <p itemprop="text">
                                Soovitame demineraliseeritud vett kasutada alati uue või täielikult renoveeritud
                                küttesüsteemi esmatäitmisel. See tagab seadmete maksimaalse eluea ja efektiivsuse.
                            </p>
                        </div>
                    </div>

                    <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <h3 itemprop="name" class="faq-question">
                            <span class="faq-icon">&#10003;</span> Kas demineraliseeritud vesi vajab hooldust?
                        </h3>
                        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" class="faq-answer">
                            <p itemprop="text">
                                Üldiselt mitte. Kui süsteem on hermeetiline ja korrektselt täidetud, püsib vee kvaliteet
                                aastaid muutumatuna. Soovitav on siiski kontrollida vee parameetreid iga 1–2 aasta tagant.
                            </p>
                        </div>
                    </div>

                    <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <h3 itemprop="name" class="faq-question">
                            <span class="faq-icon">&#10003;</span> Mis juhtub, kui süsteemi täita tavalise kraaniveega?
                        </h3>
                        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" class="faq-answer">
                            <p itemprop="text">
                                Kraanivesi sisaldab mineraale, mis kuumenedes ladestuvad katlakivina ja põhjustavad
                                korrosiooni ning muda. See võib lühendada süsteemi eluiga ja suurendada energiakulu märkimisväärselt.
                            </p>
                        </div>
                    </div>

                    <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <h3 itemprop="name" class="faq-question">
                            <span class="faq-icon">&#10003;</span> Kas demineraliseeritud vett võib kombineerida inhibiitoritega?
                        </h3>
                        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" class="faq-answer">
                            <p itemprop="text">
                                Üldjuhul pole vaja – demineraliseeritud vesi tagab piisava kaitse ka ilma lisanditeta.
                                Inhibiitoreid kasutatakse eraldiseisvalt kas uutes või vanemates, määrdunud süsteemides, kus täielikku puhastust
                                pole võimalik teha.
                            </p>
                        </div>
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
</section>

<x-up_scroller />
<x-cookies />
</x-layout>