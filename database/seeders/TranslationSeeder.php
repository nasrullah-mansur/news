<?php

namespace Database\Seeders;

use App\Models\Admin\Translation;
use Illuminate\Database\Seeder;

class TranslationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Translation::create([
            'pl_one' => 'Breaking News',
            'sl_one' => 'Breaking News SL',
            'pl_two' => 'News Category',
            'sl_two' => 'News Category SL',
            'pl_three' => 'Follow Us',
            'sl_three' => 'Follow Us SL',
            'pl_four' => 'Join 456k Followers',
            'sl_four' => 'Join 456k Followers SL',
            'pl_five' => 'All News',
            'sl_five' => 'All News SL',
            'pl_six' => 'Trending News',
            'sl_six' => 'Trending News SL',
            'pl_seven' => 'World News',
            'sl_seven' => 'World News SL',
            'pl_eight' => 'Sport News',
            'sl_eight' => 'Sport News SL',
            'pl_nine' => 'Entertainment News',
            'sl_nine' => 'Entertainment News SL',
            'pl_ten' => 'Video News',
            'sl_ten' => 'Video News SL',
            'pl_eleven' => 'Most Viewed Post',
            'sl_eleven' => 'Most Viewed Post SL',
            'pl_twelve' => 'Quick Links',
            'sl_twelve' => 'Quick Links SL',
            'pl_thirteen' => 'Categories',
            'sl_thirteen' => 'Categories SL',
            'pl_fourteen' => '',
            'sl_fourteen' => '',
            'pl_fifteen' => '',
            'sl_fifteen' => '',
            'pl_sixteen' => '',
            'sl_sixteen' => '',
            'pl_seventeen' => '',
            'sl_seventeen' => '',
            'pl_eighteen' => '',
            'sl_eighteen' => '',
            'pl_nineteen' => '',
            'sl_nineteen' => '',
            'pl_twenty' => '',
            'sl_twenty' => '',
            'pl_twenty_one' => '',
            'sl_twenty_one' => '',
            'pl_twenty_two' => '',
            'sl_twenty_two' => '',
            'pl_twenty_three' => '',
            'sl_twenty_three' => '',
            'pl_twenty_four' => '',
            'sl_twenty_four' => '',
            'pl_twenty_five' => '',
            'sl_twenty_five' => '',
        ]);
    }
}
