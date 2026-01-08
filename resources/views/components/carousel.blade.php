<section class="uper" id="uperid">
    <div class="carousel">

        <div class="taustadiv">
            <img class="taust"
                src="{{ asset('images/pilved2.webp') }}"
                alt="Soojuspumpade ja küttesüsteemide paigaldus – Küttesepp"
                loading="eager"
                fetchpriority="high">
        </div>

        <div class="heading">
            <h1>Soojuspumbad ja küttesüsteemid <br> <span>Tallinnas ja Harjumaal</span></h1>
            <h2>Õhk-õhk | õhk-vesi | maakütte soojuspumbad ning tahkekütteseadmed</h2>
            <h3>Lahendame Sinu küttemure</h3>

            <img
                src="{{ asset('images/küttesepp_logo1.png') }}"
                class="h1logo"
                alt="Küttesepp logo"
                loading="eager">
        </div>

        <button type="button" class="carousel-button carousel-button-back">
            <img
                src="{{ asset('images/icons/back.png') }}"
                alt="Tagasi"
                class="arrow-img">
        </button>

        <div class="carouselcontainer">

            {{-- SLIDE 0 – LAETAKSE KOHE --}}
            <ul class="carousel-ul active">
                <li class="carousel-li">
                    <img
                        src="{{ asset('images/taustad/ohk-vesi-samsungtaust.webp') }}"
                        alt="Õhk-vesi soojuspump – Samsung"
                        title="Samsung õhk-vesi soojuspump"
                        class="carousel-img"
                        loading="eager"
                        fetchpriority="high">
                </li>
            </ul>

            {{-- SLIDE 1 --}}
            <ul class="carousel-ul">
                <li class="carousel-li">
                    <img
                        data-src="{{ asset('images/taustad/Es_soojuspump5.webp') }}"
                        alt="Õhk-vesi soojuspump eramajale – Küttesepp paigaldus"
                        title="ES õhk-vesi soojuspump"
                        class="carousel-img">
                </li>
            </ul>

            {{-- SLIDE 2 --}}
            <ul class="carousel-ul">
                <li class="carousel-li">
                    <img
                        data-src="{{ asset('images/taustad/Es_soojuspump6.webp') }}"
                        alt="Õhk-vesi soojuspump – ES Energy Save"
                        title="ES Energy Save soojuspump"
                        class="carousel-img">
                </li>
            </ul>

            {{-- SLIDE 3 --}}
            <ul class="carousel-ul">
                <li class="carousel-li">
                    <img
                        data-src="{{ asset('images/taustad/ALPHA-ohk-vesi.webp') }}"
                        alt="Alpha Innotec õhk-vesi soojuspump küttesüsteemis"
                        title="Alpha Innotec õhk-vesi soojuspump"
                        class="carousel-img">
                </li>
            </ul>

            {{-- SLIDE 4 --}}
            <ul class="carousel-ul">
                <li class="carousel-li">
                    <img
                        data-src="{{ asset('images/taustad/ALPHA-maasoojus.webp') }}"
                        alt="Maakütte soojuspump – energiatõhus lahendus"
                        title="Alpha Innotec maakütte soojuspump"
                        class="carousel-img">
                </li>
            </ul>

        </div>

        <button type="button" class="carousel-button carousel-button-next">
            <img
                src="{{ asset('images/icons/next.png') }}"
                alt="Edasi"
                class="arrow-img">
        </button>

        <div class="carousel-nav">
            <button class="carousel-indicator active1"></button>
            <button class="carousel-indicator"></button>
            <button class="carousel-indicator"></button>
            <button class="carousel-indicator"></button>
            <button class="carousel-indicator"></button>
        </div>

    </div>
</section>