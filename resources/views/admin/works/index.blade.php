<h1>Tehtud tööd</h1>

@if(session('success'))
    <p style="color:green">{{ session('success') }}</p>
@endif

<h2>Lisa uus töö</h2>

<form method="POST"
      action="{{ route('admin.works.store') }}"
      enctype="multipart/form-data"
      style="max-width:800px;margin-bottom:40px">
@csrf

<input type="text"
       name="title"
       placeholder="Pealkiri"
       required
       style="width:100%;padding:12px;margin-bottom:10px">

<input type="text"
       name="location"
       placeholder="Asukoht"
       style="width:100%;padding:12px;margin-bottom:10px">

<select name="system_type"
        style="width:100%;padding:12px;margin-bottom:10px">
    <option value="">-- Süsteemi tüüp --</option>
    <option value="Õhk-vesi soojuspump">Õhk-vesi soojuspump</option>
    <option value="Õhk-õhk soojuspump">Õhk-õhk soojuspump</option>
    <option value="Maaküte">Maaküte</option>
    <option value="Pelletikatlad ja kaminad">Pelletikatlad ja kaminad</option>
    <option value="Keskküttepliidid ja kaminad">Keskküttepliidid ja kaminad</option>
    <option value="Küttesüsteemi hooldus">Küttesüsteemi hooldus</option>
    <option value="Küttevee töötlus">Küttevee töötlus</option>
    <option value="Küttevee demineraliseerimine">Küttevee demineraliseerimine</option>
</select>

<input type="text"
       name="brand"
       placeholder="Bränd"
       style="width:100%;padding:12px;margin-bottom:10px">

<textarea name="description"
          rows="6"
          placeholder="Kirjeldus"
          style="width:100%;padding:12px;margin-bottom:10px"></textarea>

<input type="file" name="images[]" multiple accept="image/*">

<br><br>

<button type="submit"
        style="padding:12px 25px;background:#b00000;color:#fff;border:none">
    Lisa töö
</button>
</form>

<hr>

{{-- LIST --}}
@foreach($works as $work)
    <h3>{{ $work->title }}</h3>
    <p>{{ $work->location }} | {{ $work->system_type }} | {{ $work->brand }}</p>

    @if($work->images->count())
        <div style="display:flex;gap:10px;flex-wrap:wrap">
            @foreach($work->images as $img)
                <img src="{{ asset('storage/'.$img->image_path) }}"
                     style="width:120px;border:1px solid #ccc">
            @endforeach
        </div>
    @endif

<div style="display:flex;gap:10px;align-items:center;margin:12px 0 20px 0">

    <a href="{{ route('admin.works.edit', $work->id) }}"
       style="
           padding:8px 14px;
           background:#f3f3f3;
           color:#222;
           border:1px solid #bbb;
           border-radius:5px;
           text-decoration:none;
           font-size:14px;
       ">
        ✏️ Muuda
    </a>

    <form method="POST"
          action="{{ route('admin.works.delete', $work->id) }}"
          onsubmit="return confirm('Kustutan töö?')"
          style="margin:0">
        @csrf
        @method('DELETE')

        <button type="submit"
                style="
                    padding:8px 14px;
                    background:#fff;
                    color:#b00000;
                    border:1px solid #b00000;
                    border-radius:5px;
                    font-size:14px;
                    cursor:pointer;
                ">
            🗑️ Kustuta
        </button>
    </form>

</div>

    <hr>
@endforeach