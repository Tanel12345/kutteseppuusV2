<x-layout
    :title="'Küttevee demineraliseerimine ja VDI 2035 | Küttesepp'"
    :metaDescription="'Küttevee demineraliseerimine ja küttesüsteemi täitmine VDI 2035 põhimõtetel. Madala juhtivusega küttevesi, pH kontroll, vee töötlus ja vajadusel küttesüsteemi läbipesu.'"
    :metaAuthor="'Tanel Sepp'"
    :robots="'index, follow'"
    :ogImage="asset('images/serp/kuttesepp-og-demineraliseerimine.webp')"
    :viteCssAssets="[
        'resources/css/pages/tootelehed.css',
        'resources/css/pages/teenustelehed.css',
        'resources/css/kuttesusteemiTeenus.css',
        'resources/css/soojuspumbaKaardid.css',
    ]"
    :viteJsAssets="['resources/js/pages/teenustelehed.js']"
>

    <section class="uper" id="uperid">
        <div class="carousel">
            <div class="taustadiv">
                <div class="textholderdiv">
                    <div class="textholder">
                        <h1>Küttevee demineraliseerimine – VDI 2035 põhimõtetele vastav küttevesi</h1>
                    </div>
                </div>

                <img
                    class="taust"
                    src="{{ asset('images/taustad/VDI-2035_taust.webp') }}"
                    alt="Küttevee demineraliseerimine ja VDI 2035 põhimõtted"
                >
            </div>
        </div>
    </section>


    <section class="tootjasektsioon" id="tootjaid">
        <div class="tootjast">
            <div class="ettevotte">
                <div class="content">

                    <h2>
                        <span>Demineraliseeritud küttevesi</span> – alus stabiilsele küttesüsteemile
                    </h2>

                    <p>
                        Küttevee demineraliseerimine tähendab täiteveest lahustunud soolade ja mineraalide
                        eemaldamist. Nii saab vähendada katlakivi ja mineraalsete sadestuste tekkimise riski
                        küttesüsteemi torustikus, soojusvahetites ja muudes komponentides.
                    </p>

                    <p>
                        Ainult madalast elektrijuhtivusest siiski ei piisa.
                        Küttesüsteemi täitevee puhul tuleb arvestada ka pH, süsteemi materjalide,
                        kasutatava kütteseadme ja tootja nõuetega.
                        Seetõttu mõõdan vee elektrijuhtivust ja pH-d ning valin vee töötluse
                        vastavalt konkreetsele süsteemile.
                    </p>

                    <p>
                        Töötluse eesmärk on saavutada võimalikult stabiilne ja
                        <strong>VDI 2035 põhimõtetega kooskõlas</strong> olev küttevesi,
                        mis aitab vähendada katlakivi ja korrosiooniga seotud riske.
                    </p>

                    <p>
                        Kasutan vee demineraliseerimiseks professionaalset ioonvahetussüsteemi
                        ning vajadusel sobivat vee omaduste stabiliseerimise lahendust.
                    </p>

                    <p>
                        Olemasoleva küttesüsteemi puhul kontrollin enne uue vee lisamist,
                        kas süsteem vajab ka
                        <a href="{{ route('kuttesusteemi-labipesu') }}">
                            küttesüsteemi läbipesu
                        </a>.
                        Uue või puhta süsteemi puhul ei ole põhjalik läbipesu alati vajalik.
                    </p>


                    <div class="pildidiv">
                        <img
                            class="tootjastpilt"
                            src=""
                            data-src="{{ asset('images/vaikesed/kuttesusteemi-vesi/VDI-2035_radiaator.webp') }}"
                            alt="Demineraliseeritud kütteveega küttesüsteem"
                        >
                    </div>

                    <hr class="red-line" style="margin-bottom:40px;">


                    <h3>VDI 2035 põhimõtetele vastava küttevee lahendused</h3>

                    <p>
                        Demineraliseeritud küttevett saab osta valmis veena või lasta
                        süsteemi vee töödelda objektil kohapeal. Sobiv lahendus sõltub
                        küttesüsteemi mahust, seisukorrast ja sellest, kas süsteem vajab
                        enne täitmist ka puhastamist.
                    </p>


                    <div class="heatpump-page">
                        <div class="heatpump-container">
                            <div class="heatpump-packages-grid">

                                <article class="heatpump-package">
                                    <div class="heatpump-package__top">
                                        <span class="heatpump-package__number">01</span>

                                        <p class="heatpump-package__method">
                                            Vesi kohapealt kaasa
                                        </p>

                                        <h3>VDI 2035 küttevee müük</h3>
                                    </div>

                                    <div class="heatpump-package__image">
                                        <img
                                            data-src="{{ asset('images/vaikesed/kuttesusteemi-vesi/VDI-2035_radiaator.webp') }}"
                                            alt="VDI 2035 küttevee müük"
                                        >
                                    </div>

                                    <ul class="heatpump-checklist">
                                        <li>Valmis demineraliseeritud küttevesi</li>
                                        <li>Elektrijuhtivuse kontroll</li>
                                        <li>pH kontroll enne üleandmist</li>
                                        <li>Kohapeal ümberpumpamise võimalus</li>
                                        <li>Sobib süsteemi ise täitvale kliendile</li>
                                    </ul>

                                    <p class="heatpump-package__description">
                                        Valmis töödeldud küttevesi Laagrist kaasa ostmiseks.
                                        Ostjal peab olema oma sobiv mahuti.
                                    </p>
                                </article>


                                <article class="heatpump-package">
                                    <div class="heatpump-package__top">
                                        <span class="heatpump-package__number">02</span>

                                        <p class="heatpump-package__method">
                                            Vesi koos transpordiga
                                        </p>

                                        <h3>VDI 2035 küttevesi objektile</h3>
                                    </div>

                                    <div class="heatpump-package__image">
                                        <img
                                            data-src="{{ asset('images/vaikesed/kuttesusteemi-vesi/vdi-2035.webp') }}"
                                            alt="Demineraliseeritud küttevee transport objektile"
                                        >
                                    </div>

                                    <ul class="heatpump-checklist">
                                        <li>Valmis töödeldud küttevesi</li>
                                        <li>Transport kokkuleppel üle Eesti</li>
                                        <li>Elektrijuhtivuse ja pH kontroll</li>
                                        <li>Kohapeal ümberpumpamise võimalus</li>
                                        <li>Võimalik täita vesi otse süsteemi</li>
                                    </ul>

                                    <p class="heatpump-package__description">
                                        Sobib juhul, kui suurem kogus demineraliseeritud
                                        küttevett on mugavam tuua otse objektile.
                                    </p>
                                </article>


                                <article class="heatpump-package">
                                    <div class="heatpump-package__top">
                                        <span class="heatpump-package__number">03</span>

                                        <p class="heatpump-package__method">
                                            Täisteenus objektil
                                        </p>

                                        <h3>Läbipesu ja küttevee töötlus</h3>
                                    </div>

                                    <div class="heatpump-package__image">
                                        <img
                                            data-src="{{ asset('images/vaikesed/kuttesusteemide-hooldus/labipesu-ja-demineraliseerimine-rae-vald.webp') }}"
                                            alt="Küttesüsteemi läbipesu ja küttevee demineraliseerimine"
                                        >
                                    </div>

                                    <ul class="heatpump-checklist">
                                        <li>Olemasoleva süsteemi seisukorra hindamine</li>
                                        <li>Vajadusel küttesüsteemi läbipesu</li>
                                        <li>Värske täitevee demineraliseerimine</li>
                                        <li>Elektrijuhtivuse ja pH kontroll</li>
                                        <li>Järeltäitefiltri paigaldamise võimalus</li>
                                    </ul>

                                    <p class="heatpump-package__description">
                                        Täislahendus olemasolevale või renoveeritud
                                        küttesüsteemile, kus vana küttevesi eemaldatakse,
                                        süsteem puhastatakse vastavalt vajadusele ning
                                        täidetakse uue töödeldud veega.
                                    </p>

                                    <a
                                        href="{{ route('kuttesusteemi-labipesu') }}"
                                        class="heatpump-btn heatpump-btn--secondary"
                                    >
                                        Vaata küttesüsteemi läbipesu
                                    </a>
                                </article>

                            </div>
                        </div>
                    </div>


                    <hr class="red-line">


                    <h3>Miks demineraliseeritud vesi on vajalik?</h3>

                    <p>
                        Tavaline täitevesi sisaldab lahustunud mineraale ja soolasid,
                        mille kogust saab hinnata muu hulgas vee elektrijuhtivuse kaudu.
                        Kuumutamisel võivad osa mineraale sadestuda küttesüsteemi
                        komponentidele ning mõjutada soojusülekannet.
                    </p>

                    <p>
                        Korrosiooni mõjutavad lisaks vee mineraalsusele ka pH,
                        hapniku juurdepääs, süsteemi materjalid ja töötingimused.
                        Õigesti ettevalmistatud küttevesi aitab neid riske vähendada.
                    </p>

                    <ul
                        class="rohelise-linnukesega"
                        style="font-weight:500; font-size:18px;"
                    >
                        <li>Vähendab katlakivi ja mineraalsete sadestuste tekkeriski</li>
                        <li>Aitab vähendada korrosiooni ja muda tekkimise riski</li>
                        <li>Loob paremad töötingimused kütteseadmele ja soojusvahetitele</li>
                    </ul>


                    <div class="pildidiv" style="justify-self:flex-end;">
                        <img
                            class="tootjastpilt"
                            src=""
                            data-src="{{ asset('images/vaikesed/kuttesusteemi-vesi/toorvesi.webp') }}"
                            alt="Tavalise täitevee mõju küttesüsteemile"
                        >
                    </div>

                    <hr class="red-line" style="justify-self:flex-end;">


                    <h3>VDI 2035 ja küttesüsteemi täitevee kvaliteet</h3>

                    <p>
                        <strong>VDI 2035</strong> käsitleb vesiküttesüsteemide
                        täite- ja ringlusvee kvaliteeti ning katlakivi ja veepoolse
                        korrosiooni vähendamist.
                    </p>

                    <p>
                        Praktikas tuleb arvestada muu hulgas vee elektrijuhtivuse,
                        pH, süsteemi veemahu, soojusvõimsuse ning süsteemis kasutatud
                        materjalidega. Sobivad väärtused sõltuvad konkreetsest
                        süsteemist ja kütteseadme tootja nõuetest.
                    </p>

                    <ul
                        class="rohelise-linnukesega"
                        style="font-weight:500; font-size:18px;"
                    >
                        <li>Madal elektrijuhtivus vähendab vees lahustunud soolade hulka</li>
                        <li>pH peab sobima süsteemis kasutatud materjalidega</li>
                        <li>Alumiiniumi sisaldavate süsteemide puhul tuleb järgida tootja lubatud pH vahemikku</li>
                    </ul>

                    <p>
                        Küttesepp mõõdab täitevee elektrijuhtivust ja pH-d enne
                        süsteemi täitmist ning kontrollib vajadusel vee omadusi ka
                        pärast süsteemi käivitamist.
                    </p>


                    <div class="pildidiv">
                        <img
                            class="tootjastpilt"
                            src=""
                            data-src="{{ asset('images/vaikesed/kuttesusteemi-vesi/vdi-2035.webp') }}"
                            alt="VDI 2035 küttevee kontroll"
                        >
                    </div>

                    <hr class="red-line">


                    <h3>Kuidas toimub küttevee demineraliseerimine?</h3>

                    <p>
                        Demineraliseerimisel juhitakse täitevesi läbi spetsiaalse
                        ioonvahetusvaigu, mis eemaldab veest suure osa lahustunud
                        sooladest ja mineraalidest.
                        Tulemuseks on väga madala elektrijuhtivusega vesi.
                    </p>

                    <p>
                        Töö käigus mõõdan vee elektrijuhtivust ja pH-d.
                        Vajadusel kohandatakse vee omadusi vastavalt konkreetse
                        süsteemi materjalidele ja kütteseadme nõuetele.
                    </p>

                    <p>
                        Hilisem süsteemi juurde täitmine töötlemata veega suurendab
                        uuesti süsteemi soolasisaldust ja elektrijuhtivust.
                        Seetõttu on süsteemides, mida tuleb aeg-ajalt juurde täita,
                        mõistlik kasutada sobivat järeltäitefiltrit.
                    </p>

                    <p>
                        Küttesepp OÜ pakub küttevee demineraliseerimist
                        <strong>üle Eesti</strong>, kuid põhiline teeninduspiirkond
                        on Tallinn ja Harjumaa. Töötlen vee objektil kohapeal või
                        transpordin valmis töödeldud vee objektile.
                    </p>


                    <div class="pildidiv">
                        <img
                            class="tootjastpilt"
                            src=""
                            data-src="{{ asset('images/vaikesed/kuttesusteemi-vesi/Täitefilter thermaliQ_HB2.webp') }}"
                            alt="Küttesüsteemi järeltäite demineraliseerimise filter"
                        >
                    </div>


                    <hr class="red-line">


                    <div
                        class="faq-container"
                        itemscope
                        itemtype="https://schema.org/FAQPage"
                    >

                        <div
                            itemscope
                            itemprop="mainEntity"
                            itemtype="https://schema.org/Question"
                        >
                            <h3 itemprop="name" class="faq-question">
                                <span class="faq-icon">&#10003;</span>
                                Mis on demineraliseeritud vesi?
                            </h3>

                            <div
                                itemscope
                                itemprop="acceptedAnswer"
                                itemtype="https://schema.org/Answer"
                                class="faq-answer"
                            >
                                <p itemprop="text">
                                    Demineraliseeritud vesi on töödeldud vesi,
                                    millest on eemaldatud suur osa lahustunud
                                    mineraalidest ja sooladest.
                                    Selle elektrijuhtivus on tavalisest täiteveest
                                    oluliselt madalam.
                                </p>
                            </div>
                        </div>


                        <div
                            itemscope
                            itemprop="mainEntity"
                            itemtype="https://schema.org/Question"
                        >
                            <h3 itemprop="name" class="faq-question">
                                <span class="faq-icon">&#10003;</span>
                                Millal tuleks süsteem täita demineraliseeritud veega?
                            </h3>

                            <div
                                itemscope
                                itemprop="acceptedAnswer"
                                itemtype="https://schema.org/Answer"
                                class="faq-answer"
                            >
                                <p itemprop="text">
                                    Demineraliseeritud vett kasutatakse uute ja
                                    renoveeritud küttesüsteemide täitmisel ning
                                    sageli ka pärast olemasoleva süsteemi läbipesu.
                                    Täitevee nõuded sõltuvad kütteseadmest ja
                                    süsteemi materjalidest.
                                </p>
                            </div>
                        </div>


                        <div
                            itemscope
                            itemprop="mainEntity"
                            itemtype="https://schema.org/Question"
                        >
                            <h3 itemprop="name" class="faq-question">
                                <span class="faq-icon">&#10003;</span>
                                Kas demineraliseeritud küttevee kvaliteeti tuleb hiljem kontrollida?
                            </h3>

                            <div
                                itemscope
                                itemprop="acceptedAnswer"
                                itemtype="https://schema.org/Answer"
                                class="faq-answer"
                            >
                                <p itemprop="text">
                                    Jah, perioodiline kontroll on mõistlik.
                                    Eriti tasub vee elektrijuhtivust ja pH-d
                                    kontrollida pärast süsteemi juurdetäitmist,
                                    remonti või juhul, kui küttevee seisukord
                                    on muutunud.
                                </p>
                            </div>
                        </div>


                        <div
                            itemscope
                            itemprop="mainEntity"
                            itemtype="https://schema.org/Question"
                        >
                            <h3 itemprop="name" class="faq-question">
                                <span class="faq-icon">&#10003;</span>
                                Kas süsteemi võib täita tavalise kraaniveega?
                            </h3>

                            <div
                                itemscope
                                itemprop="acceptedAnswer"
                                itemtype="https://schema.org/Answer"
                                class="faq-answer"
                            >
                                <p itemprop="text">
                                    See sõltub vee omadustest, süsteemi suurusest,
                                    materjalidest ja kütteseadme tootja nõuetest.
                                    Kõrge mineraalsusega täitevesi võib suurendada
                                    katlakivi ja korrosiooniga seotud riske.
                                </p>
                            </div>
                        </div>


                        <div
                            itemscope
                            itemprop="mainEntity"
                            itemtype="https://schema.org/Question"
                        >
                            <h3 itemprop="name" class="faq-question">
                                <span class="faq-icon">&#10003;</span>
                                Kas demineraliseeritud vett võib kasutada koos inhibiitoriga?
                            </h3>

                            <div
                                itemscope
                                itemprop="acceptedAnswer"
                                itemtype="https://schema.org/Answer"
                                class="faq-answer"
                            >
                                <p itemprop="text">
                                    Jah, kui kasutatav inhibiitor sobib
                                    demineraliseeritud veega ja konkreetse
                                    küttesüsteemi materjalidega.
                                    Inhibiitori lisamine ei ole siiski igas
                                    süsteemis automaatselt vajalik.
                                    Loe lähemalt
                                    <a href="{{ route('kuttevee-inhibiitorid') }}">
                                        küttevee inhibiitoritest
                                    </a>.
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