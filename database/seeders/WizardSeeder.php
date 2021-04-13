<?php

namespace Database\Seeders;

use App\Models\Admin\Wizard;
use Illuminate\Database\Seeder;

class WizardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Wizard::created([
            'trending_news_count' => 4,
            'sport_news_count' => 4,
            'entertainment_news_count' => 4,
            'video_news_count' => 4,
            'news_per_page' => 4,
            'recent_news_count' => 4,
            'related_news_count' => 4,
        ]);
    }
}
