@props([
    'products',
    'brands',
    'typeSlug'
])


@php

    /*
    |--------------------------------------------------------------------------
    | SOOJUSPUMBA TÜÜBI TEKSTID
    |--------------------------------------------------------------------------
    |
    | Sama komponent töötab:
    |
    | ohk-ohk-soojuspumbad
    | ohk-vesi-soojuspumbad
    | maasoojuspumbad
    |
    */

    $catalogContent = match ($typeSlug) {

        'ohk-ohk-soojuspumbad' => [
            'eyebrow' => 'Seadmete valik',
            'title' => 'Sirvi õhksoojuspumpasid',
            'intro' => 'Valikus on erinevad õhksoojuspumbad tootjatelt, kelle seadmeid saan pakkuda koos nõustamise ja paigaldusega.',
        ],

        'ohk-vesi-soojuspumbad' => [
            'eyebrow' => 'Seadmete valik',
            'title' => 'Sirvi õhk-vesi soojuspumpasid',
            'intro' => 'Valikus on erinevad õhk-vesi soojuspumbad eramajade ja teiste vesiküttesüsteemiga hoonete kütmiseks. Aitan valida hoonele ja küttesüsteemile sobiva lahenduse.',
        ],

        'maasoojuspumbad' => [
            'eyebrow' => 'Seadmete valik',
            'title' => 'Sirvi maasoojuspumpasid',
            'intro' => 'Valikus on erinevad maasoojuspumbad uutele ja olemasolevatele küttesüsteemidele. Sobiva seadme valikul arvestan hoone soojusvajaduse, maakontuuri ja küttesüsteemiga.',
        ],

        default => [
            'eyebrow' => 'Seadmete valik',
            'title' => 'Sirvi soojuspumpasid',
            'intro' => 'Tutvu erinevate soojuspumpadega ning küsi oma hoonele sobiva lahenduse ja paigalduse hinda.',
        ],
    };

@endphp



<section class="product-catalog" id="tootesektsioon">

    <div class="product-catalog__container">


        {{-- =====================================================
             BRÄNDIFILTER
             ===================================================== --}}

        @if ($brands->count())

            <div class="product-catalog__filter">


                <p class="product-catalog__eyebrow">
                    {{ $catalogContent['eyebrow'] }}
                </p>


                <h2>
                    {{ $catalogContent['title'] }}
                </h2>


                <p class="product-catalog__intro">
                    {{ $catalogContent['intro'] }}
                </p>



                <div class="product-brand-filter">


                    {{-- KÕIK TOOTED --}}
                    <a
                        href="{{ route('soojuspumbad.type', $typeSlug) }}#tootesektsioon"
                        class="product-brand-filter__item {{ !request('brand') ? 'is-active' : '' }}"
                    >
                        <span>Kõik</span>
                    </a>



                    {{-- BRÄNDID --}}
                    @foreach ($brands as $brand)

                        <a
                            href="{{ route('soojuspumbad.type', $typeSlug) }}?brand={{ $brand->slug }}#tootesektsioon"
                            class="product-brand-filter__item {{ request('brand') === $brand->slug ? 'is-active' : '' }}"
                            title="{{ $brand->name }}"
                        >

                            @if ($brand->logo)

                                <img
                                    src="{{ asset('storage/' . $brand->logo) }}"
                                    alt="{{ $brand->name }}"
                                    loading="lazy"
                                >

                            @endif


                            <span>
                                {{ $brand->name }}
                            </span>

                        </a>

                    @endforeach


                </div>

            </div>

        @endif



        {{-- =====================================================
             TOOTEKAARDID
             ===================================================== --}}

        @if ($products->count())

            <div class="product-grid">


                @foreach ($products as $product)

                    <article class="product-card">


                        {{-- =================================================
                             TOOTE PILT
                             ================================================= --}}

                        @if ($product->brand)

                            <a
                                class="product-card__image"
                                href="{{ route('brand.page', [
                                    'type' => $typeSlug,
                                    'brand' => $product->brand->slug
                                ]) }}"
                                title="{{ $product->brand->name }}"
                            >

                                <img
                                    loading="lazy"
                                    src="{{ asset('storage/' . $product->product_img) }}"
                                    alt="{{ $product->name }}"
                                >

                            </a>

                        @else

                            <div class="product-card__image">

                                <img
                                    loading="lazy"
                                    src="{{ asset('storage/' . $product->product_img) }}"
                                    alt="{{ $product->name }}"
                                >

                            </div>

                        @endif



                        {{-- =================================================
                             SISU
                             ================================================= --}}

                        <div class="product-card__content">


                            {{-- TOOTJA LOGO --}}
                            @if ($product->brand)

                                <a
                                    class="product-card__brand"
                                    href="{{ route('brand.page', [
                                        'type' => $typeSlug,
                                        'brand' => $product->brand->slug
                                    ]) }}"
                                    title="Vaata tootjat {{ $product->brand->name }}"
                                >

                                    @if ($product->brand->logo)

                                        <img
                                            src="{{ asset('storage/' . $product->brand->logo) }}"
                                            alt="{{ $product->brand->name }}"
                                            loading="lazy"
                                        >

                                    @endif

                                </a>

                            @endif



                            {{-- TOOTE NIMI --}}
                            <h3>
                                {{ $product->name }}
                            </h3>



                            {{-- VÕIMSUS --}}
                            @if ($product->power)

                                <p class="product-card__power">

                                    Võimsus

                                    <strong>
                                        {{ $product->power }}
                                    </strong>

                                </p>

                            @endif



                            {{-- =================================================
                                 KIRJELDUS
                                 ================================================= --}}

                            @if ($product->description)

                                <div class="product-card__description">


                                    {{-- LÜHIKE KIRJELDUS --}}
                                    <p>
                                        {{ \Illuminate\Support\Str::limit(
                                            $product->description,
                                            150
                                        ) }}
                                    </p>



                                    {{-- PIKEM KIRJELDUS --}}
                                    @if (mb_strlen($product->description) > 150)

                                        <button
                                            class="product-card__toggle"
                                            type="button"
                                            aria-expanded="false"
                                        >

                                            <span>
                                                Vaata kirjeldust
                                            </span>


                                            <svg
                                                aria-hidden="true"
                                                viewBox="0 0 24 24"
                                                width="18"
                                                height="18"
                                            >

                                                <path
                                                    d="M6 9l6 6 6-6"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    stroke-width="2.3"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                />

                                            </svg>

                                        </button>



                                        <div class="product-card__description-full">

                                            <p>
                                                {!! nl2br(e($product->description)) !!}
                                            </p>

                                        </div>

                                    @endif


                                </div>

                            @endif



                            {{-- =================================================
                                 CTA NUPUD
                                 ================================================= --}}

                            <div class="product-card__actions">


                                {{-- KÜSI KOMPLEKTI HINDA --}}
                                <a
                                    class="product-card__button product-card__button--primary"
                                    href="{{ url('/') . '?product=' . urlencode(
                                        ($product->brand
                                            ? $product->brand->name . ' '
                                            : '') . $product->name
                                    ) . '#form' }}"
                                >
                                    Küsi komplekti hinda
                                </a>



                                {{-- VAATA TOOTJAT --}}
                                @if ($product->brand)

                                    <a
                                        class="product-card__button product-card__button--secondary"
                                        href="{{ route('brand.page', [
                                            'type' => $typeSlug,
                                            'brand' => $product->brand->slug
                                        ]) }}"
                                    >
                                        Vaata tootjat
                                    </a>

                                @endif


                            </div>


                        </div>

                    </article>

                @endforeach


            </div>



        @else


            {{-- =====================================================
                 TÜHI FILTER
                 ===================================================== --}}

            <div class="product-catalog__empty">

                <h3>
                    Selle filtriga tooteid ei leitud
                </h3>


                <a
                    href="{{ route('soojuspumbad.type', $typeSlug) }}#tootesektsioon"
                >
                    Näita kõiki seadmeid
                </a>

            </div>


        @endif


    </div>

</section>



{{-- =========================================================
     KIRJELDUSE AVAMINE
     ========================================================= --}}

<script>

    document.addEventListener("DOMContentLoaded", () => {

        document
            .querySelectorAll(".product-card__toggle")
            .forEach(button => {

                button.addEventListener("click", () => {

                    const description =
                        button
                            .parentElement
                            .querySelector(
                                ".product-card__description-full"
                            );


                    if (!description) {
                        return;
                    }


                    const open =
                        description.classList.toggle("is-open");


                    button.classList.toggle(
                        "is-open",
                        open
                    );


                    button.setAttribute(
                        "aria-expanded",
                        open ? "true" : "false"
                    );


                    const text =
                        button.querySelector("span");


                    if (text) {

                        text.textContent =
                            open
                                ? "Peida kirjeldus"
                                : "Vaata kirjeldust";

                    }

                });

            });

    });

</script>