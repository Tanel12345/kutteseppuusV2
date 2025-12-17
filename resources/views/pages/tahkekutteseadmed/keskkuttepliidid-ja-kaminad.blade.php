<x-layout 
    :title="'Keskküttepliidid ja keskküttekaminad – Küttesepp'"
    :metaDescription="'Keskküttepliidid ja keskküttekaminad radiaatorite ja põrandaküttega küttesüsteemidele. Küttesepp tagab korrektse paigalduse ja toimiva lahenduse.'"
    :metaKeywords="'keskküttekaminad, keskküttepliidid, vesiküttega kamin, vesiküttega pliit, küttepliidi paigaldus, kamin keskküttele'"
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
    title="KESKKÜTTEPLIITID JA -KAMINAD <br><br><span>Tõhus puuküte radiaatorite ja põrandaküttega</span>"
    content="
    Keskküttekaminad ja keskküttepliidid on mõeldud vee soojendamiseks ning radiaatorite või põrandakütte kaudu kogu maja kütmiseks. Erinevalt tavalisest kaminast või pliidist ei köeta ainult ühte ruumi – soojus jaotub ühtlaselt kogu küttesüsteemi kaudu.<br><br>

    Vesiküttega kamin või pliit sobib hästi neile, kes soovivad ühendada elutoa hubase kaminatule ja praktilise keskküttelahenduse üheks süsteemiks. Süsteemi saab kombineerida ka soojuspumba, päikeseenergia või olemasoleva katlaga.<br><br>
    
    Keskküttepliitide ja -kaminate eeliseks on kiire reageerimine, kompaktne ehitus ning võimalus töötada ka väikese puhverpaagi või olemasoleva küttesüsteemiga. Võrreldes klassikaliste halupuukateldega on need seadmed oluliselt kergemad ja sobivad hästi ka väiksematesse tehnoruumidesse.<br><br>
    
    Küttesepp pakub keskküttekamina ja -pliidi terviklahendust: seadme valik, hüdrauliline ühendamine, ohutusarmatuur, paisupaak, automaatika ning süsteemi tasakaalustamine ja kasutusõpetus."
    image="resources/images/taustad/keskkuttepliidid-taust.webp"
    imageAlt="Keskküttepliit kui küttesüsteemi osa"
    :textholderStyle="''"
/>

<x-tootesektsioonid.tahkekutteseadmed-tootesektsioon :products="$products" :brands="$brands"/>

<x-up-scroller/>
<x-cookies/> 
    
</x-layout>