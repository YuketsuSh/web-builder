<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    protected $fillable = [
        'title', 'content', 'social_media_links', 'useful_links', 'logo', 'description',
    ];

    protected $casts = [
        'social_media_links' => 'array',
        'useful_links' => 'array',
    ];
}
