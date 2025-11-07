<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Request;



Route::get('/privaatsuspoliitika' , function () {
return view('pages.privaatsuspoliitika');
})->name('privaatsuspoliitika');

Route::get('/cache-optimize', function () {
    // Turvakontroll – lubatud ainult sinu IP-l ja ainult productionis
    abort_unless(app()->isProduction() && in_array(Request::ip(), ['85.253.172.130']), 403);

    // Laravel 11 jaoks (Laravel 12 puhul võid kasutada Artisan::call('optimize:cache'))
    Artisan::call('config:cache');
    Artisan::call('route:cache');
    Artisan::call('view:cache');
    Artisan::call('event:cache');

    return nl2br(e("✅ Cache built successfully!\n\n" . Artisan::output()));
});

Route::get('/cache-clear', function () {
    // Turvakontroll – lubatud ainult sinu IP-l ja ainult productionis
    abort_unless(app()->isProduction() && in_array(Request::ip(), ['85.253.172.130']), 403);

    // Laravel 11 jaoks (Laravel 12 puhul võid kasutada Artisan::call('optimize:clear'))
    Artisan::call('optimize:clear');

    return nl2br(e("🧹 All caches cleared!\n\n" . Artisan::output()));
});




Route::controller(PageController::class)->group(function () {
    
    Route::get('/', 'index')->name('index');
    Route::get('/soojuspumpade-paigaldus', 'soojuspumpadePaigaldus')->name('soojuspumpade-paigaldus');
    Route::get('/poranda-ja-radiaatorkute.', 'porandaJaRadiaatorkute')->name('poranda-ja-radiaatorkute');
    Route::get('/kutteautomaatika', 'milleksKutteautomaatika')->name('milleks-kutteautomaatika');
    Route::get('/kuidas-saasta-kuttekuludelt', 'kuidasSaastaKuttekuludelt')->name('kuidas-saasta-kuttekuludelt');
    Route::get('/kuttesusteemi-hooldus', 'küttesüsteemiHooldus')->name('kuttesusteemi-hooldus');


    Route::get('/ohksoojuspumbad', 'ohkSoojuspumbad')->name('ohksoojuspumbad.index');
    Route::get('/ohksoojuspumbad/{brandname}', 'showBrandPage')->name('ohk_ohk_soojuspumbad.brand');

    
    Route::get('/ohk-vesi-soojuspumbad', 'ohkVesiSoojuspumbad')->name('ohk-vesi-soojuspumbad.index');
    Route::get('/ohk-vesi-soojuspumbad/{brandname}', 'showOhkVesiBrandPage')->name('ohk_vesi_soojuspumbad.brand');

    Route::get('/maasoojuspumbad', 'maasoojuspumbad')->name('maasoojuspumbad.index');
    Route::get('/maasoojuspumbad/{brandname}', 'showMaasoojusBrandPage')->name('maasoojuspumbad.brand');
  
    Route::get('/pelletikatlad-kaminad', 'pelletikatladJaKaminad')->name('pelletikatladJaKaminad.index');
   
    Route::get('/keskkyttepliidid-kaminad', 'keskkyttepliididJaKaminad')->name('keskkyttepliididJaKaminad.index');
  

});

Route::controller(AuthController::class)->group(function () {
    
    Route::get('/login', 'showLoginForm')->name('login');
    Route::post('/login', 'login')->middleware('throttle:3,1');
    Route::post('/logout', 'logout')->name('logout');

});



Route::controller(ContactController::class)->group(function () {
    Route::post('/contact',  'sendMail')->name('contact.send');
    Route::get('/taname', 'taname')->name('taname');

});

// Admin Dashboard
Route::middleware(['auth'])->group(function () {
    
   Route::get('/admin', [AdminController::class, 'dashboard'])->name('admin.dashboard');
   // Product form submission route
   Route::post('/admin/products', [AdminController::class, 'storeProduct'])->name('admin.products.store');
   // Route to delete a product
    Route::delete('/admin/product/{id}', [AdminController::class, 'delete'])->name('admin.product.delete');

    // Route to edit a product (show the edit form)
    Route::get('/admin/product/{id}/edit', [AdminController::class, 'edit'])->name('admin.product.edit');
    // Update product (edit existing product)
    Route::put('/admin/products/{id}', [AdminController::class, 'update'])->name('admin.products.update');

});