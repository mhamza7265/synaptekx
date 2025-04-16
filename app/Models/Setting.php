<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $table = 'settings';
    protected $fillable = ['primary_color', 'secondary_color', 'site_title', 'site_logo', 'favicon', 'x_link', 'instagram_link', 'facebook_link', 'linkedin_link', 'contact_form_title', 'contact_form_subtitle'];
}
