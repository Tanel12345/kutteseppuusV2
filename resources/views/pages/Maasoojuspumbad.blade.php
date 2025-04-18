<x-layout :title="'Maasoojuspump - tõhus ja kestlik küttelahendus Küttesepalt'"
    :metaDescription="'Maasoojuspumbad - Kõige energiatõhusam valik kütmiseks ja tarbevee soojendamiseks.'"
    :metaKeywords="'Maasoojuspump, maasoojuspumbad, maaküte, energiatõhus küte, küttelahendus'"
    :metaAuthor="'Tanel Sepp'"
    :robots="'index, follow'"
    :viteCssAssets="['resources/css/app.css', 'resources/css/navbar.css', 'resources/css/footer.css','resources/css/staticCarousel.css', 'resources/css/tootesektsioon.css','resources/css/upscroller.css','resources/css/cookies.css']"

    :viteJsAssets="['resources/js/app.js','resources/js/hamburger.js','resources/js/navbar.js','resources/js/lenis.js','resources/js/upscroller.js', 'resources/js/cookies.js']"
>

<x-staticCarousel 
    title="MAASOOJUSPUMBAD <br><br><span>Energiatõhusus otse sinu kodu alt</span>"
    content="Maasoojuspump kasutab maapinda salvestunud päikeseenergiat, et pakkuda sinu kodule tõhusat ja stabiilset küttelahendust. Maakollektori või puurkaevu kaudu ammutatakse soojusenergiat, mis suunatakse küttesüsteemi vee soojendamiseks.
    <br><br>
    Maasoojuspumbad on erakordselt energiasäästlikud ja sobivad eriti hästi suurema energiavajadusega majadele. Süsteem pakub ühtlast kütet ja tarbevee soojendust aastaringselt, sõltumata välisõhu temperatuurist.
    <br>Eeliste hulka kuuluvad madalad püsikulud, pikaajaline investeering, kõrge kasutegur ning minimaalne hooldusvajadus.
    <br>Miinusteks võivad olla suurem alginvesteering ja maapinna kaevetööde vajadus.
    <br><br>Küttesepalt leiad kvaliteetsed maasoojuspumbad koos professionaalse paigalduse ja järelteenindusega."
    image="resources/images/taustad/maasoojuspumbad-taust.webp"
    imageAlt="Maasoojuspumbad taust"
    eriStiil="object-position: bottom;"
    :textholderStyle="''"
/>
<x-tootesektsioonid.maasoojusTootesektsioon :products="$products" :brands="$brands"/>
<x-up-scroller/>
<x-cookies/> 
</x-layout>