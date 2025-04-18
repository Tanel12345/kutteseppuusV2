<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    @vite('resources/css/tootesektsioon.css')
</head>
<body>
    <h1>Welcome to the Admin Dashboard</h1>

    <!-- Success message -->
    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <!-- Error messages -->
    @if ($errors->any())
    <div style="color: red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <!-- Product Form (Add/Edit) -->
    <h2>{{ isset($product) ? 'Edit Product' : 'Add New Product' }}</h2>
    
    <form action="{{ isset($product) ? route('admin.products.update', $product->id) : route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @if(isset($product))
            @method('PUT') <!-- When updating, use PUT method -->
        @endif
        
        <div>
            <label for="brandname">Brand Name</label>
            <select name="brandname" id="brandname" required>
                <option value="ES" {{ old('brandname', $product->brandname ?? '') == 'ES' ? 'selected' : '' }}>ES</option>
                <option value="Bosch" {{ old('brandname', $product->brandname ?? '') == 'Bosch' ? 'selected' : '' }}>Bosch</option>
                <option value="Midea" {{ old('brandname', $product->brandname ?? '') == 'Midea' ? 'selected' : '' }}>Midea</option>
                <option value="Mitsubishi Electric" {{ old('brandname', $product->brandname ?? '') == 'Mitsubishi Electric' ? 'selected' : '' }}>Mitsubishi Electric</option>
                <option value="Alpha-innotec" {{ old('brandname', $product->brandname ?? '') == 'Alpha-innotec' ? 'selected' : '' }}>Alpha-innotec</option>
                <option value="Samsung" {{ old('brandname') == 'Samsung' ? 'selected' : '' }}>Samsung</option>
                <option value="Muubrandname" {{ old('brandname', $product->brandname ?? '') == 'Muubrandname' ? 'selected' : '' }}>Muubrandname</option>
            </select>
        </div>

        <div>
            <label for="product_type">Product Type</label>
            <select name="product_type" id="product_type" required>
                <option value="ohk_ohk_soojuspumbad" {{ old('product_type', $product->product_type ?? '') == 'ohk_ohk_soojuspumbad' ? 'selected' : '' }}>OHK Soojuspumbad</option>
                <option value="ohk_vesi_soojuspumbad" {{ old('product_type', $product->product_type ?? '') == 'ohk_vesi_soojuspumbad' ? 'selected' : '' }}>OHK Vesi Soojuspumbad</option>
                <option value="Maasoojuspumbad" {{ old('product_type', $product->product_type ?? '') == 'Maasoojuspumbad' ? 'selected' : '' }}>Maasoojuspumbad</option>
                <option value="Katlad" {{ old('product_type', $product->product_type ?? '') == 'Katlad' ? 'selected' : '' }}>Katlad</option>
                <option value="Keskküttepliidid" {{ old('product_type', $product->product_type ?? '') == 'Keskküttepliidid' ? 'selected' : '' }}>Keskküttepliidid</option>
                <option value="Pelletikaminad" {{ old('product_type', $product->product_type ?? '') == 'Pelletikaminad' ? 'selected' : '' }}>Pelletikaminad</option>
            </select>
        </div>

        <div>
            <label for="name">Product Name</label>
            <input type="text" name="name" id="name" value="{{ old('name', $product->name ?? '') }}" size="150" required>
        </div>

        <div>
            <label for="description">Description</label>
            <textarea name="description" id="description" rows="14" style="width: 505px;" placeholder="Optional">{{ old('description', $product->description ?? '') }}</textarea>
        </div>

        <div>
            <label for="power">Power</label>
            <input type="text" name="power" id="power" value="{{ old('power', $product->power ?? '') }}" placeholder="Optional">
        </div>

        <div>
            <label for="product_img">Product Image</label>
            <input type="file" name="product_img" id="product_img" accept="image/*">
            @if(isset($product) && $product->product_img)
                <img src="{{ asset('storage/' . $product->product_img) }}" alt="Product Image" style="max-width: 100px; margin-top: 10px;">
            @endif
        </div>

        <div>
            <label for="brand_img">Brand Image</label>
            <input type="file" name="brand_img" id="brand_img" accept="image/*">
            @if(isset($product) && $product->brand_img)
                <img src="{{ asset('storage/' . $product->brand_img) }}" alt="Brand Image" style="max-width: 100px; margin-top: 10px;">
            @endif
        </div>

        <button type="submit">{{ isset($product) ? 'Update Product' : 'Add Product' }}</button>
    </form>

    <!-- Logout Form -->
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit">Logout</button>
    </form>
</body>
</html>