<x-layout
    :title="'Õhksoojuspumbad Tallinnas ja Harjumaal – müük ja paigaldus | Küttesepp'"
    :metaDescription="'Õhksoojuspumbad Tallinnas ja Harjumaal koos nõustamise ja paigaldusega. Võrdle erinevaid seadmeid ning küsi oma kodule sobiva komplekti hinda.'"
    :metaKeywords="'õhk-õhk soojuspump, õhk-õhk soojuspumbad, õhksoojuspump, õhksoojuspumbad, kütmine ja jahutus'"
    :ogImage="asset('images/serp/kuttesepp-og-ohksoojuspumbad.webp')"
    :metaAuthor="'Tanel Sepp'"
    :robots="'index, follow, max-image-preview:large'"
    :viteCssAssets="[
        'resources/css/pages/soojuspumbadTooted.css'
    ]"
>


    {{-- =====================================================
         HERO
         ===================================================== --}}

    <x-static_carousel
        title="ÕHKSOOJUSPUMBAD <br><br><span>Soodsaim valik efektiivseks kütteks</span>"

        content="Õhksoojuspump ehk õhk-õhk soojuspump kasutab välisõhus olevat soojusenergiat ning annab selle siseosa kaudu otse ruumi. Tegemist on ühe lihtsama ja soodsama viisiga elamu kütmiseks ning suvel saab sama seadmega ka jahutada.<br><br>

        Õhksoojuspumba eelisteks on suhteliselt väike soetuskulu, kiire paigaldus ja hea energiatõhusus. Lahendus sobib hästi eramajale, korterile, suvilale või olemasoleva küttesüsteemi täiendamiseks.<br><br>

        Küttesepalt saad õhksoojuspumba koos seadme valiku, nõustamise ja paigaldusega. Kui vajad paigaldust, vaata
        <a href='{{ route('soojuspumpade-paigaldus') }}'
           style='font-weight:700;'
           title='Soojuspumpade paigaldus Tallinnas ja Harjumaal'>
            soojuspumpade paigaldus
        </a>.
        Paigaldust pakun peamiselt <strong>Tallinnas ja Harjumaal</strong>."

        image="images/taustad/ohksoojuspumptaust.webp"
        imageAlt="Õhksoojuspumbad Tallinnas ja Harjumaal"
        :textholderStyle="''"
        eriStiil="object-position: 80% top;"
    />


    {{-- =====================================================
         TOOTEVALIK
         ===================================================== --}}

    <x-tootesektsioonid.soojuspumbad_tootesektsioon
        :products="$products"
        :brands="$brands"
        :typeSlug="$typeSlug"
    />


    {{-- =====================================================
         SISULINE OSA
         ===================================================== --}}

    <div class="airpump-content">


        {{-- =================================================
             KELLELE SOBIB?
             ================================================= --}}

        <section class="airpump-section">

            <div class="airpump-container">

                <div class="airpump-heading">

                    <p class="airpump-eyebrow">
                        Praktiline küttevõimalus
                    </p>

                    <h2>
                        Kellele ja kuhu õhksoojuspump sobib?
                    </h2>

                    <p>
                        Õhksoojuspump sobib hästi nii olemasoleva küttesüsteemi
                        täiendamiseks kui ka väiksema hoone põhikütteks.
                        Sama seadmega saab ruume suvel ka jahutada.
                    </p>

                </div>


                <div class="airpump-benefits-grid">


                    <article class="airpump-benefit-card">

                        <span class="airpump-benefit-card__icon">
                            ✓
                        </span>

                        <h3>
                            Eramajale
                        </h3>

                        <p>
                            Õhksoojuspump aitab vähendada elektri-, ahju- või
                            muu olemasoleva küttesüsteemi kasutamist ning sobib
                            hästi põhikütte toetamiseks.
                        </p>

                    </article>


                    <article class="airpump-benefit-card">

                        <span class="airpump-benefit-card__icon">
                            ✓
                        </span>

                        <h3>
                            Suvilale
                        </h3>

                        <p>
                            Mugav lahendus temperatuuri hoidmiseks ja hoone
                            kiireks soojendamiseks. Paljusid seadmeid saab
                            juhtida ka telefoni kaudu.
                        </p>

                    </article>


                    <article class="airpump-benefit-card">

                        <span class="airpump-benefit-card__icon">
                            ✓
                        </span>

                        <h3>
                            Korterile
                        </h3>

                        <p>
                            Sobib hästi jahutuseks ja võimalusel ka olemasoleva
                            kütte toetamiseks, kui välisosa paigaldamiseks on
                            sobiv asukoht ja vajalikud kooskõlastused.
                        </p>

                    </article>


                    <article class="airpump-benefit-card">

                        <span class="airpump-benefit-card__icon">
                            ✓
                        </span>

                        <h3>
                            Kütmiseks ja jahutamiseks
                        </h3>

                        <p>
                            Talvel annab seade sooja ning suvel töötab
                            konditsioneerina, mistõttu saab ühe seadmega
                            lahendada kaks erinevat vajadust.
                        </p>

                    </article>


                </div>

            </div>

        </section>



        {{-- =================================================
             VALIKU JUHEND
             ================================================= --}}

        <section class="airpump-section airpump-section--soft">

            <div class="airpump-container">

                <div class="airpump-choice">


                    <div class="airpump-choice__content">

                        <p class="airpump-eyebrow">
                            Õige seadme valik
                        </p>

                        <h2>
                            Mida õhksoojuspumba valikul arvestada?
                        </h2>

                        <p>
                            Õhksoojuspumpa ei tasu valida ainult ruutmeetrite
                            või seadme nimivõimsuse järgi. Oluline on hinnata
                            hoone tegelikku soojusvajadust, ruumide paigutust
                            ning seda, millist rolli pump küttesüsteemis täitma hakkab.
                        </p>

                        <p>
                            Sobiva võimsusega ja õigesse kohta paigaldatud
                            seade töötab efektiivsemalt, jaotab soojust paremini
                            ning pakub suuremat kasutusmugavust.
                        </p>

                    </div>


                    <div class="airpump-choice__cards">


                        <article class="airpump-choice-card">

                            <span>01</span>

                            <div>
                                <h3>
                                    Hoone soojusvajadus
                                </h3>

                                <p>
                                    Arvesse tuleb võtta köetavat pinda,
                                    soojustust, akende suurust, planeeringut ja
                                    olemasolevat küttesüsteemi.
                                </p>
                            </div>

                        </article>


                        <article class="airpump-choice-card">

                            <span>02</span>

                            <div>
                                <h3>
                                    Siseosa asukoht
                                </h3>

                                <p>
                                    Soe õhk peab saama ruumides võimalikult
                                    vabalt liikuda. Vale asukoht võib jätta
                                    osa majast oluliselt jahedamaks.
                                </p>
                            </div>

                        </article>


                        <article class="airpump-choice-card">

                            <span>03</span>

                            <div>
                                <h3>
                                    Võimsus külma ilmaga
                                </h3>

                                <p>
                                    Oluline ei ole ainult seadme nimivõimsus,
                                    vaid ka see, kui palju küttevõimsust suudab
                                    pump anda madalama välistemperatuuri juures.
                                </p>
                            </div>

                        </article>


                        <article class="airpump-choice-card">

                            <span>04</span>

                            <div>
                                <h3>
                                    Müratase ja mugavus
                                </h3>

                                <p>
                                    Arvestada tasub sise- ja välisosa
                                    mürataseme, WiFi juhtimise, õhu suunamise
                                    ning muude igapäevaste kasutusomadustega.
                                </p>
                            </div>

                        </article>


                    </div>

                </div>

            </div>

        </section>


        

        {{-- =================================================
             PAIGALDUS
             ================================================= --}}

        <section class="airpump-section">

            <div class="airpump-container">

                <div class="airpump-install">


                    <div class="airpump-install__content">

                        <p class="airpump-eyebrow">
                            Seade ja paigaldus
                        </p>

                        <h2>
                            Õhksoojuspump koos professionaalse paigaldusega
                        </h2>

                        <p>
                            Hea õhksoojuspump ei anna soovitud tulemust, kui
                            selle võimsus või paigalduskoht on valesti valitud.
                            Paigaldamisel tuleb arvestada nii siseosa õhuvoolu,
                            välisosa asukoha, kondensaadi äravoolu kui ka
                            külmaine torustiku korrektse teostusega.
                        </p>

                        <p>
                            Aitan valida hoonele sobiva seadme ja paigalduskoha
                            ning teen paigalduse peamiselt Tallinnas ja Harjumaal.
                        </p>


                        <a
                            class="airpump-text-link"
                            href="{{ route('soojuspumpade-paigaldus') }}"
                        >
                            Loe lähemalt soojuspumpade paigaldusest →
                        </a>

                    </div>


                    <div class="airpump-install__box">

                        <p class="airpump-install__label">
                            Sobiva seadme ja võimaluse leidmiseks
                        </p>

                        <h3>
                            Saada maja põhiinfo
                        </h3>

                        <ul>
                            <li>Köetav pind ja hoone tüüp</li>
                            <li>Olemasolev küttesüsteem</li>
                            <li>Ruumide paigutus</li>
                            <li>Soovitud küte, jahutus või mõlemad</li>
                        </ul>

                        <a
                            class="airpump-btn airpump-btn--primary"
                            href="/#form"
                        >
                            Küsi pakkumist
                        </a>

                    </div>


                </div>

            </div>

        </section>



        {{-- =================================================
             LÕPU CTA
             ================================================= --}}

        <section class="airpump-contact">

            <div class="airpump-container">

                <div class="airpump-contact__content">

                    <div>

                        <p class="airpump-eyebrow">
                            Küsi nõu
                        </p>

                        <h2>
                            Ei ole kindel, milline õhksoojuspump sinu majale sobib?
                        </h2>

                        <p>
                            Kirjelda maja, köetavat pinda ja olemasolevat
                            küttesüsteemi. Aitan valida sobiva seadme ja
                            paigalduslahenduse.
                        </p>

                    </div>


                    <a
                        class="airpump-btn airpump-btn--light"
                        href="/#form"
                    >
                        Küsi pakkumist
                    </a>

                </div>

            </div>

        </section>


    </div>


    <x-up_scroller />

    <x-cookies />


</x-layout>