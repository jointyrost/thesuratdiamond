<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use App\Models\Jewellery;
use App\Models\Ring;
use App\Models\Diamond;


class OrderItem extends Model
{
    use HasFactory;
    protected $fillable = [
        'order_id',
        'product_id',
        'quantity',
        'price',
        'product_type',
        'ring_size'
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    // Polymorphic relationship for product
    public function product(): MorphTo
    {
        return $this->morphTo();
    }
}
