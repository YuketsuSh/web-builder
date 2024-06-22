<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Footer;
use App\Models\SocialMediaLink;
use App\Models\UsefulLink;

class FooterSeeder extends Seeder
{
    public function run()
    {
        $footer = Footer::create([
            'title' => 'Default Footer Title',
            'content' => 'Default footer content goes here.',
            'logo' => 'path/to/default/logo.png',
            'description' => 'This is the default footer description.',
        ]);

        $socialMediaLinks = [
            ['name' => 'Facebook', 'url' => 'https://www.facebook.com'],
            ['name' => 'Twitter', 'url' => 'https://www.twitter.com'],
            ['name' => 'Instagram', 'url' => 'https://www.instagram.com'],
        ];

        foreach ($socialMediaLinks as $link) {
            SocialMediaLink::create($link);
        }

        $usefulLinks = [
            ['name' => 'Home', 'url' => '/'],
            ['name' => 'About Us', 'url' => '/about'],
            ['name' => 'Contact', 'url' => '/contact'],
        ];

        foreach ($usefulLinks as $link) {
            UsefulLink::create($link);
        }
    }
}
