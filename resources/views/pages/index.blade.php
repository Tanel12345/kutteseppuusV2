

<x-layout :title="'Soojuspumbad ja küttesüsteemid Tallinnas ja Harjumaal | Küttesepp'"
    :metaDescription="'Soojuspumpade ja küttesüsteemide müük, paigaldus ja hooldus Tallinnas ja Harjumaal. Õhk-õhk, õhk-vesi ja maasoojuspumbad, pelletikatlad ja kaminad. Küttesepp.'"
    :metaKeywords="'soojuspumbad tallinn, soojuspumbad harjumaa, õhk-õhk soojuspumbad, õhk-vesi soojuspumbad, maasoojuspumbad, pelletikatlad, küttesüsteemide paigaldus'"
    :metaAuthor="'Tanel Sepp'"
    :robots="'index, follow'"  
    :viteCssAssets="['resources/css/app.css', 'resources/css/navbar.css', 'resources/css/footer.css', 'resources/css/upscroller.css', 'resources/css/indexCarousel.css', 'resources/css/teenused.css', 'resources/css/piltlingid.css', 'resources/css/cookies.css', 'resources/css/ettevottest.css','resources/css/contact.css','resources/css/videosection.css']"
    :viteJsAssets="['resources/js/app.js','resources/js/hamburger.js','resources/js/carousel.js','resources/js/upscroller.js','resources/js/imagePopup.js','resources/js/lazyLoading.js','resources/js/navbar.js','resources/js/lenis.js', 'resources/js/cookies.js','resources/js/contact.js','resources/js/videosection.js']"
    >
 
    <x-carousel/>
    <x-teenused/>
    <x-up_scroller/>
    <x-piltlingid/>
    <x-ettevottest/>
    <x-video_section/>
    <x-contact :product="$product" />
    <x-map/>
    <x-cookies/>
    
    @if(request()->routeIs('index'))
<script src="https://www.google.com/recaptcha/api.js?render=6LduzjQsAAAAAGXX_gNgdl6NvQQiEFpG0VnbQw-w"></script>

<script>
    grecaptcha.ready(function () {
        grecaptcha.execute('6LduzjQsAAAAAGXX_gNgdl6NvQQiEFpG0VnbQw-w', {
            action: 'contact'
        }).then(function (token) {
            const el = document.getElementById('recaptcha_token');
            if (el) el.value = token;
        });
    });
</script>
@endif
    
</x-layout>






















