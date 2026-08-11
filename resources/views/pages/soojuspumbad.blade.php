

<x-layout
    :title="'Soojuspumbad Tallinnas ja Harjumaal | Küttesepp'"
    :metaDescription="'Õhk-õhk, õhk-vesi ja maasoojuspumbad Tallinnas ja Harjumaal. Võrdle soojuspumba tüüpe ning leia oma majale sobiv lahendus.'"
    :metaKeywords="'soojuspumbad tallinn, soojuspumbad harjumaa, õhk-õhk soojuspump, õhk-vesi soojuspump, maasoojuspump'"
    :ogImage="asset('images/serp/kuttesepp-og.webp')"
    :metaAuthor="'Tanel Sepp'"
    :robots="'index, follow, max-image-preview:large'"
    :viteCssAssets="[
        'resources/css/pages/soojuspumbad.css'
    ]"
>

    {{-- HERO – jäta sisu ja komponent samaks --}}
    <x-static_carousel
        title="SOOJUSPUMBAD <br><br><span>Tõhusaim ja nutikaim valik sinu kodu kütmiseks</span>"
        content="Soojuspump on energiatõhus kütteseade, mis kasutab ära välisõhus, maapinnas või muus keskkonnas leiduvat soojusenergiat ning suunab selle sinu elamisse.<br><br> Erinevad soojuspumba tüübid – õhk-õhk, õhk-vesi ja maasoojuspumbad – sobivad erinevatele hoonetele, vajadustele ja eelarvetele.<br><br> Õige valik sõltub muu hulgas hoone suurusest, olemasolevast küttesüsteemist, soojustusest, tarbevee vajadusest ja sellest, kas soovid lisaks küttele ka jahutust. Küttesepp aitab võrrelda eri võimalusi ning leida sinu objektile tehniliselt ja majanduslikult sobivaima variandi.<br><br> Kui otsid soojuspumpa eelkõige <strong>Tallinnas või Harjumaal</strong>, saad siit alustada erinevate tüüpide võrdlemisest ja sobiva seadme valikust."
        image="images/taustad/soojuspumbad-üldtaust.webp"
        imageAlt="Soojuspumbad Tallinnas ja Harjumaal"
        eriStiil="object-position: bottom;"
        :textholderStyle="''"
    />

    <div class="heatpump-page">

        {{-- TÜÜBI VALIK --}}
        <section class="heatpump-section">
            <div class="heatpump-container">

                <div class="heatpump-heading">
                    <p class="heatpump-eyebrow">Soojuspumba valik</p>
                    <h2>Milline soojuspump sobib sinu kodule?</h2>
                    <p>
                        Õhk-õhk, õhk-vesi ja maasoojuspump täidavad erinevat sama ülesannet.
                        Sobiv variant sõltub hoone küttevajadusest, olemasolevast küttesüsteemist,
                        vajalikust küttevee temperatuurist ning sellest, kas soovid lisaks
                        ruumide kütmisele ka tarbevett või jahutust.
                    </p>
                </div>

                <div class="heatpump-packages-grid">

                    {{-- ÕHK-ÕHK --}}
                    <article class="heatpump-package">
                        <div class="heatpump-package__top">
                            <span class="heatpump-package__number">01</span>
                            <p class="heatpump-package__method">Lihtne ja soodne</p>
                            <h3>Õhk-õhk soojuspump</h3>
                        </div>

                        <div class="heatpump-package__image">
                            <img
                                data-src="{{ asset('images/vaikesed/bosch/Bosch.webp') }}"
                                alt="Õhk-õhk soojuspump">
                        </div>

                        <ul class="heatpump-checklist">
                            <li>Madal alginvesteering</li>
                            <li>Kütab ja jahutab</li>
                            <li>Kiire paigaldada</li>
                            <li>Ei küta tarbevett ega vesiküttesüsteemi</li>
                        </ul>

                        <p class="heatpump-package__description">
                            Sobib hästi väiksemale eramajale, korterile, suvilale
                            või olemasoleva küttesüsteemi täiendamiseks.
                        </p>

                        <a
                            href="{{ route('soojuspumbad.type', 'ohk-ohk-soojuspumbad') }}"
                            class="heatpump-btn heatpump-btn--secondary">
                            Vaata õhk-õhk soojuspumpasid
                        </a>
                    </article>


                    {{-- ÕHK-VESI --}}
                    <article class="heatpump-package heatpump-package--featured">

                        <div class="heatpump-package__badge">
                            Populaarne eramajale
                        </div>

                        <div class="heatpump-package__top">
                            <span class="heatpump-package__number">02</span>
                            <p class="heatpump-package__method">Küte ja tarbevesi</p>
                            <h3>Õhk-vesi soojuspump</h3>
                        </div>

                        <div class="heatpump-package__image">
                            <img
                                data-src="{{ asset('images/vaikesed/es/Es_soojuspump_vaike.webp') }}"
                                alt="Õhk-vesi soojuspump">
                        </div>

                        <ul class="heatpump-checklist">
                            <li>Küte ja soe tarbevesi</li>
                            <li>Sobib põrandaküttele ja radiaatoritele</li>
                            <li>Ei vaja maakollektorit</li>
                            <li>Sobib hästi põhikütteks</li>
                        </ul>

                        <p class="heatpump-package__description">
                            Sobib põrandakütte või radiaatoritega eramajale ning võimaldab
                            ühe seadmega katta ka sooja tarbevee vajaduse.
                        </p>

                        <a
                            href="{{ route('soojuspumbad.type', 'ohk-vesi-soojuspumbad') }}"
                            class="heatpump-btn heatpump-btn--primary">
                            Vaata õhk-vesi soojuspumpasid
                        </a>
                    </article>


                    {{-- MAASOOJUS --}}
                    <article class="heatpump-package">

                        <div class="heatpump-package__top">
                            <span class="heatpump-package__number">03</span>
                            <p class="heatpump-package__method">Stabiilne põhiküte</p>
                            <h3>Maasoojuspump</h3>
                        </div>

                        <div class="heatpump-package__image">
                            <img
                                data-src="{{ asset('images/vaikesed/alpha/alpha2.webp') }}"
                                alt="Maasoojuspump">
                        </div>

                        <ul class="heatpump-checklist">
                            <li>Stabiilne kasutegur</li>
                            <li>Küte ja soe tarbevesi</li>
                            <li>Madalad kasutuskulud </li>
                            <li>Pikaajaline investeering</li>
                        </ul>

                        <p class="heatpump-package__description">
                            Sobib pikaajaliseks kindlaks põhikütteks, kui kinnistul
                            on võimalik rajada maakollektor või energiakaev.
                        </p>

                        <a
                            href="{{ route('soojuspumbad.type', 'maasoojuspumbad') }}"
                            class="heatpump-btn heatpump-btn--secondary">
                            Vaata maasoojuspumpasid
                        </a>
                    </article>

                </div>
            </div>
        </section>


        {{-- VALIKUT MÕJUTAVAD TEGURID --}}
        <section class="heatpump-section heatpump-section--soft">
            <div class="heatpump-container">

                <div class="heatpump-heading">
                    <p class="heatpump-eyebrow">Süsteem kui tervik</p>
                    <h2>Mida soojuspumba valikul arvestada?</h2>
                    <p>
                        Seadme võimsusest üksi ei piisa. Hea tervik sünnib siis,
                        kui soojuspump sobib kokku maja tegeliku soojusvajaduse,
                        soojusjaotuse ja olemasoleva küttesüsteemiga.
                    </p>
                </div>

                <div class="heatpump-benefits-grid">

                    <article class="heatpump-benefit-card">
                        <span class="heatpump-benefit-card__icon">✓</span>
                        <h3>Hoone soojuskadu</h3>
                        <p>
                            Pumba võimsus tuleb valida maja tegeliku küttevajaduse,
                            mitte ainult ruutmeetrite järgi.
                        </p>
                    </article>

                    <article class="heatpump-benefit-card">
                        <span class="heatpump-benefit-card__icon">✓</span>
                        <h3>Põrandaküte või radiaatorid</h3>
                        <p>
                            Madala temperatuuriga põrandaküte sobib soojuspumbaga eriti hästi.
                            Radiaatorite puhul tuleb hinnata vajalikku küttevee temperatuuri.
                        </p>
                    </article>

                    <article class="heatpump-benefit-card">
                        <span class="heatpump-benefit-card__icon">✓</span>
                        <h3>Soe tarbevesi</h3>
                        <p>
                            Õhk-vesi ja maasoojuspump saavad lisaks maja kütmisele
                            valmistada ka sooja tarbevett.
                        </p>
                    </article>

                    <article class="heatpump-benefit-card">
                        <span class="heatpump-benefit-card__icon">✓</span>
                        <h3>Jahutuse vajadus</h3>
                        <p>
                            Õhk-õhk soojuspump võimaldab väga lihtsalt aktiivset jahutust.
                            Jahutust saab lahendada ka teiste süsteemidega.
                        </p>
                    </article>

                    <article class="heatpump-benefit-card">
                        <span class="heatpump-benefit-card__icon">✓</span>
                        <h3>Elektriliitumine</h3>
                        <p>
                            Enne suurema soojuspumba valikut tuleb arvestada
                            olemasoleva peakaitsme ja elektrisüsteemiga.
                        </p>
                    </article>

                    <article class="heatpump-benefit-card">
                        <span class="heatpump-benefit-card__icon">✓</span>
                        <h3>Investeering</h3>
                        <p>
                            Võrrelda tuleb mitte ainult seadme hinda, vaid ka paigaldust,
                            vajalikke ümberehitusi ja hilisemat kasutuskulu.
                        </p>
                    </article>

                </div>
            </div>
        </section>


        {{-- VALIKUJUHEND --}}
        <section class="heatpump-section">
            <div class="heatpump-container heatpump-diagnosis">

                <div class="heatpump-diagnosis__content">
                    <p class="heatpump-eyebrow">Sobiva tüübi leidmine</p>
                    <h2>Kuidas valida õige soojuspump?</h2>
                    <p>
                        Väiksemas ja hästi jaotatud ruumidega elamus võib õhk-õhk soojuspump
                        olla kõige lihtsam ja soodsam lahendus. See sobib hästi ka lisakütteks
                        ning võimaldab suvel jahutada.
                    </p>
                    <p>
                        Kui majas on vesipõrandaküte või radiaatorid ning soovid samast
                        seadmest ka sooja tarbevett, on tavaliselt sobivam õhk-vesi
                        soojuspump või maasoojuspump.
                    </p>
                    <p>
                        Radiaatorküttega maja puhul on oluline teada, millist küttevee
                        temperatuuri hoone külma ilmaga tegelikult vajab.
                    </p>
                </div>

                <div class="heatpump-diagnosis__columns">

                    <div class="heatpump-diagnosis-card">
                        <h3>Esmaseks hinnanguks</h3>
                        <ul>
                            <li>Maja köetav pind</li>
                            <li>Ehitusaasta ja soojustus</li>
                            <li>Praegune küttesüsteem</li>
                            <li>Põrandaküte või radiaatorid</li>
                            <li>Elektriliitumise amperaas</li>
                            <li>Sooja tarbevee vajadus</li>
                        </ul>
                    </div>

                    <div class="heatpump-diagnosis-card heatpump-diagnosis-card--neutral">
                        <h3>Mida vaatan enne valikut?</h3>
                        <ul>
                            <li>vajalik soojuspumba võimsus</li>
                            <li>vajalik küttevee temperatuur</li>
                            <li>olemasoleva süsteemi sobivus</li>
                            <li>vajalikud ümberehitused</li>
                            <li>paigalduse praktiline teostatavus</li>
                        </ul>
                    </div>

                </div>
            </div>
        </section>


        {{-- MIKS KÜTTESEPP --}}
        <section class="heatpump-section heatpump-section--dark">
            <div class="heatpump-container">

                <div class="heatpump-heading heatpump-heading--light">
                    <p class="heatpump-eyebrow">Küttesepp</p>
                    <h2>Soojuspump on ainult üks osa küttesüsteemist</h2>
                    <p>
                        Hea tulemus sõltub lisaks seadmele ka torustikust,
                        vooluhulkadest, soojusjaotusest, automaatikast
                        ja küttesüsteemi üldisest seisukorrast.
                    </p>
                </div>

                <div class="heatpump-process">

                    <article class="heatpump-process__item">
                        <span>01</span>
                        <h3>Terviklik teenus</h3>
                        <p>
                            Hindan soojuspumpa koos olemasoleva või rajatava
                            küttesüsteemiga, mitte eraldiseisva seadmena.
                        </p>
                    </article>

                    <article class="heatpump-process__item">
                        <span>02</span>
                        <h3>Paigaldus</h3>
                        <p>
                            Vajadusel koos küttesüsteemi ümberehituse,
                            torustiku ja automaatikaga.
                        </p>
                    </article>

                    <article class="heatpump-process__item">
                        <span>03</span>
                        <h3>Hooldus ja remont</h3>
                        <p>
                            Tegelen ka soojuspumpade hoolduse,
                            diagnostika ja remondiga.
                        </p>
                    </article>

                    <article class="heatpump-process__item">
                        <span>04</span>
                        <h3>Tallinn ja Harjumaa</h3>
                        <p>
                            Põhiline teeninduspiirkond on Tallinn ja Harjumaa,
                            kokkuleppel ka mujal Eestis.
                        </p>
                    </article>

                </div>
            </div>
        </section>


        {{-- CTA --}}
        <section class="heatpump-contact">
            <div class="heatpump-container heatpump-contact__content">

                <div>
                    <p class="heatpump-eyebrow">Soojuspumba valik</p>
                    <h2>Pole kindel, milline soojuspump sinu majale sobib?</h2>
                    <p>
                        Saada maja põhiandmed ja olemasoleva küttesüsteemi kirjeldus.
                        Nende põhjal saan teha esmase hinnangu sobivale lahendusele.
                    </p>
                </div>

                <a href="/#form" class="heatpump-btn heatpump-btn--light">
                    Küsi pakkumist
                </a>

            </div>
        </section>

    </div>


    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "CollectionPage",
        "@id": "{{ url()->current() }}#page",
        "url": "{{ url()->current() }}",
        "name": "Soojuspumbad Tallinnas ja Harjumaal",
        "description": "Õhk-õhk, õhk-vesi ja maasoojuspumpade võrdlus ning valik.",
        "mainEntity": {
            "@type": "ItemList",
            "itemListElement": [
                {
                    "@type": "ListItem",
                    "position": 1,
                    "name": "Õhk-õhk soojuspumbad",
                    "url": "{{ route('soojuspumbad.type', 'ohk-ohk-soojuspumbad') }}"
                },
                {
                    "@type": "ListItem",
                    "position": 2,
                    "name": "Õhk-vesi soojuspumbad",
                    "url": "{{ route('soojuspumbad.type', 'ohk-vesi-soojuspumbad') }}"
                },
                {
                    "@type": "ListItem",
                    "position": 3,
                    "name": "Maasoojuspumbad",
                    "url": "{{ route('soojuspumbad.type', 'maasoojuspumbad') }}"
                }
            ]
        }
    }
    </script>

    <x-up_scroller />
    <x-cookies />

</x-layout>