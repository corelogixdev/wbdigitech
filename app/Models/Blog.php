<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
     protected $fillable = ['slug','title', 'content', 'image', 'meta_title','meta_description','meta_keywords'];
}
