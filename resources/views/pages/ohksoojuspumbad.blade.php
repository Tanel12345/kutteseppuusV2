<x-layout :title="'Õhksoojuspump - kvaliteetsed õhksoojuspumbad Küttesepalt'"
    :metaDescription="'Õhk-õhk soojuspumbad - Soodsaim valik kütmiseks ja jahutamiseks.'"
    :metaKeywords="'õhk-õhk soojuspumbad, soojuspump, kütmine, jahutamine, energiasääst'"
    :metaAuthor="'Tanel Sepp'"
    :canonical="url()->current()"
    :robots="'index, follow'"
    :ogImage="Vite::asset('resources/images/vaikesed/bosch/Bosch.webp')"
    :viteCssAssets="['resources/css/app.css', 'resources/css/navbar.css', 'resources/css/footer.css','resources/css/staticCarousel.css', 'resources/css/tootesektsioon.css']"
    :viteJsAssets="['resources/js/app.js','resources/js/hamburger.js','resources/js/navbar.js','resources/js/lenis.js',]"
>
    
<x-staticCarousel/>
 <x-tootesektsioon :products="$products"/>


    
    
   
</x-layout>