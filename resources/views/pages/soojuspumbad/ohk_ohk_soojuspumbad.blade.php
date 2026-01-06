<x-layout :title="'Õhk-õhk soojuspumbad Tallinnas – küte ja jahutus | Küttesepp'" :metaDescription="'Õhk-õhk soojuspumpade müük ja paigaldus Tallinnas ja Harjumaal. Kiire ja soodne küte ning jahutus koos professionaalse paigaldusega.'" :metaKeywords="'õhk-õhk soojuspumbad, soojuspump, kütmine, jahutamine, energiasääst, õhk-õhk küte, õhksoojuspump, energiasäästlik küte'" 
:ogImage="asset('images/serp/kuttesepp-og-ohksoojuspumbad.webp')"
:metaAuthor="'Tanel Sepp'" :robots="'index, follow'" :viteCssAssets="['resources/css/pages/tootelehedala.css']">

    <x-static_carousel title="ÕHKSOOJUSPUMBAD <br><br><span>Soodsaim valik efektiivseks kütteks</span>"
        content="Õhksoojuspump töötab sama põhimõtte järgi nagu teisedki soojuspumba tüübid: Energia salvestatakse välisõhust välisõhu ja normaalrõhu all oleva külmaine temperatuuri vahest ning kasutades elektrienergiat külmaine rõhu tõstmiseks saavutatakse selle sobiv temperatuur maja kütmiseks.<br><br>
    Tavalise nn õhk-õhk soojuspumba puhul antakse primaar ehk külmaine ringist saadud soojus tuppa läbi toas paikneva nn soojapuhuri.
    <br>Eelised on lihtne ja kiire paigaldus ning soetuskulu, kusjuures efektiivsuses ei kaotata. Samuti ei ohusta elektri kadumise korral süsteemi külmumise oht.
    <br>Miinused on toaõhu aktiivne ringlus, mida toa seinal paiknev kalorifeer vähem või rohkem tekitab ning piiratud võimalus sooja ruumide vahel jagada. Üldjuhul lahendatakse suuremas elamises õhksoojusküte mitme soojuspumba paigaldamisega. <br><br> Küttesepalt saate soetada siin pakutavaid õhksoojuspumpasid koos paigalduse ja kasutusõpetusega."
        image="images/taustad/ohksoojuspumptaust.webp" imageAlt="Õhksoojuspumbad taust" :textholderStyle="''"
        eriStiil="object-position: 80% top;" />
    <x-tootesektsioonid.soojuspumbad_tootesektsioon :products="$products" :brands="$brands" :typeSlug="$typeSlug" />
    <x-up_scroller />
    <x-cookies />





</x-layout>
