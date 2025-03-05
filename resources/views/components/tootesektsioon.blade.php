<section class="tootesektsioon" id="tootesektsioon" >
   <div class="tootevalikud">
    <h2 style="font-size: 32px; font-weight: 400; margin: 14px; text-align: center;">REASTA TOOTED BRÄNDI JÄRGI</h2>
    <div class="brands">
        
        <div class="brandboxes">
            <a href="{{ route('ohksoojuspumbad.index', ['brand' => 'midea']) }}#tootesektsioon" title="Midea õhksoojuspumbad">
                <img src="{{ Vite::asset('resources/images/logod/Midea_logo.webp') }}" alt="Bränd Midea" />
            </a>
           
        </div>
        <div class="brandboxes">
            <a href="{{ route('ohksoojuspumbad.index', ['brand' => 'bosch']) }}#tootesektsioon" title="Bosch õhksoojuspumbad">
                <img src="{{ Vite::asset('resources/images/logod/bosch.png') }}" alt="Bränd Bosch" />
            </a>
           
        </div>
        
       
    </div>
    
      @foreach($products as $product)
      <div class="tootediv">
          <div class="tooteaktiivala">
                <div class="tekstid">
                  <h2>{{ $product->name }}</h2> <!-- Product Title -->
                  <p>{{ $product->description }}</p>
                  <h3>Toote võimsus: <span style="font-weight: 400;">{{ $product->power }}</span> </h3> <!-- Product Description -->
                 
                  <div class="brandImg">
                    <div class="kusipakkumist">
                        <a href="{{ url('/') . '?product=' . urlencode($product->brandname . ' ' . $product->name) . '#form' }}" title="Kontakt vormile">
                            <p>KÜSI LISAINFOT</p>
                        </a>
                    </div>
                    @if($product->brand_img)
                        <a href="{{ route('ohksoojuspumbad.brand', ['brandname' => strtolower($product->brandname)]) }}">
                            <img class="brand" src="{{ asset('storage/' . $product->brand_img) }}" alt="Toote brändi nimi on {{ $product->brandname }}" />
                        </a>
                    @endif
                    
                    </div>
                </div>
                
                
              <!-- Product Image -->
              
              <!-- Product Image (secondary image if you want to show another image) -->
                <div class="productImg">
                    @if($product->product_img)
                    <a href="{{ route('ohksoojuspumbad.brand', ['brandname' => strtolower($product->brandname)]) }}">
                        <img class="tooteImg" src="{{ asset('storage/' . $product->product_img) }}" alt="Toote pilt: {{ $product->name }}" />
                    </a>
                    @endif
                </div>
               
            </div>
            <div class="taustapildid">
                <img class="img" src="{{ Vite::asset('resources/images/taustad/taust5.png') }}" alt="Dekoratiivne taustapilt" />
                <img class="img" src="{{ Vite::asset('resources/images/taustad/taust5.png') }}" alt="Dekoratiivne taustapilt" />
                <img class="img" src="{{ Vite::asset('resources/images/taustad/taust5.png') }}" alt="Dekoratiivne taustapilt" />
            </div>
        </div>
  @endforeach
</div>
</section>