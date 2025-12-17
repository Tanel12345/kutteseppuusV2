<x-layout 
   :title="'Pelletikatlad ja pelletikaminad – automaatne vesiküte | Küttesepp'"
    :metaDescription="'Pelletikatlad ja pelletikaminad vesiküttega eramajade küttesüsteemidele. Automaatne, mugav ja efektiivne pelletiküte koos professionaalse paigaldusega.'"
    :metaKeywords="'pelletikatlad, pelletikaminad, pelletiküte, pelletikatel paigaldus, pelletikamin keskküttele, automaatne küte'"
    :metaAuthor="'Tanel Sepp'"
    :robots="'index, follow'"
    :viteCssAssets="[
        'resources/css/app.css', 
        'resources/css/navbar.css', 
        'resources/css/footer.css',
        'resources/css/staticCarousel.css', 
        'resources/css/tootesektsioon.css',
        'resources/css/upscroller.css',
        'resources/css/cookies.css'
    ]"

    :viteJsAssets="[
        'resources/js/app.js',
        'resources/js/hamburger.js',
        'resources/js/navbar.js',
        'resources/js/lenis.js',
        'resources/js/upscroller.js', 
        'resources/js/cookies.js'
    ]"
>
    
<x-static-carousel 
    title="PELLETIKATLAD JA PELLETIKAMINAD <br><br><span>Mugav ja automaatne küte kogu majale</span>"
    content="
    Pelletikatlad ja pelletikaminad on mõeldud mugavaks ning automatiseeritud küttesüsteemiks, kus soojus toodetakse puidupelletitest ja jaotatakse radiaatorite või põrandakütte kaudu kogu hoonesse. Tegemist on keskkonnasõbraliku ja kasutajasõbraliku küttelahendusega, kus kütuse lisamine ja põlemine on suurel määral automaatne.<br><br>

    Pelletikamin ühendab endas elutoa hubasuse ja vesiküttesüsteemi praktilisuse – eluruum saab otsese soojuse ning ülejäänud maja köetakse radiaatorite või põrandakütte kaudu. Pelletikatel seevastu asub tavaliselt tehnoruumis ning toodab tõhusa ja stabiilse soojuse kogu küttesüsteemile.<br><br>
    
    Pelletikütte suureks eeliseks on kõrge kasutegur, stabiilne kütusehind ning võimalus töötada ka väikse puhverpaagiga või ilma selleta. Süsteemi saab edukalt kombineerida soojuspumba, päikeseenergia või olemasoleva küttesüsteemiga, et saavutada maksimaalne energiasääst.<br><br>
    
    Küttesepp pakub pelletikatelde ja -kaminate terviklahendust: seadme valik, hüdrauliline ühendamine, suitsulõõride lahendused, ohutusarmatuur, automatiseerimine, süsteemi täitmine, tasakaalustamine ning põhjalik kasutusõpetus."
    image="resources/images/taustad/pelletitaust.webp"
    imageAlt="Pelletikamin vesiküttesüsteemis"
    :textholderStyle="''"
/>


<x-tootesektsioonid.tahkekutteseadmed-tootesektsioon :products="$products" :brands="$brands"/>

<x-up-scroller/>
<x-cookies/> 
    
</x-layout>