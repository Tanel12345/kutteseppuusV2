<div class="header-container" id="headerid">
    <header>

        {{-- ÜLEMINE NAV --}}
        <div class="top-nav">
            <div class="left-topdiv">
                <a style="cursor:auto;" href="tel:+37256681555">
                    <img src="{{ asset('images/icons/küttesepp.png') }}" alt="Küttesepa telefon" />
                    +372 5668 1555
                </a>

                <a style="cursor:auto;" href="mailto:tanel@kuttesepp.ee">
                    <img src="{{ asset('images/icons/küttesepp.png') }}" alt="Küttesepa e-post" />
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
            <a href="https://www.facebook.com/kuttesepp" target="_blank" rel="noopener noreferrer">
                <img class="facebook" src="{{ asset('images/icons/facebook.png') }}" alt="Facebook logo" />
            </a>

            <div class="second-line">

                <div class="hamburger">
                    <div class="menu-btn"></div>
                </div>

                <a href="{{ route('index') }}" class="logoanchor">
                    <img class="logo" src="{{ asset('images/küttesepp_logo.webp') }}" alt="Küttesepp logo"
                        width="270" height="86" />
                </a>

                <div class="bottom-rightdiv">

                    {{-- KÜTTESÜSTEEMIDE EHITUS --}}
                    <ul>
                        <li>
                            <a class="{{ request()->is('kuttesusteemide-ehitus*') ? 'active' : '' }}"
                                href="{{ route('kuttesusteemide-ehitus') }}">
                                Küttesüsteemide ehitus
                            </a>
                        </li>
                    </ul>

                    {{-- SOOJUSPUMBAD --}}
                    <ul>
                        <li class="has-submenu">
                            <div class="menu-link-row">
                                <a class="{{ request()->is('soojuspumbad*') ? 'active' : '' }}"
                                    href="{{ route('soojuspumbad.index') }}">
                                    Soojuspumbad
                                </a>

                                <button class="submenu-toggle" type="button" aria-label="Ava soojuspumpade alammenüü">
                                    <svg aria-hidden="true" viewBox="0 0 24 24" width="20" height="20">
                                        <path d="M6 9l6 6 6-6" fill="none" stroke="currentColor" stroke-width="2.3"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </button>
                            </div>

                            <div class="popup">
                                <ul>
                                    <li>
                                        <a class="{{ request()->is('soojuspumbad/ohk-ohk-soojuspumbad*') ? 'active' : '' }}"
                                            href="{{ route('soojuspumbad.type', 'ohk-ohk-soojuspumbad') }}">
                                            Õhk-õhk soojuspumbad
                                        </a>
                                    </li>
                                    <li>
                                        <a class="{{ request()->is('soojuspumbad/ohk-vesi-soojuspumbad*') ? 'active' : '' }}"
                                            href="{{ route('soojuspumbad.type', 'ohk-vesi-soojuspumbad') }}">
                                            Õhk-vesi soojuspumbad
                                        </a>
                                    </li>
                                    <li>
                                        <a class="{{ request()->is('soojuspumbad/maasoojuspumbad*') ? 'active' : '' }}"
                                            href="{{ route('soojuspumbad.type', 'maasoojuspumbad') }}">
                                            Maasoojuspumbad
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>

                    {{-- TAHKEKÜTE --}}
                    <ul>
                        <li class="has-submenu">
                            <div class="menu-link-row">
                                <a class="{{ request()->is('tahkekutteseadmed*') ? 'active' : '' }}"
                                    href="{{ route('tahkekutteseadmed.index') }}">
                                    Tahkeküte
                                </a>

                                <button class="submenu-toggle" type="button" aria-label="Ava tahkekütte alammenüü">
                                    <svg aria-hidden="true" viewBox="0 0 24 24" width="20" height="20">
                                        <path d="M6 9l6 6 6-6" fill="none" stroke="currentColor" stroke-width="2.3"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </button>
                            </div>

                            <div class="popup">
                                <ul>
                                    <li>
                                        <a class="{{ request()->is('pelletikatlad-kaminad*') ? 'active' : '' }}"
                                            href="{{ route('pelletikatladJaKaminad.index') }}">
                                            Pelletikatlad ja -kaminad
                                        </a>
                                    </li>
                                    <li>
                                        <a class="{{ request()->is('keskkuttepliidid-kaminad*') ? 'active' : '' }}"
                                            href="{{ route('keskkuttepliididJaKaminad.index') }}">
                                            Keskküttepliidid ja -kaminad
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>

                    {{-- HOOLDUS JA REMONT --}}
                    <ul>
                        <li class="has-submenu">
                            <div class="menu-link-row">
                                <a class="{{ request()->is('hooldus-ja-remont*') ||
                                request()->is('soojuspumpade-hooldus*') ||
                                request()->is('soojuspumpade-remont*') ||
                                request()->is('kuttevee-demineraliseerimine*') ||
                                request()->is('kuttevee-inhibiitorid*') ||
                                request()->is('kuttesusteemi-labipesu*')
                                    ? 'active'
                                    : '' }}"
                                    href="{{ route('hooldus-ja-remont') }}">
                                    Hooldus ja remont
                                </a>
                                <button class="submenu-toggle" type="button"
                                    aria-label="Ava hoolduse ja remondi alammenüü">
                                    <svg aria-hidden="true" viewBox="0 0 24 24" width="20" height="20">
                                        <path d="M6 9l6 6 6-6" fill="none" stroke="currentColor"
                                            stroke-width="2.3" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </button>
                            </div>

                            <div class="popup">
                                <ul>
                                    <li>
                                        <a class="{{ request()->is('soojuspumpade-hooldus*') ? 'active' : '' }}"
                                            href="{{ route('soojuspumpade-hooldus') }}">
                                            Soojuspumpade hooldus
                                        </a>
                                    </li>
                                    <li>
                                        <a class="{{ request()->is('soojuspumpade-remont*') ? 'active' : '' }}"
                                            href="{{ route('soojuspumpade-remont') }}">
                                            Soojuspumpade remont
                                        </a>
                                    </li>
                                    <li>
                                        <a class="{{ request()->is('kuttesusteemi-labipesu*') ? 'active' : '' }}"
                                            href="{{ route('kuttesusteemi-labipesu') }}">
                                            Küttesüsteemi läbipesu
                                        </a>
                                    </li>
                                    <li>
                                        <a class="{{ request()->is('kuttevee-demineraliseerimine*') ? 'active' : '' }}"
                                            href="{{ route('kuttevee-demineraliseerimine') }}">
                                            Küttevee demineraliseerimine
                                        </a>
                                    </li>
                                    <li>
                                        <a class="{{ request()->is('kuttevee-inhibiitorid*') ? 'active' : '' }}"
                                            href="{{ route('kuttevee-inhibiitorid') }}">
                                            Küttevee inhibiitorid
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>

                    {{-- TEHTUD TÖÖD --}}
                    <ul>
                        <li>
                            <a class="{{ request()->is('tehtud-tood*') ? 'active' : '' }}"
                                href="{{ route('works.index') }}">
                                Tehtud tööd
                            </a>
                        </li>
                    </ul>

                    {{-- KONTAKT --}}
                    <ul>
                        <li>
                            <a id="kontakt" href="{{ route('index') }}#form">Kontakt</a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
    </header>
</div>
