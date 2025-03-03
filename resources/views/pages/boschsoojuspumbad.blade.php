<x-layout 
    :title="'Bosch Õhksoojuspumbad - Tõhusad ja Energiasäästlikud Kütte- ja Jahutusseadmed'"
    :metaDescription="'Bosch õhksoojuspumbad pakuvad usaldusväärset ja energiatõhusat lahendust soojendamiseks ja jahutamiseks. Kvaliteet ja innovatsioon, mis tagab mugavuse igasugustes oludes.'"
    :metaKeywords="'Bosch õhksoojuspump, Bosch soojuspump, õhksoojuspumbad, energiasääst, soojendamine, jahutamine, õhk-õhk soojuspump, kvaliteetne soojuspump, kütte ja jahutusseade, Bosch kütte- ja jahutusseadmed'"
    :metaAuthor="'Tanel Sepp'"
    :canonical="url()->current()"
    :robots="'index, follow'"
    :ogImage="Vite::asset('resources/images/vaikesed/bosch/bosch-air-source-heat-pump.webp')" 
    :viteCssAssets="['resources/css/app.css', 'resources/css/navbar.css', 'resources/css/footer.css','resources/css/staticCarousel.css', 'resources/css/tootesektsioon.css']"
    :viteJsAssets="['resources/js/app.js','resources/js/hamburger.js','resources/js/navbar.js','resources/js/lenis.js']"
>
    <x-staticCarousel/>
</x-layout>