<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    protected $table = 'countries';
    protected $fillable = [
        'country_code',
        'country_name',
    ];
    public $timestamps = true;

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
