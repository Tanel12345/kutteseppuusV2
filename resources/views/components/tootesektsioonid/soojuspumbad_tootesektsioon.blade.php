@props(['products', 'brands', 'typeSlug'])

<section class="tootesektsioon" id="tootesektsioon">
    <div class="tootevalikud">

        <h2 style="font-size: 32px; font-weight: 400; margin: 14px; text-align: center;">
            REASTA TOOTED BRÄNDI JÄRGI
        </h2>

        {{-- BRÄNDIDE FILTER --}}
        <div class="brands">
            @foreach ($brands as $brand)
                <div class="brandboxes">
                    <a href="{{ route('soojuspumbad.type', $typeSlug) }}?brand={{ $brand->slug }}#tootesektsioon"
                        title="{{ $brand->name }}">
                        <img src="{{ asset('storage/' . $brand->logo) }}" alt="{{ $brand->name }}">
                    </a>
                </div>
            @endforeach
        </div>

        {{-- TOOTED --}}
        @foreach ($products as $product)
            <div class="tootediv">
                <div class="tooteaktiivala">

                    <div class="tekstid">
                        <h2>{{ $product->name }}</h2>
                        <button class="toggle-description" type="button">
                            <span class="toggle-text">Vaata kirjeldust</span>
                            <img class="toggle-icon" src="{{ asset('images/icons/down.png') }}"
                                alt="Allaikoon">
                        </button>

                        <p class="description">{!! nl2br(e($product->description)) !!}</p>

                        <h3>
                            Toote võimsus:
                            <span style="font-weight: 400;">
                                {{ $product->power }}
                            </span>
                        </h3>

                        <div class="brandImg">

                            {{-- KÜSI LISAINFOT --}}
                            <div class="kusipakkumist">
                                <a
                                    href="{{ url('/') . '?product=' . urlencode($product->brand->name . ' ' . $product->name) . '#form' }}">
                                    <p>KÜSI LISAINFOT</p>
                                </a>
                            </div>

                            {{-- BRÄND --}}
                            @if ($product->brand)
                                <a href="{{ route('brand.page', $product->brand->slug) }}?type={{ $typeSlug }}">
                                    <img class="brand" src="{{ asset('storage/' . $product->brand->logo) }}"
                                        alt="{{ $product->brand->name }}">
                                </a>
                            @endif

                        </div>
                    </div>

                    {{-- TOOTE PILT --}}
                    <div class="productImg">
                        <a href="{{ route('brand.page', $product->brand->slug) }}?type={{ $typeSlug }}">
                            <img loading="lazy" class="tooteImg" src="{{ asset('storage/' . $product->product_img) }}"
                                alt="{{ $product->name }}">
                        </a>
                    </div>

                </div>

                <div class="taustapildid">
                    <img class="img" src="{{ asset('images/taustad/taust5.png') }}" alt="Taustaikoon">
                    <img class="img" src="{{ asset('images/taustad/taust5.png') }}" alt="Taustaikoon">
                    <img class="img" src="{{ asset('images/taustad/taust5.png') }}" alt="Taustaikoon">
                </div>
            </div>
        @endforeach

    </div>
</section>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        document.querySelectorAll(".toggle-description").forEach(button => {
            button.addEventListener("click", () => {
                const description = button.nextElementSibling;
                if (!description) return;

                const isOpen = description.classList.toggle("open");

                button.classList.toggle("open", isOpen);

                const textSpan = button.querySelector(".toggle-text");
                if (textSpan) {
                    textSpan.textContent = isOpen ?
                        "Peida kirjeldus" :
                        "Vaata kirjeldust";
                }
            });
        });
    });
</script>
