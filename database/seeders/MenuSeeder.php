<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Menu;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Public-facing menu items for non-registered users

        Menu::create([
            'title' => 'Home',
            'text' => 'Main landing page',
            'position' => 1,
            'status' => 1,
            'parent_id' => 0
        ]);

        Menu::create([
            'title' => 'About Us',
            'text' => 'Learn more about our company',
            'position' => 2,
            'status' => 1,
            'parent_id' => 0
        ]);

        Menu::create([
            'title' => 'Services',
            'text' => 'Overview of services for advertisers and publishers',
            'position' => 3,
            'status' => 1,
            'parent_id' => 0
        ]);

        Menu::create([
            'title' => 'Advertisers',
            'text' => 'Information for advertisers',
            'position' => 4,
            'status' => 1,
            'parent_id' => 0
        ]);

        Menu::create([
            'title' => 'Publishers',
            'text' => 'Information for publishers',
            'position' => 5,
            'status' => 1,
            'parent_id' => 0
        ]);

        Menu::create([
            'title' => 'Pricing',
            'text' => 'Our pricing plans',
            'position' => 6,
            'status' => 1,
            'parent_id' => 0
        ]);

        Menu::create([
            'title' => 'Blog',
            'text' => 'Read our latest articles',
            'position' => 7,
            'status' => 1,
            'parent_id' => 0
        ]);

        Menu::create([
            'title' => 'Contact Us',
            'text' => 'Get in touch with us',
            'position' => 8,
            'status' => 1,
            'parent_id' => 0
        ]);
    }
}
