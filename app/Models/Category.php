<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $fillable = [
        'name',
        'slug',
        'description',
        'parent_id',
        'featured',
        'menu',
        'image',
    ];

    protected $casts = [
        'parent_id' => 'integer',
        'featured' => 'boolean',
        'menu' => 'boolean',
    ];

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::slug($value, '-');
    }

    public function parent()
    {
        // Una categoria può essere figlia di una ed una sola categoria
        return $this->belongsTo(Category::class, 'parent_id');
    }

    public function children()
    {
        // Una categoria può essere padre di più categorie
        return $this->hasMany(Category::class, 'parent_id');
    }

    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_categories', 'category_id', 'product_id');
    }
}
