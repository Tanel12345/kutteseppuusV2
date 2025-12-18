

<x-layout :title="'Soojuspumbad ja küttesüsteemid – müük, paigaldus ja hooldus | Küttesepp'"
    :metaDescription="'Soojuspumpade ja küttesüsteemide müük, paigaldus ja hooldus. Õhk-õhk, õhk-vesi ja maasoojuspumbad, pelletikatlad ja -kaminad. Küttesepp – professionaalne küttelahendus sinu kodule.'"
    :metaKeywords="'soojuspumbad, õhk-õhk soojuspumbad, õhk-vesi soojuspumbad, maasoojuspumbad, pelletikatlad, pelletikaminad, küttesüsteemid, küttesüsteemide paigaldus, küttesüsteemide hooldus, säästlik küte'"
    :metaAuthor="'Tanel Sepp'"
    :robots="'index, follow'"  
    :viteCssAssets="['resources/css/app.css', 'resources/css/navbar.css', 'resources/css/footer.css', 'resources/css/upscroller.css', 'resources/css/indexCarousel.css', 'resources/css/teenused.css', 'resources/css/piltlingid.css', 'resources/css/cookies.css', 'resources/css/ettevottest.css','resources/css/contact.css','resources/css/videosection.css']"
    :viteJsAssets="['resources/js/app.js','resources/js/hamburger.js','resources/js/carousel.js','resources/js/upscroller.js','resources/js/imagePopup.js','resources/js/lazyLoading.js','resources/js/navbar.js','resources/js/lenis.js', 'resources/js/cookies.js','resources/js/contact.js','resources/js/videosection.js']"
    >
 
    <x-carousel/>
    <x-teenused/>
    <x-up-scroller/>
    <x-piltlingid/>
    <x-ettevottest/>
    <x-video-section/>
    <x-contact :product="$product" />
    <x-map/>
    <x-cookies/>    
    
</x-layout>






















