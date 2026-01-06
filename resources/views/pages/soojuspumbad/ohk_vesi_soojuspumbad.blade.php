<x-layout :title="'Õhk-vesi soojuspumbad Tallinnas ja Harjumaal | Küttesepp'"
    :metaDescription="'Õhk-vesi soojuspumbad on energiasäästlik valik kodu kütmiseks ja tarbevee soojendamiseks. Küttesepp pakub lahendusi koos professionaalse paigaldusega.'"
    :metaKeywords="'õhk-vesi soojuspumbad, õhk-vesi küte, soojuspump, energiasäästlik küte, tarbevee soojendamine'"
    :ogImage="asset('images/serp/kuttesepp-og-ohkvesisoojuspumbad.webp')"
    :metaAuthor="'Tanel Sepp'"
    :robots="'index, follow'"
    :viteCssAssets="['resources/css/pages/tootelehedala.css']">

    
<x-static_carousel 
    title="ÕHK-VESI SOOJUSPUMBAD <br><br><span>Tõhus ja säästlik lahendus küttesüsteemidele</span>"
    content="Õhk-vesi soojuspumba tööprotsess on samal põhimõttel nagu õhksoojuspumbal: Energia ammutatakse välisõhust, kasutades elektrienergiat külmaine rõhu tõstmiseks, et saavutada sobiv temperatuur. Saadud temperatuuri aga kasutatakse küttesüsteemi vee soojendamiseks.<br><br>
    Erinevalt õhk-õhk soojuspumbast suunatakse soojus küttevee kaudu radiaatoritesse, põrandaküttesüsteemi või tarbevee soojendamiseks, tagades ühtlase ja mugava sisekliima.
    <br>Eelised on madalamad küttekulud, toaõhku ei keerutata mehaanilise puhuriga,  võimalus ühendada olemasoleva veeküttesüsteemiga ning soojusjaotuse ühtlus erinevates ruumides.
     <br><br>Tänapäevased õhk-vesi soojuspumbad on äärmiselt tõhusad ka madalatel temperatuuridel. Küttesepalt saate õhk-vesi soojuspumpasid osta koos paigaldusega eelkõige <strong>Tallinna ja Harjumaa piirkonnas</strong>,
arvestades hoone eripärasid ja küttesüsteemi vajadusi."
    image="images/taustad/ohk-vesi-soojuspumbad.webp"
    imageAlt="Õhk-vesi soojuspumbad taust"
    :textholderStyle="''"
/>
<x-tootesektsioonid.soojuspumbad_tootesektsioon :products="$products" :brands="$brands"  :typeSlug="$typeSlug"/>
<x-up_scroller/>
<x-cookies/> 
</x-layout>