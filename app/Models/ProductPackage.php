<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductPackage extends Model
{
    use HasFactory;

    // Fillable properties for mass assignment
    protected $fillable = [
        'product_id',
        'package_type', // Type of packaging (e.g., box, bag)
        'weight', // Weight of the package
        'dimensions', // Dimensions of the package
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
