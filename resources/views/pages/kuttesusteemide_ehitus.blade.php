<x-layout 
:title="'Küttesüsteemide ehitus Tallinnas ja Harjumaal | Küttesepp'"
:metaDescription="'Küttesüsteemide ehitus Tallinnas ja Harjumaal. Küttesepp aitab valida sobiva lahenduse ning teostab põrandakütte, radiaatorkütte, soojuspumpade ja teiste küttesüsteemide terviklahendusi eramajadele ja väiksematele hoonetele.'"
:metaKeywords="'küttesüsteemide ehitus, küttesüsteem, küttesüsteemi paigaldus, põrandaküte, radiaatorküte, küttelahendused'"
:ogImage="asset('images/serp/kuttesepp-og-paigaldus.webp')"
:metaAuthor="'Tanel Sepp'"
:robots="'index, follow'"
:viteCssAssets="[
'resources/css/pages/tootelehed.css',
'resources/css/kuttesusteemiTeenus.css',
]">

<x-static_carousel
title="KÜTTESÜSTEEMIDE EHITUS <br><br><span>Terviklik teenus sinu kodu kütmiseks</span>"

content="Küttesüsteemide ehitus tähendab Küttesepa puhul terviklikku teenust – alates sobiva lahenduse valikust kuni süsteemi väljaehituse, seadistamise ja üleandmiseni. Hästi tehtud küttesüsteem töötab ühtlaselt, hoiab energiakulu mõistlikuna ja tagab kodus mugava sisekliima.<br><br>

Tegutsen peamiselt eramajade, ridaelamute ja väiksemate hoonete juures. Minu eelis on personaalne lähenemine ja see, et vaatan kogu süsteemi tervikuna, mitte ainult üksikut seadet või tööetappi.<br><br>

Kuna küttesüsteemi osad peavad omavahel sobima ja koos korralikult töötama, teen selliseid töid eelkõige objektidel, kus olemasolev lahendus on hinnatav või korrektselt dokumenteeritud. Vajadusel saab kogu lahenduse Küttesepalt – planeerimisest kuni valmis süsteemini.<br><br>

Töötan peamiselt <strong>Tallinna ja Harjumaa piirkonnas</strong>, kuid kokkuleppel liigun ka mujale üle Eesti."

image="images/taustad/kuttesusteemide-ehitus-ES.webp"
imageAlt="Küttesüsteemide ehitus eramajas"
eriStiil=""
:textholderStyle="''"
/>

<section class="piltlingid teenus-piltlingid" id="kuttesusteemi-teenus">

    <h2 class="teenus-pealkiri">
        KUIDAS KÜTTESEPP EHITAB TERVIKLIKU KÜTTESÜSTEEMI
    </h2>

    <p class="teenus-sissejuhatus">
        Küttesep ei müü ega paigalda lihtsalt soojuspumpa, vaid paneb kokku terviku,
        mis päriselt ka töötab. See tähendab õiget küttesüsteemi valikut ja disainimist, korralikku väljaehitust, küttevee töötlust, seadistamist ja lõpuks ka kasutaja juhendamist.
    </p>

    <hr class="red-line">

    <div class="piltlingidiv">

        <article class="piltlink teenuslink inverse1">
            <div class="teenus-number-visual">
                <span>01</span>
            </div>

            <div class="piltlingitekst">
                <img src="{{ asset('images/icons/küttesepp.png') }}" alt="Küttesepp">
                <h2>Õige küttesüsteemi valik ja disain</h2>
            </div>

            <ul class="teenus-checklist">
                <li>Sobiva soojuspumba ja küttesüsteemi valik</li>
                <li>Maja ja ruumide järgi läbimõeldud dimensioneerimine</li>
                <li>Radiaatorite, põrandakütte või fancoilide arvestamine</li>
                <li>Automaatika ja kogu süsteemi loogika paika panemine</li>
            </ul>

            <p class="piltlink-kirjeldus teenus-kirjeldus">
                Hea küttesüsteem algab õigetest valikutest ja disainist. Kui alus on paigas, on ka kogu hilisem
                protsess hoopis teisest klassist.
            </p>
        </article>

        <article class="piltlink teenuslink inverse1">
            <div class="teenus-number-visual">
                <span>02</span>
            </div>

            <div class="piltlingitekst">
                <img src="{{ asset('images/icons/küttesepp.png') }}" alt="Küttesepp">
                <h2>Korralik väljaehitus</h2>
            </div>

            <ul class="teenus-checklist">
                <li>Soojuspumba ja torustiku korrektne paigaldus</li>
                <li>Radiaator-, põrandakütte või fancoilisüsteemi väljaehitus</li>
                <li>Automaatika ja vajalike juhtimiste lisamine</li>
                <li>Terviklik lahendus, kus kõik osad sobivad omavahel kokku</li>
            </ul>

            <p class="piltlink-kirjeldus teenus-kirjeldus">
                Eesmärk ei ole lihtsalt seadmed omavahel ühendada, vaid ehitada süsteem,
                mis toimib ühtse tervikuna ja on ka hiljem hästi hooldatav. Ligipääs eriosadele jne.
            </p>
        </article>

        <article class="piltlink teenuslink inverse1">
            <div class="teenus-number-visual">
                <span>03</span>
            </div>

            <div class="piltlingitekst">
                <img src="{{ asset('images/icons/küttesepp.png') }}" alt="Küttesepp">
                <h2>Küttevesi, seadistamine ja üleandmine</h2>
            </div>

            <ul class="teenus-checklist">
                <li>Süsteemi seadistamine ja tasakaalustamine</li>
                <li>Vooluhulkade ja töörežiimide kontroll</li>
                <li>Küttevee demineraliseerimine või korrosiooniinhibiitorid</li>
                <li>Kasutaja juhendamine ja süsteemi korrektne üleandmine</li>
            </ul>

            <p class="piltlink-kirjeldus teenus-kirjeldus">
                Kui kogu ehitus on valmis, tuleb süsteem ka paika häälestada. Just sellest sõltub,
                kui stabiilselt ja murevabalt see päriselus töötab.
            </p>
        </article>

    </div>

    <div class="teenus-cta">
        <a href="{{ route('index') }}#form" class="teenus-cta-btn">
            Küsi pakkumist
        </a>
    </div>

</section>

<x-up_scroller />
<x-cookies />

</x-layout>