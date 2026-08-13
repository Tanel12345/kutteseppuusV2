<x-layout
    :title="'Külmaringi diagnostika ja remont Tallinnas ja Harjumaal | Küttesepp'"
    :metaDescription="'Soojuspumpade külmaringi diagnostika ja remont Tallinnas ja Harjumaal. Külmaringi tööparameetrite kontroll, lekkeotsing, kompressori ja komponentide diagnostika ning külmainega seotud remonditööd.'"
    :ogImage="asset('images/serp/kuttesepp-og-hooldus.webp')"
    :metaAuthor="'Tanel Sepp'"
    :robots="'index, follow, max-image-preview:large'"
    :viteCssAssets="[
        'resources/css/pages/tootelehed.css',
        'resources/css/pages/teenustelehed.css',
        'resources/css/kuttesusteemiTeenus1.css',
    ]"
    :viteJsAssets="['resources/js/pages/teenustelehed.js']"
>
    {{-- HERO --}}
    <section class="uper" id="uperid">
        <div class="carousel">
            <div class="taustadiv">
                <div class="textholderdiv">
                    <div class="textholder">
                        <h1>Külmaringi diagnostika ja remont</h1>
                    </div>
                </div>
                <img class="taust"
                    src="{{ asset('images/taustad/kulmaringi-diagnostika-taust.webp') }}"
                    alt="Soojuspumba külmaringi diagnostika ja remont"
                    fetchpriority="high"
                    decoding="async">
            </div>
        </div>
    </section>
    <div class="flush-page">
        {{-- SISSEJUHATUS --}}
        <section class="flush-intro" aria-labelledby="kulmaring-intro-title">
            <div class="flush-container flush-intro__grid">
                <div class="flush-intro__content">
                    <p class="flush-eyebrow">Diagnostika enne remonti</p>
                    <h2 id="kulmaring-intro-title">Külmaringi riket ei saa hinnata ainult veakoodi järgi</h2>
                    <p class="flush-lead">
                        Kui soojuspump ei anna enam vajalikku küttevõimsust, töötab ebastabiilselt või annab külmaringiga seotud veateate, tuleb enne remonti välja selgitada probleemi tegelik põhjus. Külmaine puudus on ainult üks võimalikest põhjustest.
                    </p>
                    <p>
                        <strong>Küttesepp ei paku teenust, mille sisuks on ainult külmaine lisamine teadaoleva või kahtlustatava lekke korral.</strong>
                        Kui külmainet on süsteemist kadunud, tuleb esmalt leida lekke põhjus, hinnata remondivõimalust ja vajadusel lekkekoht parandada.<br><br>
                    </p>
                    <ul class="flush-feature-list" aria-label="Külmaringi diagnostika põhilised tööd">
                        <li>Külmaringi rõhkude ja temperatuuride kontroll</li>
                        <li>Kompressori ja külmaringi komponentide töö hindamine</li>
                        <li>Külmaine lekke otsing ja lekkekoha tuvastamine</li>
                        <li>Remont, lekkekindluse kontroll, vaakum ja külmaine täitmine vastavalt vajadusele</li>
                    </ul>
                    <div class="flush-actions">
                        <a class="flush-btn flush-btn--primary" href="/#form">Küsi diagnostikat</a>
                        <a class="flush-btn flush-btn--secondary" href="#kulmaring-diagnostika">Mida kontrollin?</a>
                    </div>
                    <p class="flush-location">
                        Teenus eelkõige Tallinnas ja Harjumaal, sobivate tööde puhul kokkuleppel ka mujal Eestis.
                    </p>
                </div>
                <figure class="flush-intro__media">
                    <img src="{{ asset('images/vaikesed/kuttesusteemide-hooldus/kuttesusteemi-hoolustood.webp') }}"
                        alt="Soojuspumba külmaringi tööparameetrite kontroll"
                        loading="lazy"
                        decoding="async">
                    <figcaption>
                        Diagnostika eesmärk on leida rikke põhjus enne külmaringi avamist või külmaine lisamist.
                    </figcaption>
                </figure>
            </div>
        </section>
        {{-- SÜMPTOMID --}}
        <section class="flush-section flush-section--soft" aria-labelledby="kulmaring-signs-title">
            <div class="flush-container">
                <div class="flush-heading">
                    <p class="flush-eyebrow">Millal külmaringi kontrollida?</p>
                    <h2 id="kulmaring-signs-title">Tunnused, mis võivad viidata külmaringi probleemile</h2>
                    <p>
                        Ükski neist sümptomitest ei tähenda automaatselt külmaine leket või kompressori riket. Sarnaseid probleeme võivad põhjustada ka õhu- või veeringlus, andurid, automaatika ja muud seadme komponendid.
                    </p>
                </div>
                <div class="flush-signs-grid">
                    <article class="flush-sign-card">
                        <span class="flush-sign-card__number" aria-hidden="true">01</span>
                        <h3>Küttevõimsus on langenud</h3>
                        <p>Soojuspump töötab pikalt, kuid ei saavuta enam varasemat küttevõimsust või vajalikku pealevoolutemperatuuri.</p>
                    </article>
                    <article class="flush-sign-card">
                        <span class="flush-sign-card__number" aria-hidden="true">02</span>
                        <h3>Seade annab veateate</h3>
                        <p>Juhtautomaatika näitab rõhu, temperatuuri, kompressori või muu külmaringiga seotud töö kõrvalekallet.</p>
                    </article>
                    <article class="flush-sign-card">
                        <span class="flush-sign-card__number" aria-hidden="true">03</span>
                        <h3>Kompressor töötab ebatavaliselt</h3>
                        <p>Kompressor käivitub ja seiskub liiga sageli, töötab ebatavalise koormusega või seadme tööheli on muutunud.</p>
                    </article>
                    <article class="flush-sign-card">
                        <span class="flush-sign-card__number" aria-hidden="true">04</span>
                        <h3>Kahtlus külmaine lekkele</h3>
                        <p>Seadme tööparameetrid või varasem remondiajalugu annavad põhjust kontrollida külmaringi lekkekindlust.</p>
                    </article>
                    <article class="flush-sign-card">
                        <span class="flush-sign-card__number" aria-hidden="true">05</span>
                        <h3>Sulatamine ei tööta õigesti</h3>
                        <p>Õhksoojuspumba välisosa jäätub tavapärasest rohkem või sulatustsükkel ei toimi ootuspäraselt.</p>
                    </article>
                    <article class="flush-sign-card">
                        <span class="flush-sign-card__number" aria-hidden="true">06</span>
                        <h3>Elektrikulu on muutunud</h3>
                        <p>Sama küttevajaduse juures töötab kompressor pikemalt või seadme energiakulu on märgatavalt kasvanud.</p>
                    </article>
                </div>
            </div>
        </section>
        {{-- DIAGNOSTIKA --}}
        <section class="flush-section" id="kulmaring-diagnostika" aria-labelledby="kulmaring-diagnosis-title">
            <div class="flush-container">
                <div class="flush-diagnosis">
                    <div class="flush-diagnosis__content">
                        <p class="flush-eyebrow">Probleemi põhjuse eristamine</p>
                        <h2 id="kulmaring-diagnosis-title">Kõik soojuspumba rikked ei ole külmaringi rikked</h2>
                        <p>
                            Enne külmaringiga seotud remonti kontrollin, kas sümptomit põhjustab tegelikult külmaring või on probleem hoopis õhuvoolus, küttesüsteemi veeringluses, anduris, ventiilis, automaatikas või elektrilises komponendis.
                        </p>
                    </div>
                    <div class="flush-diagnosis__columns">
                        <div class="flush-diagnosis-card">
                            <h3>Probleem võib olla külmaringis</h3>
                            <ul>
                                <li>Külmaine leke või vale külmaine kogus</li>
                                <li>Kompressori tööprobleem</li>
                                <li>Paisventiili või EEV töö kõrvalekalle</li>
                                <li>4-tee ventiili probleem</li>
                                <li>Rõhu- või temperatuurianduri viga</li>
                            </ul>
                        </div>
                        <div class="flush-diagnosis-card flush-diagnosis-card--neutral">
                            <h3>Probleem võib olla mujal</h3>
                            <ul>
                                <li>Puudulik õhuvool</li>
                                <li>Ummistunud filter või halb veeringlus</li>
                                <li>Liiga väike küttesüsteemi vooluhulk</li>
                                <li>Automaatika või seadistuse probleem</li>
                                <li>Elektriühendus või toiteprobleem</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- TEENUSE ETAPID --}}
        <section class="flush-section flush-section--soft" aria-labelledby="kulmaring-packages-title">
            <div class="flush-container">
                <div class="flush-heading">
                    <p class="flush-eyebrow">Diagnostikast remondini</p>
                    <h2 id="kulmaring-packages-title">Külmaringi kontroll ja remont vastavalt leitud veale</h2>
                    <p>
                        Töömaht sõltub rikkest. Mõnikord piisab tööparameetrite kontrollist ja vea põhjuse tuvastamisest, teinekord on vajalik lekkeotsing või külmaringi avamine ja remont.
                    </p>
                </div>
                <div class="flush-packages-grid">
                    <article class="flush-package">
                        <div class="flush-package__top">
                            <span class="flush-package__number">01</span>
                            <p class="flush-package__method">Tööparameetrite kontroll</p>
                            <h3>Külmaringi diagnostika</h3>
                        </div>
                        <ul class="flush-checklist">
                            <li>Veakoodide ja tööajaloo kontroll</li>
                            <li>Töötemperatuuride hindamine</li>
                            <li>Külmaringi rõhkude kontroll vastavalt vajadusele</li>
                            <li>Kompressori töö hindamine</li>
                            <li>Andurite ja juhtimise kontroll</li>
                        </ul>
                        <p class="flush-package__description">
                            Eesmärk on selgitada välja, millises süsteemi osas probleem tegelikult asub ja kas külmaringi avamine on üldse vajalik.
                        </p>
                    </article>
                    <article class="flush-package">
                        <div class="flush-package__top">
                            <span class="flush-package__number">02</span>
                            <p class="flush-package__method">Lekkeotsing ja remont</p>
                            <h3>Külmaine lekke tuvastamine</h3>
                        </div>
                        <ul class="flush-checklist">
                            <li>Lekkeotsing sobiva meetodiga</li>
                            <li>Lekkekindluse kontroll vastavalt vajadusele</li>
                            <li>Lekkekoha lokaliseerimine</li>
                            <li>Remondivõimaluse hindamine</li>
                            <li>Lekkekoha remont võimaluse korral</li>
                        </ul>
                        <p class="flush-package__description">
                            Kui süsteemis on külmaine puudus, tuleb enne täitmist välja selgitada selle põhjus. Küttesepp ei tee ainult külmaine juurde lisamise teenust lekke kõrvaldamiseta.
                        </p>
                    </article>
                    <article class="flush-package">
                        <div class="flush-package__top">
                            <span class="flush-package__number">03</span>
                            <p class="flush-package__method">Remondijärgne taastamine</p>
                            <h3>Vaakum ja külmaine täitmine</h3>
                        </div>
                        <ul class="flush-checklist">
                            <li>Remondijärgne lekkekindluse kontroll</li>
                            <li>Vajadusel süsteemi kuivatamine vaakumiga</li>
                            <li>Külmaine laadimine vastavalt seadmele</li>
                            <li>Seadme käivitamine</li>
                            <li>Tööparameetrite lõppkontroll</li>
                        </ul>
                        <p class="flush-package__description">
                            Pärast külmaringi remonti kontrollitakse süsteemi uuesti enne seadme tavapärasesse kasutusse andmist.
                        </p>
                    </article>
                </div>
                <div class="flush-centered-action">
                    <a class="flush-btn flush-btn--primary" href="/#form">Küsi külmaringi diagnostikat</a>
                </div>
            </div>
        </section>
        {{-- PÕLEVAD KÜLMAINED --}}
        <section class="flush-section" aria-labelledby="flammable-title">
            <div class="flush-container">
                <div class="flush-heading">
                    <p class="flush-eyebrow">R32, R290 ja kaasaegsed külmained</p>
                    <h2 id="flammable-title">Põlevate külmainetega soojuspumbad vajavad sobivaid töövõtteid</h2>
                    <p>
                        Kaasaegsetes soojuspumpades kasutatakse järjest rohkem madala keskkonnamõjuga külmaineid, millest osa on põlevad või kergelt põlevad. Seetõttu tuleb diagnostika ja remondi käigus arvestada nii konkreetse külmaine omaduste kui ka seadme konstruktsiooniga.
                    </p>
                </div>
                <div class="flush-diagnosis__columns">
                    <div class="flush-diagnosis-card">
                        <h3>Ohutu töökorraldus</h3>
                        <ul>
                            <li>Sobiv ventilatsioon tööpiirkonnas</li>
                            <li>Süüteallikate vältimine</li>
                            <li>Sobivate mõõte- ja hooldusseadmete kasutamine</li>
                            <li>Lekkekindluse kontroll pärast remonti</li>
                            <li>Külmaine omadustega arvestamine kogu töö jooksul</li>
                        </ul>
                    </div>
                    <div class="flush-diagnosis-card flush-diagnosis-card--neutral">
                        <h3>R290 ja R32 ei ole sama</h3>
                        <ul>
                            <li>R290 on süsivesinikust külmaine</li>
                            <li>R32 on teise põlevusklassiga külmaine</li>
                            <li>Hooldusvõtted sõltuvad konkreetsest külmainest</li>
                            <li>Arvestada tuleb seadme tootja juhistega</li>
                            <li>Töömeetod valitakse seadme ja külmaine järgi</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        {{-- KOMPONENDID --}}
        <section class="flush-section flush-section--soft" aria-labelledby="kulmaring-components-title">
            <div class="flush-container flush-methods-layout">
                <div class="flush-methods-layout__intro">
                    <p class="flush-eyebrow">Mida külmaringis kontrollitakse?</p>
                    <h2 id="kulmaring-components-title">Rikke põhjus võib olla ühes komponendis või mitme teguri koosmõjus</h2>
                    <p>
                        Üksikut rõhku või temperatuuri ei saa hinnata ülejäänud süsteemist eraldi. Diagnostika sõltub soojuspumba tüübist, külmainest, töörežiimist ja konkreetsest rikkest.
                    </p>
                    <img class="flush-methods-layout__image"
                        src="{{ asset('images/vaikesed/kuttesusteemide-hooldus/soojuspumba-remont.webp') }}"
                        alt="Soojuspumba külmaringi remont ja diagnostika"
                        loading="lazy"
                        decoding="async">
                </div>
                <div class="flush-accordion">
                    <details class="flush-method" open>
                        <summary>
                            <span>Kompressor</span>
                            <span class="flush-method__icon" aria-hidden="true"></span>
                        </summary>
                        <div class="flush-method__content">
                            <p>Kontrollin kompressori käivitumist, töörežiimi, elektrilist koormust ja külmaringi käitumist kompressori töötamise ajal.</p>
                        </div>
                    </details>
                    <details class="flush-method">
                        <summary>
                            <span>Paisventiil või EEV</span>
                            <span class="flush-method__icon" aria-hidden="true"></span>
                        </summary>
                        <div class="flush-method__content">
                            <p>Paisventiili vale juhtimine, ummistus või mehhaaniline probleem võib mõjutada külmaringi tööparameetreid ja seadme võimsust.</p>
                        </div>
                    </details>
                    <details class="flush-method">
                        <summary>
                            <span>4-tee ventiil</span>
                            <span class="flush-method__icon" aria-hidden="true"></span>
                        </summary>
                        <div class="flush-method__content">
                            <p>Reversiivsetes soojuspumpades võib 4-tee ventiili rike mõjutada kütte-, jahutus- või sulatustsükli tööd.</p>
                        </div>
                    </details>
                    <details class="flush-method">
                        <summary>
                            <span>Andurid ja külmaine leke</span>
                            <span class="flush-method__icon" aria-hidden="true"></span>
                        </summary>
                        <div class="flush-method__content">
                            <p>Vigane rõhu- või temperatuuriandur võib matkida külmaringi riket. Külmaine puuduse korral tuleb samal ajal hinnata ka lekke võimalust.</p>
                        </div>
                    </details>
                </div>
            </div>
        </section>
        {{-- LEKKEPOLIITIKA --}}
        <section class="flush-section" aria-labelledby="kulmaring-leak-title">
            <div class="flush-container flush-intro__grid">
                <div class="flush-intro__content">
                    <p class="flush-eyebrow">Külmaine leke</p>
                    <h2 id="kulmaring-leak-title">Külmaine lisamine ei ole lekke remont</h2>
                    <p class="flush-lead">
                        Kui süsteemist on külmainet kadunud, tuleb välja selgitada, kust ja miks see kadus. Lekke asukoht ja remondivõimalus sõltuvad sellest, kas probleem on ühenduses, torustikus, soojusvahetis või mõnes muus komponendis.
                    </p>
                    <p>
                        <strong>Küttesepp ei täida lekkivat külmaringi lihtsalt uuesti külmainega ja ei jäta teadaolevat leket kõrvaldamata.</strong>
                        Kui lekkekohta ei ole võimalik mõistlikult remontida, arutame enne edasisi töid läbi remondi otstarbekuse ja võimalikud alternatiivid.<br><br>
                    </p>
                    <ul class="flush-feature-list">
                        <li>Lekkekoha otsimine ja lokaliseerimine</li>
                        <li>Remondivõimaluse hindamine</li>
                        <li>Remondijärgne lekkekindluse kontroll</li>
                        <li>Külmaringi töö kontroll pärast süsteemi taastamist</li>
                    </ul>
                </div>
                <figure class="flush-intro__media">
                    <img src="{{ asset('images/vaikesed/kuttesusteemide-hooldus/soojuspumba-aurusti-defekt.webp') }}"
                        alt="Soojuspumba aurusti külmaringi defekt ja remont"
                        loading="lazy"
                        decoding="async">
                    <figcaption>
                        Kõiki lekkeid ei ole majanduslikult mõistlik remontida. Diagnostika käigus saab hinnata rikke asukohta ja remondi otstarbekust.
                    </figcaption>
                </figure>
            </div>
        </section>
        {{-- TÖÖPROTSESS --}}
        <section class="flush-section flush-section--dark" aria-labelledby="kulmaring-process-title">
            <div class="flush-container">
                <div class="flush-heading flush-heading--light">
                    <p class="flush-eyebrow">Selge tööprotsess</p>
                    <h2 id="kulmaring-process-title">Kuidas külmaringi diagnostika ja remont toimub?</h2>
                </div>
                <ol class="flush-process">
                    <li class="flush-process__item">
                        <span>1</span>
                        <div>
                            <h3>Probleemi kirjeldus</h3>
                            <p>Kontrollin veateated, sümptomid ja seadme käitumise ning küsin vajadusel varasema remondiajaloo kohta.</p>
                        </div>
                    </li>
                    <li class="flush-process__item">
                        <span>2</span>
                        <div>
                            <h3>Seadme töö kontroll</h3>
                            <p>Kontrollin õhu- või veepoole töötingimused, andurid, automaatika ja külmaringi tööd mõjutavad tegurid.</p>
                        </div>
                    </li>
                    <li class="flush-process__item">
                        <span>3</span>
                        <div>
                            <h3>Külmaringi diagnostika</h3>
                            <p>Hindan vajadusel rõhke, temperatuure, kompressori tööd ja muid külmaringi tööparameetreid.</p>
                        </div>
                    </li>
                    <li class="flush-process__item">
                        <span>4</span>
                        <div>
                            <h3>Lekkeotsing või remont</h3>
                            <p>Kui probleem asub külmaringis, teen vajaliku lekkeotsingu ja hindan remondivõimalust.</p>
                        </div>
                    </li>
                    <li class="flush-process__item">
                        <span>5</span>
                        <div>
                            <h3>Lõppkontroll</h3>
                            <p>Pärast remonti kontrollin uuesti külmaringi ja kogu soojuspumba tööd.</p>
                        </div>
                    </li>
                </ol>
            </div>
        </section>
        {{-- SEO / SEOS REMONDIGA --}}
        <section class="flush-section" aria-labelledby="kulmaring-remont-title">
            <div class="flush-container">
                <div class="flush-heading">
                    <p class="flush-eyebrow">Laiem veaotsing</p>
                    <h2 id="kulmaring-remont-title">Kui probleem ei ole külmaringis</h2>
                    <p>
                        Kui diagnostika käigus selgub, et probleem on elektroonikas, anduris, ventilaatoris, ringluspumbas, ventiilis või küttesüsteemi poolel, kuulub töö üldisema
                        <a href="{{ route('soojuspumpade-remont') }}">soojuspumpade remondi</a>
                        alla. Vajadusel võib enne remonti olla vajalik ka
                        <a href="{{ route('soojuspumpade-hooldus') }}">soojuspumba hooldus</a>.
                    </p>
                </div>
            </div>
        </section>
        {{-- FAQ --}}
        <section class="flush-section flush-section--soft" aria-labelledby="kulmaring-faq-title">
            <div class="flush-container flush-faq-layout">
                <div class="flush-faq-layout__intro">
                    <p class="flush-eyebrow">Korduma kippuvad küsimused</p>
                    <h2 id="kulmaring-faq-title">Külmaringi diagnostika küsimused</h2>
                    <p>Külmaringi diagnostika ja remondi töömaht sõltub soojuspumba tüübist, rikkest ja seadme seisukorrast.</p>
                </div>
                <div class="flush-accordion" itemscope itemtype="https://schema.org/FAQPage">
                    <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <details class="flush-method">
                            <summary itemprop="name">
                                <span>Kas külmainet saab lihtsalt juurde lisada?</span>
                                <span class="flush-method__icon" aria-hidden="true"></span>
                            </summary>
                            <div class="flush-method__content" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                <p itemprop="text">
                                    Kui külmaine puuduse põhjuseks on leke, ei ole ainult külmaine lisamine probleemi lahendus. Küttesepp ei paku lekke korral üksnes juurde täitmise teenust – esmalt tuleb välja selgitada lekke põhjus ja hinnata remondivõimalust.
                                </p>
                            </div>
                        </details>
                    </div>
                    <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <details class="flush-method">
                            <summary itemprop="name">
                                <span>Kas veakood näitab täpselt, milline detail on rikkis?</span>
                                <span class="flush-method__icon" aria-hidden="true"></span>
                            </summary>
                            <div class="flush-method__content" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                <p itemprop="text">
                                    Tavaliselt mitte. Veakood näitab sageli süsteemi osa või kõrvalekallet, kuid tegeliku põhjuse leidmiseks tuleb kontrollida seadme tööparameetreid ja seotud komponente.
                                </p>
                            </div>
                        </details>
                    </div>
                    <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <details class="flush-method">
                            <summary itemprop="name">
                                <span>Kas hooldate ka R32 ja R290 soojuspumpasid?</span>
                                <span class="flush-method__icon" aria-hidden="true"></span>
                            </summary>
                            <div class="flush-method__content" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                <p itemprop="text">
                                    Külmaringiga seotud töömeetod valitakse alati vastavalt konkreetsele seadmele ja kasutatavale külmainele. R32 ja R290 puhul tuleb arvestada nende erinevate omaduste ja ohutusnõuetega.
                                </p>
                            </div>
                        </details>
                    </div>
                    <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <details class="flush-method">
                            <summary itemprop="name">
                                <span>Kas iga külmaringi riket tasub remontida?</span>
                                <span class="flush-method__icon" aria-hidden="true"></span>
                            </summary>
                            <div class="flush-method__content" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                <p itemprop="text">
                                    Mitte tingimata. Remondi otstarbekus sõltub rikkest, seadme vanusest, varuosade saadavusest ja remondi maksumusest. Diagnostika aitab enne suurema töö alustamist hinnata, milline lahendus on mõistlik.
                                </p>
                            </div>
                        </details>
                    </div>
                </div>
            </div>
        </section>
        {{-- LÕPU CTA --}}
        <section class="flush-contact" aria-labelledby="kulmaring-contact-title">
            <div class="flush-container flush-contact__content">
                <div>
                    <p class="flush-eyebrow">Soojuspump ei tööta õigesti?</p>
                    <h2 id="kulmaring-contact-title">Kirjelda riket ja saada seadme andmed</h2>
                    <p>
                        Saada soojuspumba mark ja mudel, veakood ning võimalikult täpne kirjeldus sellest, mida seade teeb või tegemata jätab. Võimalusel lisa fotod seadme andmesildist ja juhtpaneeli veateatest.
                    </p>
                </div>
                <a class="flush-btn flush-btn--light" href="/#form">Küsi diagnostikat</a>
            </div>
        </section>
    </div>
    {{-- Teenuselehe struktureeritud andmed --}}
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Service",
            "@id": "{{ url()->current() }}#service",
            "name": "Külmaringi diagnostika ja remont",
            "serviceType": "Soojuspumpade külmaringi diagnostika ja remont",
            "description": "Soojuspumpade külmaringi diagnostika, lekkeotsing, külmaringi komponentide kontroll ja remonditööd.",
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