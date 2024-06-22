<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    protected $fillable = [
        'logo', 'description',
    ];

    public function socialMediaLinks()
    {
        return $this->hasMany(SocialMediaLink::class);
    }

    public function usefulLinks()
    {
        return $this->hasMany(UsefulLink::class);
    }

}
