<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    @vite('resources/css/tootesektsioon.css')
</head>
<body>

<h1>Edit Product</h1>

{{-- Errors --}}
@if ($errors->any())
<div style="color:red">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form method="POST"
      action="{{ route('admin.products.update', $product->id) }}"
      enctype="multipart/form-data">

    @csrf
    @method('PUT')

    {{-- BRAND --}}
    <div>
        <label for="brand_id">Brand</label>
        <select name="brand_id" id="brand_id" required>
            @foreach($brands as $brand)
                <option value="{{ $brand->id }}"
                    {{ $product->brand_id === $brand->id ? 'selected' : '' }}>
                    {{ $brand->name }}
                </option>
            @endforeach
        </select>
    </div>

    {{-- PRODUCT TYPE --}}
    <div>
        <label for="product_type">Product Type</label>
        <select name="product_type" id="product_type" required>

            <option value="ohk_ohk_soojuspumbad"
                {{ $product->product_type === 'ohk_ohk_soojuspumbad' ? 'selected' : '' }}>
                Õhk-õhk
            </option>

            <option value="ohk_vesi_soojuspumbad"
                {{ $product->product_type === 'ohk_vesi_soojuspumbad' ? 'selected' : '' }}>
                Õhk-vesi
            </option>

            <option value="Maasoojuspumbad"
                {{ $product->product_type === 'Maasoojuspumbad' ? 'selected' : '' }}>
                Maasoojus
            </option>

            <option value="Pelletikatlad_kaminad"
                {{ $product->product_type === 'Pelletikatlad_kaminad' ? 'selected' : '' }}>
                Pelletikatlad ja kaminad
            </option>

            <option value="Keskkuttepliidid_ja_kaminad"
                {{ $product->product_type === 'Keskkuttepliidid_ja_kaminad' ? 'selected' : '' }}>
                Keskküttepliidid ja kaminad
            </option>

        </select>
    </div>

    {{-- NAME --}}
    <div>
        <label>Product Name</label>
        <input type="text" name="name" value="{{ $product->name }}" required>
    </div>

    {{-- DESCRIPTION --}}
    <div>
        <label>Description</label>
        <textarea name="description" rows="6">{{ $product->description }}</textarea>
    </div>

    {{-- POWER --}}
    <div>
        <label>Power</label>
        <input type="text" name="power" value="{{ $product->power }}">
    </div>

    {{-- PRODUCT IMAGE --}}
    <div>
        <label>Product Image</label>
        <input type="file" name="product_img" accept="image/*">

        @if($product->product_img)
            <div style="margin-top:10px">
                <img src="{{ asset('storage/' . $product->product_img) }}"
                     style="max-width:120px">
            </div>
        @endif
    </div>

    {{-- BRAND IMAGE --}}
    <div style="margin-top:15px">
        <label>Brand Image (logo)</label>
        <input type="file" name="brand_img" accept="image/*">

        @if($product->brand && $product->brand->logo)
    <div style="margin-top:10px">
        <img src="{{ asset('storage/' . $product->brand->logo) }}"
             alt="{{ $product->brand->name }} logo"
             style="max-width:120px">
    </div>
@endif

        <small>
            Logo salvestatakse brändile ja kehtib kõigile selle brändi toodetele
        </small>
    </div>

    <button type="submit">Save changes</button>
</form>

<br>

<a href="{{ route('admin.products.index') }}">
    ⬅ Back to products
</a>

</body>
</html>