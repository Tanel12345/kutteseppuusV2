<x-layout 
    :title="'Keskküttepliidid ja keskküttekaminad – vesiküte radiaatoritele | Küttesepp'"
    :metaDescription="'Keskküttepliidid ja keskküttekaminad vesiküttega radiaatorite ja põrandakütte süsteemidele. Küttesepp tagab korrektse paigalduse ja töökindluse.'"
    :metaKeywords="'keskküttekaminad, keskküttepliidid, vesiküttega kamin, vesiküttega pliit, küttepliidi paigaldus, kamin keskküttele'"
    :ogImage="asset('images/serp/kuttesepp-og-keskkuttepliidid.webp')"
    :metaAuthor="'Tanel Sepp'"
    :robots="'index, follow'"
     :viteCssAssets="['resources/css/pages/tootelehedala.css']">
    
<x-static_carousel 
    title="KESKKÜTTEPLIITID JA -KAMINAD <br><br><span>Tõhus puuküte radiaatorite ja põrandaküttega</span>"
    content="
    Keskküttekaminad ja keskküttepliidid on mõeldud vee soojendamiseks ning radiaatorite või põrandakütte kaudu kogu maja kütmiseks. Erinevalt tavalisest kaminast või pliidist ei köeta ainult ühte ruumi – soojus jaotub ühtlaselt kogu küttesüsteemi kaudu.<br><br>

    Vesiküttega kamin või pliit sobib hästi neile, kes soovivad ühendada elutoa hubase kaminatule ja praktilise keskküttelahenduse üheks süsteemiks. Süsteemi saab kombineerida ka soojuspumba, päikeseenergia või olemasoleva katlaga.<br><br>
    
    Keskküttepliitide ja -kaminate eeliseks on kiire reageerimine, kompaktne ehitus ning võimalus töötada ka väikese puhverpaagi või olemasoleva küttesüsteemiga.<br><br>
    
    Küttesepp pakub keskküttekamina ja -pliidi terviklahendust: seadme valik, hüdrauliline ühendamine, ohutusarmatuur, paisupaak, automaatika ning süsteemi tasakaalustamine ja kasutusõpetus."
    image="images/taustad/keskkuttepliidid-taust.webp"
    imageAlt="Keskküttepliit kui küttesüsteemi osa"
    eriStiil="object-position:70% top;"
    :textholderStyle="''"
/>

<x-tootesektsioonid.tahkekutteseadmed_tootesektsioon :products="$products" :brands="$brands"/>

<x-up_scroller/>
<x-cookies/> 
    
</x-layout>