<x-layout 
   :title="'Pelletikatlad ja pelletikaminad – automaatne vesiküte | Küttesepp'"
    :metaDescription="'Pelletikatlad ja pelletikaminad vesiküttega eramajade küttesüsteemidele. Automaatne, mugav ja efektiivne pelletiküte koos professionaalse paigaldusega.'"
    :metaKeywords="'pelletikatlad, pelletikaminad, pelletiküte, pelletikatel paigaldus, pelletikamin keskküttele, automaatne küte'"
    :metaAuthor="'Tanel Sepp'"
    :robots="'index, follow'"
     :viteCssAssets="['resources/css/pages/tootelehedala.css']">
    
<x-static_carousel 
    title="PELLETIKATLAD JA PELLETIKAMINAD <br><br><span>Mugav ja automaatne küte kogu majale</span>"
    content="
    Pelletikatlad ja pelletikaminad on mõeldud mugavaks ning automatiseeritud küttesüsteemiks, kus soojus toodetakse puidupelletitest ja jaotatakse radiaatorite või põrandakütte kaudu kogu hoonesse. Tegemist on keskkonnasõbraliku ja kasutajasõbraliku küttelahendusega, kus kütuse lisamine ja põlemine on suurel määral automaatne.<br>

    Pelletikamin ühendab endas elutoa hubasuse ja vesiküttesüsteemi praktilisuse – eluruum saab otsese soojuse ning ülejäänud maja köetakse radiaatorite või põrandakütte kaudu. Pelletikatel seevastu asub tavaliselt tehnoruumis ning toodab tõhusa ja stabiilse soojuse kogu küttesüsteemile.<br><br>
    
    Pelletikütte suureks eeliseks on automatiseeritud tahkekütteallikas ja kõrge kasutegur.<br><br>
    
    Küttesepp pakub pelletikatelde ja -kaminate terviklahendust: seadme valik, hüdrauliline ühendamine, suitsulõõride lahendused, ohutusarmatuur, automatiseerimine, süsteemi täitmine, tasakaalustamine ning põhjalik kasutusõpetus."
    image="images/taustad/pelletitaust.webp"
    imageAlt="Pelletikamin vesiküttesüsteemis"
    eriStiil="object-position: 20% top;"
       :textholderStyle="''"
/>


<x-tootesektsioonid.tahkekutteseadmed_tootesektsioon :products="$products" :brands="$brands"/>

<x-up_scroller/>
<x-cookies/> 
    
</x-layout>