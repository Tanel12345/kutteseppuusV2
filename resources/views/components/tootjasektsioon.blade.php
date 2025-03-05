<section class="tootjasektsioon" id="tootjaid">
    <div class="tootjast">
     <div class="ettevotte">
         <h2>{!! $title !!}</h2><br>
         <p>{!! $content !!}</p><br>
         <div class="kusipakkumist">
            <a href="{{ $link }}" title="{{ $linktitle }}" >
                <p>{{ $linktext }}</p>
            </a>
        </div>
         <div class="kusipakkumist">
            <a href="{{ $outLink }}" title="{{ $outLinkTitle }}"  target="_blank" rel="noopener noreferrer">
                <p>{{ $outLinkText }}</p>
            </a>
           
            </div>
     </div>
     </div>
 
</section>

