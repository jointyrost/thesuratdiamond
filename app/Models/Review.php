<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = ['product_id', 'product_type', 'name', 'email', 'comment', 'rating'];

    // Polymorphic relationship with products
    public function reviewable()
    {
        return $this->morphTo(null, 'product_type', 'product_id');
    }
}
