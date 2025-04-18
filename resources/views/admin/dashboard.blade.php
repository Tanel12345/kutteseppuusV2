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

    <!-- Product Injection Form -->
    <h2>Add New Product</h2>
    <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="brandname">Brand Name</label>
            <select name="brandname" id="brandname" required>
                <option value="ES" {{ old('brandname') == 'ES' ? 'selected' : '' }}>ES</option>
                <option value="Bosch" {{ old('brandname') == 'Bosch' ? 'selected' : '' }}>Bosch</option>
                <option value="Midea" {{ old('brandname') == 'Midea' ? 'selected' : '' }}>Midea</option>
                <option value="Mitsubishi Electric" {{ old('brandname') == 'Mitsubishi Electric' ? 'selected' : '' }}>Mitsubishi Electric</option>
                <option value="Alpha-innotec" {{ old('brandname') == 'Alpha-innotec' ? 'selected' : '' }}>Alpha-innotec</option>
                <option value="Samsung" {{ old('brandname') == 'Samsung' ? 'selected' : '' }}>Samsung</option>
                <option value="Muubrandname" {{ old('brandname') == 'Muubrandname' ? 'selected' : '' }}>Muubrandname</option>
            </select>
        </div>

        <div>
            <label for="product_type">Product Type</label>
            <select name="product_type" id="product_type" required>
                <option value="ohk_ohk_soojuspumbad" {{ old('product_type') == 'ohk_ohk_soojuspumbad' ? 'selected' : '' }}>OHK Soojuspumbad</option>
                <option value="ohk_vesi_soojuspumbad" {{ old('product_type') == 'ohk_vesi_soojuspumbad' ? 'selected' : '' }}>OHK Vesi Soojuspumbad</option>
                <option value="Maasoojuspumbad" {{ old('product_type') == 'Maasoojuspumbad' ? 'selected' : '' }}>Maasoojuspumbad</option>
                <option value="Katlad" {{ old('product_type') == 'Katlad' ? 'selected' : '' }}>Katlad</option>
                <option value="Keskküttepliidid" {{ old('product_type') == 'Keskküttepliidid' ? 'selected' : '' }}>Keskküttepliidid</option>
                <option value="Pelletikaminad" {{ old('product_type') == 'Pelletikaminad' ? 'selected' : '' }}>Pelletikaminad</option>
            </select>
        </div>

        <div>
            <label for="name">Product Name</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}" size="150" required>
        </div>

        <div>
            <label for="description">Description</label>
            <textarea name="description" id="description" rows="14" style="width: 505px;" placeholder="Optional">{{ old('description') }}</textarea>
        </div>

        <div>
            <label for="power">Power</label>
            <input type="text" name="power" id="power" value="{{ old('power') }}" placeholder="Optional">
        </div>
       
        <div>
            <label for="product_img">Product Images</label>
            <input type="file" name="product_img" id="product_img" accept="image/*" placeholder="Optional"> </input>
        </div>
    
        
        

        <div>
            <label for="brand_img">Brand Image</label>
            <input type="file" name="brand_img" id="brand_img" accept="image/*" placeholder="Optional">
        </div>

        <button type="submit">Add Product</button>
    </form>

    <!-- Logout Form -->
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit">Logout</button>
    </form>

    

    <section class="tootesektsioon" id="tootesektsioon" >
        <div class="tootevalikud">
        @if($products->isEmpty())
            <p>Tooteid ei leitud</p>
        @else
           @foreach($products as $product)
           <div class="tootediv">
               <div class="tooteaktiivala">
                     <div class="tekstid">
                       <h2>{{ $product->name }}</h2> <!-- Product Title -->
                       <p>{!! nl2br(e(str_replace('\\n', "\n", $product->description))) !!}</p>
                       <h3>Toote võimsus: <span style="font-weight: 400;">{{ $product->power }}</span> </h3> <!-- Product Description -->

                       <!-- Remove Product Button -->
                    <form action="{{ route('admin.product.delete', $product->id) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Are you sure you want to remove this product?')">Eemalda toode</button>
                    </form>

                    <!-- Edit Product Button -->
                    <a href="{{ route('admin.product.edit', $product->id) }}">
                        <button>Muuda toodet</button>
                    </a>
                      
                       <div class="brandImg">
                         <div class="kusipakkumist">
                             <a href="/#form" title="Kontakt vormile">
                                 <h3>KÜSI LISAINFOT</h3>
                             </a>
                         </div>
                         @if($product->brand_img)
                             <img class="brand" src="{{ asset('storage/' . $product->brand_img) }}" alt="Toote nimi on {{ $product->name }}" />
                             @endif
                         </div>
                         
                     </div>
                     
                     
                   <!-- Product Image -->
                   
                   <!-- Product Image (secondary image if you want to show another image) -->
                     <div class="productImg">
                         @if($product->product_img)
                             <img class="tooteImg" src="{{ asset('storage/' . $product->product_img) }}" alt="Toote pilt: {{ $product->name }}" />
                         @endif
                     </div>
                    
                 </div>
                 <div class="taustapildid">
                     <img class="img" src="{{ Vite::asset('resources/images/taustad/taust5.png') }}" alt="Dekoratiivne taustapilt" />
                     <img class="img" src="{{ Vite::asset('resources/images/taustad/taust5.png') }}" alt="Dekoratiivne taustapilt" />
                     <img class="img" src="{{ Vite::asset('resources/images/taustad/taust5.png') }}" alt="Dekoratiivne taustapilt" />
                 </div>
             </div>
        @endforeach
        @endif
     </div>
     </section>
</body>
</html>