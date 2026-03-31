

<x-layout :title="'Soojuspumbad ja küttesüsteemid Tallinnas ja Harjumaal | Küttesepp'"
    :metaDescription="'Soojuspumpade müük, paigaldus, remont ja hooldus Tallinnas ja Harjumaal. Küttesüsteemide ehitus, läbipesu ja küttevee demineraliseerimine eramajadele. Küttesepp.'"
    :metaKeywords="'soojuspumbad tallinn, soojuspumbad harjumaa, õhk-õhk soojuspumbad, õhk-vesi soojuspumbad, maasoojuspumbad, pelletikatlad, küttesüsteemide paigaldus'"
    :ogImage="asset('images/serp/kuttesepp-og.webp')"
    :metaAuthor="'Tanel Sepp'"
    :robots="'index, follow'"  
    :viteCssAssets="['resources/css/pages/index.css']"
    :viteJsAssets="['resources/js/pages/index.js']"
>

 
    <x-carousel/>
    <x-kutsuostma/>
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






















