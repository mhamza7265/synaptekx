<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = ['title', 'meta_title', 'meta_description', 'slug', 'sections'];

    protected $casts = [
        'sections' => 'array',
    ];
}
