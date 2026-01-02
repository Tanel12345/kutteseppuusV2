

<section class="contact" id="contact">

<form
    id="form"
    name="myForm"
    class="contactform"
    action="{{ route('contact.send') }}"
    method="post"
    autocomplete="on"
    novalidate
>
    @csrf

    <!-- reCAPTCHA token -->
    <input type="hidden" name="recaptcha_token" id="recaptcha_token">

    <div class="pealkiri">
        @if(session('success'))
            <label style="color: green; font-size: 25px; padding: 10px; width: fit-content; display: block; margin: 0 auto; font-weight: 300;" class="Pealkiri">
                {{ session('success') }}
            </label>
        @endif

        @if(session('error'))
            <label style="color: red; font-size: 20px; padding: 10px; width: fit-content; display: block; margin: 0 auto; font-weight: 300;" class="Pealkiri">
                {{ session('error') }}
            </label>
        @endif

        @if(!session('success') && !session('error'))
            <label class="Pealkiri" for="sinunimi">
                Kiirem infovahetus telefonis – <span>Helista või saada kiri.</span>
            </label>
        @endif
    </div>

    <div class="Input">
        <input
            type="text"
            name="sinunimi"
            class="input"
            id="sinunimi"
            placeholder="*Sinu nimi:"
            required
            value="{{ old('sinunimi') }}"
        >
        <div id="nimierror">@error('sinunimi') {{ $message }} @enderror</div>
    </div>

    <div class="Input">
        <input
            type="email"
            name="email"
            class="input"
            id="email"
            placeholder="*Sinu e-post:"
            required
            value="{{ old('email') }}"
        >
        <div id="emailerror">@error('email') {{ $message }} @enderror</div>
    </div>

    <div class="Input">
        <input
            type="text"
            name="pealkiri"
            class="input"
            id="pealkiri"
            placeholder="Pealkiri"
            value="{{ old('pealkiri') }}"
        >
    </div>

    <div class="Inputtext">
        <textarea
            class="input"
            name="inputtext"
            id="teade"
            placeholder="*Sinu päring..."
            required
        >{{ isset($product)
            ? "Tere\nsoovin küsida toote " . $product . " kohta"
            : old('inputtext', '') }}</textarea>

        <div id="teadeerror">@error('inputtext') {{ $message }} @enderror</div>
    </div>

    <div class="nupp">
        <button id="login_button" type="submit">Saada teade</button>
    </div>

</form>

<div class="minukontakt">
    <h3>
        Tegevuspiirkond:<br>
        Üle Eesti
    </h3>
    <hr>

    <p><span>Asukoht:</span> Tallinn</p>

    <p>
        <span>Kontakt:</span><br>
        Tanel Sepp<br>
        tel: +372 5668 1555<br>
        e-post: <a href="mailto:tanel@kuttesepp.ee">tanel@kuttesepp.ee</a>
    </p>

    <br>

 <img
    src="{{ asset('images/tanel.webp') }}"
    title="Tanel Sepp"
    alt="Tanel Sepp"
>
</div>

</section>









{{-- <section class="contact" id="contact">
<form id="form" name="myForm" class="contactform" action="{{ route('contact.send') }}" method="post" autocomplete="on" novalidate>
  @csrf {{-- Laravel CSRF protection --}}
  {{--<div class="pealkiri">
      @if(session('success'))
        <label style="color: green; font-size: 25px; padding: 10px; width: fit-content; display: block; margin: 0 auto; font-weight: 300;" class="Pealkiri">
            {{ session('success') }}
        </label>
      @endif

      @if(session('error'))
          <label style="color: red; font-size: 20px; padding: 10px; width: fit-content; display: block; margin: 0 auto; font-weight: 300;" class="Pealkiri">
              {{ session('error') }}
          </label>
      @endif

      @if(!session('success') && !session('error'))
          <label class="Pealkiri" for="sinunimi">
              Kiirem infovahetus telefonis - <span>Helista või saada kiri.</span>
          </label>
      @endif
  </div>
  
  <div class="Input">
      <input type="text" name="sinunimi" class="input" id="sinunimi" placeholder="*Sinu Nimi:" required value="{{ old('sinunimi') }}">
      <div id="nimierror">@error('sinunimi') {{ $message }} @enderror</div>
  </div>

  <div class="Input">
      <input type="email" name="email" class="input" id="email" placeholder="*Sinu Email:" required value="{{ old('email') }}">
      <div id="emailerror">@error('email') {{ $message }} @enderror</div>
  </div>

  <div class="Input">
    <input type="text" name="pealkiri" class="input" id="pealkiri" placeholder="Pealkiri"
           value="{{ old('pealkiri') }}">
    
</div>

  <div class="Inputtext">
    <textarea class="input" name="inputtext" id="teade" placeholder="*Sinu päring..." required>
      {{ isset($product) ? "Tere \nsoovin küsida toote " . $product . " kohta" : old('pealkiri', '') }}
  </textarea>
    <div id="teadeerror">@error('inputtext') {{ $message }} @enderror</div>
  </div>
 

  <div class="nupp">
      <button id="login_button" type="submit">Saada teade</button>
  </div>


  
</form>
<div class="minukontakt">
  <h3>
    Tegevuspiirkond: <br> Üle Eesti
  </h3>
  <hr>
  <p><span>Asukoht:</span> Tallinn</p>
  <p><span>Kontakt: <br></span> Tanel Sepp <br> tel: +37256681555 <br> email: tanel[ät]ahjumees.ee</p><br>
  <img src="{{ Vite::asset('resources/images/tanel.webp') }}"
  title="Tanel Sepp" alt="Tanel Sepp">
</div>
</section> --}}




{{-- <section class="contact">
    <form id="form" name="myForm" class="contactform" onsubmit="return myFunction();" action="taname.php"
     
       method="post" autocomplete="on" novalidate>
  
      <div class="pealkiri">
      <label class="Pealkiri" for="sinunimi">Kiirem infovahetus telefonis - <span>Helista või saada kiri.</span></label><br>
      </div>
      <div class="Input">
        <input type="text" name="sinunimi" class="input" id="sinunimi" placeholder="*Sinu Nimi:" tabindex="1" required><br>
      </div>
      <div id="nimierror"></div>
      <div class="Input">
        <input type="email" name="email" class="input" id="email" placeholder="*Sinu Email:" tabindex="2" required><br>
      </div>
      <div id="emailerror"></div>
      <div class="Input">
        <input type="text" name="pealkiri" class="input" id="pealkiri" placeholder="Pealkiri" tabindex="3"><br>
      </div>
      <div class="Inputtext">
        <textarea class="input" name="inputtext" id="teade" placeholder="*Sinu päring..." rows="5" cols="50" tabindex="4" required></textarea>
      </div>
      <div id="teadeerror"></div>
       <div class="nupp"> <!-- data-callback='onSubmit' on Extra lisa käivitada callback meetod, rechapcha kontrollib kasutajat ja positiivse tulemi korral käivitab ikkagi data-action atribuudi. -->
       <button class="g-recaptcha" 
          data-sitekey="6LfucCsjAAAAAFmqKuEP8D99Ql8do6q1jUu4umtX" 
          data-callback='onSubmit'  
          id="login_button"
          data-action='submit'>Saada teade</button>
        <!-- <button id="login_button" type="submit" class="btn" value="Submit" >Saada teade</button> -->
      </div><br> 
    
  
  
   
  
    </form>
    <div class="minukontakt">
      <h3>
        Tegevuspiirkond: <br> Üle Eesti
      </h3>
      <hr>
      <p><span>Asukoht:</span> Tallinn</p>
      <p><span>Kontakt: <br></span> Tanel Sepp <br> tel: +37256681555 <br> email: tanel[ät]ahjumees.ee</p><br>
      <img src="{{ Vite::asset('resources/images/tanel.webp') }}"
      title="Tanel Sepp" alt="Tanel Sepp">
    </div>
  
  </section> --}}