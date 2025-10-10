
<div class="header-container" id="headerid">
    <header>
        <!-- Ülemine navbar -->
        <div class="top-nav">
            <div class="left-topdiv">
                <a style="cursor:auto;" href="tel:+37256681555"><img src="{{ Vite::asset('resources/images/icons/küttesepp.png') }}" alt="Küttesepa telefon" />+37256681555</a>
                <a style="cursor:auto;" href="#"><img src="{{ Vite::asset('resources/images/icons/küttesepp.png') }}" alt="Küttesepa email" />tanel[ät]kyttesepp.ee</a>
            </div>
            <div class="right-topdiv" id="right-topdiv">
                <a class="{{ Route::currentRouteName() == 'soojuspumpade-paigaldus' ? 'active' : '' }}" href="{{ route('soojuspumpade-paigaldus') }}"><img src="{{ Vite::asset('resources/images/icons/küttesepp.png') }}" alt="Küttesepp" />Soojuspumpade paigaldus</a>
                <a class="{{ Route::currentRouteName() == 'milleks-kutteautomaatika' ? 'active' : '' }}" href="{{ route('milleks-kutteautomaatika') }}"><img src="{{ Vite::asset('resources/images/icons/küttesepp.png') }}" alt="Küttesepp" />Milleks kütteautomaatika</a>
                <a class="{{ Route::currentRouteName() == 'poranda-ja-radiaatorkute' ? 'active' : '' }}" href="{{ route('poranda-ja-radiaatorkute') }}"><img src="{{ Vite::asset('resources/images/icons/küttesepp.png') }}" alt="Küttesepp" />Põranda- ja radiaatorküte</a>
                <a class="{{ Route::currentRouteName() == 'kuidas-saasta-kuttekuludelt' ? 'active' : '' }}" href="{{ route('kuidas-saasta-kuttekuludelt') }}"><img src="{{ Vite::asset('resources/images/icons/küttesepp.png') }}" alt="Küttesepp" />Kuidas säästa küttekuludelt</a>
            </div>
        </div>
        <!--  Alumine navbar -->
        <nav class="bottom-nav">
            
            <a href="https://www.facebook.com/kyttesepp" target="_blank">
                <img class="facebook" src="{{ Vite::asset('resources/images/icons/facebook.png') }}" alt="facebook logo" />
            </a>
            <div class="second-line">
                <div class="hamburger">
                    <div class="menu-btn"></div>
                </div>
                <a href="{{ route('index') }}" class="logoanchor">
                    <img class="logo" src="{{ Vite::asset('resources/images/küttesepp_logo.webp') }}" alt="Küttesepp logo" />
                </a>
                <div class="bottom-rightdiv">
                    <ul>
                        <li><a href="/#piltlingid">SOOJUSPUMBAD<img src="{{ Vite::asset('resources/images/icons/down.png') }}" style=" width:18px; height:auto; vertical-align: middle; position: relative; top: 2px;"></a>
                            <div class="popup">
                                <ul>
                                    <li><a class="{{ Route::currentRouteName() == 'ohksoojuspumbad.index' ? 'active' : '' }}" href="{{ route('ohksoojuspumbad.index') }}">ÕHK-ÕHK SOOJUSPUMBAD</a></li>
                                    <li><a class="{{ Route::currentRouteName() == 'ohk-vesi-soojuspumbad.index' ? 'active' : '' }}" href="{{ route('ohk-vesi-soojuspumbad.index') }}">ÕHK-VESI SOOJUSPUMBAD</a></li>
                                    <li><a class="{{ Route::currentRouteName() == 'maasoojuspumbad.index' ? 'active' : '' }}" href="{{ route('maasoojuspumbad.index') }}">MAASOOJUSPUMBAD</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="/#piltlingid" title="Tahkekütteseadmete info ja tüübid">
                              TAHKEKÜTTESEADMED
                              <img src="{{ Vite::asset('resources/images/icons/down.png') }}" style="width:18px; height:auto; vertical-align: middle; position: relative; top: 2px;">
                            </a>
                            <div class="popup">
                              <ul>
                                <li><a href="https://www.ahjumees.ee" title="Ahjude, pliitide ja kaminate lehele" target="_blank">KÄSITÖÖ AHJUD PLIIDID KAMINAD</a></li>
                                <li><a href="{{ route('index') }}" title="Pelletikatelde müük ja paigaldus">PELLETIKATLAD</a></li>
                                <li><a href="{{ route('index') }}" title="Pelletikaminate lahendused">PELLETIKAMINAD</a></li>
                                <li><a href="{{ route('index') }}" title="Keskküttepliitid">KESKKÜTTEPLIIDID</a></li>
                                <li><a href="{{ route('index') }}" title="Keskküttekaminate info ja paigaldus">KESKKÜTTEKAMINAD</a></li>
                              </ul>
                            </div>
                          </li>
                    </ul>
                    <ul>
                        <li><a href="{{ route('kuttesusteemi-hooldus') }}" title="Küttesüsteemide hooldus">KÜTTESÜSTEEMI HOOLDUS</a></li>
                    </ul>
                    <ul>
                        <li><a href="{{ route('index') }}" title="Tehtud tööd">TEHTUD TÖÖD</a></li>
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