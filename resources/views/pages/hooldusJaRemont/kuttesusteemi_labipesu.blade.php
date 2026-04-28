<x-layout :title="'Küttesüsteemi läbipesu – õhuimpulsidega ja keemiaga puhastus'" :metaDescription="'Küttesüsteemi läbipesu üle Eesti. Õhu ja vee impulssloputus, happeline ja aluseline keemiapesu, magnetiidi, muda ja katlakivi eemaldus ning küttevee demineraliseerimine (VDI 2035).'" :metaKeywords="'küttesüsteemi läbipesu, küttesüsteemi puhastus, torustiku pesu, happeline süsteemipesu, aluseline keemiaga pesu, powerflush küttesüsteem, magnetiidi eemaldus, katlakivi eemaldus'" :ogImage="asset('images/serp/kuttesepp-og-labipesu.webp')" :metaAuthor="'Tanel Sepp'" :robots="'index, follow'"
    :viteCssAssets="[
        'resources/css/pages/tootelehed.css',
        'resources/css/pages/teenustelehed.css',
        'resources/css/kuttesusteemiTeenus.css',
    ]" :viteJsAssets="['resources/js/pages/teenustelehed.js']">

    <!-- HERO -->
    <section class="uper" id="uperid">
        <div class="carousel">
            <div class="taustadiv">
                <div class="textholderdiv">
                    <div class="textholder">
                        <h1>Küttesüsteemi läbipesu – muda, rooste ja katlakivi eemaldamine</h1>
                    </div>
                </div>
                <img class="taust" src="{{ asset('images/taustad/labipesu.webp') }}"
                    alt="Küttesüsteemi läbipesu ja puhastus">
            </div>
        </div>
    </section>
    <section class="tootjasektsioon" style="background-image:none; background-color:white;">
        <div class="tootjast">
            <div class="ettevotte">
                <div class="content">

                    <h2><span>Küttesepa läbipesu teenus</span> – süsteemi põhjalik puhastus ja uue küttevee
                        demineraliseerimine</h2>

                    <p>
                        Kui küttesüsteem on täidetud tavalise kraaniveega, võib süsteemi aja jooksul koguneda muda,
                        roostet, magnetiiti, katlakivi ja muid setteid. Tekke kiirus sõltub vee kvaliteedist,
                        süsteemi materjalidest ja sellest, kas süsteem on olnud korrektselt hooldatud.
                    </p>

                    <p>
                        Need setted vähendavad küttesüsteemi efektiivsust ning võivad põhjustada ringluspumba,
                        soojusvaheti või põrandakütte kontuuride ummistumist. Selle tulemusel ei pruugi põrandakütte
                        ruumid või radiaatorid enam piisavalt soojeneda ning energiakulu võib suureneda.
                    </p>
                    <p>
                        Küttesüsteemi läbipesu on eriti oluline enne soojuspumba, kondensatsioonikatla või uue
                        ringluspumba paigaldust,
                        et vältida soojusvahetite ummistumist ja garantiiprobleeme.
                    </p>

                </div>
                <div>
                    <img class="tootjastpilt" src=""
                        data-src="{{ asset('images/vaikesed/kuttesusteemide-hooldus/labipesu.webp') }}"
                        alt="Küttesüsteemi loputus veega ja õhuga">
                </div>



            </div>
        </div>
    </section>
    <section class="piltlingid teenus-piltlingid" id="kuttesusteemi-teenus" aria-labelledby="protsess-pealkiri"
        style="margin-top:0px; margin-bottom:75px;">


        <!-- 🔥 KAARDID -->
        <h2 class="teenus-pealkiri" style="margin-top:0px;">KÜTTESÜSTEEMI LÄBIPESU PAKETID</h2>

        <p class="teenus-sissejuhatus">
            Läbipesu paketi soovitan valida vastavalt süsteemi seisukorrale ja eesmärgile – kas piisab loputusest või on
            vaja
            põhjalikku taastamist koos edasiste probleemide ennetamisega.
        </p>

        <div class="red-line" role="presentation"></div>

        <div class="piltlingidiv">

            <!-- 1 -->
            <article class="piltlink teenuslink inverse1">
                <div class="teenus-number-visual"><span>01</span></div>

                <div class="piltlingitekst">
                    <img src="{{ asset('images/icons/küttesepp.png') }}" alt="Küttesepp">
                    <h3>Õhu ja vee impulssloputus</h3>
                </div>

                <ul class="teenus-checklist">
                    <li>Keemiavaba puhastus</li>
                    <li>Eemaldab muda ja lahtise sette</li>
                    <li>Sobib uuematele süsteemidele</li>
                    <li>Hea põrandakütte kontuuride taastamiseks</li>
                </ul>

                <p class="teenus-kirjeldus">
                    Sobib juhul, kui süsteem ei ole tugevalt saastunud ja soovitakse taastada normaalne ringlus.
                </p>
            </article>

            <!-- 2 -->
            <article class="piltlink teenuslink inverse1">
                <div class="teenus-number-visual"><span>02</span></div>

                <div class="piltlingitekst">
                    <img src="{{ asset('images/icons/küttesepp.png') }}" alt="Küttesepp">
                    <h3>Keemiaga leotus ja pesu</h3>
                </div>

                <ul class="teenus-checklist">
                    <li>Happeline pesu katlakivi eemaldamiseks</li>
                    <li>Aluseline pesu muda ja magnetiidi eemaldamiseks</li>
                    <li>Sobib vanematele süsteemidele</li>
                    <li>Taastab soojusülekande</li>
                </ul>

                <p class="teenus-kirjeldus">
                    Kasutatakse siis, kui süsteemis on juba tekkinud tõsisemad setted ja loputusest üksi ei piisa.
                </p>
            </article>

            <!-- 3 -->
            <article class="piltlink teenuslink inverse1">
                <div class="teenus-number-visual"><span>03</span></div>

                <div class="piltlingitekst">
                    <img src="{{ asset('images/icons/küttesepp.png') }}" alt="Küttesepp">
                    <h3>Põhjalik taastamine ja uus küttevesi</h3>
                </div>

                <ul class="teenus-checklist">

                    <li>Keemiaga pesu + powerflush loputus</li>

                    <li>Kogu vana küttevee eemaldus</li>

                    <li>
                        Küttevee demineraliseerimine
                        <strong>
                            <a href="{{ route('kuttevee-demineraliseerimine') }}"
                                style="font-size:15px; display:inline;">
                                (VDI 2035)
                            </a>
                        </strong>
                    </li>

                    <li>
                        Korrosiooni
                        <strong>
                            <a href="{{ route('kuttevee-inhibiitorid') }}" style="font-size:15px; display:inline;">
                                inhibiitor
                            </a>
                        </strong> (valikuline)
                    </li>
                    <li>Järeltäite demineraliseerimise filter</li>
                </ul>
                <p class="teenus-kirjeldus">
                    Parim lahendus küttesüsteemi täielikuks taastamiseks.<br> Eriti oluline enne uue soojuspumba või
                    katla paigaldust – annab süsteemile uue elu.
                </p>
            </article>

        </div>

    </section>





    <section class="tootjasektsioon">
        <div class="tootjast">
            <div class="ettevotte">
                <div class="content">


                    <h2><span>Küttesepa</span> läbipesu meetodid:</h2>


                    <ul class="rohelise-linnukesega" style="font-weight:500; font-size:18px; margin-top:10px;">
                        <li>Õhu ja vee loputus – keemiavaba puhastus</li>
                        <li>Happeline keemiaga pesu – katlakivi ja oksüdatsioonijääkide eemaldamiseks <span
                                style="font-size:16px; font-weight:300">(2-3 tundi pesuaeg)</span></li>
                        <li>Aluseline keemiaga pesu – muda, õli, magnetiidi, orgaaniliste setete ja samuti katlakivi
                            eemaldamiseks<span style="font-size:16px; font-weight:300"> (3-4 nädalat pesuaeg)</span>
                        </li>
                    </ul>

                    <p>
                        Läbipesu valik sõltub probleemi olemusest, torustiku seisukorrast, materjalidest ja vee
                        kvaliteedist.
                        Pärast pesu saame vajadusel teha süsteemi täitmise vastavalt <strong><a style="font-size:18px"
                                href="{{ route('kuttevee-demineraliseerimine') }}">VDI 2035</a></strong> standardile või
                        lisame
                        <strong><a style="font-size:18px" href="{{ route('kuttevee-inhibiitorid') }}">küttevee
                                inhibiitorid.</a></strong>
                    </p>
               

                    <hr class="red-line">

                    <h3>Õhu ja vee loputus (powerflush tehnoloogia) – keemiavaba süsteemi puhastus</h3>
                    <p>
                        See meetod sobib süsteemidele, kus peamine probleem on muda, õhumullid ja ringlusprobleemid,
                        kuid torustikus ei ole tugevat katlakivi ega vanu metalloksiide.
                    </p>

                    <ul class="rohelise-linnukesega" style="font-weight:500; font-size:18px;">
                        <li>Süsteemi suunatakse survestatud vesi koos impulss- või õhukehadega</li>
                        <li>Lahustab ja viib välja muda, magnetiidi ja setted</li>
                        <li>Ei kasuta keemiat – ohutu kõigile materjalidele</li>
                        <li>Eriti tõhus põrandakütte kontuuride ringluse taastamisel</li>
                    </ul>

                    <p>
                        Loputus sobib suurepäraselt olukorras, kus süsteem on uuem või kus
                        soovitakse puhastust ilma keemiliste vahenditeta.
                    </p>

                    <div class="pildidiv" style="justify-self:flex-end;">
                        <img class="tootjastpilt" src=""
                            data-src="{{ asset('images/vaikesed/kuttesusteemide-hooldus/Läbipesu-seadmed.webp') }}"
                            alt="Küttesüsteemi läbipesu ja remondi seadmed">
                    </div>
                    <hr class="red-line" style="justify-self:flex-end;">



                    <h3>Keemiaga läbipesu – happeline puhastus</h3>
                    <p>
                        Happeline puhastus on mõeldud süsteemidele, kus torudes või soojusvahetites on
                        <strong>katlakivi, vanad oksüdatsioonijäljed, metallikivi või sadestunud rauaühendid</strong>.
                    </p>

                    <p>
                        Protsessi käigus kasutatakse happelist puhastusaine kontsentraati, mis:
                    </p>

                    <ul class="rohelise-linnukesega" style="font-weight:500; font-size:18px;">
                        <li>Lahustab lubjakivi ja kaltsiumisoolad</li>
                        <li>Eemaldab roostekihi ja oksüdeerunud kihistused</li>
                        <li>Puhastab soojusvahetid ja torustiku sisepinnad</li>
                        <li>Taastab süsteemi läbilaskvuse ja soojusülekande</li>
                    </ul>

                    <p>
                        Happeline pesu tehakse alati kontrollitud tsükliga ning pärast pesu neutraliseeritakse süsteem
                        ja loputatakse puhta veega.
                    </p>

                    <div class="pildidiv">
                        <img class="tootjastpilt" src=""
                            data-src="{{ asset('images/vaikesed/kuttesusteemide-hooldus/happelise-keemiaga-pesu.webp') }}"
                            alt="Happeline küttesüsteemi läbipesu">
                    </div>

                    <hr class="red-line">


                    <h3>Keemiaga läbipesu – aluselise lahusega (rasv, muda, magnetiit)</h3>
                    <p>
                        Aluseline pesu on ideaalne süsteemidele, kus torudes on:
                    </p>

                    <ul class="rohelise-linnukesega" style="font-weight:500; font-size:18px;">
                        <li>Mudased ja õlised setted</li>
                        <li>Magnetiit (must raudoksiid)</li>
                        <li>Põrandakütte torudes tekkinud biokile</li>
                        <li>Soojusvahetites ladestunud must kiht</li>
                    </ul>

                    <p>
                        Aluseline puhastuslahus:
                    </p>

                    <ul class="rohelise-linnukesega" style="font-weight:500; font-size:18px;">
                        <li>Emulgeerib õlised jäägid ja mustuse</li>
                        <li>Lõhustab magnetiiti ja musta muda</li>
                        <li>Puhastab torustiku bioloogilistest ja orgaanilistest jääkidest</li>
                        <li>Tõstab süsteemi veevoolu ja pumba töö efektiivsust</li>
                    </ul>

                    <p>
                        Aluseline pesu on üks tõhusamaid meetodeid vanade küttesüsteemide täielikuks taastamiseks.
                    </p>


                    <p style="font-size:16px; color:#444;">
                        Oluline on mõista, et aluseline pesu ei ole mõeldud klassikalise kõva lubjakivist katlakivi
                        keemiliseks lahustamiseks – selleks kasutatakse alati happelist puhastust. Aluseline pesu on
                        suunatud eelkõige muda, magnetiidi, rasvade, õlise mustuse ja bioloogiliste setete
                        eemaldamisele.
                        Reaalses süsteemis võib see koos vee tugeva ringlusega siiski kaasa viia ka katlakivi ja
                        korrosioonijääkidega segunenud setteid.
                    </p>

                    <div class="pildidiv">
                        <img class="tootjastpilt" src=""
                            data-src="{{ asset('images/vaikesed/kuttesusteemide-hooldus/aluselise-keemiaga-pesu.webp') }}"
                            alt="Aluseline küttesüsteemi läbipesu">

                    </div>

                    <hr class="red-line" style="margin-top:40px; margin-bottom:40px;">

                    <p>
                        Teenust pakun <strong>üle Eesti</strong>, kuid enda asukoha tõttu eelistan siiski Tallinna ja
                        Harjumaa piirkonda.<br>
                        Läbipesu teostan mobiilse seadmega objektil kohapeal.
                    </p>
                    <!-- FAQ -->
                    <div class="faq-container" itemscope itemtype="https://schema.org/FAQPage">

                        <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                            <h3 itemprop="name" class="faq-question">
                                <span class="faq-icon">&#10003;</span> Mis vahe on õhu-veega loputusel ja keemiaga
                                pesul?
                            </h3>
                            <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"
                                class="faq-answer">
                                <p itemprop="text">
                                    Õhu ja vee loputus eemaldab muda ja õhumullid ilma kemikaalideta.
                                    Keemiaga pesu lahustab katlakivi, magnetiidi ja rooste, mida loputus üksi ei
                                    eemalda.
                                </p>
                            </div>
                        </div>

                        <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                            <h3 itemprop="name" class="faq-question">
                                <span class="faq-icon">&#10003;</span> Millal on vaja happelist pesu?
                            </h3>
                            <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"
                                class="faq-answer">
                                <p itemprop="text">
                                    Happelist pesu kasutatakse, kui torudes on katlakivi, kaltsiumisoolad, lubjakivi või
                                    oksüdatsioonikihid.
                                    See taastab soojusvaheti läbilaskvuse ja vähendab energiakulu.
                                </p>
                            </div>
                        </div>

                        <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                            <h3 itemprop="name" class="faq-question">
                                <span class="faq-icon">&#10003;</span> Millal on vaja aluselise keemiaga pesu?
                            </h3>
                            <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"
                                class="faq-answer">
                                <p itemprop="text">
                                    Aluseline pesu sobib siis, kui süsteemis on must muda (oksüdatsiooni jääk),
                                    magnetiit, natuke aitab kaasa ka katlakivi jääkide eemaldamisele, otseselt eemaldab
                                    katlakivi siiski happeline keskkond.
                                    See on eriti tõhus põrandakütte kontuuride taastamisel.
                                    Küttesepa kasutatav aluseline puhastussüsteem tagab suures plaanis, va katlakivi,
                                    sama tulemuse mis
                                    kiire happelise lahusega pesu. 4 nädalat ringlev puhastusaine lahustab saastainet
                                    tõenäoliselt paremini ka kaugematest süsteemi osadest.
                                </p>
                            </div>
                        </div>

                        <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                            <h3 itemprop="name" class="faq-question">
                                <span class="faq-icon">&#10003;</span> Kas keemiaga pesu ei või kombineerida nn
                                powerflush pesuga?
                            </h3>
                            <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"
                                class="faq-answer">
                                <p itemprop="text">
                                    Absoluudselt võib. Üldjuhul keemia lahustab kõik mittevajaliku teie küttesüsteemis
                                    ja tava loputuse käigus kõik ebavajalik eemaldub. Eriti määrdunud süsteemi puhul on
                                    aga välja pakuda Küttesepa pakett 3 mis sisaldabki impuls loputust lisaks
                                    keemiapesule.
                                </p>

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
