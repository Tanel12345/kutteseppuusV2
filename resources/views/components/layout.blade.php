<!DOCTYPE html>
<html lang="et">

<head>

    <!-- Meta tagid -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, viewport-fit=cover">
    <title>{{ $title ?? 'Küttesepp - Küttemurede lahendaja' }}</title>
    <meta name="description" content="{{ $metaDescription ?? 'Küttesepp - Küttemurede lahendaja' }}">
    <meta name="keywords" content="{{ $metaKeywords ?? 'Küttesepp - Küttemurede lahendaja' }}">
    <meta name="author" content="{{ $metaAuthor ?? 'Tanel Sepp' }}">

    {{-- Ophengraph Sotsemeeida jaoks meta --}}
    <meta property="og:title" content="{{ $title ?? 'Küttesepp - Küttemurede lahendaja' }}">
    <meta property="og:description"
        content="{{ $metaDescription ?? 'Pakume küttesüsteeme ja paigaldust kogu Eestis. Vaata lähemalt!' }}">
    @if (request()->has('brand'))
        <meta property="og:url" content="{{ route('soojuspumbad.type', $typeSlug ?? request()->route('type')) }}">
    @elseif (request()->has('product'))
        <meta property="og:url" content="{{ url('/') }}">
    @else
        <meta property="og:url" content="{{ request()->fullUrl() }}">
    @endif
    <meta property="og:type" content="website">
    <meta property="og:locale" content="et_EE">

    {{-- Ophengraph Sotsmeedia esinduspildid esilehele ja alalehtedele --}}
    <meta property="og:image" content="{{ $ogImage ?? asset('images/serp/kuttesepp-og.webp') }}">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:type" content="image/webp">

    <!-- Lingid -->
    {{-- <link rel="canonical" href="{{ url()->current() }}" /> --}}
    @if (request()->has('brand'))
        {{-- Filtrivaade: ÄRA indexi, canonical põhilehele --}}
        <link rel="canonical" href="{{ route('soojuspumbad.type', $typeSlug ?? request()->route('type')) }}">
        <meta name="robots" content="noindex, follow">
        <meta name="googlebot" content="noindex, follow">
    @elseif (request()->has('product'))
        {{-- Kontaktivormi eel­täide – MITTE SEO-leht --}}
        <link rel="canonical" href="{{ url('/') }}">
        <meta name="robots" content="noindex, follow">
        <meta name="googlebot" content="noindex, follow">
    @else
        {{-- Päris SEO-leht --}}
        <link rel="canonical" href="{{ request()->fullUrl() }}">
        <meta name="robots" content="{{ $robots ?? 'index, follow, max-image-preview:large' }}">
    @endif


    <!-- favikoonid erinevatesse kohtadesse ja seadmetesse, kasutasin realfavicongeneratorit -->
    <link rel="icon" href="/favicon-48x48.png" sizes="48x48" type="image/png">
    <link rel="icon" href="/favicon-96x96.png" sizes="96x96" type="image/png">
    <link rel="icon" type="image/svg+xml" href="/favicon.svg" />
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png" />
    <link rel="manifest" href="/site.webmanifest" />

    <!-- googlefonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;900&display=swap"
        rel="stylesheet">

    {{-- GLOBAALNE CSS (ALATI) --}}
    @vite('resources/css/app.css')

    {{-- LEHESPETSIIFILINE CSS --}}
    @isset($viteCssAssets)
        @vite($viteCssAssets)
    @endisset


    {{-- GLOBAALNE JS (ALATI) --}}
    @vite('resources/js/app.js')

    {{-- LEHESPETSIIFILINE JS --}}
    @isset($viteJsAssets)
        @vite($viteJsAssets)
    @endisset

    {{-- Youtube iframe --}}
    <script defer src="https://www.youtube.com/iframe_api"></script>

    {{-- JSON-LD See plokk on mõeldud Google’i struktuurseks arusaamiseks sinu ettevõttest 
    Google kasutab seda:

    ✅ 1️⃣ Knowledge Paneli jaoks (parempoolne kast)

    Kui keegi otsib: Küttesepp siis just SIIT võib tulla:
    logo Knowledge Panelisse
    brändi pilt Google’i “entity” tasemel

    📌 See on brändi tase, mitte lehe tase.

    ✅ 2️⃣ Brändi usaldusväärsuse ja seose jaoks
    Google saab aru, et:
    see leht kuulub ettevõttele “Küttesepp”
    --}}
    <script type="application/ld+json">
    {
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "Küttesepp",
    "url": "https://www.kuttesepp.ee",
    "logo": "https://www.kuttesepp.ee/images/küttesepp_logo.webp",
    "image": "https://www.kuttesepp.ee/images/Tanel-Küttesepp.png",
    "sameAs": [
        "https://www.facebook.com/kuttesepp"
    ]
    }
    </script>




</head>

<body>


    <x-header />

    <main>
        {{ $slot }}
    </main>

    <x-footer />


</body>

</html>
