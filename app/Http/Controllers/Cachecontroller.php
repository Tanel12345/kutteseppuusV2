<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class Cachecontroller extends Controller
{
     public function cacheoptimize()
    {
       
        // Turvakontroll – lubatud ainult sinu IP-l ja ainult productionis
    abort_unless(app()->isProduction() && in_array(Request::ip(), ['85.253.172.130']), 403);

    // Laravel 11 jaoks (Laravel 12 puhul võid kasutada Artisan::call('optimize:cache'))
    Artisan::call('config:cache');
    Artisan::call('route:cache');
    Artisan::call('view:cache');
    Artisan::call('event:cache');

    return nl2br(e("✅ Cache built successfully!\n\n" . Artisan::output()));
    }

    public function cacheclear()
    {
       
    // Turvakontroll – lubatud ainult sinu IP-l ja ainult productionis
    abort_unless(app()->isProduction() && in_array(Request::ip(), ['85.253.172.130']), 403);

    // Laravel 11 jaoks (Laravel 12 puhul võid kasutada Artisan::call('optimize:clear'))
    Artisan::call('optimize:clear');

    return nl2br(e("🧹 All caches cleared!\n\n" . Artisan::output()));
    }
}
