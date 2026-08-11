<section class="piltlingid" id="piltlingid"> <div class="piltlingidiv">

    {{-- ÕHK–ÕHK --}}
    <div class="piltlink">

        <a class="piltlink-main"
           href="{{ route('soojuspumbad.type', 'ohk-ohk-soojuspumbad') }}"
           title="Õhk-õhk soojuspumbad">

            <div class="piltlingipilt">
                <img data-src="{{ asset('images/vaikesed/bosch/Bosch.webp') }}"
                     alt="Õhk-õhk soojuspumbad" />
            </div>

            <div class="piltlingitekst">
                <img src="{{ asset('images/icons/küttesepp.png') }}" alt="Küttesepp" />
                <h2>ÕHK-õhk soojuspumbad</h2>
            </div>

        </a>


        <ul class="Lisalingid">

            <li>
                <a href="{{ route('brand.page', [
                    'type' => 'ohk-ohk-soojuspumbad',
                    'brand' => 'bosch'
                ]) }}">
                    <img src="{{ asset('images/vaikesed/bosch/Bosch.png') }}" alt="Bosch" />
                    <span>Bosch</span>
                </a>
            </li>


            <li>
                <a href="{{ route('brand.page', [
                    'type' => 'ohk-ohk-soojuspumbad',
                    'brand' => 'midea'
                ]) }}">
                    <img src="{{ asset('images/vaikesed/midea/MIDEA.avif') }}" alt="Midea" />
                    <span>Midea</span>
                </a>
            </li>


            <li>
                <a href="{{ route('brand.page', [
                    'type' => 'ohk-ohk-soojuspumbad',
                    'brand' => 'samsung'
                ]) }}">
                    <img src="{{ asset('images/vaikesed/samsung/samsunglogo.png') }}" alt="Samsung" />
                    <span>Samsung</span>
                </a>
            </li>

        </ul>

    </div>



    {{-- ÕHK–VESI --}}
    <div class="piltlink">

        <a class="piltlink-main"
           href="{{ route('soojuspumbad.type', 'ohk-vesi-soojuspumbad') }}"
           title="Õhk-vesi soojuspumbad">

            <div class="piltlingipilt">
                <img data-src="{{ asset('images/vaikesed/es/Es_soojuspump_vaike.webp') }}"
                     alt="Õhk-vesi soojuspumbad" />
            </div>

            <div class="piltlingitekst">
                <img src="{{ asset('images/icons/küttesepp.png') }}" alt="Küttesepp" />
                <h2>ÕHK-vesi soojuspumbad</h2>
            </div>

        </a>


        <ul class="Lisalingid">

            <li>
                <a href="{{ route('brand.page', [
                    'type' => 'ohk-vesi-soojuspumbad',
                    'brand' => 'es'
                ]) }}">
                    <img src="{{ asset('images/vaikesed/es/eslogo.webp') }}" alt="Energy Save" />
                    <span>Energy Save</span>
                </a>
            </li>


            <li>
                <a href="{{ route('brand.page', [
                    'type' => 'ohk-vesi-soojuspumbad',
                    'brand' => 'alpha-innotec'
                ]) }}">
                    <img src="{{ asset('images/vaikesed/alpha/alpha.png') }}" alt="Alpha Innotec" />
                    <span>Alpha-InnoTec</span>
                </a>
            </li>


            <li>
                <a href="{{ route('brand.page', [
                    'type' => 'ohk-vesi-soojuspumbad',
                    'brand' => 'samsung'
                ]) }}">
                    <img src="{{ asset('images/vaikesed/samsung/samsunglogo.png') }}" alt="Samsung" />
                    <span>Samsung</span>
                </a>
            </li>


            <li>
                <a href="{{ route('brand.page', [
                    'type' => 'ohk-vesi-soojuspumbad',
                    'brand' => 'bosch'
                ]) }}">
                    <img src="{{ asset('images/vaikesed/bosch/Bosch.png') }}" alt="Bosch" />
                    <span>Bosch</span>
                </a>
            </li>

        </ul>

    </div>



    {{-- MAASOOJUS --}}
    <div class="piltlink">

        <a class="piltlink-main"
           href="{{ route('soojuspumbad.type', 'maasoojuspumbad') }}"
           title="Maasoojuspumbad">

            <div class="piltlingipilt">
                <img data-src="{{ asset('images/vaikesed/alpha/alpha2.webp') }}"
                     alt="Maasoojuspumbad" />
            </div>

            <div class="piltlingitekst">
                <img src="{{ asset('images/icons/küttesepp.png') }}" alt="Küttesepp" />
                <h2>Maasoojuspumbad</h2>
            </div>

        </a>


        <ul class="Lisalingid">

            <li>
                <a href="{{ route('brand.page', [
                    'type' => 'maasoojuspumbad',
                    'brand' => 'alpha-innotec'
                ]) }}">
                    <img src="{{ asset('images/vaikesed/alpha/alpha.png') }}" alt="Alpha Innotec" />
                    <span>Alpha-InnoTec</span>
                </a>
            </li>


            <li>
                <a href="{{ route('brand.page', [
                    'type' => 'maasoojuspumbad',
                    'brand' => 'bosch'
                ]) }}">
                    <img src="{{ asset('images/vaikesed/bosch/Bosch.png') }}" alt="Bosch" />
                    <span>Bosch</span>
                </a>
            </li>

        </ul>

    </div>



    {{-- TAHKEKÜTE --}}
    <div class="piltlink">

        <a class="piltlink-main"
           href="{{ route('tahkekutteseadmed.index') }}"
           title="Tahkekütteseadmed">

            <div class="piltlingipilt">
                <img data-src="{{ asset('images/vaikesed/extraflame/extraflame.webp') }}"
                     alt="Tahkekütteseadmed" />
            </div>

            <div class="piltlingitekst">
                <img src="{{ asset('images/icons/küttesepp.png') }}" alt="Küttesepp" />
                <h2>Tahkekütteseadmed</h2>
            </div>

        </a>


        <ul class="Lisalingid Lisalingid--tahkekute">

            <li>
                <a href="{{ route('pelletikatladJaKaminad.index') }}">
                    <span>Pelletikatlad ja -kaminad</span>
                </a>
            </li>


            <li>
                <a href="{{ route('keskkuttepliididJaKaminad.index') }}">
                    <span>Keskküttepliidid ja -kaminad</span>
                </a>
            </li>

        </ul>

    </div>



    {{-- CTA --}}
    <div class="kusipakkumist">
        <a href="/#form">
            <p>KÜSI LISAINFOT</p>
        </a>
    </div>


</div>

</section>