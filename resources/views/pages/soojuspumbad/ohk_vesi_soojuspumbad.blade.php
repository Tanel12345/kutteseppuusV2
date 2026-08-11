<x-layout
    :title="'Õhk-vesi soojuspumbad Tallinnas ja Harjumaal – müük ja paigaldus | Küttesepp'"
    :metaDescription="'Õhk-vesi soojuspumbad Tallinnas ja Harjumaal koos nõustamise ja paigaldusega. Lahendus põrandakütte, radiaatorite ja tarbevee soojendamiseks. Küsi sobiva komplekti hinda.'"
    :metaKeywords="'õhk-vesi soojuspump, õhk-vesi soojuspumbad, õhk-vesi küte, õhk-vesi küttesüsteem, tarbevee soojendamine, põrandakütte soojuspump'"
    :ogImage="asset('images/serp/kuttesepp-og-ohkvesisoojuspumbad.webp')"
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

        title="ÕHK-VESI SOOJUSPUMBAD <br><br><span>Tõhus küttevõimalus kogu majale</span>"

        content="Õhk-vesi soojuspump kasutab välisõhus olevat soojusenergiat ning annab selle edasi hoone vesiküttesüsteemile. Soojuspumbaga saab kütta põrandakütet või radiaatoreid ning valmistada ka sooja tarbevett.<br><br>

        Õhk-vesi soojuspump sobib nii uue küttesüsteemi ehitamiseks kui ka olemasoleva katla või muu veeküttesüsteemi asendamiseks. Õigesti valitud seadme puhul saab suure osa maja küttevajadusest katta automaatselt ja energiatõhusalt.<br><br>

        Küttesepalt saad õhk-vesi soojuspumba koos sobiva lahenduse valiku, nõustamise ja paigaldusega. Vaata ka
        <a href='{{ route('soojuspumpade-paigaldus') }}'
           style='font-weight:700;'
           title='Soojuspumpade paigaldus Tallinnas ja Harjumaal'>
            soojuspumpade paigaldust
        </a>.
        Töid teen peamiselt <strong>Tallinnas ja Harjumaal</strong> ning kokkuleppel ka mujal Eestis."

        image="images/taustad/ohk-vesi-soojuspumbad.webp"
        imageAlt="Õhk-vesi soojuspumbad Tallinnas ja Harjumaal"
        :textholderStyle="''"
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
                        Kogu maja küte
                    </p>

                    <h2>
                        Kellele õhk-vesi soojuspump sobib?
                    </h2>

                    <p>
                        Õhk-vesi soojuspump sobib eelkõige hoonele, kus kasutatakse
                        vesipõrandakütet või radiaatoreid ning soovitakse ühe
                        süsteemiga lahendada nii ruumide küte kui ka tarbevee
                        valmistamine.
                    </p>

                </div>


                <div class="airpump-benefits-grid">


                    <article class="airpump-benefit-card">

                        <span class="airpump-benefit-card__icon">
                            ✓
                        </span>

                        <h3>
                            Põrandaküttega majale
                        </h3>

                        <p>
                            Madala temperatuuriga põrandaküte sobib väga hästi
                            soojuspumbaga ning võimaldab süsteemil töötada
                            efektiivselt suure osa kütteperioodist.
                        </p>

                    </article>


                    <article class="airpump-benefit-card">

                        <span class="airpump-benefit-card__icon">
                            ✓
                        </span>

                        <h3>
                            Radiaatorküttega majale
                        </h3>

                        <p>
                            Õhk-vesi soojuspump võib sobida ka olemasoleva
                            radiaatorküttega, kuid enne seadme valikut tuleb
                            hinnata vajalikku pealevoolutemperatuuri.
                        </p>

                    </article>


                    <article class="airpump-benefit-card">

                        <span class="airpump-benefit-card__icon">
                            ✓
                        </span>

                        <h3>
                            Katla asendamiseks
                        </h3>

                        <p>
                            Olemasoleva elektri-, õli-, gaasi- või muu katla
                            saab paljudel juhtudel asendada automaatse
                            õhk-vesi soojuspumbaga.
                        </p>

                    </article>


                    <article class="airpump-benefit-card">

                        <span class="airpump-benefit-card__icon">
                            ✓
                        </span>

                        <h3>
                            Küte ja tarbevesi
                        </h3>

                        <p>
                            Sama süsteem saab kütta maja ja valmistada sooja
                            tarbevett, mistõttu ei ole vaja eraldi
                            kütteseadet boileri jaoks.
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
                            Mida õhk-vesi soojuspumba valikul arvestada?
                        </h2>

                        <p>
                            Õhk-vesi soojuspumba valikul ei piisa ainult maja
                            ruutmeetrite teadmisest. Seadme võimsus ja süsteemi
                            ülesehitus tuleb sobitada hoone tegeliku
                            soojusvajaduse ning olemasoleva küttesüsteemiga.
                        </p>

                        <p>
                            Eriti oluline on teada, millist küttevee temperatuuri
                            vajavad radiaatorid või põrandaküte külma ilmaga.
                            Mida madalama temperatuuriga saab maja soojaks,
                            seda paremini saab soojuspump töötada.
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
                                    Seadme võimsus peab lähtuma maja
                                    soojuskaost, mitte ainult köetava pinna
                                    suurusest.
                                </p>

                            </div>

                        </article>


                        <article class="airpump-choice-card">

                            <span>02</span>

                            <div>

                                <h3>
                                    Vajalik küttevee temperatuur
                                </h3>

                                <p>
                                    Põrandaküte töötab tavaliselt madalama
                                    temperatuuriga kui radiaatorid. See mõjutab
                                    otseselt soojuspumba efektiivsust ja
                                    sobiva seadme valikut.
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
                                    Oluline on võrrelda, kui palju
                                    küttevõimsust suudab seade anda ka
                                    madalama välistemperatuuri korral.
                                </p>

                            </div>

                        </article>


                        <article class="airpump-choice-card">

                            <span>04</span>

                            <div>

                                <h3>
                                    Tarbevesi ja süsteemi ülesehitus
                                </h3>

                                <p>
                                    Arvestada tuleb tarbevee vajaduse,
                                    boileri, võimaliku akupaagi ja ülejäänud
                                    küttesüsteemi hüdraulilise lahendusega.
                                </p>

                            </div>

                        </article>


                    </div>

                </div>

            </div>

        </section>


    </div>


    


    {{-- =====================================================
         PAIGALDUS JA LÕPU CTA
         ===================================================== --}}

    <div class="airpump-content">


        {{-- =================================================
             PAIGALDUS
             ================================================= --}}

        <section class="airpump-section">

            <div class="airpump-container">

                <div class="airpump-install">


                    <div class="airpump-install__content">

                        <p class="airpump-eyebrow">
                            Seade ja küttesüsteem
                        </p>

                        <h2>
                            Õhk-vesi soojuspump koos tervikliku paigaldusega
                        </h2>

                        <p>
                            Õhk-vesi soojuspumba puhul on seade ainult üks osa
                            tervest küttesüsteemist. Hea tulemuse jaoks peavad
                            omavahel sobima soojuspump, torustik, ringluspumbad,
                            radiaatorid või põrandaküte, tarbeveeboiler ning
                            süsteemi juhtimine.
                        </p>

                        <p>
                            Aitan hinnata olemasolevat küttesüsteemi, valida
                            sobiva võimsusega seadme ja koostada lahenduse,
                            mis arvestab konkreetse maja vajadustega.
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
                            Pakkumise koostamiseks
                        </p>

                        <h3>
                            Saada maja põhiinfo
                        </h3>


                        <ul>

                            <li>
                                Köetav pind ja hoone tüüp
                            </li>

                            <li>
                                Olemasolev küttesüsteem
                            </li>

                            <li>
                                Põrandaküte või radiaatorid
                            </li>

                            <li>
                                Praegune kütteseade ja energiakulu
                            </li>

                            <li>
                                Tarbevee vajadus
                            </li>

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
                            Ei ole kindel, milline õhk-vesi soojuspump sinu majale sobib?
                        </h2>

                        <p>
                            Kirjelda maja, olemasolevat küttesüsteemi ja
                            praegust küttelahendust. Aitan hinnata sobiva
                            seadme võimsust ja süsteemi ülesehitust.
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