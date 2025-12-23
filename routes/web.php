<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Cachecontroller;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\WorkController;
use Illuminate\Support\Facades\Route;






Route::get('/privaatsuspoliitika' , function () {
return view('pages.privaatsuspoliitika');
})->name('privaatsuspoliitika');







Route::controller(PageController::class)->group(function () {

    // Avaleht
    Route::get('/', 'index')->name('index');

    // Teenused / infod
    Route::get('/soojuspumpade-paigaldus', 'soojuspumpadePaigaldus')->name('soojuspumpade-paigaldus');
    Route::get('/kuttesusteemi-vesi', 'kuttesusteemiVesi')->name('kuttesusteemi-vesi');
    Route::get('/poranda-ja-radiaatorkute', 'porandaJaRadiaatorkute')->name('poranda-ja-radiaatorkute');
    Route::get('/kutteautomaatika', 'milleksKutteautomaatika')->name('milleks-kutteautomaatika');
    Route::get('/kuidas-saasta-kuttekuludelt', 'kuidasSaastaKuttekuludelt')->name('kuidas-saasta-kuttekuludelt');
  

    // ===== SOOJUSPUMBAD (UNIVERSAALNE) =====
    Route::get('/soojuspumbad', 'soojuspumbadIndex')
    ->name('soojuspumbad.index');

    // Näited:
    // /soojuspumbad/ohk_ohk_soojuspumbad
    // /soojuspumbad/ohk_vesi_soojuspumbad?brand=samsung
    // /soojuspumbad/maasoojuspumbad
    Route::get('/soojuspumbad/{type}', 'soojuspumbad')
        ->name('soojuspumbad.type');

    // ===== BRÄNDILEHT (ÜKS KÕIGILE) =====
    // Näited:
    // /tootja/samsung
    // /tootja/bosch?type=maasoojuspumbad
    Route::get('/tootja/{brand:slug}', 'brandPage')
        ->name('brand.page');

    // ===== TAHKEKÜTTESEADMED =====
    Route::get('/tahkekutteseadmed', 'tahkekutteseadmed')
        ->name('tahkekutteseadmed.index');

    Route::get('/pelletikatlad-kaminad', 'pelletikatladJaKaminad')
        ->name('pelletikatladJaKaminad.index');

    Route::get('/keskkuttepliidid-kaminad', 'keskkuttepliididJaKaminad')
        ->name('keskkuttepliididJaKaminad.index');

    // ===== HOOLDUS JA VESI =====
    Route::get('/kuttesusteemide-hooldus', 'kuttesusteemideHooldus')
        ->name('kuttesusteemide-hooldus');

    Route::get('/kuttesusteemi-labipesu', 'kuttesusteemiPesu')
        ->name('kuttesusteemi-labipesu');

    Route::get('/kuttevee-demineraliseerimine', 'demineraliseerimine')
        ->name('kuttevee-demineraliseerimine');

    Route::get('/kuttevee-inhibiitorid', 'inhibiitorid')
        ->name('kuttevee-inhibiitorid');
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

    //Workcontroller
    Route::get('/tehtud-tood', [WorkController::class, 'index'])
    ->name('works.index');

Route::get('/tehtud-tood/{slug}', [WorkController::class, 'show'])
    ->name('works.show');

// Admin Dashboard
Route::middleware(['auth'])->group(function () {
    
   Route::get('/admin', [AdminController::class, 'dashboard'])->name('admin.dashboard');
   // Product form submission route
   Route::get('/admin/products', [AdminController::class, 'products'])->name('admin.products.index');
   // Product form submission route
   Route::post('/admin/products', [AdminController::class, 'storeProduct'])->name('admin.products.store');
   // Route to delete a product
    Route::delete('/admin/product/{id}', [AdminController::class, 'delete'])->name('admin.product.delete');

    // Route to edit a product (show the edit form)
    Route::get('/admin/product/{id}/edit', [AdminController::class, 'edit'])->name('admin.product.edit');
    // Update product (edit existing product)
    Route::put('/admin/products/{id}', [AdminController::class, 'update'])->name('admin.products.update');






     //Works

    Route::get('/admin/works', [AdminController::class, 'works'])
    ->name('admin.works.index');

Route::post('/admin/works', [AdminController::class, 'storeWork'])
    ->name('admin.works.store');
    Route::delete('/admin/works/{id}', [AdminController::class, 'deleteWork'])
    ->name('admin.works.delete');


    // edit formi avamine
Route::get('/admin/works/{id}/edit', [AdminController::class, 'editWork'])
    ->name('admin.works.edit');

// update (salvestamine)
Route::put('/admin/works/{id}', [AdminController::class, 'updateWork'])
    ->name('admin.works.update');

    // delete single image
Route::delete('/admin/works/image/{id}', [AdminController::class, 'deleteWorkImage'])
    ->name('admin.works.image.delete');
//sorteerib pildid
    Route::post('/admin/works/images/sort', [AdminController::class, 'sortWorkImages'])
    ->name('admin.works.images.sort');

      //  Cache maintenance (ADMIN ONLY)
    Route::get('/admin/cache-optimize', [Cachecontroller::class, 'cacheoptimize'])
        ->name('admin.cache.optimize');

    Route::get('/admin/cache-clear', [Cachecontroller::class, 'cacheclear'])
        ->name('admin.cache.clear');


});