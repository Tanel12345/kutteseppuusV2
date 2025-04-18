
<section class="uper" id="uperid">
   <div class="carousel">
      <div class="taustadiv">
         <div class="textholderdiv" >
            <div class="textholder" style="{{ $textholderStyle }}">
               <h1>{!! $title !!}</h1>
               <p>{!! $content !!}</p>
            </div>
         </div>
         <img style="{{ $eriStiil ?? '' }}" class="taust" src="{{ Vite::asset($image) }}" alt="{!! $imageAlt !!}">
      </div>
   </div>
</section>






