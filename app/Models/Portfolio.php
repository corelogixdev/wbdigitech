<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'category',
        'thumbnail',
        'client_overview',
        'services',
        'images',
        'website_link',
    ];

    protected $casts = [
        'services' => 'array',
        'images' => 'array',
    ];
}
