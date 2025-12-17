<section class="tootesektsioon" id="tootesektsioon">
    <div class="tootevalikud">

        <h2 style="font-size: 32px; font-weight: 400; margin: 14px; text-align: center;">
            REASTA TOOTED BRÄNDI JÄRGI
        </h2>

        {{-- BRÄNDIDE FILTER --}}
        <div class="brands">
            @foreach ($brands as $brand)
                <div class="brandboxes">
                    <a href="{{ route('soojuspumbad.type', $type) }}?brand={{ $brand->slug }}#tootesektsioon"
                       title="{{ $brand->name }}">
                        <img src="{{ asset('storage/' . $brand->logo) }}"
                             alt="{{ $brand->name }}">
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

                        <p>{!! nl2br(e($product->description)) !!}</p>

                        <h3>
                            Toote võimsus:
                            <span style="font-weight: 400;">
                                {{ $product->power }}
                            </span>
                        </h3>

                        <div class="brandImg">

                            {{-- KÜSI LISAINFOT --}}
                            <div class="kusipakkumist">
                                <a href="{{ url('/') . '?product=' . urlencode($product->brand->name . ' ' . $product->name) . '#form' }}">
                                    <p>KÜSI LISAINFOT</p>
                                </a>
                            </div>

                            {{-- BRÄND --}}
                            @if($product->brand)
                                <a href="{{ route('brand.page', $product->brand->slug) }}?type={{ $type }}">
                                    <img class="brand"
                                         src="{{ asset('storage/' . $product->brand->logo) }}"
                                         alt="{{ $product->brand->name }}">
                                </a>
                            @endif

                        </div>
                    </div>

                    {{-- TOOTE PILT --}}
                    <div class="productImg">
                        <a href="{{ route('brand.page', $product->brand->slug) }}?type={{ $type }}">
                            <img loading="lazy"
                                 class="tooteImg"
                                 src="{{ asset('storage/' . $product->product_img) }}"
                                 alt="{{ $product->name }}">
                        </a>
                    </div>

                </div>

                <div class="taustapildid">
                    <img class="img" src="{{ Vite::asset('resources/images/taustad/taust5.png') }}" alt="">
                    <img class="img" src="{{ Vite::asset('resources/images/taustad/taust5.png') }}" alt="">
                    <img class="img" src="{{ Vite::asset('resources/images/taustad/taust5.png') }}" alt="">
                </div>
            </div>
        @endforeach

    </div>
</section>