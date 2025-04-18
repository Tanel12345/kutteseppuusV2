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

    public function soojuspumpadePaigaldus()
    {
       
        return view('pages.soojuspumpadePaigaldus');
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
    public function küttesüsteemiHooldus()
    {
       
        //return view('pages.kuttesusteemiHooldus');
    }




    //Õhksoojuspumbad

    public function ohkSoojuspumbad(Request $request){
    $brand = $request->query('brand'); // Get brand from URL query

    // Allowed brands
    $allowedBrands = ['midea-ohk-ohk-soojuspumbad', 'bosch-ohk-ohk-soojuspumbad','samsung-ohk-ohk-soojuspumbad'];

    if ($brand && in_array($brand, $allowedBrands)) {
        // Fetch only products of the allowed brand
        $products = Product::where('product_type', 'ohk_ohk_soojuspumbad')
                           ->where('brandname', str_replace('-ohk-ohk-soojuspumbad', '', $brand))
                           ->get();
    } else {
        // Fetch all products
        $products = Product::where('product_type', 'ohk_ohk_soojuspumbad')->get();
    }
    //Brandbox idele
    $brands = [
        ['title' => 'midea-ohk-ohk-soojuspumbad', 'image' => 'resources/images/logod/Midea_logo.webp', 'route' => 'ohksoojuspumbad.index'],
        ['title' => 'bosch-ohk-ohk-soojuspumbad', 'image' => 'resources/images/logod/bosch.png', 'route' => 'ohksoojuspumbad.index'],
        ['title' => 'samsung-ohk-ohk-soojuspumbad', 'image' => 'resources/images/vaikesed/samsung/samsunglogo.png', 'route' => 'ohksoojuspumbad.index']
        // Add more brands here with different routes if needed
    ];
    // Pass products to the view
    return view('pages.ohksoojuspumbad', compact('products', 'brands'));
}


public function showBrandPage($brandname)
    {
        $alowedBrands1 = ['midea-ohk-ohk-soojuspumbad', 'bosch-ohk-ohk-soojuspumbad', 'samsung-ohk-ohk-soojuspumbad'];
        if($brandname && in_array($brandname, $alowedBrands1)){

            if($brandname == 'midea-ohk-ohk-soojuspumbad'){
                return view('pages.mideapages.mideaOhkOhkSoojuspumbad');
            }elseif ($brandname == 'bosch-ohk-ohk-soojuspumbad') {
            return view('pages.boschpages.boschOhkOhkSoojuspumbad');
        }elseif ($brandname == 'samsung-ohk-ohk-soojuspumbad') {
            return view('pages.samsungpages.samsungOhkOhkSoojuspumbad');
        }
    }
        // If the brand is not allowed, return a 404 page or custom error page
    return response()->view('errors.404', ["hello"], 404);
    }   
    
       

    


    //Õhkvesisoojuspumbad

    public function ohkVesiSoojuspumbad(Request $request)
{
    $brand = $request->query('brand'); // Get brand from URL query

    // Define allowed brands
    $allowedBrands = ['es-ohk-vesi-soojuspumbad', 'alpha-innotec-ohk-vesi-soojuspumbad', 'samsung-ohk-vesi-soojuspumbad', 'bosch-ohk-vesi-soojuspumbad'];

    
    // Fetch products based on brand filter
    if ($brand && in_array($brand, $allowedBrands)) {
        $products = Product::where('product_type', 'ohk_vesi_soojuspumbad')
                           ->where('brandname', str_replace('-ohk-vesi-soojuspumbad', '', $brand))
                           ->orderBy('id', 'desc') // Order by id in descending order
                           ->get();
    } else {
        $products = Product::where('product_type', 'ohk_vesi_soojuspumbad')->get();
    }
    // Define brand images
    $brands = [
        ['title' => 'es-ohk-vesi-soojuspumbad', 'image' => 'resources/images/vaikesed/es/eslogo.webp', 'route' => 'ohk-vesi-soojuspumbad.index'],
        ['title' => 'alpha-innotec-ohk-vesi-soojuspumbad', 'image' => 'resources/images/vaikesed/alpha/alpha.png', 'route' => 'ohk-vesi-soojuspumbad.index'],
        ['title' => 'samsung-ohk-vesi-soojuspumbad', 'image' => 'resources/images/vaikesed/samsung/samsunglogo.png', 'route' => 'ohk-vesi-soojuspumbad.index'],
        ['title' => 'bosch-ohk-vesi-soojuspumbad', 'image' => 'resources/images/vaikesed/bosch/Bosch.png', 'route' => 'ohk-vesi-soojuspumbad.index']
        // Add more brands here with different routes if needed
    ];

    // Pass data to the view
    return view('pages.ohkVesiSoojuspumbad', compact('products', 'brands'));
    }



        public function showOhkVesiBrandPage($brandname)
        {
            $alowedBrands1 = ['es-ohk-vesi-soojuspumbad', 'alpha-innotec-ohk-vesi-soojuspumbad', 'samsung-ohk-vesi-soojuspumbad', 'bosch-ohk-vesi-soojuspumbad'];
            if($brandname && in_array($brandname, $alowedBrands1)){
    
                if($brandname == 'es-ohk-vesi-soojuspumbad'){
                    return view('pages.essoojuspumbad');
                }elseif ($brandname == 'alpha-innotec-ohk-vesi-soojuspumbad') {
                return view('pages.alphapages.alphainnotecOhkVesiSoojuspumbad');
            }elseif ($brandname == 'samsung-ohk-vesi-soojuspumbad') {
            return view('pages.samsungpages.samsungOhkVesiSoojuspumbad');
        }elseif ($brandname == 'bosch-ohk-vesi-soojuspumbad') {
            return view('pages.boschpages.boschOhkVesiSoojuspumbad');
        }
    }
             // If the brand is not allowed, return a 404 page or custom error page
        return response()->view('errors.404', ["hello"], 404);
        }




        //Maasoojuspumbad
    

        public function maasoojuspumbad(Request $request)
        {
            $brand = $request->query('brand'); // Get brand from URL query
        
            // Define allowed brands
            $allowedBrands = ['alpha-innotec-maasoojuspumbad', 'bosch-maasoojuspumbad'];
        
            
            // Fetch products based on brand filter
            if ($brand && in_array($brand, $allowedBrands)) {
                $products = Product::where('product_type', 'maasoojuspumbad')
                                   ->where('brandname', str_replace('-maasoojuspumbad', '', $brand))
                                   ->orderBy('id', 'desc') // Order by id in descending order
                                   ->get();
            } else {
                $products = Product::where('product_type', 'maasoojuspumbad')->get();
            }
            // Define brand images
            $brands = [
                ['title' => 'alpha-innotec-maasoojuspumbad', 'image' => 'resources/images/vaikesed/alpha/alpha.png', 'route' => 'maasoojuspumbad.index'],
                ['title' => 'bosch-maasoojuspumbad', 'image' => 'resources/images/vaikesed/bosch/Bosch.png', 'route' => 'maasoojuspumbad.index']
                // Add more brands here with different routes if needed
            ];
        
            // Pass data to the view
            return view('pages.Maasoojuspumbad', compact('products', 'brands'));
            }
        
        
        
                public function showmaasoojusBrandPage($brandname)
                {
                    $alowedBrands1 = ['alpha-innotec-maasoojuspumbad', 'bosch-maasoojuspumbad'];
                    if($brandname && in_array($brandname, $alowedBrands1)){
            
                        if ($brandname == 'alpha-innotec-maasoojuspumbad') {
                        return view('pages.alphapages.alphainnotecMaasoojuspumbad');
                    
                        }elseif ($brandname == 'bosch-maasoojuspumbad') {
                            return view('pages.boschpages.boschMaasoojuspumbad');
                        }
                    }
                     // If the brand is not allowed, return a 404 page or custom error page
                return response()->view('errors.404', ["hello"], 404);
                }
        
        
        

}

    


