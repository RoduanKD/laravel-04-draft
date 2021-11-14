<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [ 'name_ar' , 'name_en' , 'descreption_ar' ,'descreption_en' , 'images'];

    public function getImagesAttribute($value)
    {
        return $value ? Storage::url($value) : 'https://bulma.io/images/placeholders/1280x960.png';
    }

}
