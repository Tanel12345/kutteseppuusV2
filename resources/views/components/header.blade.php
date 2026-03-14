<div class="header-container" id="headerid">
    <header class="site-header">
        {{-- ÜLEMINE NAV --}}
        <div class="top-nav">
            <div class="left-topdiv">
                <a class="contact-link" href="tel:+37256681555" aria-label="Helista numbril +372 5668 1555">
                    <img src="{{ asset('images/icons/küttesepp.png') }}" alt="" aria-hidden="true" />
                    <span>+372 5668 1555</span>
                </a>

                <a class="contact-link" href="mailto:tanel@kuttesepp.ee" aria-label="Saada e-kiri aadressile tanel@kuttesepp.ee">
                    <img src="{{ asset('images/icons/küttesepp.png') }}" alt="" aria-hidden="true" />
                    <span>tanel[ät]kuttesepp.ee</span>
                </a>
            </div>

            <div class="right-topdiv" id="right-topdiv">
                <a class="{{ Route::currentRouteName() === 'soojuspumpade-paigaldus' ? 'active' : '' }}"
                    href="{{ route('soojuspumpade-paigaldus') }}">
                    <img src="{{ asset('images/icons/küttesepp.png') }}" alt="" aria-hidden="true" />
                    <span>Soojuspumpade paigaldus</span>
                </a>

                <a class="{{ Route::currentRouteName() === 'kuttesusteemi-vesi' ? 'active' : '' }}"
                    href="{{ route('kuttesusteemi-vesi') }}">
                    <img src="{{ asset('images/icons/küttesepp.png') }}" alt="" aria-hidden="true" />
                    <span>Küttesüsteemi vesi</span>
                </a>

                <a class="{{ Route::currentRouteName() === 'milleks-kutteautomaatika' ? 'active' : '' }}"
                    href="{{ route('milleks-kutteautomaatika') }}">
                    <img src="{{ asset('images/icons/küttesepp.png') }}" alt="" aria-hidden="true" />
                    <span>Kütteautomaatika</span>
                </a>

                <a class="{{ Route::currentRouteName() === 'poranda-ja-radiaatorkute' ? 'active' : '' }}"
                    href="{{ route('poranda-ja-radiaatorkute') }}">
                    <img src="{{ asset('images/icons/küttesepp.png') }}" alt="" aria-hidden="true" />
                    <span>Põranda- ja radiaatorküte</span>
                </a>
            </div>
        </div>

        {{-- ALUMINE NAV --}}
        <nav class="bottom-nav" aria-label="Peamenüü">
            <a class="facebook-link" href="https://www.facebook.com/kuttesepp" target="_blank" rel="noopener noreferrer" aria-label="Küttesepp Facebookis">
                <img class="facebook" src="{{ asset('images/icons/facebook.png') }}" alt="Facebook logo" width="20" height="20" />
            </a>

            <div class="second-line">
                <button class="hamburger" type="button" aria-label="Ava menüü" aria-expanded="false" aria-controls="main-menu">
                    <span class="menu-btn"></span>
                </button>

                <a href="{{ route('index') }}" class="logoanchor" aria-label="Avaleht">
                    <img
                        class="logo"
                        src="{{ asset('images/küttesepp_logo.webp') }}"
                        alt="Küttesepp logo"
                        width="270"
                        height="86"
                    />
                </a>

                <div class="bottom-rightdiv" id="main-menu">
                    <ul class="main-menu">
                        <li>
                            <a class="{{ request()->is('kuttesusteemide-ehitus*') ? 'active' : '' }}"
                                href="{{ route('kuttesusteemide-ehitus') }}">
                                Küttesüsteemide ehitus
                            </a>
                        </li>

                        <li class="has-submenu">
                            <div class="menu-link-row">
                                <a class="{{ request()->is('soojuspumbad*') ? 'active' : '' }}"
                                    href="{{ route('soojuspumbad.index') }}">
                                    Soojuspumbad
                                </a>

                                <button
                                    class="submenu-toggle"
                                    type="button"
                                    aria-label="Ava soojuspumpade alammenüü"
                                    aria-expanded="false"
                                    aria-controls="submenu-soojuspumbad">
                                    <svg aria-hidden="true" viewBox="0 0 24 24" width="20" height="20">
                                        <path d="M6 9l6 6 6-6" fill="none" stroke="currentColor" stroke-width="2.3"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </button>
                            </div>

                            <div class="popup" id="submenu-soojuspumbad">
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

                        <li class="has-submenu">
                            <div class="menu-link-row">
                                <a class="{{ request()->is('tahkekutteseadmed*') ? 'active' : '' }}"
                                    href="{{ route('tahkekutteseadmed.index') }}">
                                    Tahkeküte
                                </a>

                                <button
                                    class="submenu-toggle"
                                    type="button"
                                    aria-label="Ava tahkekütte alammenüü"
                                    aria-expanded="false"
                                    aria-controls="submenu-tahkekute">
                                    <svg aria-hidden="true" viewBox="0 0 24 24" width="20" height="20">
                                        <path d="M6 9l6 6 6-6" fill="none" stroke="currentColor" stroke-width="2.3"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </button>
                            </div>

                            <div class="popup" id="submenu-tahkekute">
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

                        <li class="has-submenu">
                            <div class="menu-link-row">
                                <a class="{{ request()->is('hooldus-ja-remont*') ||
                                    request()->is('soojuspumpade-hooldus*') ||
                                    request()->is('soojuspumpade-remont*') ||
                                    request()->is('kuttevee-demineraliseerimine*') ||
                                    request()->is('kuttevee-inhibiitorid*') ||
                                    request()->is('kuttesusteemi-labipesu*') ? 'active' : '' }}"
                                    href="{{ route('hooldus-ja-remont') }}">
                                    Hooldus ja remont
                                </a>

                                <button
                                    class="submenu-toggle"
                                    type="button"
                                    aria-label="Ava hoolduse ja remondi alammenüü"
                                    aria-expanded="false"
                                    aria-controls="submenu-hooldus">
                                    <svg aria-hidden="true" viewBox="0 0 24 24" width="20" height="20">
                                        <path d="M6 9l6 6 6-6" fill="none" stroke="currentColor" stroke-width="2.3"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </button>
                            </div>

                            <div class="popup" id="submenu-hooldus">
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

                        <li>
                            <a class="{{ request()->is('tehtud-tood*') ? 'active' : '' }}"
                                href="{{ route('works.index') }}">
                                Tehtud tööd
                            </a>
                        </li>

                        <li>
                            <a id="kontakt" href="{{ route('index') }}#form">Kontakt</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
</div>