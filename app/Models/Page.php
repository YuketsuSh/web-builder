<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Page extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'slug',
        'display_in_nav'
    ];

    protected static function boot(){
        parent::boot();

        static::creating(function($page){
           $page->slug = Str::slug($page->title);
        });

        static::updating(function($page){
            $page->slug = Str::slug($page->title);
        });
    }
}
