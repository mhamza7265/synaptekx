<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    protected $table = 'services';

    protected $fillable = ['name', 'meta_title', 'meta_description', 'slug', 'sections', 'page_icon'];

    protected $casts = [
        'sections' => 'array',
    ];
}
