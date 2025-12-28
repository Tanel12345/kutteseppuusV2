<?php

namespace App\Http\Controllers;
use App\Models\Work;
use App\Models\WorkImage;
use Illuminate\Support\Str;
use App\Models\Product;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;


class AdminController extends Controller
{
    // Dashboard
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    // Products list + form
    public function products()
    {
        $products = Product::with('brand')
            ->orderBy('id', 'desc')
            ->get();

        $brands = Brand::orderBy('name')->get();

        return view('admin.products.products', compact('products', 'brands'));
    }

    // Store product
    public function storeProduct(Request $request)
    {
        $request->validate([
            'brand_id' => 'required|exists:brands,id',
            'product_type' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'power' => 'nullable|string|max:255',
            'product_img' => 'nullable|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:10048',
        ]);

        $productImgPath = null;

        if ($request->hasFile('product_img')) {
            $productImgPath = $this->storeImage(
                $request->file('product_img'),
                'product_images'
            );

            $this->resizeImage($productImgPath, 450);
        }

        Product::create([
            'brand_id'     => $request->brand_id,
            'product_type' => $request->product_type,
            'name'         => $request->name,
            'description'  => $request->description,
            'power'        => $request->power,
            'product_img'  => $productImgPath,
        ]);

        return redirect()
            ->route('admin.products.index')
            ->with('success', 'Product added successfully!');
    }

    // Delete product
    public function delete($id)
    {
        $product = Product::findOrFail($id);

        if ($product->product_img) {
            $this->deleteOldImage($product->product_img);
        }

        $product->delete();

        return redirect()
            ->route('admin.products.index')
            ->with('success', 'Product removed successfully!');
    }

    // Edit product
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $brands  = Brand::orderBy('name')->get();

        return view('admin.products.edit_product', compact('product', 'brands'));
    }

    // Update product
    public function update(Request $request, $id)
{
    $request->validate([
        'brand_id' => 'required|exists:brands,id',
        'product_type' => 'required|string|max:255',
        'name' => 'required|string|max:255',
        'description' => 'nullable|string',
        'power' => 'nullable|string|max:255',
        'product_img' => 'nullable|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:10048',
        'brand_img' => 'nullable|mimes:jpeg,png,jpg,webp,avif|max:10048',
    ]);

    $product = Product::findOrFail($id);

    // --- PRODUCT DATA ---
    $product->brand_id     = $request->brand_id;
    $product->product_type = $request->product_type;
    $product->name         = $request->name;
    $product->description  = $request->description;
    $product->power        = $request->power;

    // --- PRODUCT IMAGE ---
    if ($request->hasFile('product_img')) {
        if ($product->product_img) {
            $this->deleteOldImage($product->product_img);
        }

        $productImgPath = $this->storeImage(
            $request->file('product_img'),
            'product_images'
        );

        $this->resizeImage($productImgPath, 450);
        $product->product_img = $productImgPath;
    }

    // --- BRAND IMAGE (LOGO) ---
    if ($request->hasFile('brand_img')) {
    $brand = Brand::findOrFail($request->brand_id);

    if ($brand->logo) {
        $this->deleteOldImage($brand->logo);
    }

    $brandImgPath = $this->storeImage(
        $request->file('brand_img'),
        'brand_images'
    );

    $this->resizeImage($brandImgPath, 150);

    // ⬇⬇⬇ SIIN ON KRIITILINE RIDA
    $brand->logo = $brandImgPath;

    $brand->save();
    }
    
$product->save();
    return redirect()
        ->route('admin.products.index')
        ->with('success', 'Product updated successfully!');
}
    // ===== HELPERS =====

    private function deleteOldImage($imagePath)
    {
        if (Storage::disk('public')->exists($imagePath)) {
            Log::info("Deleting image: " . $imagePath);
            Storage::disk('public')->delete($imagePath);
        }
    }

    private function storeImage($image, $directory)
    {
        $originalName = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
        $extension = $image->getClientOriginalExtension();

        $baseFilename = strtolower(str_replace(' ', '_', $originalName));
        $counter = 1;
        $filename = $baseFilename . '_' . $counter . '.' . $extension;

        while (Storage::disk('public')->exists($directory . '/' . $filename)) {
            $counter++;
            $filename = $baseFilename . '_' . $counter . '.' . $extension;
        }

        return $image->storeAs($directory, $filename, 'public');
    }

    private function resizeImage($imagePath, $width)
    {
        $manager = new ImageManager(new Driver);

        $image = $manager->read(public_path('storage/' . $imagePath));
        $image->scale(width: $width);
        $image->save(public_path('storage/' . $imagePath));
    }






    //Töö osa

public function works()
{
    $works = Work::with('images')
        ->orderByDesc('id')
        ->get();

    return view('admin.works.index', compact('works'));
}


public function storeWork(Request $request)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'location' => 'nullable|string|max:255',
        'description' => 'nullable|string',
        'system_type' => 'nullable|string|max:255',
        'brand' => 'nullable|string|max:255',
        'images.*' => 'image|mimes:jpg,jpeg,png,webp|max:20048',
    ]);

    /**
     * SEO-SAFE SLUG (vältib duplicate slug probleemi)
     */
    $baseSlug = Str::slug($request->title);
    $slug = $baseSlug;
    $counter = 1;

    while (Work::where('slug', $slug)->exists()) {
        $slug = $baseSlug . '-' . $counter++;
    }

    $work = Work::create([
        'title' => $request->title,
        'slug' => $slug,
        'location' => $request->location,
        'description' => $request->description,
        'system_type' => $request->system_type,
        'brand' => $request->brand,
        'is_active' => true,
    ]);

    /**
     * SALVESTA PILDID + SORT_ORDER
     */
    if ($request->hasFile('images')) {
        foreach ($request->file('images') as $index => $image) {

            $path = $this->storeImage($image, 'works');

            WorkImage::create([
                'work_id' => $work->id,
                'image_path' => $path,
                'sort_order' => $index,
            ]);
        }
    }

    return redirect()
        ->route('admin.works.index')
        ->with('success', 'Tehtud töö lisatud');
}





public function deleteWork($id)
{
    $work = Work::with('images')->findOrFail($id);

    /**
     * KUSTUTA PILDID KETTALT
     */
    foreach ($work->images as $image) {
        if ($image->image_path) {
            $this->deleteOldImage($image->image_path);
        }
    }

    /**
     * DB-st kustuvad work_images automaatselt (cascadeOnDelete)
     */
    $work->delete();

    return redirect()
        ->route('admin.works.index')
        ->with('success', 'Tehtud töö kustutatud');
}


public function editWork($id)
{
    $work = Work::with('images')->findOrFail($id);

    return view('admin.works.edit', compact('work'));
}



public function updateWork(Request $request, $id)
{
    $work = Work::with('images')->findOrFail($id);

    $validated = $request->validate([
        'title' => 'required|string|max:255',
        'location' => 'nullable|string|max:255',
        'description' => 'nullable|string',
        'system_type' => 'nullable|string|max:255',
        'brand' => 'nullable|string|max:255',
        'images.*' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:20048',
    ]);

    // SLUG ainult siis kui title muutus
    if ($validated['title'] !== $work->title) {
        $baseSlug = Str::slug($validated['title']);
        $slug = $baseSlug;
        $counter = 1;

        while (
            Work::where('slug', $slug)
                ->where('id', '!=', $work->id)
                ->exists()
        ) {
            $slug = $baseSlug . '-' . $counter++;
        }

        $work->slug = $slug;
    }

    // BASIC FIELDS
    $work->fill([
        'title' => $validated['title'],
        'location' => $validated['location'] ?? null,
        'description' => $validated['description'] ?? null,
        'system_type' => $validated['system_type'] ?? null,
        'brand' => $validated['brand'] ?? null,
    ]);

    $work->save();

    // UUTE PILTIDE LISAMINE (vanad jäävad alles)
    if ($request->hasFile('images')) {
        $startOrder = (int) ($work->images()->max('sort_order') ?? 0);

        foreach ($request->file('images') as $index => $image) {
            $path = $this->storeImage($image, 'works');

            WorkImage::create([
                'work_id' => $work->id,
                'image_path' => $path,
                'sort_order' => $startOrder + $index + 1,
                // 'alt_text' => ... (kui tahad automaatselt)
            ]);
        }
    }

    return redirect()
        ->route('admin.works.edit', $work->id) // soovitan tagasi samale editile
        ->with('success', 'Tehtud töö uuendatud');
}

public function deleteWorkImage($id)
{
    $image = WorkImage::findOrFail($id);

    // kustuta fail kettalt
    if ($image->image_path) {
        $this->deleteOldImage($image->image_path);
    }

    // kustuta DB rida
    $image->delete();

    return back()->with('success', 'Pilt kustutatud');
}


public function sortWorkImages(Request $request)
{
    $request->validate([
        'order' => 'required|array',
        'order.*' => 'integer|exists:work_images,id',
    ]);

    foreach ($request->order as $index => $imageId) {
        WorkImage::where('id', $imageId)->update([
            'sort_order' => $index
        ]);
    }

    return response()->json(['status' => 'ok']);
}


}
