<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Diamond extends Model
{
    use HasFactory;

    protected $table = 'diamonds';

    protected $fillable = [
        'stoneType',
        'diamond_category',
        'lab',
        'name',
        'process',
        'slug',
        'product_id',
        'shape',
        'color_category',
        'd_to_z_selection',
        'general_options',
        'fancy_color',
        'fancy_intensity',
        'treated_color',
        'price_per_carat',
        'stone_user_price',
        'stone_wholesaler_price',
        'size_type',
        'stone_clarity',
        'stone_carat',
        'natts',
        'cut',
        'polish',
        'symmetry',
        'link',
        'fluorescence',
        'length',
        'width',
        'depth',
        'table',
        'terms',
        'remarks',
        'generalSize',
        'stone_image',
        'created_at',
        'updated_at',
    ];

    // Append additional fields to the model
    protected $appends = ['full_stone_image'];

    // Accessor for full stone image URL
    public function getFullStoneImageAttribute()
    {
        return url(asset('storage/' . $this->attributes['stone_image']));
    }

    // Automatically generate the slug when creating a diamond
    protected static function booted()
    {
        static::creating(function ($diamond) {
            $diamond->slug = static::generateUniqueSlug($diamond->name);
        });

        // Uncomment this if you want to regenerate the slug upon updating the name
        // static::updating(function ($diamond) {
        //     if ($diamond->isDirty('name')) {
        //         $diamond->slug = static::generateUniqueSlug($diamond->name);
        //     }
        // });
    }

    // Slug generation method
    protected static function generateUniqueSlug($name)
    {
        $slug = Str::slug($name);
        $count = static::whereRaw("slug RLIKE '^{$slug}(-[0-9]+)?$'")->count();

        return $count ? "{$slug}-{$count}" : $slug;
    }

    // Relationships
    public function cartItems()
    {
        return $this->morphMany(CartItem::class, 'product');
    }

    public function orderItems()
    {
        return $this->morphMany(OrderItem::class, 'product');
    }

    public function reviews()
    {
        return $this->morphMany(Review::class, 'reviewable', 'product_type', 'product_id');
    }
}
