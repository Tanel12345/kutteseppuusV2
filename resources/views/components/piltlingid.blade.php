<section class="piltlingid" id="piltlingid">
    <div class="piltlingidiv">

        {{-- ÕHK–ÕHK --}}
        <div class="piltlink">
            <a href="{{ route('soojuspumbad.type', 'ohk-ohk-soojuspumbad') }}" title="Õhk-õhk soojuspumbad">
                <div class="piltlingipilt">
                    <img data-src="{{ asset('images/vaikesed/bosch/Bosch.webp') }}"
                        alt="Õhk-õhk soojuspumbad" />
                </div>

                <div class="piltlingitekst">
                    <img src="{{ asset('images/icons/küttesepp.png') }}" alt="Küttesepp" />
                    <h2>ÕHK-õhk soojuspumbad</h2>
                </div>

                <ul class="Lisalingid">
                    <li>
                        <a href="{{ route('brand.page', 'bosch') }}?type=ohk-ohk-soojuspumbad">
                            <img src="{{ asset('images/vaikesed/bosch/Bosch.png') }}" alt="Bosch" />
                            Bosch
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('brand.page', 'midea') }}?type=ohk-ohk-soojuspumbad">
                            <img src="{{ asset('images/vaikesed/midea/MIDEA.avif') }}" alt="Midea" />
                            Midea
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('brand.page', 'samsung') }}?type=ohk-ohk-soojuspumbad">
                            <img src="{{ asset('images/vaikesed/samsung/samsunglogo.png') }}"
                                alt="Samsung" />
                            Samsung
                        </a>
                    </li>
                </ul>
            </a>
        </div>

        {{-- ÕHK–VESI --}}
        <div class="piltlink">
            <a href="{{ route('soojuspumbad.type', 'ohk-vesi-soojuspumbad') }}" title="Õhk-vesi soojuspumbad">
                <div class="piltlingipilt">
                    <img data-src="{{ asset('images/vaikesed/es/Es_soojuspump_vaike.webp') }}"
                        alt="Õhk-vesi soojuspumbad" />
                </div>

                <div class="piltlingitekst">
                    <img src="{{ asset('images/icons/küttesepp.png') }}" alt="Küttesepp" />
                    <h2>ÕHK-vesi soojuspumbad</h2>
                </div>

                <ul class="Lisalingid">
                    <li>
                        <a href="{{ route('brand.page', 'es') }}?type=ohk-vesi-soojuspumbad">
                            <img src="{{ asset('images/vaikesed/es/Energy Save logo.jpg') }}"
                                 alt="Energy Save" />
                            Energy Save
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('brand.page', 'alpha-innotec') }}?type=ohk-vesi-soojuspumbad">
                            <img src="{{ asset('images/vaikesed/alpha/alpha.png') }}"
                                alt="Alpha Innotec" />
                            Alpha-InnoTec
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('brand.page', 'samsung') }}?type=ohk-vesi-soojuspumbad">
                            <img src="{{ asset('images/vaikesed/samsung/samsunglogo.png') }}"
                                alt="Samsung" />
                            Samsung
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('brand.page', 'bosch') }}?type=ohk-vesi-soojuspumbad">
                            <img src="{{ asset('images/vaikesed/bosch/Bosch.png') }}" alt="Bosch" />
                            Bosch
                        </a>
                    </li>
                </ul>
            </a>
        </div>

        {{-- MAASOOJUS --}}
        <div class="piltlink">
            <div class="piltlink-inner">
                <a href="{{ route('soojuspumbad.type', 'maasoojuspumbad') }}" title="Maasoojuspumbad">
                    <div class="piltlingipilt">
                        <img data-src="{{ asset('images/vaikesed/alpha/alpha2.webp') }}"
                            alt="Maasoojuspumbad" />
                    </div>

                    <div class="piltlingitekst">
                        <img src="{{ asset('images/icons/küttesepp.png') }}" alt="Küttesepp" />
                        <h2>Maasoojuspumbad</h2>
                    </div>

                    <ul class="Lisalingid">
                        <li>
                            <a href="{{ route('brand.page', 'alpha-innotec') }}?type=maasoojuspumbad">
                                <img src="{{ asset('images/vaikesed/alpha/alpha.png') }}"
                                    alt="Alpha Innotec" />
                                Alpha-InnoTec
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('brand.page', 'bosch') }}?type=maasoojuspumbad">
                                <img src="{{ asset('images/vaikesed/bosch/Bosch.png') }}"
                                    alt="Bosch" />
                                Bosch
                            </a>
                        </li>
                    </ul>
                </a>
            </div>
        </div>

        {{-- TAHKEKÜTE --}}
        <div class="piltlink">
            <a href="{{ route('tahkekutteseadmed.index') }}" title="Tahkekütteseadmed">
                <div class="piltlingipilt">
                    <img data-src="{{ asset('images/vaikesed/extraflame/extraflame.webp') }}"
                        alt="Tahkekütteseadmed" />
                </div>

                <div class="piltlingitekst">
                    <img src="{{ asset('images/icons/küttesepp.png') }}" alt="Küttesepp" />
                    <h2>Tahkekütteseadmed</h2>
                </div>

                <ul class="Lisalingid" style="margin-top:25px; gap:0.8rem; font-size:2rem;">
                    <li>
                        <a href="{{ route('pelletikatladJaKaminad.index') }}">
                            Pelletikatlad ja -kaminad
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('keskkuttepliididJaKaminad.index') }}">
                            Keskküttepliidid ja -kaminad
                        </a>
                    </li>
                </ul>
            </a>
        </div>

        <div class="kusipakkumist">
            <a href="/#form">
                <p>KÜSI LISAINFOT</p>
            </a>
        </div>

    </div>
</section>