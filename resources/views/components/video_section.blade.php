<section class="videosection" id="videosection">

    {{-- VASAK NOOL --}}
    <button type="button" class="carousel-button carousel-button-back">
        <img src="{{ Vite::asset('resources/images/icons/back.png') }}"
             alt="Eelmine video"
             class="arrow-img" />
    </button>

    {{-- SLIDER --}}
    <div class="video-slider-wrapper">
        <div class="video-slider">

            <div class="video-slide">
                <iframe
                    src="https://www.youtube-nocookie.com/embed/3C-_WVBgkuw?enablejsapi=1&rel=0"
                    title="Samsung Ehs Mono HT Quiet - 12kw - Uus eramu kütja"
                    loading="lazy"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen>
                </iframe>
            </div>

            <div class="video-slide">
                <iframe
                    src="https://www.youtube-nocookie.com/embed/7Jzipapy6-I?enablejsapi=1&rel=0"
                    title="Es õhk-vesi soojuspump - 12kw, monoblock"
                    loading="lazy"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen>
                </iframe>
            </div>

            <div class="video-slide">
                <iframe
                    src="https://www.youtube-nocookie.com/embed/g1uKAYyem1s?enablejsapi=1&rel=0"
                    title="ES õhk-vesi soojuspump - siseosa, jutpaneel ja seaded"
                    loading="lazy"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen>
                </iframe>
            </div>

        </div>
    </div>

    {{-- PAREM NOOL --}}
    <button type="button" class="carousel-button carousel-button-next">
        <img src="{{ Vite::asset('resources/images/icons/next.png') }}"
             alt="Järgmine video"
             class="arrow-img" />
    </button>

</section>