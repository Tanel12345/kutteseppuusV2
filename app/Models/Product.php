<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    // Define the table name if it differs from the model name (Laravel uses plural by default)
    // protected $table = 'products';

    // Specify which attributes can be mass-assigned (for `create`, `update` methods)
    protected $fillable = [
        'brandname',
        'product_type',
        'name',
        'description',
        'power',
        'product_img',
        'brand_img',
    ];

    const BRAND_NAMES = ['ES', 'Bosch', 'Midea', 'Mitsubishi Electric', 'Alpha-innotec', 'Muubrandname'];
    const PRODUCT_TYPES = ['ohk_ohk_soojuspumbad', 'ohk_vesi_soojuspumbad', 'Maasoojuspumbad', 'Katlad', 'Keskküttepliidid', 'Pelletikaminad'];

    // Optional: Method to validate brand names
    public static function isValidBrand($brand)
    {
        return in_array($brand, self::BRAND_NAMES);
    }

    // Optional: Method to validate product types
    public static function isValidProductType($type)
    {
        return in_array($type, self::PRODUCT_TYPES);
    }
}
