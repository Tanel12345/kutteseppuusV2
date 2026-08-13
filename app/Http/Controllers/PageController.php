<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /* ===============================
     * ÜLDLEHED
     * =============================== */

    public function index(Request $request)
    {
        $product = $request->query('product');
        return view('pages.index', compact('product'));
    }
    public function kuttesusteemideEhitus()
    {
        return view('pages.kuttesusteemide_ehitus');
    }

    public function soojuspumpadePaigaldus()
    {
        return view('pages.soojuspumpade_paigaldus');
    }

    public function kuttesusteemiVesi()
    {
        return view('pages.kuttesusteemiVesi.kuttesusteemiVesi');
    }

    public function demineraliseerimine()
    {
        return view('pages.kuttesusteemiVesi.demineraliseerimine');
    }

    public function inhibiitorid()
    {
        return view('pages.kuttesusteemiVesi.inhibiitorid');
    }
    public function hooldusJaRemont()
    {
        return view('pages.hooldusJaRemont.hooldus_ja_remont');
    }
    public function soojuspumpadeHooldus()
    {
        return view('pages.hooldusJaRemont.soojuspumpade_hooldus');
    }
    public function soojuspumpadeRemont()
    {
        return view('pages.hooldusJaRemont.soojuspumpade_remont');
    }

public function kulmaringiDiagnostikaJaRemont()
    {
        return view('pages.hooldusJaRemont.kulmaringi_diagnostika_ja_remont');
    }

    public function kuttesusteemiPesu()
    {
        return view('pages.hooldusJaRemont.kuttesusteemi_labipesu');
    }

    public function kuttesusteemideHooldus()
    {
        return view('pages.hooldusJaRemont.kuttesusteemide_hooldus');
    }

    public function tahkekutteseadmed()
    {
        return view('pages.tahkekutteseadmed.tahkekutteseadmed');
    }

    public function porandaJaRadiaatorkute()
    {
        return view('pages.poranda_ja_radiaatorkute');
    }

    public function milleksKutteautomaatika()
    {
        return view('pages.milleks_kutteautomaatika');
    }
     public function kuidasSaastaKuttekuludelt()
    {
        return view('pages.kuidas_saasta_kuttekuludelt');
    }
 

    /* ===============================
     * UNIVERSAALNE SOOJUSPUMBADE LIST
     * =============================== */
    /**
     * 
     * 
     * URL:
     * /soojuspumbad/{type}
     * /soojuspumbad/{type}?brand=samsung
     */
    public function soojuspumbadIndex()
    {
        return view('pages.soojuspumbad');
    }

public function soojuspumbad(Request $request, string $type)
{
    // SEO slug → sisemine product_type
    $dbType = str_replace('-', '_', $type);
                                                    

    $brandSlug = $request->query('brand');

    $products = Product::with('brand')
        ->where('product_type', $dbType)
        ->when($brandSlug, function ($q) use ($brandSlug) {
            $q->whereHas('brand', fn ($b) => $b->where('slug', $brandSlug));
        })
        ->get();

    $brands = Brand::whereHas('products', function ($q) use ($dbType) {
            $q->where('product_type', $dbType);
        })
        ->get(['id','name','slug','logo']);

    return view("pages.soojuspumbad.$dbType", [
        'products' => $products,
        'brands'   => $brands,
        'type'     => $dbType,
        'typeSlug' => $type, // SEO-URL jaoks, kui vaja
    ]);
}



 public function brandPage(string $type, Brand $brand)
{
    // URL:
    // ohk-ohk-soojuspumbad
    //
    // DB + Blade:
    // ohk_ohk_soojuspumbad
    $viewType = str_replace('-', '_', $type);


    // Ainult selle tootja vastava tüübi tooted
    $products = $brand->products()
        ->where('product_type', $viewType)
        ->get();


    // Näiteks:
    //
    // pages.brand.midea.ohk_ohk_soojuspumbad
    // pages.brand.midea.ohk_vesi_soojuspumbad
    $view = "pages.brand.{$brand->slug}.{$viewType}";


    if (!view()->exists($view)) {
        abort(404);
    }


    return view($view, [
        'brand'     => $brand,
        'products'  => $products,
        'typeSlug'  => $type,
        'type'      => $viewType,
    ]);
}
    /* ===============================
     * TAHKEKÜTTESEADMED
     * =============================== */

    public function pelletikatladJaKaminad(Request $request)
    {
        $brandSlug = $request->query('brand');

        $products = Product::with('brand')
            ->where('product_type', 'pelletikatlad_kaminad')
            ->when($brandSlug, function ($q) use ($brandSlug) {
                $q->whereHas('brand', fn ($b) =>
                    $b->where('slug', $brandSlug)
                );
            })
            ->get();

        $brands = Brand::whereHas('products', function ($q) {
                $q->where('product_type', 'pelletikatlad_kaminad');
            })
            ->get(['id', 'name', 'slug', 'logo']);

        return view('pages.tahkekutteseadmed.pelletikatlad_ja_kaminad', compact('products', 'brands'))
    ->with('pageRoute', 'pelletikatladJaKaminad.index');
    }




    public function keskkuttepliididJaKaminad(Request $request)
    {
        $brandSlug = $request->query('brand');

        $products = Product::with('brand')
            ->where('product_type', 'keskkuttepliidid_ja_kaminad')
            ->when($brandSlug, function ($q) use ($brandSlug) {
                $q->whereHas('brand', fn ($b) =>
                    $b->where('slug', $brandSlug)
                );
            })
            ->get();

        $brands = Brand::whereHas('products', function ($q) {
                $q->where('product_type', 'keskkuttepliidid_ja_kaminad');
            })
            ->get(['id', 'name', 'slug', 'logo']);

       return view('pages.tahkekutteseadmed.keskkuttepliidid_ja_kaminad', compact('products', 'brands'))
    ->with('pageRoute', 'keskkuttepliididJaKaminad.index');
    }

//Vanade brandpagede 301 redirect

    public function legacyBrandPage(Brand $brand, Request $request)
{
    $type = $request->query('type');

    $allowedTypes = [
        'ohk-ohk-soojuspumbad',
        'ohk-vesi-soojuspumbad',
        'maasoojuspumbad',
    ];


    if (!$type || !in_array($type, $allowedTypes, true)) {
        abort(404);
    }


    return redirect()->route('brand.page', [
        'type'  => $type,
        'brand' => $brand->slug,
    ], 301);
}
}