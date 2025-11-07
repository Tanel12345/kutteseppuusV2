<section class="uper" id="uperid">
   <div class="carousel">
       
      <div class="taustadiv">
           <img class="taust" src="{{ Vite::asset('resources/images/pilved.webp') }}" alt="Clouds"> </img>
       </div>
       
       
       <div class="heading">
           
           <h1>Sinu küttemurede lahendaja</h1>
            <h2>Soojuspumbad ja Tahkekütteseadmed</h2>
            <h3>Usaldusväärne teenus</h3>
           <img src="{{ Vite::asset('resources/images/küttesepp_logo1.png') }}" class="h1logo" alt="Küttesepp" />
         </div>

       <button type="button" class="carousel-button carousel-button-back">
           <img src="{{ Vite::asset('resources/images/icons/back.png') }}" alt="backbutton" class="arrow-img" />
       </button>


       <!-- Slaid1 -->
       <div class="carouselcontainer">
            <ul class="carousel-ul active">
               <li class="carousel-li">
                   <img src="{{ Vite::asset('resources/images/taustad/Es_soojuspump5.webp') }}" alt="Õhk-vesi soojuspump - ES" class="carousel-img" title="Es_soojuspump" />
               </li>
              
           </ul>
           <!-- Slaid2 -->
            <ul class="carousel-ul">
                <li class="carousel-li">
                    <img  src="{{ Vite::asset('resources/images/taustad/Es_soojuspump6.webp') }}" alt="Õhk-vesi soojuspump - ES" class="carousel-img" title="Es_soojuspump" />
                </li>
              
            </ul>
           <!-- Slaid3 -->
            <ul class="carousel-ul">
                <li class="carousel-li">
                    <img  src="{{ Vite::asset('resources/images/taustad/ALPHA-ohk-vesi.webp') }}" alt="Õhk-vesi soojuspump - ES" class="carousel-img" title="Es_soojuspump" />
                </li>
           
            </ul>

           <!-- Slaid4 -->
            <ul class="carousel-ul">
                <li class="carousel-li">
                    <img  src="{{ Vite::asset('resources/images/taustad/ALPHA-maasoojus.webp') }}" alt="Õhk-vesi soojuspump - ES" class="carousel-img" title="Es_soojuspump" />
                </li>
           
            </ul>
       </div>

       <div class="popup-image">
           <div class="img-container">
               <img class="x" src="{{ Vite::asset('resources/images/icons/x.png') }}" alt="x" />
               <img class="img" src="" alt="" />
           </div>
       </div>

       <button type="button" class="carousel-button carousel-button-next">
           <img src="{{ Vite::asset('resources/images/icons/next.png') }}" alt="nextbutton" class="arrow-img" />
       </button>

       <div class="carousel-nav">
           <button class="carousel-indicator active1"></button>
           <button class="carousel-indicator"></button>
           <button class="carousel-indicator"></button>
           <button class="carousel-indicator"></button>
       </div>
   </div>
</section>