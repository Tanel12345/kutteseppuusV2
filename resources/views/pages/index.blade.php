

<x-layout :title="'Kvaliteetsed soojuspumbad ja küttesüsteemide müük ning paigaldus - Küttesepp'"
    :metaDescription="'Keskküttesüsteemide ja soojuspumpade müük ja paigaldust. Õhksoojuspumbad, õhk-vesi soojuspumbad, maasoojuspumbad, pelletikatlad ja -kaminad – professionaalne küttemurede lahendus Teie kodule.'"
    :metaKeywords="'soojuspumbad, õhksoojuspumbad, õhk-vesi soojuspumbad, maasoojuspumbad, pelletikatlad, pelletikaminad, küttesüsteemid, küttesüsteemide paigaldus, katlad, küttesüsteemide hooldus, säästlik küte'"
    :metaAuthor="'Tanel Sepp'"
    :ogImage="Vite::asset('resources/images/kuttesusteemid_logo.webp')"
    :robots="'index, follow'"  
    :canonical="'https://ahjumees.ee'"
    :viteCssAssets="['resources/css/app.css', 'resources/css/navbar.css', 'resources/css/footer.css', 'resources/css/upscroller.css', 'resources/css/indexCarousel.css', 'resources/css/teenused.css', 'resources/css/piltlingid.css', 'resources/css/cookies.css', 'resources/css/ettevottest.css','resources/css/contact.css']"
    :viteJsAssets="['resources/js/app.js','resources/js/hamburger.js','resources/js/carousel.js','resources/js/upscroller.js','resources/js/imagePopup.js','resources/js/lazyLoading.js','resources/js/navbar.js','resources/js/lenis.js', 'resources/js/cookies.js','resources/js/contact.js']"
    >
    
    <x-carousel/>
    <x-teenused/>
    <x-up-scroller/>
    <x-piltlingid/>
    <x-ettevottest/>
    <x-contact :product="$product" />
    <x-map/>
    <x-cookies/>    
    
</x-layout>






















