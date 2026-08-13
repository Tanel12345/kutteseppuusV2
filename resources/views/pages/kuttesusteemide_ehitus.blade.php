<x-layout
    :title="'Küttesüsteemide ehitus Tallinnas ja Harjumaal | Küttesepp'"
    :metaDescription="'Küttesüsteemide ehitus Tallinnas ja Harjumaal. Soojuspumbad, keskküttekaminad ja -pliidid, pelletikatlad, radiaator- ja põrandaküte, hüdraulika, tarbevesi, automaatika ning süsteemi seadistamine.'"
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
        content="Küttesepp ehitab ja uuendab terviklikke vesiküttesüsteeme eramajadele, ridaelamutele ja väiksematele hoonetele. Lahenduse keskmes võib olla õhk-vesi- või maasoojuspump, kuid vastavalt hoonele ja kasutaja soovidele ka keskküttekamin, pelletikatel või keskküttepliit.<br><br>
Kütteallikast sõltumata on oluline, et torustik, radiaatorid või põrandaküte, tarbevee lahendus, ringluspumbad, akumulatsioonipaak ja automaatika töötaksid omavahel õigesti. Uue süsteemi puhul saan lahenduse ehitada tervikuna, olemasoleva süsteemi puhul hinnata, milliseid osi saab edasi kasutada ja mida tuleb muuta.<br><br>
Eesmärk ei ole paigaldada lihtsalt uut kütteseadet, vaid ehitada töökindel ja hästi hooldatav küttesüsteem, kus kütteallikas ja ülejäänud süsteem moodustavad ühe terviku.<br><br>
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
                        ringluspumbad, tarbevee lahendus, akumulatsioonipaak ja automaatika
                        sobiksid valitud kütteallikaga töötamiseks.
                    </p>
                </div>
                <div class="heatpump-benefits-grid">
                    <article class="heatpump-benefit-card">
                        <span class="heatpump-benefit-card__icon" aria-hidden="true">✓</span>
                        <h3>Kütteallika valik</h3>
                        <p>
                            Lahenduse keskmes võib olla õhk-vesi- või maasoojuspump,
                            keskküttekamin, pelletikatel või keskküttepliit.
                            Sobiv lahendus valitakse hoone, olemasoleva süsteemi
                            ja kasutusvajaduse järgi.
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
                            Vajadusel lahendan torustiku, ringluspumbad, ventiilid,
                            tarbeveeboileri ja akumulatsioonipaagi nii,
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
                <h2  class="teenus-pealkiri">ORIENTEERUVAD HINNATASEMED</h2>
              
                <p class="teenus-sissejuhatus hinnad-sissejuhatus">
                    Allpool on toodud mõned tüüpilised hinnatasemed.
                    Lihtsamad paketid on näitlikustatud soojuspumbaga lahenduste põhjal,
                    kuid tervikliku küttesüsteemi puhul võib kütteallikaks olla ka
                    keskküttekamin, pelletikatel või keskküttepliit.
                    Lõplik hind sõltub valitud tehnikast, hoonest,
                    olemasoleva süsteemi seisukorrast ja töömahust.
                </p>
                <div class="red-line" role="presentation"></div>
                <div class="hinnapaketid">
                    {{-- LIHTSAM --}}
                    <article class="hinnakaart" aria-labelledby="simple-pealkiri">
                        <div class="hinnakaart-sisu">
                            <span class="hinnakaart-label">LIHTSAM LAHENDUS</span>
                            <h3 id="simple-pealkiri">Soojuspump olemasolevasse küttesüsteemi</h3>
                            <p class="hind">alates <strong>7900 €</strong></p>
                            <ul class="teenus-checklist">
                                <li>Õhk-vesi soojuspump koos tavapärase paigaldusega</li>
                                <li>Ühendamine olemasoleva toimiva küttesüsteemiga</li>
                                <li>Vajalikud hüdraulilised ühendused</li>
                                <li>Süsteemi käivitamine ja põhiline seadistamine</li>
                                <li>Kasutaja juhendamine</li>
                            </ul>
                            <p class="hinnakaart-kirjeldus">
                                Sobib juhul, kui maja olemasolev radiaator- või
                                põrandaküttesüsteem on heas korras ja sobib uue
                                soojuspumbaga töötamiseks ilma suuremate ümberehitusteta.
                            </p>
                        </div>
                    </article>
                    {{-- TERVIKLIK --}}
                    <article class="hinnakaart hinnakaart-soovitatud" aria-labelledby="pro-pealkiri">
                        <div class="hinnakaart-badge" aria-label="Soovitatav pakett">Soovitatav</div>
                        <div class="hinnakaart-sisu">
                            <span class="hinnakaart-label">TERVIKLIK KÜTTELAHENDUS</span>
                            <h3 id="pro-pealkiri">Soojuspump ja küttesüsteemi vajalik uuendamine</h3>
                            <p class="hind">alates <strong>12 000 €</strong></p>
                            <ul class="teenus-checklist">
                                <li>Soojuspump ja paigaldus</li>
                                <li>Tarbevee lahendus vastavalt süsteemile</li>
                                <li>Vajalikud hüdraulilised muudatused</li>
                                <li>Küttesüsteemi läbipesu vastavalt vajadusele</li>
                                <li>Küttevee demineraliseerimine või muu sobiv töötlus</li>
                                <li>Vooluhulkade ja automaatika seadistamine</li>
                                <li>Kogu süsteemi tööle häälestamine</li>
                            </ul>
                            <p class="hinnakaart-kirjeldus">
                                Sobib majale, kus eesmärk ei ole ainult vana kütteseadme
                                asendamine, vaid olemasoleva süsteemi kohandamine nii,
                                et uus soojuspump saaks töötada sobivates tingimustes.
                            </p>
                        </div>
                    </article>
                    {{-- TÄISTEENUS --}}
                    <article class="hinnakaart" aria-labelledby="premium-pealkiri">
                        <div class="hinnakaart-sisu">
                            <span class="hinnakaart-label">TÄISTEENUS</span>
                            <h3 id="premium-pealkiri">Kogu vesiküttesüsteemi ehitus</h3>
                            <p class="hind">alates <strong>18 000 €</strong></p>
                            <ul class="teenus-checklist">
                                <li>Sobiv kütteallikas ja vajalik tehnika</li>
                                <li>Torustiku ja hüdraulika väljaehitus</li>
                                <li>Radiaatorite, põrandakütte või fancoilide rajamine</li>
                                <li>Tarbevee ja vajadusel akumulatsioonipaagi lahendus</li>
                                <li>Automaatika ja süsteemi juhtimise terviklahendus</li>
                                <li>Täitmine, käivitus ja tasakaalustamine</li>
                            </ul>
                            <p class="hinnakaart-kirjeldus">
                                Sobib uutele või põhjalikult renoveeritavatele hoonetele,
                                kus kogu vesiküttesüsteem ehitatakse või uuendatakse tervikuna.
                                Kütteallikaks võib olla soojuspump, keskküttekamin, pelletikatel,
                                keskküttepliit või muu objektile sobiv lahendus.
                            </p>
                        </div>
                    </article>
                </div>
                <p class="teenus-hinnad-markus">
                    <strong>Alates hind eeldab lihtsat ja hästi teostatavat objekti.</strong>
                    Täpne hind selgub pärast objekti ja olemasoleva küttesüsteemi hindamist.
                </p>
                <p class="teenus-hinnad-markus">
                    <strong>Maasoojuspumba puhul lisandub tavaliselt maakontuuri rajamise maksumus.</strong>
                    Selle hind sõltub pinnasest, vajalikust kontuurist ja objekti eripärast.
                </p>
                {{-- ÕHK-ÕHK --}}
                <div class="ohk-ohk-hinnad" aria-labelledby="ohk-ohk-pealkiri">
                    <h3 id="ohk-ohk-pealkiri" class="teenus-alapealkiri">Õhk-õhk soojuspumbad</h3>
                    <p class="teenus-sissejuhatus">
                        Õhk-õhk soojuspump on väiksema mahuga lahendus ja sobib näiteks
                        olemasoleva küttesüsteemi täienduseks, väiksemale majale,
                        suvilale või ruumide jahutamiseks.
                    </p>
                    <p class="ohk-ohk-hind">
                        <strong>Paigaldus koos seadmega: alates 1500 €</strong>
                    </p>
                </div>
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
                    Soovid teada, milline küte sinu majale sobib ja mis see maksma läheks?
                    Saada päring ning leiame vastused.
                    
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