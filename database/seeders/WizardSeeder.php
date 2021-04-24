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
        Wizard::create([
            'trending_news_count' => 6,
            'world_news_count' => 4,
            'sport_news_count' => 3,
            'entertainment_news_count' => 3,
            'video_news_count' => 3,
            'news_per_page' => 8,
            'recent_news_count' => 3,
            'related_news_count' => 4,
            'popular_news_count' => 4,
            'search_result_count' => 8,
        ]);
    }
}
