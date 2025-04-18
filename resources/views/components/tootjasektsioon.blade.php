<section class="tootjasektsioon" id="tootjaid">
    <div class="tootjast">
        <div class="ettevotte">
            <h2>{!! $title !!}</h2><br>
            @if($showVideo ?? false)
            <div class="videodiv">
                    <iframe width="500" height="280" src="https://www.youtube.com/embed/g1uKAYyem1s" 
                    title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                    </iframe>
                    <iframe width="500" height="280" src="https://www.youtube.com/embed/7Jzipapy6-I" 
                        title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                    </iframe>
                
                </div>
                @endif
                <div class="content">
                    {!! $content !!}
                </div>
            <div class="links">
                <div class="kusipakkumist">
                    <a href="{{ $link }}" title="{{ $linktitle }}" >
                        <p>{{ $linktext }}</p>
                    </a>
                </div>
             {{ $slot }}
                <div class="kusipakkumist">
                    <a href="{{ $outLink }}" title="{{ $outLinkTitle }}"  target="_blank" rel="noopener noreferrer">
                        <p>{{ $outLinkText }}</p>
                    </a>
                </div>
               
                <div class="pildidiv">
                    <img class="tootjastpilt" src="{{ Vite::asset($image) }}" alt="{{ $imageAlt }}">
                </div>
            </div>
        </div>
    </div>
 
</section>

