<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Intervention\Image\ImageManager;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Drivers\Gd\Driver;

class AdminController extends Controller
{


    // Show the admin dashboard page
    public function dashboard()
    {
        $products = Product::orderBy('id', 'desc')->get();

    // Return the view and pass the products
    return view('admin.dashboard', compact('products'));
    }



    
    
    
    
    
    
    
    
    // Store a new product in the database
    public function storeProduct(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'brandname' => 'required|in:ES,Bosch,Midea,Mitsubishi Electric,Alpha-innotec,Muubrandname,Samsung',
            'product_type' => 'required|in:ohk_ohk_soojuspumbad,ohk_vesi_soojuspumbad,Maasoojuspumbad,Katlad,Keskküttepliidid,Pelletikaminad',
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'power' => 'nullable|string|max:255',
            'product_img' => 'nullable|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:10048',
            'brand_img' => 'nullable|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:10048',
        ]);

        $productImgPath = null;
        // Handle product image upload and resizing
        if ($request->hasFile('product_img')) {


            
    
            // Save new product image with timestamp and original filename
            $productImgPath = $this->storeImage($request->file('product_img'), 'product_images');
        
           // Resize the brand image after upload
           $this->resizeImage($productImgPath, 450);   // Resize to 150px width
        
        }

        $brandImgPath = null;
        // Handle product image upload and resizing
        if ($request->hasFile('brand_img')) {
    
            // Save new product image with timestamp and original filename
            $brandImgPath = $this->storeImage($request->file('brand_img'), 'brand_images');
        

            // Resize the brand image after upload
            $this->resizeImage($brandImgPath, 150);   // Resize to 150px width
        
        }


        // Save the product with the image path in the database
        // Create a new product
        Product::create([
            'brandname' => $request->input('brandname'),
            'product_type' => $request->input('product_type'),
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'power' => $request->input('power'),
            'product_img' => $productImgPath,
            'brand_img' => $brandImgPath,
        ]);

        // Redirect back to dashboard with a success message
        return redirect()->route('admin.dashboard')->with('success', 'Product added successfully!');
    }







    public function delete($id)
    {
        // Find the product by its ID
        $product = Product::findOrFail($id);

         // Delete the old product image if it exists
         if ($product->product_img) {
            // Get the relative path from the database
            $product_img_path = $product->product_img; //
    
            // Check if the old image exists
            if (Storage::disk('public')->exists($product_img_path)) {
                Log::info("Deleting product image: " . $product_img_path);
                Storage::disk('public')->delete($product_img_path);
            } else {
                Log::warning("Product image not found: " . $product_img_path);
            }
        }
       
            if ($product->brand_img) {
                $brand_img_path = $product->brand_img;
              
                if (Storage::disk('public')->exists($brand_img_path)) {
                    // Log the file path before deleting
                    Log::info("Deleting brand image: " . $brand_img_path);
                    Storage::disk('public')->delete($brand_img_path);
                } else {
                    Log::warning("Brand image not found: " . $brand_img_path);
                }
            }
        // Delete the product
        $product->delete();
    
        // Redirect back to the dashboard with a success message
        return redirect()->route('admin.dashboard')->with('success', 'Product removed successfully!');
    }





    
    
    
    public function edit($id)
{
    // Find the product by its ID
    $product = Product::findOrFail($id);

    // Return the edit view with the product
    return view('admin.edit-product', compact('product'));
}







public function update(Request $request, $id)
{
    // Validate request data
    $request->validate([
        'brandname' => 'required|string|max:255',
        'product_type' => 'required|string|max:255',
        'name' => 'required|string|max:255',
        'description' => 'nullable|string',
        'power' => 'nullable|string',
        'product_img' => 'nullable|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:10048',
        'brand_img' => 'nullable|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:10048',
    ]);

    // Find the product by ID
    $product = Product::findOrFail($id);

    // Update product data
    $product->brandname = $request->brandname;
    $product->product_type = $request->product_type;
    $product->name = $request->name;
    $product->description = $request->description;
    $product->power = $request->power;

    // Handle product image upload and resizing
    if ($request->hasFile('product_img')) {
        // Delete old product image if it exists
        if ($product->product_img) {
            $this->deleteOldImage($product->product_img);
        }

        // Save new product image with timestamp and original filename
        $productImgPath = $this->storeImage($request->file('product_img'), 'product_images');
        $product->product_img = $productImgPath;

        // Resize the product image after upload
        $this->resizeImage($productImgPath, 450);  // Resize to 450px width
    }

    // Handle brand image upload and resizing
    if ($request->hasFile('brand_img')) {
        // Delete old brand image if it exists
        if ($product->brand_img) {
            $this->deleteOldImage($product->brand_img);
        }

        // Save new brand image with timestamp and original filename
        $brandImgPath = $this->storeImage($request->file('brand_img'), 'brand_images');
        $product->brand_img = $brandImgPath;

        // Resize the brand image after upload
        $this->resizeImage($brandImgPath, 150);  // Resize to 150px width
    }




    // Save the updated product
    $product->save();

    // Redirect back to the dashboard with a success message
    return redirect()->route('admin.dashboard')->with('success', 'Product updated successfully!');
}






// Helper method to delete old images
private function deleteOldImage($imagePath)
{
    if (Storage::disk('public')->exists($imagePath)) {
        Log::info("Deleting image: " . $imagePath);
        Storage::disk('public')->delete($imagePath);
    } else {
        Log::warning("Image not found: " . $imagePath);
    }
}




// Helper method to store images with timestamp
private function storeImage($image, $directory)
{
    $originalName = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME); // Get filename without extension
    $extension = $image->getClientOriginalExtension(); // Get file extension

    // Create a base name for the image (e.g., product_name_color)
    $baseFilename = strtolower(str_replace(' ', '_', $originalName)); // Replace spaces with underscores and make lowercase

    // Generate a unique identifier (you could use a counter or a random number)
    $counter = 1;
    $filename = $baseFilename . '_' . $counter . '.' . $extension;

    // Ensure the filename is unique by checking if it already exists in the storage directory
    while (Storage::disk('public')->exists($directory . '/' . $filename)) {
        $counter++;
        $filename = $baseFilename . '_' . $counter . '.' . $extension; // Increment the counter
    }
    // Store the image with the unique filename
    return $image->storeAs($directory, $filename, 'public');
}





// Helper method to resize images
private function resizeImage($imagePath, $width)
{
    $manager = new ImageManager(new Driver); // Use default driver (GD or Imagick)

    // Load the image
    $image = $manager->read(public_path('storage/' . $imagePath));

    // Resize the image while maintaining aspect ratio
    $image->scale(width: $width);

    // Save the resized image (overwrite the original file)
    $image->save(public_path('storage/' . $imagePath));
}










}

