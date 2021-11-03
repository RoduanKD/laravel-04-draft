<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Post extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'content',
        'featured_image',
        'category_id',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * The tags that belong to the post.
     */
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    /**
     * Get the post's featured image.
     *
     * @param  string  $value
     * @return string
     */
    public function getFeaturedImageAttribute($value)
    {
        return $value ? Storage::url($value) : 'https://bulma.io/images/placeholders/1280x960.png';
    }
}
