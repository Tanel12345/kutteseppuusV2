<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'location',
        'description',
        'system_type',
        'brand',
        'is_active'
    ];

    public function images()
    {
        return $this->hasMany(WorkImage::class)->orderBy('sort_order');
    }
}
