<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'name',
        'para1',
        'comment',
        'heading',
        'para2',
        'image1',
        'image2',
        'para3',
        'category'
    ];
}
