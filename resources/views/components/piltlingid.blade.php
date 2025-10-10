 <!-- Pildilingisektsioon -->
 <section class="piltlingid" id="piltlingid" >
    <div class="piltlingidiv">
        <!-- Pildid -->
        
        <div class="piltlink"> 
            <a href="{{ route('ohksoojuspumbad.index') }}" title="ÕHK-õhk soojuspumbad">
                <div class="piltlingipilt">
                <img src="" data-src="{{ Vite::asset('resources/images/vaikesed/bosch/Bosch.webp') }}" alt="ÕHK-õhk soojuspumbad" title="ÕHK-õhk soojuspumbad" />
                </div>
                <div class="piltlingitekst">
                    <img src="{{ Vite::asset('resources/images/icons/küttesepp.png') }}" alt="Küttesepp" />
                    <h2><a href="{{ route('ohksoojuspumbad.index') }}" title="ÕHK-õhk soojuspumbad">ÕHK-õhk soojuspumbad</a></h2>
                </div>
                <ul class="Lisalingid">
                    <li>
                        <a href="{{ route('ohk_ohk_soojuspumbad.brand', ['brandname' => 'bosch-ohk-ohk-soojuspumbad']) }}" title="Bosch brändileht">
                            <img src="{{ Vite::asset('resources/images/vaikesed/bosch/Bosch.png') }}" alt="Bosch" />
                            Bosch
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('ohk_ohk_soojuspumbad.brand', ['brandname' => 'midea-ohk-ohk-soojuspumbad']) }}" title="Midea brändileht">
                            <img src="{{ Vite::asset('resources/images/vaikesed/midea/MIDEA.avif') }}" alt="Midea" />
                            Midea
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('ohk_ohk_soojuspumbad.brand', ['brandname' => 'samsung-ohk-ohk-soojuspumbad']) }}" title="Samsung brändileht">
                            <img src="{{ Vite::asset('resources/images/vaikesed/samsung/samsunglogo.png') }}" alt="Samsung soojuspumbad" />
                            Samsung
                        </a>
                    </li>
                </ul>
            </a>
        </div>
        <div class="piltlink"> 
            <a href="{{ route('ohk-vesi-soojuspumbad.index') }}" title="ÕHK-vesi soojuspumbad">
                <div class="piltlingipilt">
                <img src="" data-src="{{ Vite::asset('resources/images/vaikesed/es/Es_soojuspump_vaike.webp') }}" alt="ÕHK-vesi soojuspumbad" title="ÕHK-vesi soojuspumbad" />
                </div>
                <div class="piltlingitekst">
                    <img src="{{ Vite::asset('resources/images/icons/küttesepp.png') }}" alt="Küttesepp" />
                    <h2><a href="{{ route('ohk-vesi-soojuspumbad.index') }}" title="ÕHK-vesi soojuspumbad">ÕHK-vesi soojuspumbad</a></h2>
                </div>
                <ul class="Lisalingid">
                    <li>
                        <a href="{{ route('ohk_vesi_soojuspumbad.brand', ['brandname' => 'es-ohk-vesi-soojuspumbad']) }}" title="ES brändileht">
                            <img src="{{ Vite::asset('resources/images/vaikesed/es/Energy Save logo.jpg') }}" alt="Energy Save" />
                            Energy Save
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('ohk_vesi_soojuspumbad.brand', ['brandname' => 'alpha-innotec-ohk-vesi-soojuspumbad']) }}" title="Alpha-InnoTec brändileht">
                            <img src="{{ Vite::asset('resources/images/vaikesed/alpha/alpha.png') }}" alt="Alpha Innotec" />
                            Alpha-InnoTec
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('ohk_vesi_soojuspumbad.brand', ['brandname' => 'samsung-ohk-vesi-soojuspumbad']) }}" title="Samsung brändileht">
                            <img src="{{ Vite::asset('resources/images/vaikesed/samsung/samsunglogo.png') }}" alt="Samsung" />
                            Samsung
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('ohk_vesi_soojuspumbad.brand', ['brandname' => 'bosch-ohk-vesi-soojuspumbad']) }}" title="Bosch brändileht">
                            <img src="{{ Vite::asset('resources/images/vaikesed/bosch/Bosch.png') }}" alt="Bosch" />
                            Bosch
                        </a>
                    </li>
                </ul>
            </a>
        </div>

        <div class="piltlink"> 
            <a href="{{ route('maasoojuspumbad.index') }}" title="Maasoojuspumbad">
                <div class="piltlingipilt">
                <img src="" data-src="{{ Vite::asset('resources/images/vaikesed/alpha/alpha2.webp') }}" alt="Maasoojuspumbad" title="Maasoojuspumbad" />
                </div>
                <div class="piltlingitekst">
                    <img src="{{ Vite::asset('resources/images/icons/küttesepp.png') }}" alt="Küttesepp" />
                    <h2><a href="{{ route('maasoojuspumbad.index') }}" title="Maasoojuspumbad">Maasoojuspumbad</a></h2>
                </div>
                <ul class="Lisalingid">
                    <li>
                        <a href="{{ route('maasoojuspumbad.brand', ['brandname' => 'alpha-innotec-maasoojuspumbad']) }}" title="Alpha-InnoTec">
                            <img src="{{ Vite::asset('resources/images/vaikesed/alpha/alpha.png') }}" alt="Alpha Innotec" />
                            Alpha-InnoTec
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('maasoojuspumbad.brand', ['brandname' => 'bosch-maasoojuspumbad']) }}" title="Bosch">
                            <img src="{{ Vite::asset('resources/images/vaikesed/bosch/Bosch.png') }}" alt="Bosch" />
                            Bosch
                        </a>
                    </li>
                </ul>
            </a>
        </div>
        <div class="piltlink"> 
            <a href="{{ route('index') }}" title="Keskküttekatlad">
                <div class="piltlingipilt">
                <img src="" data-src="{{ Vite::asset('resources/images/vaikesed/extraflame/extraflame.webp') }}" alt="Maasoojuspumbad" title="Maasoojuspumbad" />
                </div>
                <div class="piltlingitekst">
                    <img src="{{ Vite::asset('resources/images/icons/küttesepp.png') }}" alt="Küttesepp" />
                    <h2><a href="{{ route('index') }}" title="Ahjud">Tahkekütteseadmed</a></h2>
                </div>
                <ul class="Lisalingid" style="margin-top: 25px; gap:0.8rem; font-size: 2rem;">
                    <li>
                        <a href="https://www.ahjumees.ee" title="Ahjumees lehele" target="_blank">
                            <img src="{{ Vite::asset('resources/images/logod/ahjumees-logo.png') }}" alt="Küttesepp" style="width:90px;"/>
                            Halupuu ahjud, pliidid, kaminad
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('pelletikatladJaKaminad.index') }}" title="Pelletikatlad ja pelletikaminad">
                            <img src="{{ Vite::asset('resources/images/icons/küttesepp.png') }}" alt="Küttesepp" style="width:20px;"/>
                            Pelletikatlad ja -kaminad
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('keskkyttepliididJaKaminad.index') }}" title="Keskküttepliidid ja keskküttekaminad">
                            <img src="{{ Vite::asset('resources/images/icons/küttesepp.png') }}" alt="Küttesepp" style="width:20px;"/>
                            Keskküttepliidid ja -kaminad
                        </a>
                    </li>
                   
                </ul>
            </a>
        </div>

        <div class="kusipakkumist">
            <a href="/#form" title="Kontakt">
                <p>KÜSI LISAINFOT</p>
            </a>
        </div>
    </div>
</section>