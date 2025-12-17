<x-layout :title="'Õhk-õhk soojuspumbad – kvaliteetne küte ja jahutus | Küttesepp'"
    :metaDescription="'Õhk-õhk soojuspumbad on soodsaim ja kiireim lahendus kodu kütmiseks ja jahutamiseks. Küttesepp pakub kvaliteetseid seadmeid koos paigalduse ja kasutusõpetusega.'"
    :metaKeywords="'õhk-õhk soojuspumbad, soojuspump, kütmine, jahutamine, energiasääst, õhk-õhk küte, õhksoojuspump, energiasäästlik küte'"
    :metaAuthor="'Tanel Sepp'"
    :robots="'index, follow'"
    :viteCssAssets="['resources/css/app.css', 'resources/css/navbar.css', 'resources/css/footer.css','resources/css/staticCarousel.css', 'resources/css/tootesektsioon.css','resources/css/upscroller.css','resources/css/cookies.css']"

    :viteJsAssets="['resources/js/app.js','resources/js/hamburger.js','resources/js/navbar.js','resources/js/lenis.js','resources/js/upscroller.js', 'resources/js/cookies.js']"
>
    
<x-static-carousel 
    title="ÕHKSOOJUSPUMBAD <br><br><span>Soodsaim valik efektiivseks kütteks</span>"
    content="Õhksoojuspump töötab sama põhimõtte järgi nagu teisedki soojuspumba tüübid: Energia salvestatakse välisõhust välisõhu ja normaalrõhu all oleva külmaine temperatuuri vahest ning kasutades elektrienergiat külmaine rõhu tõstmiseks saavutatakse selle sobiv temperatuur maja kütmiseks.<br><br>
    Tavalise nn õhk-õhk soojuspumba puhul antakse primaar ehk külmaine ringist saadud soojus tuppa läbi toas paikneva nn soojapuhuri.
    <br>Eelised on lihtne ja kiire paigaldus ning soetuskulu, kusjuures efektiivsuses ei kaotata. Samuti ei ohusta elektri kadumise korral süsteemi külmumise oht.
    <br>Miinused on toaõhu aktiivne ringlus, mida toa seinal paiknev kalorifeer vähem või rohkem tekitab ning piiratud võimalus sooja ruumide vahel jagada. Üldjuhul lahendatakse suuremas elamises õhksoojusküte mitme soojuspumba paigaldamisega. <br><br> Küttesepalt saate soetada siin pakutavaid õhksoojuspumpasid koos paigalduse ja kasutusõpetusega."
    image="resources/images/taustad/ohksoojuspumptaust.webp"
    imageAlt="Õhksoojuspumbad taust"
    :textholderStyle="''"
/>
<x-tootesektsioonid.soojuspumbad-tootesektsioon :products="$products" :brands="$brands"  :typeSlug="$typeSlug"/>
 <x-up-scroller/>
 <x-cookies/> 


    
    
   
</x-layout>