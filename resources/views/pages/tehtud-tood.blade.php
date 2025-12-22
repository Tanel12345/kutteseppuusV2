@php
    use Illuminate\Support\Str;
@endphp

<x-layout
    :title="$work->title . ' | Tehtud tööd – Küttesepp'"
    :metaDescription="Str::limit(strip_tags($work->description ?? 'Tehtud töö: ' . $work->title), 155)"
    :metaKeywords="'tehtud tööd, soojuspumba paigaldus, küttesüsteemi paigaldus, '
        . strtolower($work->system_type ?? '') . ', '
        . strtolower($work->brand ?? '') . ', küttesepp'"
    :metaAuthor="'Tanel Sepp'"
    :robots="'index, follow'"
>

<section class="work-detail-header">
    <div class="container">
        <h1>{{ $work->title }}</h1>

        <p class="work-meta">
            @if($work->location)
                <strong>Asukoht:</strong> {{ $work->location }}
            @endif

            @if($work->system_type)
                | <strong>Süsteem:</strong> {{ $work->system_type }}
            @endif

            @if($work->brand)
                | <strong>Bränd:</strong> {{ $work->brand }}
            @endif
        </p>
    </div>
</section>

<section class="work-detail-content">
    <div class="container">

        @if($work->description)
            <p class="work-description">
                {{ $work->description }}
            </p>
        @endif

        {{-- IMAGE GALLERY --}}
        <div class="work-gallery">
            @foreach($work->images as $img)
                <img
                    src="{{ asset('storage/' . $img->image_path) }}"
                    alt="{{ $img->alt_text ?? $work->title . ' – küttesüsteemi paigaldus' }}"
                    loading="lazy"
                    class="work-image"
                >
            @endforeach
        </div>

    </div>
</section>

{{-- SEO TEXT --}}
<section class="seo-text">
    <div class="container">
        <h2>{{ $work->title }} – professionaalne küttesüsteemi paigaldus</h2>

        <p>
            Antud projekt on üks Küttesepp OÜ poolt teostatud küttesüsteemide
            paigaldustest. Iga töö on lahendatud vastavalt hoone eripäradele,
            energiatõhususe nõuetele ja kliendi vajadustele.
        </p>

        <p>
            Küttesepp pakub soojuspumpade, pelletikatelde ja muude
            küttesüsteemide müüki, paigaldust ja hooldust üle Eesti.
        </p>

        <p>
            Vaata ka teisi
            <a href="{{ url('/tehtud-tood') }}">
                Küttesepp tehtud töid
            </a>,
            et saada parem ülevaade erinevatest küttelahendustest.
        </p>
    </div>
</section>

<a href="{{ url('/tehtud-tood') }}">← Tagasi tehtud tööde juurde</a>

{{-- STRUCTURED DATA --}}
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

<x-up-scroller/>
<x-cookies/>

</x-layout>