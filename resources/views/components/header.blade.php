<div class="header-container" id="headerid">
    <header>

        {{-- ÜLEMINE NAV – ORIGINAAL --}}
        <div class="top-nav">
            <div class="left-topdiv">
                <a style="cursor:auto;" href="tel:+37256681555">
                    <img src="{{ asset('images/icons/küttesepp.png') }}" alt="Küttesepa telefon" />
                    +37256681555
                </a>

                <a style="cursor:auto;" href="tanel@kuttesepp.ee">
                    <img src="{{ asset('images/icons/küttesepp.png') }}" alt="Küttesepa email" />
                    tanel[ät]kuttesepp.ee
                </a>
            </div>

            <div class="right-topdiv" id="right-topdiv">
                <a class="{{ Route::currentRouteName() == 'soojuspumpade-paigaldus' ? 'active' : '' }}"
                    href="{{ route('soojuspumpade-paigaldus') }}">
                    <img src="{{ asset('images/icons/küttesepp.png') }}" alt="Küttesepp" />
                    Soojuspumpade paigaldus
                </a>

                <a class="{{ Route::currentRouteName() == 'kuttesusteemi-vesi' ? 'active' : '' }}"
                    href="{{ route('kuttesusteemi-vesi') }}">
                    <img src="{{ asset('images/icons/küttesepp.png') }}" alt="Küttesepp" />
                    Küttesüsteemi vesi
                </a>

                <a class="{{ Route::currentRouteName() == 'milleks-kutteautomaatika' ? 'active' : '' }}"
                    href="{{ route('milleks-kutteautomaatika') }}">
                    <img src="{{ asset('images/icons/küttesepp.png') }}" alt="Küttesepp" />
                    Kütteautomaatika
                </a>

                <a class="{{ Route::currentRouteName() == 'poranda-ja-radiaatorkute' ? 'active' : '' }}"
                    href="{{ route('poranda-ja-radiaatorkute') }}">
                    <img src="{{ asset('images/icons/küttesepp.png') }}" alt="Küttesepp" />
                    Põranda- ja radiaatorküte
                </a>
            </div>
        </div>

        {{-- ALUMINE NAV --}}
        <nav class="bottom-nav">

            <a href="https://www.facebook.com/kuttesepp" target="_blank">
                <img class="facebook" src="{{ asset('images/icons/facebook.png') }}"
                    alt="facebook logo" />
            </a>

            <div class="second-line">

                <div class="hamburger">
                    <div class="menu-btn"></div>
                </div>

                <a href="{{ route('index') }}" class="logoanchor">
                    <img class="logo" src="{{ asset('images/küttesepp_logo.webp') }}"
                        alt="Küttesepp logo" />
                </a>

                <div class="bottom-rightdiv">

                    {{-- SOOJUSPUMBAD --}}
                    <ul>
                        <li>
                            <a class="{{ request()->is('soojuspumbad*') ? 'active' : '' }}"
                                href="{{ route('soojuspumbad.index') }}">
                                SOOJUSPUMBAD
                                <img src="{{ asset('images/icons/down.png') }}"
                                    style="width:18px; position:relative; top:2px;">
                            </a>

                            <div class="popup">
                                <ul>
                                    <li>
                                        <a class="{{ request()->is('soojuspumbad/ohk-ohk-soojuspumbad*') ? 'active' : '' }}"
                                            href="{{ route('soojuspumbad.type', 'ohk-ohk-soojuspumbad') }}">
                                            ÕHK-ÕHK SOOJUSPUMBAD
                                        </a>
                                    </li>
                                    <li>
                                        <a class="{{ request()->is('soojuspumbad/ohk-vesi-soojuspumbad*') ? 'active' : '' }}"
                                            href="{{ route('soojuspumbad.type', 'ohk-vesi-soojuspumbad') }}">
                                            ÕHK-VESI SOOJUSPUMBAD
                                        </a>
                                    </li>
                                    <li>
                                        <a class="{{ request()->is('soojuspumbad/maasoojuspumbad*') ? 'active' : '' }}"
                                            href="{{ route('soojuspumbad.type', 'maasoojuspumbad') }}">
                                            MAASOOJUSPUMBAD
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>

                    {{-- TAHKEKÜTTESEADMED --}}
                    <ul>
                        <li>
                            <a class="{{ request()->is('tahkekutteseadmed*') ? 'active' : '' }}"
                                href="{{ route('tahkekutteseadmed.index') }}">
                                TAHKEKÜTTESEADMED
                                <img src="{{ asset('images/icons/down.png') }}"
                                    style="width:18px; position:relative; top:2px;">
                            </a>

                            <div class="popup">
                                <ul>
                                    <li>
                                        <a class="{{ request()->is('pelletikatlad-kaminad*') ? 'active' : '' }}"
                                            href="{{ route('pelletikatladJaKaminad.index') }}">
                                            PELLETIKATLAD JA -KAMINAD
                                        </a>
                                    </li>
                                    <li>
                                        <a class="{{ request()->is('keskkuttepliidid-kaminad*') ? 'active' : '' }}"
                                            href="{{ route('keskkuttepliididJaKaminad.index') }}">
                                            KESKKÜTTEPLIIDID JA -KAMINAD
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>

                    {{-- HOOLDUS --}}
                    <ul>
                        <li>
                            <a class="{{ request()->is('kuttesusteemide-hooldus*') ? 'active' : '' }}"
                                href="{{ route('kuttesusteemide-hooldus') }}">
                                KÜTTESÜSTEEMIDE HOOLDUS
                                <img src="{{ asset('images/icons/down.png') }}"
                                    style="width:18px; position:relative; top:2px;">
                            </a>

                            <div class="popup">
                                <ul>
                                    <li>
                                        <a class="{{ request()->is('kuttevee-demineraliseerimine*') ? 'active' : '' }}"
                                            href="{{ route('kuttevee-demineraliseerimine') }}">
                                            KÜTTEVEE DEMINERALISEERIMINE
                                        </a>
                                    </li>
                                    <li>
                                        <a class="{{ request()->is('kuttevee-inhibiitorid*') ? 'active' : '' }}"
                                            href="{{ route('kuttevee-inhibiitorid') }}">
                                            KÜTTEVEE INHIBIITORID
                                        </a>
                                    </li>
                                    <li>
                                        <a class="{{ request()->is('kuttesusteemi-labipesu*') ? 'active' : '' }}"
                                            href="{{ route('kuttesusteemi-labipesu') }}">
                                            KÜTTESÜSTEEMI LÄBIPESU
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>

                    <ul>
                        <li><a href="{{ route('works.index') }}">TEHTUD TÖÖD</a></li>
                    </ul>

                    <ul>
                        <li><a id="kontakt" href="/#form">KONTAKT</a></li>
                    </ul>

                    <ul style="margin-right: 15px" id="ettevõttest">
                        <li><a href="/#ettevottestid">ETTEVÕTTEST</a></li>
                    </ul>

                </div>
            </div>
        </nav>
    </header>
</div>
