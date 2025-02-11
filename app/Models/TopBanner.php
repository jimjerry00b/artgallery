<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TopBanner extends Model
{
    use HasFactory;
    protected $fillable = [
        'top_banner_title',
        'top_banner_tagline',
        'top_banner_img',
    ];
}
