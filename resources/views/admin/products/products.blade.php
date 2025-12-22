<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin – Products</title>
    @vite('resources/css/tootesektsioon.css')
</head>
<body>

<h1>Admin – Products</h1>

{{-- Success --}}
@if(session('success'))
    <p style="color: green;">{{ session('success') }}</p>
@endif

{{-- Errors --}}
@if ($errors->any())
<div style="color: red;">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

{{-- ADD PRODUCT --}}
<h2>Add New Product</h2>

<form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
@csrf

    {{-- BRAND --}}
    <div>
        <label for="brand_id">Brand</label>
        <select name="brand_id" id="brand_id" required>
            <option value="">-- vali bränd --</option>
            @foreach($brands as $brand)
                <option value="{{ $brand->id }}"
                    {{ old('brand_id') == $brand->id ? 'selected' : '' }}>
                    {{ $brand->name }}
                </option>
            @endforeach
        </select>
    </div>

    {{-- PRODUCT TYPE --}}
    <div>
        <label for="product_type">Product Type</label>
        <select name="product_type" id="product_type" required>
            <option value="ohk_ohk_soojuspumbad">Õhk-õhk soojuspumbad</option>
            <option value="ohk_vesi_soojuspumbad">Õhk-vesi soojuspumbad</option>
            <option value="Maasoojuspumbad">Maasoojuspumbad</option>
            <option value="Pelletikatlad-kaminad">Pelletikatlad ja kaminad</option>
            <option value="Keskkuttepliidid_ja_kaminad">Keskküttepliidid ja kaminad</option>
        </select>
    </div>

    {{-- NAME --}}
    <div>
        <label for="name">Product Name</label>
        <input type="text" name="name" id="name" value="{{ old('name') }}" required>
    </div>

    {{-- DESCRIPTION --}}
    <div>
        <label for="description">Description</label>
        <textarea name="description" rows="8">{{ old('description') }}</textarea>
    </div>

    {{-- POWER --}}
    <div>
        <label for="power">Power</label>
        <input type="text" name="power" value="{{ old('power') }}">
    </div>

    {{-- PRODUCT IMAGE --}}
    <div>
        <label for="product_img">Product Image</label>
        <input type="file" name="product_img" accept="image/*">
    </div>

    {{-- BRAND IMAGE --}}
    <div>
        <label for="brand_img">Brand Image (logo)</label>
        <input type="file" name="brand_img" accept="image/*">
        <small>Logo salvestatakse brändile (kasutatakse kõigil sama brändi toodetel)</small>
    </div>

    <button type="submit">Add Product</button>
</form>

<hr>

{{-- LOGOUT --}}
<form action="{{ route('logout') }}" method="POST">
    @csrf
    <button type="submit">Logout</button>
</form>

<hr>

{{-- PRODUCTS LIST --}}
<section class="tootesektsioon">
<div class="tootevalikud">

@if($products->isEmpty())
    <p>Tooteid ei leitud</p>
@else

@foreach($products as $product)
<div class="tootediv">

    <div class="tooteaktiivala">

        <div class="tekstid">
            <h2>{{ $product->name }}</h2>

            <p>{!! nl2br(e($product->description)) !!}</p>

            <h3>
                Võimsus:
                <span style="font-weight:400">{{ $product->power }}</span>
            </h3>

            {{-- ACTIONS --}}
            <form action="{{ route('admin.product.delete', $product->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button onclick="return confirm('Kustutan toote?')">Eemalda</button>
            </form>

            <a href="{{ route('admin.product.edit', $product->id) }}">
                <button>Muuda</button>
            </a>

            {{-- BRAND LOGO --}}
           @if($product->brand && $product->brand->logo)
    <div class="brandImg" style="margin-top:10px">
        <img
            class="brand"
            src="{{ asset('storage/' . $product->brand->logo) }}"
            alt="{{ $product->brand->name }} logo"
            style="max-width:120px">
    </div>
@endif
        </div>

        {{-- PRODUCT IMAGE --}}
        <div class="productImg">
            @if($product->product_img)
                <img
                    class="tooteImg"
                    src="{{ asset('storage/' . $product->product_img) }}"
                    alt="{{ $product->name }}">
            @endif
        </div>

    </div>

</div>
@endforeach
@endif

</div>
</section>

</body>
</html>


