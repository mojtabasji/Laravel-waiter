<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'description',
        'category_id',
        'price',
        'dayOffer',
    ];

    protected $attributes = [
        'dayOffer' => 0,
        'category_id' => -1
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
