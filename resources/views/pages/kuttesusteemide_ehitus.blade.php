<x-layout
    :title="'Küttesüsteemide ehitus Tallinnas ja Harjumaal | Küttesepp'"
    :metaDescription="'Terviklikud küttesüsteemid Tallinnas ja Harjumaal. Õhk-vesi- ja maasoojuspumbad, hüdraulika, tarbevesi, automaatika, süsteemi läbipesu, küttevee töötlus, käivitus ja seadistamine.'"
    :ogImage="asset('images/serp/kuttesepp-og-paigaldus.webp')"
    :metaAuthor="'Tanel Sepp'"
    :robots="'index, follow'"
    :viteCssAssets="[
        'resources/css/pages/tootelehed.css',
        'resources/css/kuttesusteemiTeenus.css',
        'resources/css/pages/soojuspumbad.css',
    ]"
>
    {{-- HERO --}}
    <x-static_carousel
        title="KÜTTESÜSTEEMIDE EHITUS <br><br><span>Kütteallikas ja kogu küttesüsteem ühe tervikuna</span>"
        content="Küttesepp ehitab ja uuendab terviklikke vesiküttesüsteeme eramajadele, ridaelamutele ja väiksematele hoonetele. Kütteallikaks võib olla õhk-vesi- või maasoojuspump, kuid vastavalt hoonele ja kasutaja soovidele ka keskküttekamin, pelletikatel või keskküttepliit.<br><br>
Kütteallikast sõltumata on oluline, et torustik, radiaatorid või põrandaküte, tarbevee tootmine, ringluspumbad, akumulatsioonipaak, küttevesi ja automaatika töötaksid omavahel õigesti. Uue süsteemi puhul saan kogu küttesüsteemi välja ehitada, olemasoleva süsteemi puhul hinnata, milliseid osi saab edasi kasutada ja mida tuleb muuta.<br><br>
Eesmärk ei ole paigaldada lihtsalt uut kütteseadet, vaid ehitada töökindel, ökonoomne ja hästi hooldatav küttesüsteem, kus kütteallikas ja ülejäänud süsteem moodustavad ühe terviku.<br><br>
Töötan peamiselt <strong>Tallinnas ja Harjumaal</strong>, sobivate suuremate tööde puhul kokkuleppel ka mujal Eestis."
        image="images/taustad/kuttesusteemide-ehitus-ES.webp"
        imageAlt="Tervikliku küttesüsteemi ehitus eramajas"
        eriStiil=""
        :textholderStyle="''"
    />

    {{-- KÜTTESÜSTEEM KUI TERVIK --}}
    <div class="heatpump-page">
        <section class="heatpump-section" id="kuttesusteemi-teenus" aria-labelledby="protsess-pealkiri">
            <div class="heatpump-container">
                <div class="heatpump-heading">
                    <p class="heatpump-eyebrow">Terviklikud vesiküttesüsteemid</p>
                    <h2 id="protsess-pealkiri">Kütteallikas on ainult üks osa hästi toimivast küttesüsteemist</h2>
                    <p>
                        Küttesüsteemi kavandamisel ei piisa ainult sobiva kütteallika valikust.
                        Sama oluline on, et radiaatorid või põrandaküte, torustik,
                        ringluspumbad, tarbevee tootmine, akumulatsioonipaak ja automaatika
                        sobiksid valitud kütteallikaga töötamiseks.
                    </p>
                </div>

                <div class="heatpump-benefits-grid">
                    <article class="heatpump-benefit-card">
                        <span class="heatpump-benefit-card__icon" aria-hidden="true">✓</span>
                        <h3>Kütteallika valik</h3>
                        <p>
                            Kütteallikaks võib olla õhk-vesi- või maasoojuspump,
                            keskküttekamin, pelletikatel või keskküttepliit.
                            Sobiv kütteallikas ja ülesehitus valitakse hoone, olemasoleva süsteemi,
                            vajaliku küttevõimsuse ja kasutusvajaduse järgi.
                        </p>
                    </article>

                    <article class="heatpump-benefit-card">
                        <span class="heatpump-benefit-card__icon" aria-hidden="true">✓</span>
                        <h3>Olemasolev küttesüsteem</h3>
                        <p>
                            Hindan, kas olemasolevad radiaatorid, põrandaküte ja torustik
                            sobivad uue kütteallikaga töötamiseks või vajavad enne
                            paigaldust osalist uuendamist.
                        </p>
                    </article>

                    <article class="heatpump-benefit-card">
                        <span class="heatpump-benefit-card__icon" aria-hidden="true">✓</span>
                        <h3>Hüdraulika ja tarbevesi</h3>
                        <p>
                            Vajadusel ehitan ümber torustiku, ringluspumbad ja ventiilid ning
                            ühendan tarbeveeboileri ja akumulatsioonipaagi nii,
                            et kogu süsteem töötaks ühe tervikuna.
                        </p>
                    </article>

                    <article class="heatpump-benefit-card">
                        <span class="heatpump-benefit-card__icon" aria-hidden="true">✓</span>
                        <h3>Käivitus ja seadistamine</h3>
                        <p>
                            Kontrollin vooluhulgad ja töötemperatuurid ning seadistan
                            kütteallika, ringluse ja automaatika vastavalt
                            hoone ning küttesüsteemi vajadusele.
                        </p>
                    </article>
                </div>
            </div>
        </section>
    </div>

    {{-- HINNASTUS --}}
    <section class="piltlingid teenus-piltlingid">
        <section class="teenus-hinnad" aria-labelledby="hinnad-pealkiri">
            <div class="teenus-hinnad-wrapper">
                <h2 id="hinnad-pealkiri" class="teenus-pealkiri">ORIENTEERUVAD HINNATASEMED</h2>

                <p class="teenus-sissejuhatus hinnad-sissejuhatus">
                    Küttesüsteemi hind sõltub eelkõige vajalikust küttevõimsusest,
                    valitud seadmest, olemasoleva süsteemi seisukorrast ja sellest,
                    kui palju tuleb tehnoruumi ning maja küttesüsteemi ümber ehitada.
                    Allpool toodud hinnad aitavad enne päringu saatmist hinnata,
                    millise suurusjärguga projektiga on tegemist.
                </p>

                <div class="red-line" role="presentation"></div>

                <div class="hinnapaketid">
                    {{-- OLEMASOLEVASSE SÜSTEEMI --}}
                    <article class="hinnakaart" aria-labelledby="simple-pealkiri">
                        <div class="hinnakaart-sisu">
                            <span class="hinnakaart-label">OLEMASOLEVASSE SÜSTEEMI</span>
                            <h3 id="simple-pealkiri">Õhk-vesi soojuspump koos paigalduse ja ühendamisega</h3>
                            <p class="hind">alates <strong>12 900 €</strong></p>

                            <ul class="teenus-checklist">
                                <li>Hoone ja olemasoleva küttesüsteemi tehniline hindamine</li>
                                <li>Sobiva võimsusega õhk-vesi soojuspump</li>
                                <li>Välis- ja siseosa paigaldus</li>
                                <li>Ühendamine olemasoleva radiaator- või põrandaküttesüsteemiga</li>
                                <li>Vajalikud pumbad, ventiilid, sulgarmatuur ja hüdraulilised ühendused</li>
                                <li>Magnet- või mudafilter ning süsteemi põhikaitse</li>
                                <li>Elektriühendused tavapärases mahus</li>
                                <li>Täitmine, õhutamine, käivitus ja tööparameetrite seadistamine</li>
                                <li>Küttegraafiku seadistamine ja kasutaja juhendamine</li>
                            </ul>

                            <p class="hinnakaart-kirjeldus">
                                Sobib juhul, kui olemasolev radiaator- või põrandaküttesüsteem
                                on tehniliselt heas korras, töötab soojuspumbale sobivate
                                temperatuuridega ning tehnoruum ei vaja suuremat ümberehitust.
                            </p>
                        </div>
                    </article>

                    {{-- PREMIUM PAIGALDUS --}}
                    <article class="hinnakaart hinnakaart-soovitatud" aria-labelledby="pro-pealkiri">
                        <div class="hinnakaart-badge" aria-label="Soovitatav pakett">Soovitatav</div>

                        <div class="hinnakaart-sisu">
                            <span class="hinnakaart-label">PREMIUM PAIGALDUS</span>
                            <h3 id="pro-pealkiri">Soojuspump koos küttesüsteemi põhjaliku uuendamisega</h3>
                            <p class="hind">alates <strong>19 900 €</strong></p>

                            <ul class="teenus-checklist">
                                <li>Hoone soojusvajaduse ja olemasoleva süsteemi tehniline hindamine</li>
                                <li>Premium-klassi õhk-vesi soojuspump ja vajalik lisavarustus</li>
                                <li>Küttesüsteemi ülesehituse planeerimine ja hüdraulikaskeem</li>
                                <li>Tehnoruumi vajalik ümberehitus ning torustiku korrastamine</li>
                                <li>Tarbeveeboiler või muu sobiv tarbevee tootmine</li>
                                <li>Vajalik puhver- või akumulatsioonipaak, pumbad ja 3T-ventiilid vastavalt süsteemile</li>
                                <li>Magnetfilter, mudapüüdur, sulgarmatuur ja vajalikud ohutuskomponendid</li>
                                <li>Olemasoleva küttesüsteemi läbipesu vastavalt seisukorrale</li>
                                <li>Vana süsteemivee eemaldamine ja täitmine demineraliseeritud või nõuetekohaselt töödeldud kütteveega</li>
                                <li>Välisosa alus, tavapärased läbiviigud ja ühendustorustik</li>
                                <li>Elektritööd tavapärases mahus</li>
                                <li>Vooluhulkade kontroll ja vajadusel hüdrauliline tasakaalustamine</li>
                                <li>Küttegraafiku, pumpade, tarbevee prioriteedi ja automaatika seadistamine</li>
                                <li>Käivitus, mõõtmised, lõppkontroll ja kasutaja juhendamine</li>
                            </ul>

                            <p class="hinnakaart-kirjeldus">
                                Mõeldud majale, kus uus soojuspump peab saama õiged töötingimused
                                kogu süsteemi ulatuses. Fookus ei ole ainult seadme paigaldamisel,
                                vaid vooluhulkadel, temperatuuridel, veekvaliteedil, automaatikal
                                ja tehnoruumi ülesehitusel.
                            </p>
                        </div>
                    </article>

                    {{-- TÄISTEENUS --}}
                    <article class="hinnakaart" aria-labelledby="premium-pealkiri">
                        <div class="hinnakaart-sisu">
                            <span class="hinnakaart-label">TÄISTEENUS</span>
                            <h3 id="premium-pealkiri">Uue vesiküttesüsteemi ehitus või põhjalik rekonstrueerimine</h3>
                            <p class="hind">alates <strong>24 900 €</strong></p>

                            <ul class="teenus-checklist">
                                <li>Küttekoormuse hindamine ja kogu süsteemi tehniline planeerimine</li>
                                <li>Sobiv kütteallikas, siseosa, boilerid ja vajalik lisatehnika</li>
                                <li>Tehnoruumi torustiku ja hüdraulika täielik väljaehitus</li>
                                <li>Radiaatorite, põrandakütte või fancoilide dimensioneerimine ja paigaldus vastavalt töömahule</li>
                                <li>Tarbevee tootmine ja vajadusel puhver- või akumulatsioonipaagid</li>
                                <li>Ringluspumbad, segamisventiilid, kollektorid, filtrid ja ohutusarmatuur</li>
                                <li>Mitme kütteringi või mitme kütteallika omavaheline juhtimine</li>
                                <li>Automaatika, andurid ja süsteemi juhtimise seadistamine</li>
                                <li>Nõuetekohane küttevesi, süsteemi puhastus ja kaitse</li>
                                <li>Elektritööd, välisosa paigaldus ja tavapärased ehituslikud läbiviigud</li>
                                <li>Süsteemi täitmine, õhutamine ja hüdrauliline tasakaalustamine</li>
                                <li>Käivitus, mõõtmised, töötemperatuuride kontroll ja lõppseadistus</li>
                                <li>Kasutaja juhendamine ning süsteemi hooldatavuse läbimõeldud ülesehitus</li>
                            </ul>

                            <p class="hinnakaart-kirjeldus">
                                Uutele ja põhjalikult renoveeritavatele hoonetele, kus
                                küttesüsteem ehitatakse sisuliselt tervikuna. Suure võimsusega,
                                kaskaad- ja mitme kütteallikaga süsteemid hinnastatakse
                                vastavalt konkreetsele projektile.
                            </p>
                        </div>
                    </article>
                </div>

                <p class="teenus-hinnad-markus">
                    <strong>Alates hind eeldab vastava paketi jaoks tavapärast ja hästi teostatavat objekti.</strong>
                    Suurem küttevõimsus, pikad ühendustrassid, keerukad läbiviigud,
                    mahukas elektritöö, lisaseadmed ja ulatuslikud ehitustööd võivad hinda suurendada.
                </p>

                <p class="teenus-hinnad-markus">
                    <strong>Suure võimsusega, kaskaad- ja mitme kütteallikaga süsteemid on projektipõhised.</strong>
                    Selliste süsteemide kogumaksumus võib sõltuvalt seadmetest ja töömahust
                    ületada 30 000 €.
                </p>

                <p class="teenus-hinnad-markus">
                    <strong>Maasoojuspumba puhul lisandub tavaliselt maakontuuri rajamise maksumus.</strong>
                    Selle hind sõltub pinnasest, vajalikust kontuurist ja objekti eripärast.
                </p>

                {{-- JÄRELTEENINDUS --}}
                <div style="max-width:900px; margin:65px auto 0;">
                    <h3 class="teenus-alapealkiri" style="text-align:center;">
                        Lisaks ehitusele ka hooldus ja remont
                    </h3>

                    <p class="teenus-sissejuhatus">
                        Eriti soojuspumbaga küttesüsteemi puhul ei lõpe teenus
                        paigaldusega. Küttesepp teostab ka
                        <a href="{{ route('soojuspumpade-hooldus') }}"><strong>soojuspumpade hooldust</strong></a>
                        ja
                        <a href="{{ route('soojuspumpade-remont') }}"><strong>soojuspumpade remonti</strong></a>.
                    </p>

                    <p class="teenus-sissejuhatus">
                        Vajadusel saan hiljem hinnata nii kütteseadme enda tööd kui ka
                        seda mõjutavat küttesüsteemi – veeringlust, vooluhulkasid,
                        töötemperatuure, automaatikat ja küttevee seisukorda.
                    </p>
                </div>

                <p class="teenus-loputekst">
                    Soovid teada, milline küttesüsteem sinu majale sobib?
                    Kirjelda olemasolevat küttesüsteemi, maja suurust ja võimalusel ka
                    soovitud eelarve suurusjärku – nii saan kohe hinnata, milline töömaht ja seadmeklass on realistlik.
                </p>

                <div class="teenus-cta" role="region" aria-label="Pakkumise küsimine">
                    <a href="{{ route('index') }}#form" class="teenus-cta-btn">Küsi pakkumist</a>
                </div>
            </div>
        </section>
    </section>

    <x-up_scroller />
    <x-cookies />
</x-layout>
