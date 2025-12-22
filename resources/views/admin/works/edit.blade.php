<h1>Muuda tehtud tööd</h1>

{{-- SUCCESS --}}
@if(session('success'))
    <p style="color:green">{{ session('success') }}</p>
@endif

{{-- ERRORS --}}
@if ($errors->any())
    <div style="color:red">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

{{-- =========================
     UPDATE WORK FORM
========================= --}}
<form method="POST"
      action="{{ route('admin.works.update', $work->id) }}"
      enctype="multipart/form-data"
      style="max-width:900px;margin-bottom:40px">

@csrf
@method('PUT')

{{-- TITLE --}}
<input type="text"
       name="title"
       value="{{ old('title', $work->title) }}"
       required
       style="width:100%;padding:12px;margin-bottom:10px">

{{-- LOCATION --}}
<input type="text"
       name="location"
       value="{{ old('location', $work->location) }}"
       style="width:100%;padding:12px;margin-bottom:10px">

{{-- SYSTEM TYPE --}}
<select name="system_type"
        style="width:100%;padding:12px;margin-bottom:10px">

    <option value="">— vali —</option>

    @foreach([
        'Õhk-õhk soojuspump',
        'Õhk-vesi soojuspump',
        'Maaküte',
        'Pelletikatlad ja kaminad',
        'Keskküttepliidid ja kaminad',
        'Küttesüsteemi hooldus',
        'Küttevee töötlus',
        'Küttevee demineraliseerimine'
    ] as $type)
        <option value="{{ $type }}"
            {{ $work->system_type === $type ? 'selected' : '' }}>
            {{ $type }}
        </option>
    @endforeach
</select>

{{-- BRAND --}}
<input type="text"
       name="brand"
       value="{{ old('brand', $work->brand) }}"
       style="width:100%;padding:12px;margin-bottom:10px">

{{-- DESCRIPTION --}}
<textarea name="description"
          rows="8"
          style="width:100%;padding:12px;margin-bottom:15px">{{ old('description', $work->description) }}</textarea>

{{-- ADD NEW IMAGES --}}
<label><strong>Lisa uusi pilte</strong></label><br>
<input type="file"
       name="images[]"
       multiple
       accept="image/*"
       style="margin-bottom:20px">

<br>

<button type="submit"
        style="padding:12px 25px;background:#b00000;color:#fff;border:none;border-radius:6px">
    Salvesta muudatused
</button>

</form>

<hr>

{{-- =========================
     EXISTING IMAGES
========================= --}}
@if($work->images->count())

<h3>Pildid (lohista järjekorda)</h3>

<div id="sortable-images"
     style="display:flex;gap:15px;flex-wrap:wrap;margin-bottom:30px">

@foreach($work->images as $img)
    <div class="sortable-image"
         draggable="true"
         data-id="{{ $img->id }}"
         style="border:1px solid #ccc;padding:10px;text-align:center;cursor:grab">

        <img src="{{ asset('storage/'.$img->image_path) }}"
             style="width:160px;display:block;margin-bottom:8px">

        {{-- DELETE IMAGE --}}
        <form method="POST"
              action="{{ route('admin.works.image.delete', $img->id) }}"
              onsubmit="return confirm('Kustutan selle pildi?')">
            @csrf
            @method('DELETE')
            <button type="submit"
                    style="color:#b00000;font-size:12px">
                Kustuta pilt
            </button>
        </form>
    </div>
@endforeach

</div>
@endif

<a href="{{ route('admin.works.index') }}">← Tagasi tööde nimekirja</a>

{{-- =========================
     DRAG & DROP SORT
========================= --}}
<script>
const container = document.getElementById('sortable-images');
if (container) {

    let draggedItem = null;

    container.querySelectorAll('.sortable-image').forEach(item => {

        item.addEventListener('dragstart', () => {
            draggedItem = item;
            setTimeout(() => item.style.opacity = '0.5', 0);
        });

        item.addEventListener('dragend', () => {
            draggedItem.style.opacity = '1';
            draggedItem = null;
            saveOrder();
        });

        item.addEventListener('dragover', e => e.preventDefault());

        item.addEventListener('drop', e => {
            e.preventDefault();
            if (item !== draggedItem) {
                container.insertBefore(draggedItem, item);
            }
        });
    });

    function saveOrder() {
        const order = [...container.children].map(el => el.dataset.id);

        fetch("{{ route('admin.works.images.sort') }}", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": "{{ csrf_token() }}"
            },
            body: JSON.stringify({ order })
        });
    }
}
</script>