<?php

namespace Database\Seeders;

use App\Models\Footer;
use Illuminate\Database\Seeder;

class FooterSeeder extends Seeder
{
    public function run()
    {
        Footer::create([
            'title' => 'Default Footer Title',
            'content' => 'Default Footer Content',
            'social_media_links' => [
                ['name' => 'Facebook', 'url' => 'https://facebook.com'],
                ['name' => 'Twitter', 'url' => 'https://twitter.com'],
            ],
            'useful_links' => [
                ['name' => 'Home', 'url' => '/'],
                ['name' => 'Contact', 'url' => '/contact'],
            ],
            'logo' => '/path/to/logo.png',
            'description' => 'This is the default description for the footer.',
        ]);
    }
}
