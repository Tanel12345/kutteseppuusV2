<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'brand_id',        // FK brands tabelisse
        'product_type',    // hetkel string, OK
        'name',
        'description',
        'power',
        'product_img',
        'brand_img',
    ];

    /**
     * Üks toode kuulub ühele brändile
     */
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

}
