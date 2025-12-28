@php
    use Illuminate\Support\Str;
@endphp


<x-layout :title="$work->title . ' | Tehtud tööd – Küttesepp'" :metaDescription="Str::limit(strip_tags($work->description ?? 'Tehtud töö: ' . $work->title), 155)" :metaKeywords="'tehtud tööd, soojuspumba paigaldus, küttesüsteemi paigaldus, ' .
    strtolower($work->system_type ?? '') .
    ', ' .
    strtolower($work->brand ?? '') .
    ', küttesepp'" :metaAuthor="'Tanel Sepp'" :robots="'index, follow'" :viteCssAssets="[
    'resources/css/app.css',
    'resources/css/navbar.css',
    'resources/css/footer.css',
    'resources/css/works-cards.css',
    'resources/css/upscroller.css',
    'resources/css/cookies.css',
    'resources/css/staticCarouselkuttesepp.css',
    'resources/css/tootjasektsioon2.css',
    'resources/css/lightbox.css',
]"
    :viteJsAssets="[
        'resources/js/app.js',
        'resources/js/navbar.js',
        'resources/js/lenis.js',
        'resources/js/upscroller.js',
        'resources/js/cookies.js',
        'resources/js/hamburger.js',
    ]">


    <div id="lightbox" class="lightbox hidden">
        <div class="lightbox-inner">

            <!-- SULGE -->
            <img class="x" src="{{ Vite::asset('resources/images/icons/x.png') }}" alt="Sulge">

            <!-- PILT -->
            <img id="lightboxImage" src="" alt="Tehtud töö suur pilt">

            <!-- NOOLED -->
            <button type="button" class="carousel-button carousel-button-back">
                <img src="{{ Vite::asset('resources/images/icons/back.png') }}" class="arrow-img">
            </button>

            <button type="button" class="carousel-button carousel-button-next">
                <img src="{{ Vite::asset('resources/images/icons/next.png') }}" class="arrow-img">
            </button>

        </div>

    </div>




    <section class="uper" id="uperid">
        <div class="carousel">
            <div class="taustadiv">
                <div class="textholderdiv">
                    <div class="textholder">
                        <h1>{{ $work->title }}</h1>
                    </div>
                </div>
                <img style="opacity:0.5; filter: blur(3px);" class="taust" src="{{ Vite::asset('resources/images/taustad/tehtud-tood-taust.webp') }}"
                    alt="Küttesüsteemi ehitamine">
            </div>
        </div>
    </section>

    <section class="tootjasektsioon">
        <div class="tootjast">
            <div class="ettevotte">
                <div class="content">

                    <section class="work-detail-header">
                        <div class="container">

                            <p class="work-meta">
                                @if ($work->location)
                                    <strong>Asukoht:</strong> {{ $work->location }}
                                @endif <br>

                                @if ($work->system_type)
                                    <strong>Süsteem:</strong> {{ $work->system_type }}
                                @endif <br>

                                @if ($work->brand)
                                    <strong>Bränd:</strong> {{ $work->brand }}
                                @endif <br>
                            </p>
                        </div>
                    </section>

                    <section class="work-detail-content">
                        <div class="container">

                            @if ($work->description)
                                <p class="work-description">
                                    {!! $work->description !!}
                                </p>
                            @endif

                            <div class="work-gallery" id="workGallery">
                                @foreach ($work->images as $index => $img)
                                    <div class="work-gallery-item">
                                        <img src="{{ asset('storage/' . $img->image_path) }}"
                                            alt="{{ $img->alt_text ?? $work->title . ' – küttesüsteemi paigaldus' }}"
                                            loading="lazy" class="work-image" data-index="{{ $index }}">
                                    </div>
                                @endforeach
                            </div>

                        </div>
                    </section>

                    <hr class="red-line" style="justify-self:center; margin: 50px 0 75px 0;">
                    {{-- SEO TEXT --}}
                    <section class="seo-text">
                        <div class="container">
                            <h2
                                style="font-size:18px; font-weight:500; letter-spacing: 0px; line-height: 25px; margin-bottom:5px;  ">
                                {{ $work->title }} – asukoht: {{ $work->location ?? 'Eestis' }} </h2>

                            <h3 style="font-size:18px; font-weight:500; margin-top:5px;">
                                Küttesepp OÜ planeerimine ja teostus
                            </h3>

                            <h4 style="font-size:18px; font-weight:700; margin-left:-18px; margin-top: 15px">
                                Küttesepp pakub <a style="font-weight:600"
                                    href="{{ route('soojuspumbad.index') }}">soojuspumpasid</a> ja <a
                                    style="font-weight:600" href="{{ route('tahkekutteseadmed.index') }}">
                                    küttesüsteemide</a>
                                müüki, paigaldust ja hooldust üle Eesti.
                            </h4>

                        </div>
                    </section>
                    <div style="margin-top:15px">
                        <strong style="font-size:18px; font-weight:300;"><a href="{{ url('/tehtud-tood') }}"> ← Tagasi
                                tehtud tööde juurde</a></strong>
                    </div>

                    <div class="links">

                        <div class="kusipakkumist">
                            <a href="/#form" title="Emaili vormile">
                                <p>KÜSI LISAINFOT</p>
                            </a>
                        </div>


                    </div>
                </div>
            </div>

    </section>

    <x-up_scroller />
    <x-cookies />

{{-- struktureeritud andmete deklaratsioon (JSON-LD).Seo, google jaok --}}
    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Project",
  "name": "{{ $work->title }}",
  "description": "{{ Str::limit(strip_tags($work->description ?? ''), 200) }}",
  "location": {
    "@type": "Place",
    "name": "{{ $work->location ?? 'Eesti' }}"
  },
  "provider": {
    "@type": "LocalBusiness",
    "name": "Küttesepp OÜ",
    "url": "{{ url('/') }}"
  }
}


</script>
{{-- Töö piltide slider --}}
    <script>
        document.addEventListener('DOMContentLoaded', () => {

            const images = Array.from(document.querySelectorAll('.work-image'));
            const lightbox = document.getElementById('lightbox');
            const lightboxImage = document.getElementById('lightboxImage');

            const btnPrev = document.querySelector('.carousel-button-back');
            const btnNext = document.querySelector('.carousel-button-next');
            const btnClose = document.querySelector('#lightbox .x');

            let currentIndex = 0;
            const hasMultipleImages = images.length > 1;

            /* VISUAALNE BLOKK NOOLTELE (kui 0–1 pilti) */
            if (!hasMultipleImages) {
                btnPrev.style.opacity = '0.3';
                btnNext.style.opacity = '0.3';
                btnPrev.style.pointerEvents = 'none';
                btnNext.style.pointerEvents = 'none';
            }

            /* OPEN */
            function openLightbox(index) {
                currentIndex = index;
                lightboxImage.src = images[currentIndex].src;
                lightbox.classList.remove('hidden');
                document.body.style.overflow = 'hidden';
            }

            /* CLOSE */
            function closeLightbox() {
                lightbox.classList.add('hidden');
                document.body.style.overflow = '';
            }

            function animateImage(animationName, callback) {
                lightboxImage.style.animation = animationName + ' 0.3s ease forwards';

                setTimeout(() => {
                    callback();
                    lightboxImage.style.animation = '';
                }, 300);
            }

            /* NEXT */
            function nextImage() {
                if (!hasMultipleImages) return;

                animateImage('slideOutToLeft', () => {
                    currentIndex = (currentIndex + 1) % images.length;
                    lightboxImage.src = images[currentIndex].src;
                    lightboxImage.style.animation = 'slideInFromRight 0.3s ease';
                });
            }

            /* PREV */
            function prevImage() {
                if (!hasMultipleImages) return;

                animateImage('slideOutToRight', () => {
                    currentIndex = (currentIndex - 1 + images.length) % images.length;
                    lightboxImage.src = images[currentIndex].src;
                    lightboxImage.style.animation = 'slideInFromLeft 0.3s ease';
                });
            }

            /* IMAGE CLICK */
            images.forEach((img, index) => {
                img.addEventListener('click', () => openLightbox(index));
            });

            /* BUTTONS */
            btnNext.addEventListener('click', nextImage);
            btnPrev.addEventListener('click', prevImage);
            btnClose.addEventListener('click', closeLightbox);

            /* BACKDROP CLICK */
            lightbox.addEventListener('click', e => {
                if (e.target === lightbox) closeLightbox();
            });

            /* KEYBOARD */
            document.addEventListener('keydown', e => {
                if (lightbox.classList.contains('hidden')) return;

                if (e.key === 'Escape') closeLightbox();
                if (!hasMultipleImages) return;

                if (e.key === 'ArrowRight') nextImage();
                if (e.key === 'ArrowLeft') prevImage();
            });

        });
    </script>
</x-layout>
