<x-layout :title="'Õhk-vesi soojuspumbad - kvaliteetsed ja energiasäästlikud | Küttesepp'"
    :metaDescription="'Õhk-vesi soojuspumbad on energiasäästlik valik kodu kütmiseks ja tarbevee soojendamiseks. Küttesepp pakub lahendusi koos professionaalse paigaldusega.'"
    :metaKeywords="'õhk-vesi soojuspumbad, õhk-vesi küte, soojuspump, energiasäästlik küte, tarbevee soojendamine'"
    :metaAuthor="'Tanel Sepp'"
    :robots="'index, follow'"
    :viteCssAssets="['resources/css/app.css', 'resources/css/navbar.css', 'resources/css/footer.css','resources/css/staticCarousel.css', 'resources/css/tootesektsioon.css','resources/css/upscroller.css','resources/css/cookies.css']"

    :viteJsAssets="['resources/js/app.js','resources/js/hamburger.js','resources/js/navbar.js','resources/js/lenis.js','resources/js/upscroller.js', 'resources/js/cookies.js']"
>
    
<x-static_carousel 
    title="ÕHK-VESI SOOJUSPUMBAD <br><br><span>Tõhus ja säästlik lahendus küttesüsteemidele</span>"
    content="Õhk-vesi soojuspumba tööprotsess on samal põhimõttel nagu õhksoojuspumbal: Energia ammutatakse välisõhust, kasutades elektrienergiat külmaine rõhu tõstmiseks, et saavutada sobiv temperatuur. Saadud temperatuuri aga kasutatakse küttesüsteemi vee soojendamiseks.<br><br>
    Erinevalt õhk-õhk soojuspumbast suunatakse soojus küttevee kaudu radiaatoritesse, põrandaküttesüsteemi või tarbevee soojendamiseks, tagades ühtlase ja mugava sisekliima.
    <br>Eelised on madalamad küttekulud, toaõhku ei keerutata mehaanilise puhuriga,  võimalus ühendada olemasoleva veeküttesüsteemiga ning soojusjaotuse ühtlus erinevates ruumides.
    <br>Miinusteks võivad olla esialgne soetus- ja paigalduskulu võrreldes õhksoojuspumbaga.
     <br><br>Tänapäevased õhk-vesi soojuspumbad on äärmiselt tõhusad ka madalatel temperatuuridel. Küttesepalt saate soetada siin pakutavaid õhk-vesi soojuspumpasid koos professionaalse paigalduse ja kasutusõpetusega."
    image="resources/images/taustad/ohk-vesi-soojuspumbad.webp"
    imageAlt="Õhk-vesi soojuspumbad taust"
    :textholderStyle="''"
/>
<x-tootesektsioonid.soojuspumbad_tootesektsioon :products="$products" :brands="$brands"  :typeSlug="$typeSlug"/>
<x-up_scroller/>
<x-cookies/> 
</x-layout>