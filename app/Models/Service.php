<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Service extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name_ar',
        'name_en',
        'description_ar',
        'description_en',
        'featured_image'
    ];

    public function getFeaturedImageAttribute($value)
    {
        return $value ? Storage::url($value) : 'https://bulma.io/images/placeholders/1280x960.png';
    }
}
