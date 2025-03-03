<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;


    Class PageController extends Controller
{
    public function index(Request $request)
    {
       
        $product = $request->query('product'); // Get product name from query parameter
        return view('pages.index', compact('product'));
    }

    public function soojuspumpadest()
    {
       
        return view('pages.soojuspumpadest');
    }

    public function porandaJaRadiaatorkute()
    {
       
        return view('pages.poranda-ja-radiaatorkute');
    }

    public function milleksKutteautomaatika()
    {
       
        return view('pages.milleks-kutteautomaatika');
    }

    public function kuidasSaastaKuttekuludelt()
    {
       
        return view('pages.kuidas-saasta-kuttekuludelt');
    }

    public function teenused()
    {
       
        return view('pages.teenused');
    }



    public function ohkSoojuspumbad(Request $request){
    $brand = $request->query('brand'); // Get brand from URL query

    // Allowed brands
    $allowedBrands = ['midea', 'bosch'];

    if ($brand && in_array($brand, $allowedBrands)) {
        // Fetch only products of the allowed brand
        $products = Product::where('product_type', 'ohk_ohk_soojuspumbad')
                           ->where('brandname', $brand)
                           ->get();
    } else {
        // Fetch all products
        $products = Product::where('product_type', 'ohk_ohk_soojuspumbad')->get();
    }

    // Pass products to the view
    return view('pages.ohksoojuspumbad', compact('products'));
}
       

    public function showBrandPage($brandname)
    {
        $alowedBrands1 = ['midea', 'bosch'];
        if($brandname && in_array($brandname, $alowedBrands1)){

            if($brandname == 'midea'){
                return view('pages.mideasoojuspumbad');
            }elseif ($brandname == 'bosch') {
            return view('pages.boschsoojuspumbad');
        }
    }
         // If the brand is not allowed, return a 404 page or custom error page
    return response()->view('errors.404', ["hello"], 404);
    }

   

}

    


