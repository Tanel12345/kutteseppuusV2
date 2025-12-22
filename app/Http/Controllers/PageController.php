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

    public function soojuspumpadePaigaldus()
    {
        return view('pages.soojuspumpade-paigaldus');
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

    public function kuttesusteemiPesu()
    {
        return view('pages.kuttesusteemideHooldus.kuttesusteemi-labipesu');
    }

    public function kuttesusteemideHooldus()
    {
        return view('pages.kuttesusteemideHooldus.kuttesusteemide-hooldus');
    }

    public function tahkekutteseadmed()
    {
        return view('pages.tahkekutteseadmed.tahkekutteseadmed');
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

    return view("pages.soojuspumbad.$type", [
        'products' => $products,
        'brands'   => $brands,
        'type'     => $dbType,
        'typeSlug' => $type, // SEO-URL jaoks, kui vaja
    ]);
}
    public function brandPage(Brand $brand, Request $request)
{
    $typeSlug = $request->query('type'); // SEO slug
    $dbType   = $typeSlug ? str_replace('-', '_', $typeSlug) : null;

    $products = $brand->products()
        ->when($dbType, fn ($q) =>
            $q->where('product_type', $dbType)
        )
        ->get();

    // 👉 dünaamiline blade tee
    $view = $typeSlug
        ? "pages.brand.{$brand->slug}.{$typeSlug}"
        : "pages.brand.{$brand->slug}.index";

    if (!view()->exists($view)) {
        abort(404);
    }

    return view($view, [
        'brand'    => $brand,
        'products' => $products,
        'typeSlug' => $typeSlug,
    ]);
}
    /* ===============================
     * TAHKEKÜTTESEADMED
     * =============================== */

    public function pelletikatladJaKaminad(Request $request)
    {
        $brandSlug = $request->query('brand');

        $products = Product::with('brand')
            ->where('product_type', 'Pelletikatlad_kaminad')
            ->when($brandSlug, function ($q) use ($brandSlug) {
                $q->whereHas('brand', fn ($b) =>
                    $b->where('slug', $brandSlug)
                );
            })
            ->get();

        $brands = Brand::whereHas('products', function ($q) {
                $q->where('product_type', 'Pelletikatlad_kaminad');
            })
            ->get(['id', 'name', 'slug', 'logo']);

        return view('pages.tahkekutteseadmed.pelletikatlad-ja-kaminad', compact('products', 'brands'))
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

       return view('pages.tahkekutteseadmed.keskkuttepliidid-ja-kaminad', compact('products', 'brands'))
    ->with('pageRoute', 'keskkuttepliididJaKaminad.index');
    }
}