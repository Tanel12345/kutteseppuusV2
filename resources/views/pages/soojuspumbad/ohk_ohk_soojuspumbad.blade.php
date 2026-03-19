<x-layout :title="'Õhk-õhk soojuspumbad Tallinnas ja Harjumaal | Õhksoojuspumbad | Küttesepp'" :metaDescription="'Õhk-õhk soojuspumbad Tallinnas ja Harjumaal. Õhksoojuspump on soodne lahendus kütteks ja jahutuseks. Võrdle seadmeid ja leia sobiv lahendus Küttesepalt.'" :metaKeywords="'õhk-õhk soojuspump, õhk-õhk soojuspumbad, õhksoojuspump, õhksoojuspumbad, kütmine ja jahutus, soodne küttelahendus'"
:ogImage="asset('images/serp/kuttesepp-og-ohksoojuspumbad.webp')"
:metaAuthor="'Tanel Sepp'" :robots="'index, follow'" :viteCssAssets="['resources/css/pages/tootelehedala.css']">

  <x-static_carousel
    title="ÕHKSOOJUSPUMBAD <br><br><span>Soodsaim valik efektiivseks kütteks</span>"
  content="Õhksoojuspump ehk õhk-õhk soojuspump töötab sama põhimõtte järgi nagu õhk-vesi soojuspump: soojusenergia ammutatakse välisõhust ning elektrienergiat kasutatakse külmaine rõhu tõstmiseks, et saavutada sobiv temperatuur ruumide kütmiseks.<br><br>

Erinevalt õhk-vesi soojuspumbast antakse õhk-õhk soojuspumba puhul primaar- ehk külmaine ringist saadud soojus tuppa läbi toas paikneva soojapuhuri. Seade sobib hästi nii kütmiseks kui ka jahutamiseks ning on üks lihtsamaid ja kiiremaid viise elamu sisekliima parandamiseks.<br><br>

Õhk-õhk soojuspumba eelisteks on lihtne ja kiire paigaldus, suhteliselt väike soetuskulu ning hea energiatõhusus. Samuti ei ohusta elektrikatkestuse korral süsteemi külmumise oht.<br><br>

Küttesepalt leiad erinevaid õhk-õhk soojuspumpasid koos nõustamise ja sobiva lahenduse valikuga. Kui vajad ka paigaldust, vaata eraldi 
<a href='{{ route('soojuspumpade-paigaldus') }}' style='font-weight:700;' title='Soojuspumpade paigaldus Tallinnas ja Harjumaal'>
soojuspumpade paigaldus
</a>. Paigaldust pakume peamiselt <strong>Tallinnas ja Harjumaal</strong>."
    image="images/taustad/ohksoojuspumptaust.webp"
    imageAlt="Õhksoojuspumpade müük ja paigaldus Küttesepalt"
    :textholderStyle="''"
    eriStiil="object-position: 80% top;"
/>
    <x-tootesektsioonid.soojuspumbad_tootesektsioon :products="$products" :brands="$brands" :typeSlug="$typeSlug" />
    <x-up_scroller />
    <x-cookies />





</x-layout>
