<x-layout :title="'Õhk-vesi soojuspumbad Tallinnas ja Harjumaal | Küttelahendus majale | Küttesepp'"
   :metaDescription="'Õhk-vesi soojuspumbad Tallinnas ja Harjumaal. Tõhus lahendus põrandakütte, radiaatorite ja tarbevee soojendamiseks. Võrdle seadmeid ja leia sobiv küttesüsteem Küttesepalt.'"
   :metaKeywords="'õhk-vesi soojuspump, õhk-vesi soojuspumbad, õhk-vesi küte, õhk-vesi küttesüsteem, tarbevee soojendamine, põrandakütte soojuspump'"
    :ogImage="asset('images/serp/kuttesepp-og-ohkvesisoojuspumbad.webp')"
    :metaAuthor="'Tanel Sepp'"
    :robots="'index, follow'"
    :viteCssAssets="['resources/css/pages/tootelehedala.css']">

    
<x-static_carousel 
title="ÕHK-VESI SOOJUSPUMBAD <br><br><span>Tõhus ja säästlik küttelahendus sinu koju</span>"
content="Õhk-vesi soojuspumba tööprotsess põhineb samal põhimõttel nagu õhk-õhk soojuspumbal: soojusenergia ammutatakse välisõhust ning elektrienergiat kasutatakse külmaine rõhu tõstmiseks, et saavutada sobiv temperatuur. Saadud soojust kasutatakse küttesüsteemi vee soojendamiseks.<br><br>

Erinevalt õhk-õhk soojuspumbast suunatakse soojus küttevee kaudu radiaatoritesse, põrandaküttesüsteemi või tarbevee soojendamiseks, tagades ühtlase ja mugava sisekliima.<br><br>

Õhk-vesi soojuspumba eelisteks on madalamad küttekulud, võimalus ühendada olemasoleva veeküttesüsteemiga ning ühtlane soojusjaotus erinevates ruumides.<br><br>
Küttesepalt leiad õhk-vesi soojuspumpasid koos nõu ja jõuga. Kui vajad ka paigaldust, vaata <a href='{{ route('soojuspumpade-paigaldus') }}' style='font-weight:700;' title='Soojuspumpade paigaldus Tallinnas ja Harjumaal'>
soojuspumpade paigaldus
</a>.<br> Paigaldust pakume nii <strong>Tallinnas ja Harjumaal</strong> kui ka kokkuleppel mujal Eestis.'"
    image="images/taustad/ohk-vesi-soojuspumbad.webp"
    imageAlt="Õhk-vesi soojuspump maja küttesüsteemile"
    :textholderStyle="''"
/>
<x-tootesektsioonid.soojuspumbad_tootesektsioon :products="$products" :brands="$brands"  :typeSlug="$typeSlug"/>
<x-up_scroller/>
<x-cookies/> 
</x-layout>