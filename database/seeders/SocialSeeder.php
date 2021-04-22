<?php

namespace Database\Seeders;

use App\Models\Admin\Social;
use Illuminate\Database\Seeder;

class SocialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Social::create([
            'user_id' => 1,
            'social_name' => 'facebook',
            'social_link' => '#',
            'icon_class' => 'fab fa-facebook-f',
            'followers' => '20K',
        ]);

        Social::create([
            'user_id' => 1,
            'social_name' => 'twitter',
            'social_link' => '#',
            'icon_class' => 'fab fa-twitter',
            'followers' => '10K',
        ]);

        Social::create([
            'user_id' => 1,
            'social_name' => 'youtube',
            'social_link' => '#',
            'icon_class' => 'fab fa-youtube',
            'followers' => '12K',
        ]);

        Social::create([
            'user_id' => 1,
            'social_name' => 'vimeo',
            'social_link' => '#',
            'icon_class' => 'fab fa-vimeo-v',
            'followers' => '20K',
        ]);

        Social::create([
            'user_id' => 1,
            'social_name' => 'dribbble',
            'social_link' => '#',
            'icon_class' => 'fab fa-dribbble',
            'followers' => '15K',
        ]);

        Social::create([
            'user_id' => 1,
            'social_name' => 'instagram',
            'social_link' => '#',
            'icon_class' => 'fab fa-instagram',
            'followers' => '18K',
        ]);

        Social::create([
            'user_id' => 1,
            'social_name' => 'behance',
            'social_link' => '#',
            'icon_class' => 'fab fa-behance',
            'followers' => '10K',
        ]);

        Social::create([
            'user_id' => 1,
            'social_name' => 'google',
            'social_link' => '#',
            'icon_class' => 'fab fa-google',
            'followers' => '20K',
        ]);


    }
}
