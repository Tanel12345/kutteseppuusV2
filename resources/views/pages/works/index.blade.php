@php
    use Illuminate\Support\Str;
@endphp

<x-layout :title="'Soojuspumpade paigaldus – tehtud tööd ja paigaldused | Küttesepp'" :metaDescription="'Vaata Küttesepp OÜ tehtud soojuspumpade ja küttesüsteemide paigaldusi. Reaalsed projektid, pildid ja kogemus õhk-vesi, õhk-õhk ja maakütte lahendustest.'" :metaKeywords="'soojuspumpade paigaldus, tehtud tööd, õhk-vesi soojuspump, maaküte, küttesüsteemide paigaldus, küttesepp'" :metaAuthor="'Tanel Sepp'" :robots="'index, follow'" :viteCssAssets="[
    'resources/css/app.css',
    'resources/css/navbar.css',
    'resources/css/footer.css',
    'resources/css/works-cards.css',
    'resources/css/upscroller.css',
    'resources/css/cookies.css',
    'resources/css/staticCarouselkuttesepp.css',
    'resources/css/tootjasektsioon2.css',
]"
    :viteJsAssets="[
        'resources/js/app.js',
        'resources/js/navbar.js',
        'resources/js/lenis.js',
        'resources/js/upscroller.js',
        'resources/js/cookies.js',
        'resources/js/hamburger.js',
    ]">


    <section class="uper" id="uperid">
        <div class="carousel">
            <div class="taustadiv">
                <div class="textholderdiv">
                    <div class="textholder">
                        <h1>Küttesepa tööd ja tegemised!</h1>
                    </div>
                </div>
                <img style="opacity:0.5; filter: blur(3px);" class="taust" src="{{ Vite::asset('resources/images/taustad/tehtud-tood-taust.webp') }}"
                    alt="Küttesüsteemi ehitamine">
            </div>
        </div>
    </section>

    <section class="tootjasektsioon">
        <div class="tootjast">
            <div class="ettevotte">
                <div class="content">



                    <p style="margin:0 auto 40px; font-size:18px">
                        Allpool on valik Küttesepp OÜ poolt teostatud soojuspumpade ja
                        küttesüsteemide paigaldustest, ehitustest, remontidest ja hooldustest. Tegemist on projektidega,
                        mille lahendamisel on kohandatud konkreetse hoone ja
                        kliendi vajadustega.<br><br><strong>Vajuta kaardile:</strong>
                    </p>

                    {{-- TEHTUD TÖÖDE KAARDID (HARDCODED CONTENT) --}}
                    <section class="works-cards">
                        <div class="container">

                            <div class="works-grid">

                                @forelse($works as $work)
                                    <article class="work-card">

                                        @if ($work->images->first())
                                            <a href="{{ route('works.show', $work->slug) }}">
                                                <img src="{{ asset('storage/' . $work->images->first()->image_path) }}"
                                                    alt="{{ $work->title }} – soojuspumba paigaldus"
                                                    class="work-card-image">
                                            </a>
                                        @endif

                                        <div class="work-card-content">
                                            {{-- TAUSTAPILT --}}
                                            <img class="work-card-bg"
                                                src="{{ Vite::asset('resources/images/taustad/taust5.png') }}"
                                                alt="" aria-hidden="true">


                                            <a href="{{ route('works.show', $work->slug) }}">
                                                <h3>{{ $work->title }}</h3>
                                            </a>

                                            <p class="work-meta">
                                                {{ $work->location ?? 'Eesti' }}

                                        </div>

                                    </article>

                                @empty
                                    <div class="no-works">
                                        <p>
                                            Hetkel lisame uusi tehtud töid.<br>
                                            Küsi julgelt näiteid või vaata peagi uuesti!
                                        </p>
                                    </div>
                                @endforelse

                            </div>
                        </div>
                    </section>


                </div>
                <div class="links">

                    <div class="kusipakkumist">
                        <a href="/#form" title="Emaili vormile">
                            <p>KÜSI LISAINFOT</p>
                        </a>
                    </div>


                </div>
            </div>
        </div>

    </section>

    <x-up_scroller />
    <x-cookies />

</x-layout>
