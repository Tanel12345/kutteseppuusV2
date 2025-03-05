<x-layout 
    :title="'Midea Õhksoojuspumbad - Tõhusad ja Energiasäästlikud Kütte- ja Jahutusseadmed'"
    :metaDescription="'Midea õhksoojuspumbad pakuvad parimat lahendust soojendamiseks ja jahutamiseks. Kvaliteet, usaldusväärsus ja energiasäästlikkus – ideaalne valik kodu või äri jaoks.'"
    :metaKeywords="'Midea õhksoojuspump, Midea soojuspump, õhksoojuspumbad, energiasääst, soojendamine, jahutamine, õhk-õhk soojuspump, kvaliteetne soojuspump, kütte ja jahutusseade, Midea kütte- ja jahutusseadmed'"
    :metaAuthor="'Tanel Sepp'"
    :canonical="url()->current()"
    :robots="'index, follow'"
    
    :viteCssAssets="['resources/css/app.css', 'resources/css/navbar.css', 'resources/css/footer.css','resources/css/staticCarousel.css', 'resources/css/tootjasektsioon.css','resources/css/upscroller.css','resources/css/teenusedStatic.css','resources/css/cookies.css']"

    :viteJsAssets="['resources/js/app.js','resources/js/hamburger.js','resources/js/navbar.js','resources/js/lenis.js','resources/js/upscroller.js', 'resources/js/cookies.js']"
>
   
    <x-staticCarousel
    title="Midea õhksoojuspumbad  <br><br><span>tõhus, kindel ja energiasäästlik lahendus teie kodu kütmiseks ja jahutamiseks</span>"
    content="Midea on maailma juhtivaid kodumasinate ja HVAC-seadmete tarnijaid, pakkudes uuenduslikke ja energiatõhusaid õhksoojuspumpasid, mis vastavad tänapäeva mugavuse ja säästlikkuse ootustele. Midea õhksoojuspumbad ühendavad tipptasemel tehnoloogia, ökoloogilise disaini ja lihtsa kasutamise, tehes neist suurepärase valiku nii kodudesse kui ka äripindadele."
    image="resources/images/taustad/midea_taust.jpeg"
    imageAlt="Midea Õhksoojuspumbad - Tõhus ja Energiasäästlik Lahendus"
    :textholderStyle="'margin:10px auto; max-width: 1000px;'"
/>
    />
    <x-mideacomponents.teenusedMidea/>
    <x-tootjasektsioon
    title="<span>Midea Group</span> - innovatsioon ja tipptase"
    content="<strong>Midea Group</strong> on silmapaistev tehnoloogiaettevõte, mis on spetsialiseerunud robootikale, tööstusautomaatikale, HVAC-süsteemidele, kodumasinatele ja intelligentsele logistikale.<br><br>

    Aastal Hiinas asutatud Midea peakorter asub Pekingis ning ettevõte on noteeritud Shenzheni börsil. Alates 2016. aasta juulist kuulub Midea maailma 500 suurima ettevõtte (Fortune Global 500) hulka.<br><br>

    Tänaseks annab Midea tööd enam kui 150 000 inimesele ning müüb oma tooteid enam kui 200 riigis. Ettevõttel on 21 tootmisüksust ja 260 logistikakeskust, toetades muljetavaldavat, üle 40 miljardi USA dollari suurust aastakäivet.<br><br>

    Rohkem kui poole sajandi jooksul on Midea kasvanud rahvusvaheliseks liidriks, pakkudes uuenduslikke ja nutikaid lahendusi miljonitele kodudele ja tööstustele üle maailma.<br><br>

    Midea kaubamärgi lubadus on \pakkuda üllatavalt sõbralikke lahendusi neile, kes hindavad väikeseid hetki kodus. Hiljuti esitles ettevõte ka oma uut loosungit:<br><br> <strong>Midea –</strong> Tee oma kodu mugavaks."
    
    :textholderStyle="'margin:10px auto; max-width: 1000px;'"
    link="{{ route('ohksoojuspumbad.index', ['brand' => 'midea']) }}#tootesektsioon"
    linktitle="Midea tooted"
    linktext="VAATA TOOTEID"
    outLink="https://www.midea-group.com/about-us"
    outLinkTitle="Midea - About Us"
    outLinkText="MIDEA LEHELE"
    />

    
    <x-up-scroller/>
    <x-cookies/> 
</x-layout>