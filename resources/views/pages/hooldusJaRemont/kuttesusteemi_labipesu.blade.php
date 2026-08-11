<x-layout :title="'Küttesüsteemi läbipesu Tallinnas ja Harjumaal | Küttesepp'" :metaDescription="'Küttesüsteemi läbipesu Tallinnas ja Harjumaal. Põrandakütte ja radiaatorite impulssloputus, keemiapesu ning VDI 2035 küttevesi.'" :ogImage="asset('images/serp/kuttesepp-og-labipesu.webp')" :metaAuthor="'Tanel Sepp'" :robots="'index, follow, max-image-preview:large'" :viteCssAssets="[
    'resources/css/pages/tootelehed.css',
    'resources/css/pages/teenustelehed.css',
    'resources/css/kuttesusteemiTeenus1.css',
]"
    :viteJsAssets="['resources/js/pages/teenustelehed.js']">

    {{-- HERO – jäetud olemasoleva staatilise karusselli süsteemi peale --}}
    <section class="uper" id="uperid">
        <div class="carousel">
            <div class="taustadiv">
                <div class="textholderdiv">
                    <div class="textholder">
                        <h1>Küttesüsteemi läbipesu – põrandaküte ja radiaatorid seest puhtaks</h1>
                    </div>
                </div>

                <img class="taust" src="{{ asset('images/taustad/labipesu.webp') }}"
                    alt="Küttesüsteemi läbipesu, põrandakütte läbipesu ja radiaatorite sisemine puhastus"
                    fetchpriority="high" decoding="async">
            </div>
        </div>
    </section>

    <div class="flush-page">

        {{-- KAS SÜSTEEM VAJAB LÄBIPESU? --}}
        <section class="flush-intro" aria-labelledby="flush-intro-title">
            <div class="flush-container flush-assessment">
                <div class="flush-assessment__content">
                    <p class="flush-eyebrow">Diagnostika, puhastus ja süsteemi taastamine</p>

                    <h2 id="flush-intro-title">
                        Läbipesuga käsikäes käib probleemi põhjuse välja selgitamine
                    </h2>

                    <p class="flush-lead">
                        Olenevalt valitud teenusest kontrollin, kas ebaühtlase kütte
                        põhjuseks on must süsteem või hoopis õhk süsteemis, nõrk ringlus,
                        tasakaalustamata kontuurid, ummistunud filter või kütteseadme töö.
                    </p>
                    <p class="flush-lead">
                        Teostan nii põrandakütte läbipesu kui ka radiaatorite ja kogu küttesüsteemi puhastust.
                        Töö eesmärk on taastada võimalikult hea ringlus ja soojusülekanne ning eemaldada süsteemist
                        muda, sete ja muud vooluhulka takistavad jäägid.
                    </p>

                    <div class="flush-symptoms" aria-label="Tunnused, mille korral tasub küttesüsteemi kontrollida">
                        <article class="flush-symptom">
                            <span aria-hidden="true">01</span>
                            <div>
                                <h3>Ebaühtlane soojenemine</h3>
                                <p>Radiaator, põrandakütte kontuur või osa ruumist jääb jahedaks.</p>
                            </div>
                        </article>

                        <article class="flush-symptom">
                            <span aria-hidden="true">02</span>
                            <div>
                                <h3>Nõrk vooluhulk</h3>
                                <p>Kollektori läbivool on väike või ringlus ei taastu seadistamisega.</p>
                            </div>
                        </article>

                        <article class="flush-symptom">
                            <span aria-hidden="true">03</span>
                            <div>
                                <h3>Must sete filtris</h3>
                                <p>Magnetfiltrisse või mudakogujasse koguneb kiiresti musta muda.</p>
                            </div>
                        </article>

                        <article class="flush-symptom">
                            <span aria-hidden="true">04</span>
                            <div>
                                <h3>Müra või ringlushäired</h3>
                                <p>Torustikus, pumbas või kütteseadmes kostab mulinat või sahinat.</p>
                            </div>
                        </article>
                    </div>

                    <ul class="flush-feature-list" aria-label="Teenuse põhilised eelised">
                        <li>Termokaamera kontroll enne ja pärast tööd</li>
                        <li>Põrandakütte ja radiaatorite vooluhulkade hindamine</li>
                        <li>Impulssloputus, powerflush ja sobiv keemiapesu</li>
                        <li>Süsteemi täitmine sobiva VDI 2035 küttevee või korrosiooniinhibiitoriga</li>
                    </ul>

                    <div class="flush-actions">
                        <a class="flush-btn flush-btn--primary" href="/#form">
                            Küsi hinnapakkumist
                        </a>

                        <a class="flush-btn flush-btn--secondary" href="#labipesu-paketid">
                            Vaata võimalusi
                        </a>
                    </div>

                    <p class="flush-location">
                        Teenus eelkõige Tallinnas ja Harjumaal, suuremate tööde puhul kokkuleppel üle Eesti.
                    </p>
                </div>

                <div class="flush-assessment__side">
                    <figure class="flush-intro__media">
                        <img src="{{ asset('images/vaikesed/kuttesusteemide-hooldus/labipesu.webp') }}"
                            alt="Küttesüsteemi loputus vee ja õhu impulssidega" loading="lazy" decoding="async">
                        <figcaption>
                            Sobiv puhastusmeetod valitakse süsteemi seisukorra järgi.
                        </figcaption>
                    </figure>


                </div>
            </div>
        </section>

        {{-- PAKETID --}}
        <section class="flush-section flush-section--soft" id="labipesu-paketid" aria-labelledby="flush-packages-title">
            <div class="flush-container">
                <div class="flush-heading">
                    <p class="flush-eyebrow">Lähenemine vastavalt süsteemi seisukorrale</p>
                    <h2 id="flush-packages-title">Küttesüsteemi läbipesu paketid</h2>
                    <p>
                        Sobiv meetod sõltub torustiku materjalidest, süsteemi vanusest,
                        saastumise tüübist ja sellest, millist tulemust on vaja saavutada.
                    </p>
                </div>

                <div class="flush-packages-grid">
                    <article class="flush-package">
                        <div class="flush-package__top">
                            <span class="flush-package__number">01</span>
                            <p class="flush-package__method">Õhu ja vee impulssloputus</p>
                            <h3>Ringluse taastamine</h3>
                        </div>

                        <ul class="flush-checklist">
                            <li>Keemiavaba süsteemi puhastus</li>
                            <li>Eemaldab lahtist muda ja liikuvat setet</li>
                            <li>Aitab vabastada õhumulle</li>
                            <li>Sobib põrandakütte kontuuridele</li>
                            <li>Võimaldab loputada harusid eraldi</li>
                        </ul>

                        <p class="flush-package__description">
                            Sobib süsteemile, mis ei ole tugevalt saastunud ning kus probleemiks
                            on peamiselt nõrk ringlus, õhk või lahtine sete.
                        </p>
                    </article>

                    <article class="flush-package flush-package--featured">
                        <div class="flush-package__badge">Enim valitud</div>

                        <div class="flush-package__top">
                            <span class="flush-package__number">02</span>
                            <p class="flush-package__method">Keemia + dünaamiline läbipesu</p>
                            <h3>Põhjalik keemiapesu</h3>
                        </div>

                        <ul class="flush-checklist">
                            <li>Probleemi hindamine enne pesu</li>
                            <li>Pesukeemia valik sette tüübi järgi</li>
                            <li>Happeline pesu katlakivi korral</li>
                            <li>Aluseline puhastus muda ja õliste setete korral</li>
                            <li>Powerflush või impulssloputus sette eemaldamiseks</li>
                            <li>
                                <a href="{{ route('kuttevee-demineraliseerimine') }}">
                                    Küttevee demineraliseerimine VDI 2035 järgi
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('kuttevee-inhibiitorid') }}">
                                    Korrosiooniinhibiitor ja järeltäitefilter
                                </a>
                            </li>
                        </ul>

                        <p class="flush-package__description">
                            Sobib vanematele ja tugevamalt määrdunud süsteemidele,
                            kus tavalisest veega loputamisest enam ei piisa.
                        </p>
                    </article>

                    <article class="flush-package">
                        <div class="flush-package__top">
                            <span class="flush-package__number">03</span>
                            <p class="flush-package__method">Lisatöödega pakett</p>
                            <h3>Kogu süsteemi renoveerimine</h3>
                        </div>

                        <ul class="flush-checklist">
                            <li>Impulssloputus ja põhjalik keemiapesu</li>
                            <li>VDI 2035 küttevesi või sobiv inhibiitor</li>
                            <li>Termokaamera kontroll enne ja pärast</li>
                            <li>Kütteseadme ning küttesüsteemi hooldus</li>
                            <li>Vooluhulkade tasakaalustamine</li>
                            <li>Vajadusel süsteemi ümberehitus</li>

                        </ul>

                        <p class="flush-package__description">
                            Kõige põhjalikum pakett kütteprobleemi lahendamiseks, kus vajalikud
                            puhastus-, hooldus- ja seadistustööd tehakse tervikuna.
                            Sobib süsteemidele, mis vajab põhjalikumat lähenemist.
                        </p>
                    </article>
                </div>

                <div class="flush-centered-action">
                    <a class="flush-btn flush-btn--primary" href="/#form">
                        Küsi oma probleemile sobivat lahendust
                    </a>
                </div>
            </div>
        </section>
        {{-- LÄBIPESU TULEMUSED --}}
        <section class="flush-section flush-benefits" aria-labelledby="flush-benefits-title">
            <div class="flush-container">

                <div class="flush-heading">
                    <p class="flush-eyebrow">Läbipesu võimalik tulemus</p>

                    <h2 id="flush-benefits-title">
                        Mida korras ja puhtam küttesüsteem annab?
                    </h2>

                    <p>
                        Läbipesu eesmärk on taastada süsteemi ringlus ja soojusülekanne.
                        Tegelik tulemus sõltub süsteemi seisukorrast ning sellest,
                        kas probleemi põhjuseks oli mustus, sete või ummistunud voolutee.
                    </p>
                </div>

                <div class="flush-benefits-grid">

                    <article class="flush-benefit-card">
                        <span class="flush-benefit-card__icon" aria-hidden="true">✓</span>
                        <h3>Ühtlasem küte</h3>
                        <p>
                            Radiaatorid ja põrandakütte kontuurid saavad parema ringluse
                            korral ühtlasemalt soojeneda.
                        </p>
                    </article>

                    <article class="flush-benefit-card">
                        <span class="flush-benefit-card__icon" aria-hidden="true">✓</span>
                        <h3>Väiksem energiakulu</h3>
                        <p>
                            Parem soojusülekanne ja taastunud vooluhulgad võivad vähendada
                            kütteseadme ning ringluspumba koormust.
                        </p>
                    </article>

                    <article class="flush-benefit-card">
                        <span class="flush-benefit-card__icon" aria-hidden="true">✓</span>
                        <h3>Töökindlam süsteem</h3>
                        <p>
                            Mustuse eemaldamine aitab vähendada filtrite, ventiilide,
                            pumpade ja soojusvahetite ummistumise ohtu.
                        </p>
                    </article>

                    <article class="flush-benefit-card">
                        <span class="flush-benefit-card__icon" aria-hidden="true">✓</span>
                        <h3>Vaiksem töö</h3>
                        <p>
                            Õhu, muda ja ringlushäirete kõrvaldamine võib vähendada
                            torustikus ja pumbas tekkivat müra.
                        </p>
                    </article>

                    <article class="flush-benefit-card">
                        <span class="flush-benefit-card__icon" aria-hidden="true">✓</span>
                        <h3>Pikem kasutusiga</h3>
                        <p>
                            Puhtamad töötingimused vähendavad kütteseadme ja süsteemi
                            komponentide tarbetut koormust.
                        </p>
                    </article>

                    <article class="flush-benefit-card">
                        <span class="flush-benefit-card__icon" aria-hidden="true">✓</span>
                        <h3>Parem alus uuele kütteseadmele</h3>
                        <p>
                            Puhas süsteem vähendab riski, et vana muda jõuab uue
                            soojuspumba, katla või soojusvaheti sisse.
                        </p>
                    </article>

                </div>
            </div>
        </section>

        {{-- TÖÖPROTSESS --}}
        <section class="flush-section flush-section--dark" aria-labelledby="flush-process-title">
            <div class="flush-container">
                <div class="flush-heading flush-heading--light">
                    <p class="flush-eyebrow">Selge tööprotsess</p>
                    <h2 id="flush-process-title">Kuidas küttesüsteemi läbipesu teostatakse?</h2>
                </div>

                <ol class="flush-process">
                    <li class="flush-process__item">
                        <span>1</span>
                        <div>
                            <h3>Teenuse tellimine, infovahetus ja meetodi valik</h3>
                            <p>Võtke ühendust ja kirjeldage oma probleemi. Töö mahu ja hinna suurusjärgu saab tavaliselt
                                enne visiiti teada.</p>
                        </div>
                    </li>

                    <li class="flush-process__item">
                        <span>2</span>
                        <div>
                            <h3>Süsteemi ettevalmistus, puhastus, loputus</h3>
                            <p> Tutvun süsteemi ehitusega ja teen vajadusel läbipesuks vajalikud
                                ühendustööd. Küttesüsteem loputatakse harude kaupa ning vajadusel
                                puhastatakse eraldi iga radiaator, fancoil või põranda- ja
                                seinakütte kontuur.</p>
                        </div>
                    </li>

                    <li class="flush-process__item">
                        <span>3</span>
                        <div>
                            <h3>Täitmine ja uus küttevesi</h3>
                            <p>Testin objektil täitevee elektrijuhtivust ja pH-d. Vajadusel
                                demineraliseerin vee VDI 2035 põhimõtete järgi ning paigaldan
                                süsteemi järeltäiteks sobiva filtri.</p>
                        </div>
                    </li>

                    <li class="flush-process__item">
                        <span>4</span>
                        <div>
                            <h3>Lõppkontroll</h3>
                            <p>Kontrollin ringlust, rõhku ja soojenemist ning annan soovitused süsteemi edasiseks
                                hoolduseks.</p>
                        </div>
                    </li>
                </ol>
            </div>
        </section>

        {{-- MEETODID --}}
        <section class="flush-section" aria-labelledby="flush-methods-title">
            <div class="flush-container flush-methods-layout">
                <div class="flush-methods-layout__intro">
                    <p class="flush-eyebrow">Puhastusmeetodid</p>
                    <h2 id="flush-methods-title">Meetod valitakse sette ja süsteemi materjalide järgi</h2>
                    <p>
                        Liiga nõrk puhastus ei anna tulemust, kuid põhjendamatult tugev keemia, ja veel selleks mitte
                        sobivate materjalidega, võib süsteemi kahjustada.
                        Seetõttu tuleks kõigepealt olukorda hinnata.
                    </p>

                    <img class="flush-methods-layout__image"
                        src="{{ asset('images/vaikesed/kuttesusteemide-hooldus/Läbipesu-seadmed.webp') }}"
                        alt="Professionaalsed küttesüsteemi läbipesu seadmed" loading="lazy" decoding="async">
                </div>

                <div class="flush-accordion">
                    <details class="flush-method" open>
                        <summary>
                            <span>Õhu ja vee impulssloputus</span>
                            <span class="flush-method__icon" aria-hidden="true"></span>
                        </summary>
                        <div class="flush-method__content">
                            <p>
                                Keemiavaba meetod, mille käigus tekitatakse torustikus vee ja õhu impulsse.
                                Sobib lahtise muda, liikuvate magnetiidiosakeste ja õhumullide eemaldamiseks.
                            </p>
                            <ul>
                                <li>Ohutu tavapärastele küttesüsteemi materjalidele</li>
                                <li>Tõhus põrandakütte kontuuride eraldi loputamisel</li>
                                <li>Sobib kergema ja keskmise saastumise korral</li>
                            </ul>
                        </div>
                    </details>

                    <details class="flush-method">
                        <summary>
                            <span>Happeline keemiapesu</span>
                            <span class="flush-method__icon" aria-hidden="true"></span>
                        </summary>
                        <div class="flush-method__content">
                            <p>
                                Kasutatakse katlakivi, kaltsiumisoolade, oksüdatsioonijääkide ja
                                sobivate rauaühendite lahustamiseks. Pärast pesu süsteem neutraliseeritakse
                                ja loputatakse hoolikalt puhta veega.
                            </p>
                            <ul>
                                <li>Aitab puhastada soojusvaheteid ja torustikku</li>
                                <li>Taastab läbilaskvust ning soojusülekannet</li>
                                <li>Kemikaal valitakse süsteemi materjalide järgi</li>
                            </ul>
                        </div>
                    </details>

                    <details class="flush-method">
                        <summary>
                            <span>Aluseline puhastus</span>
                            <span class="flush-method__icon" aria-hidden="true"></span>
                        </summary>
                        <div class="flush-method__content">
                            <p>
                                Sobib muda, õliste jääkide, orgaanilise mustuse ja biokile eemaldamiseks.
                                Puhastuskemikaal võib jääda süsteemi kokkulepitud ajaks ringlema ning
                                seejärel tehakse lõplik läbipesu.
                            </p>
                            <ul>
                                <li>Sobib vanemate süsteemide taastamiseks</li>
                                <li>Aitab lahti töödelda tugevat ja kihilist mustust</li>
                                <li>Tugeva katlakivi korral kasutatakse happelist puhastust</li>
                            </ul>
                        </div>
                    </details>

                    <details class="flush-method">
                        <summary>
                            <span>VDI 2035 küttevesi ja korrosioonikaitse</span>
                            <span class="flush-method__icon" aria-hidden="true"></span>
                        </summary>
                        <div class="flush-method__content">
                            <p>
                                Pärast põhjalikku läbipesu saab süsteemi täita demineraliseeritud veega
                                ning lisada sobiva inhibiitori. See aitab vähendada uue
                                katlakivi ja korrosiooniprobleemide tekkimise riski.
                            </p>
                            <p>
                                <a href="{{ route('kuttevee-demineraliseerimine') }}">
                                    Loe küttevee demineraliseerimisest
                                </a>
                                <br>
                                <a href="{{ route('kuttevee-inhibiitorid') }}">
                                    Loe küttesüsteemi inhibiitoritest
                                </a>
                            </p>
                        </div>
                    </details>
                </div>
            </div>
        </section>

        {{-- USALDUS --}}
        <section class="flush-section flush-section--soft" aria-labelledby="flush-trust-title">
            <div class="flush-container">
                <div class="flush-heading">
                    <p class="flush-eyebrow">Miks valida Küttesepp?</p>
                    <h2 id="flush-trust-title">Küttesepp on spetsialiseerunud eelkõige soojuspumbaga küttesüsteemide
                        ehitusele</h2>
                </div>

                <div class="flush-trust-grid">
                    <article>
                        <h3>Kompetents</h3>
                        <p>Oman kütte- ja jahutussüsteemide lukksepa ning külmatehniku
                            kutset. Praktiline kogemus küttesüsteemide ehituse, hoolduse ja
                            remondiga võimaldab hinnata süsteemi tervikuna.</p>
                    </article>

                    <article>
                        <h3>Termokaamera kontroll</h3>
                        <p>Vajadusel hindan põrandakütte ja radiaatorite soojenemist enne ning pärast tööd.</p>
                    </article>

                    <article>
                        <h3>Meetod vastavalt probleemile</h3>
                        <p>Kasutan impulssloputust, powerflush’i ja sobivat keemiat ainult põhjendatud vajaduse korral.
                        </p>
                    </article>

                    <article>
                        <h3>Küttevee töötlemine</h3>
                        <p>Mõõdan vee elektrijuhtivust ja pH-d ning täidan süsteemi VDI 2035 põhimõtetel.</p>
                    </article>
                </div>
            </div>
        </section>

        {{-- FAQ --}}
        <section class="flush-section" aria-labelledby="flush-faq-title">
            <div class="flush-container flush-faq-layout">
                <div class="flush-faq-layout__intro">
                    <p class="flush-eyebrow">Korduma kippuvad küsimused</p>
                    <h2 id="flush-faq-title">Küttesüsteemi läbipesu küsimused</h2>
                    <p>
                        Täpne lahendus ja töömaht sõltuvad süsteemi ehitusest,
                        mahust, seisukorrast ning ligipääsust.
                    </p>
                </div>

                <div class="flush-accordion" itemscope itemtype="https://schema.org/FAQPage">
                    <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <details class="flush-method">
                            <summary itemprop="name">
                                <span>Kas küttesüsteemi läbipesu on iga kütteprobleemi korral vajalik?</span>
                                <span class="flush-method__icon" aria-hidden="true"></span>
                            </summary>
                            <div class="flush-method__content" itemscope itemprop="acceptedAnswer"
                                itemtype="https://schema.org/Answer">
                                <p itemprop="text">
                                    Mitte alati. Probleemi põhjuseks võib olla õhk süsteemis, vale seadistus,
                                    tasakaalustamata vooluhulk, ummistunud filter või rikkis ventiil.
                                    Alustan probleemi tuvastamisest.
                                </p>
                            </div>
                        </details>
                    </div>

                    <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <details class="flush-method">
                            <summary itemprop="name">
                                <span>Mis vahe on impulssloputusel ja keemiapesul?</span>
                                <span class="flush-method__icon" aria-hidden="true"></span>
                            </summary>
                            <div class="flush-method__content" itemscope itemprop="acceptedAnswer"
                                itemtype="https://schema.org/Answer">
                                <p itemprop="text">
                                    Impulssloputus eemaldab vee ja õhu impulssidega lahtist muda,
                                    õhumulle ning liikuvat setet. Keemiapesu kasutatakse siis,
                                    kui süsteemis on tugevam sade, katlakivi, õlised jäägid või biokile.
                                    Olenevalt vajadusest teostan ka pärast keemiapesu impulsloputuse.
                                </p>
                            </div>
                        </details>
                    </div>

                    <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <details class="flush-method">
                            <summary itemprop="name">
                                <span>Kas keemiapesu võib kombineerida powerflush-pesuga?</span>
                                <span class="flush-method__icon" aria-hidden="true"></span>
                            </summary>
                            <div class="flush-method__content" itemscope itemprop="acceptedAnswer"
                                itemtype="https://schema.org/Answer">
                                <p itemprop="text">
                                    Jah. Keemia aitab sobivat setet lahti töödelda ning powerflush
                                    või impulssloputus aitab selle süsteemist välja viia.
                                    Tugevalt määrdunud süsteemis annab kombineeritud lahendus põhjalikuma tulemuse.
                                </p>
                            </div>
                        </details>
                    </div>

                    <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <details class="flush-method">
                            <summary itemprop="name">
                                <span>Kui kaua läbipesu kestab?</span>
                                <span class="flush-method__icon" aria-hidden="true"></span>
                            </summary>
                            <div class="flush-method__content" itemscope itemprop="acceptedAnswer"
                                itemtype="https://schema.org/Answer">
                                <p itemprop="text">
                                    Töö kestus sõltub süsteemi suurusest ja valitud meetodist.
                                    Lihtsama impulssloputuse saab sageli teha ühe tööpäevaga, kuid pika toimeajaga
                                    puhastuskeemia kasutamisel tehakse lõplik läbipesu hilisemal kokkulepitud ajal.
                                </p>
                            </div>
                        </details>
                    </div>
                </div>

            </div>
        </section>

        {{-- LÕPU CTA --}}
        <section class="flush-contact" aria-labelledby="flush-contact-title">
            <div class="flush-container flush-contact__content">
                <div>
                    <p class="flush-eyebrow">Esmane hinnang</p>
                    <h2 id="flush-contact-title">Pole kindel, kas süsteem vajab läbipesu?</h2>
                    <p>
                        Saada fotod tehnoruumist ning kirjelda probleemi.
                        Annan esmase hinnangu, kuidas edasi.
                    </p>
                </div>

                <a class="flush-btn flush-btn--light" href="/#form">
                    Küsi lisainfot</a>
            </div>
        </section>
    </div>

    {{-- Teenuselehe struktureeritud andmed --}}
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Service",
            "@id": "{{ url()->current() }}#service",
            "name": "Küttesüsteemi läbipesu",
            "serviceType": "Küttesüsteemi läbipesu ja puhastus",
            "description": "Põrandakütte ja radiaatorite kontroll, impulssloputus, keemiapesu ning küttevee demineraliseerimine.",
            "url": "{{ url()->current() }}",
            "provider": {
                "@type": "LocalBusiness",
                "@id": "https://www.kuttesepp.ee/#business",
                "name": "Küttesepp",
                "url": "https://www.kuttesepp.ee"
            },
            "areaServed": [
                {
                    "@type": "AdministrativeArea",
                    "name": "Harjumaa"
                },
                {
                    "@type": "Country",
                    "name": "Eesti"
                }
            ]
        }
    </script>

    <x-up_scroller />
    <x-cookies />
</x-layout>
