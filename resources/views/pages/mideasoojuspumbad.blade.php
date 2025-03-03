<x-layout 
    :title="'Midea Õhksoojuspumbad - Tõhusad ja Energiasäästlikud Kütte- ja Jahutusseadmed'"
    :metaDescription="'Midea õhksoojuspumbad pakuvad parimat lahendust soojendamiseks ja jahutamiseks. Kvaliteet, usaldusväärsus ja energiasäästlikkus – ideaalne valik kodu või äri jaoks.'"
    :metaKeywords="'Midea õhksoojuspump, Midea soojuspump, õhksoojuspumbad, energiasääst, soojendamine, jahutamine, õhk-õhk soojuspump, kvaliteetne soojuspump, kütte ja jahutusseade, Midea kütte- ja jahutusseadmed'"
    :metaAuthor="'Tanel Sepp'"
    :canonical="url()->current()"
    :robots="'index, follow'"
    :ogImage="Vite::asset('resources/images/vaikesed/midea/midea-air-source-heat-pump.webp')" 
    :viteCssAssets="['resources/css/app.css', 'resources/css/navbar.css', 'resources/css/footer.css','resources/css/staticCarousel.css', 'resources/css/tootesektsioon.css']"
    :viteJsAssets="['resources/js/app.js','resources/js/hamburger.js','resources/js/navbar.js','resources/js/lenis.js']"
>
    <x-staticCarousel/>
</x-layout>