<x-layout 
:title="'Küttesüsteemide ehitus Tallinnas ja Harjumaal | Küttesepp'"
:metaDescription="'Küttesüsteemide ehitus eramajadele – soojuspumbad, katlad, põrandaküte, radiaatorküte. Küttesepp aitab valida sobiva kütteseadme ning teostab professionaalselt kogu küttesüsteemi ehituse.'"
:metaKeywords="'küttesüsteemide ehitus, küttesüsteem, küttesüsteemi paigaldus, põrandaküte, radiaatorküte, soojuspumpade paigaldus, küttelahendused'"
:ogImage="asset('images/serp/kuttesepp-og-paigaldus.webp')"
:metaAuthor="'Tanel Sepp'"
:robots="'index, follow'"
:viteCssAssets="[
'resources/css/pages/tootelehed.css',
]">

<x-static_carousel
title="KÜTTESÜSTEEMIDE EHITUS <br><br><span>Terviklik teenus sinu kodu kütmiseks</span>"

content="Küttesüsteemi ehitus tähendab Küttesepa puhul terviklikku teenust – alates sobiva kütteallika valikust kuni torustiku, automaatika ja küttekehade paigaldamiseni. Õigesti ehitatud küttesüsteem töötab stabiilselt, hoiab energiakulu mõistlikuna ning tagab kodus ühtlase ja mugava sisekliima. <br><br>

Küttesepp oma miniatuurse olemusega teostab küttesüsteemide ehitust eelkõige eramajadele, ridaelamutele ja teistele väiksematele hoonetele. Eelised suuremate konkurentide ees on selge ja personaalne lähenemine. Kuna küttesüsteemi erinevad osad peavad töötama tervikuna, siis teostan ainult selliseid töid, kus eelnevalt valmistatud küttesüsteemi osa on kas hoones nähtaval kujul või korrektselt dokumenteeritud.  
<br> Muul juhul saabki kogu teenuse Küttesepalt, kes planeerib, teostab ja vastutab kogu küttesüsteemi eest. <br><br>

Töötan peamiselt <strong>Tallinna ja Harjumaa piirkonnas</strong>, kuid olenevalt projektist liigun ka kaugemale üle Eesti."

image="images/taustad/kuttesusteemide-ehitus-ES.webp"
imageAlt="Küttesüsteemide ehitus eramajas"
eriStiil="object-position: 20% top;"
:textholderStyle="''"
/>


<section class="piltlingid" id="piltlingid">

<h2 style="font-size:32px;font-weight:400;margin:50px 15px 0 15px;text-align:center;">
KÜTTESÜSTEEMI PEAMISED OSAD
</h2>

<hr class="red-line">

<div class="piltlingidiv">

<!-- SOOJUSPUMBAD -->
<div class="piltlink">
<a href="{{ route('soojuspumbad.index') }}">

<div class="piltlingipilt">
<img data-src="{{ asset('images/vaikesed/es/Es_soojuspump_vaike.webp') }}" alt="Soojuspumbad">
</div>

<div class="piltlingitekst">
<img src="{{ asset('images/icons/küttesepp.png') }}">
<h2>Soojuspumbad</h2>
</div>

<p class="piltlink-kirjeldus">
Õhk-õhk, õhk-vesi ja maasoojuspumbad – tänapäeva kõige energiatõhusamad küttelahendused.
</p>

</a>
</div>

<!-- Tahkekütteseadmed -->
<div class="piltlink">
<a href="{{ route('tahkekutteseadmed.index') }}">

<div class="piltlingipilt">
<img data-src="{{ asset('images/vaikesed/extraflame/extraflame.webp') }}" alt="Valik tahkekütteseadmeid Küttesepalt">
</div>

<div class="piltlingitekst">
<img src="{{ asset('images/icons/küttesepp.png') }}">
<h2>Tahkekütteseadmed</h2>
</div>

<p class="piltlink-kirjeldus">
Tahkekütteseadmed hoiavad teie kodu sooja halupuu või pelletiga.
</p>

</a>
</div>



<!-- PÕRANDAKÜTE -->
<div class="piltlink">
<a href="{{ route('poranda-ja-radiaatorkute') }}">

<div class="piltlingipilt">
<img data-src="{{ asset('images/vaikesed/poranda-ja-radiaatorkute/perekond-radiaatoriga-madal.webp') }}" alt="Põrandaküte">
</div>

<div class="piltlingitekst">
<img src="{{ asset('images/icons/küttesepp.png') }}">
<h2>Põranda ja radiaatorküte</h2>
</div>

<p class="piltlink-kirjeldus">
Põrandaküte tagab ühtlase soojuse ja madalama kütteveetemperatuuri, mis sobib eriti hästi soojuspumpadega. Radiaatorid sobivad paremini tahkekütteseadmetele.
</p>

</a>
</div>




<!-- KÜTTEAUTOMAATIKA -->
<div class="piltlink">
<a href="{{ route('milleks-kutteautomaatika') }}">

<div class="piltlingipilt">
<img data-src="{{ asset('images/vaikesed/kutteautomaatika/naine-kutteautomaatikaga.webp') }}" alt="Naine ruumikontrollerit kasutamas">
</div>

<div class="piltlingitekst">
<img src="{{ asset('images/icons/küttesepp.png') }}">
<h2>Kütteautomaatika</h2>
</div>

<p class="piltlink-kirjeldus">
Automaatika juhib küttesüsteemi tööd ja aitab hoida energiakulu võimalikult madalal.
</p>

</a>
</div>


<!-- KONTAKT -->
<div class="kusipakkumist">
<a href="{{ route('index') }}#form">
<p style="margin:35px 5px;">KÜSI LISAINFOT</p>
</a>
</div>

</div>
</section>


<x-up_scroller />
<x-cookies />

</x-layout>