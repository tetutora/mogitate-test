<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
    use HasFactory;

    protected $fillable = [
        'season'
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'products_seasons', 'season_id', 'product_id');
    }
}
