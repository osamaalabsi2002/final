<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_products',
        'made_in',
        'price',
        'products_description',
        'uses',
        'image1',
        'image2',
        'image3',
        'image4'

    ];

    public function comments()
{
    return $this->hasMany(Comment::class);
}

}
