<!DOCTYPE html>
<html lang="et">

<head>
    <!-- Google tag (gtag.js) -->
    {{-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-160195597-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-160195597-1');
    </script> --}}

    <!-- Meta tagid -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, viewport-fit=cover">
    <title>{{ $title ?? 'Küttesepp - Küttemurede lahendaja' }}</title>
    <meta name="description" content="{{ $metaDescription ?? 'Küttesepp - Küttemurede lahendaja' }}">
    <meta name="keywords" content="{{ $metaKeywords ?? 'Küttesepp - Küttemurede lahendaja' }}">
    <meta name="author" content="{{ $metaAuthor ?? 'Tanel Sepp' }}">

    {{-- Facebooki jaoks meta --}}
    <meta property="og:title" content="{{ $title ?? 'Küttesepp - Küttemurede lahendaja' }}">
    <meta property="og:description" content="{{ $metaDescription ?? 'Pakume küttesüsteeme ja paigaldust kogu Eestis. Vaata lähemalt!' }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="et_EE">
    <meta property="og:image" content="{{ Vite::asset('resources/images/küttesepp.png') }}">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="539">

    <!-- Lingid -->
    <link rel="canonical" href="https://www.kuttesepp.ee{{ request()->getRequestUri() }}" />
    <meta name="robots" content="{{ $robots ?? 'index, follow' }}">
    

    <!-- favikoonid erinevatesse kohtadesse ja seadmetesse, kasutasin realfavicongeneratorit -->
    <link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="/favicon.svg" />
    <link rel="shortcut icon" href="/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png" />
    <link rel="manifest" href="/site.webmanifest" />
     <!-- googlefonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;900&display=swap" rel="stylesheet">

    @vite($viteCssAssets ?? 'resources/css/app.css')
    @vite($viteJsAssets ?? ['resources/js/app.js'])
    <script defer  src="https://www.youtube.com/iframe_api"></script>

    {{-- <script src="https://www.google.com/recaptcha/api.js" async defer></script> --}}


</head>

<body>
    
   
        <x-header />
       
        <main>
            {{ $slot }}
        </main>

        <x-footer />
        
      
</body>
  
</html>