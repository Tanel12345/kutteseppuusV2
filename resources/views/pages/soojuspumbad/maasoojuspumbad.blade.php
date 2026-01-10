<x-layout :title="'Maasoojuspumbad Tallinnas ja harjumaal | Küttesepp'"
    :metaDescription="'Maasoojuspumbad on kõige energiatõhusam valik kodu kütmiseks ja tarbevee soojendamiseks. Küttesepp pakub kvaliteetseid seadmeid koos professionaalse paigaldusega.'"
    :metaKeywords="'Maasoojuspump, maasoojuspumbad, maaküte, energiatõhus küte, küttelahendus'"
    :ogImage="asset('images/serp/kuttesepp-og-maasoojuspumbad.webp')"
    :metaAuthor="'Tanel Sepp'"
    :robots="'index, follow'"
    :viteCssAssets="['resources/css/pages/tootelehedala.css']">

<x-static_carousel 
    title="MAASOOJUSPUMBAD <br><br><span>Energiatõhusus otse sinu kodu alt</span>"
    content="Maasoojuspump kasutab maapinda salvestunud päikeseenergiat, et pakkuda sinu kodule tõhusat ja stabiilset küttelahendust. Maakollektori või puurkaevu kaudu ammutatakse soojusenergiat, mis suunatakse küttesüsteemi vee soojendamiseks.
    <br><br>
    Maasoojuspumbad on erakordselt energiasäästlikud ja sobivad eriti hästi suurema energiavajadusega majadele. Süsteem pakub ühtlast kütet ja tarbevee soojendust aastaringselt, sõltumata välisõhu temperatuurist.
    <br>Eeliste hulka kuuluvad madalad püsikulud, pikaajaline investeering, kõrge kasutegur ning minimaalne hooldusvajadus.
    <br>Miinusteks võivad olla suurem alginvesteering ja maapinna kaevetööde vajadus.
    <br><br>Küttesepalt leiad kvaliteetsed maasoojuspumbad koos professionaalse paigalduse ja järelteenindusega. Paigaldusteenust pakume nii enda lähedal <strong>Tallinna ja Harjumaa piirkonnas</strong> kui ka kaugemal üle Eesti."
    image="images/taustad/maasoojuspumbad-taust.webp"
    imageAlt="Maasoojuspumbad taust"
    eriStiil="object-position: bottom;"
    :textholderStyle="''"
/>
<x-tootesektsioonid.soojuspumbad_tootesektsioon :products="$products" :brands="$brands"  :typeSlug="$typeSlug"/>
<x-up_scroller/>
<x-cookies/> 
</x-layout>