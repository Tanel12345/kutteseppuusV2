<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;



Route::get('/privaatsuspoliitika' , function () {
return view('pages.privaatsuspoliitika');
})->name('privaatsuspoliitika');





Route::controller(PageController::class)->group(function () {
    
    Route::get('/', 'index')->name('index');
    Route::get('/teenused', 'teenused')->name('teenused');
    Route::get('/soojuspumpadest', 'soojuspumpadest')->name('soojuspumpadest');
    Route::get('/poranda-ja-radiaatorkute.', 'porandaJaRadiaatorkute')->name('poranda-ja-radiaatorkute');
    Route::get('/kutteautomaatika', 'milleksKutteautomaatika')->name('milleks-kutteautomaatika');
    Route::get('/kuidas-saasta-kuttekuludelt', 'kuidasSaastaKuttekuludelt')->name('kuidas-saasta-kuttekuludelt');
    Route::get('/ohksoojuspumbad', 'ohkSoojuspumbad')->name('ohksoojuspumbad.index');
    Route::get('/ohksoojuspumbad/{brandname}', 'showBrandPage')->name('ohksoojuspumbad.brand');
  


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