<?php

namespace Database\Seeders;

use App\Models\Admin\Visitor;
use Illuminate\Database\Seeder;

class VisitorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Visitor::create([
            'news_id' => 1,
            'visitor' => 0,
        ]);

        Visitor::create([
            'news_id' => 2,
            'visitor' => 0,
        ]);

        Visitor::create([
            'news_id' => 3,
            'visitor' => 0,
        ]);

        Visitor::create([
            'news_id' => 4,
            'visitor' => 0,
        ]);

        Visitor::create([
            'news_id' => 5,
            'visitor' => 0,
        ]);

        Visitor::create([
            'news_id' => 6,
            'visitor' => 0,
        ]);

        Visitor::create([
            'news_id' => 7,
            'visitor' => 0,
        ]);

        Visitor::create([
            'news_id' => 8,
            'visitor' => 0,
        ]);

        Visitor::create([
            'news_id' => 9,
            'visitor' => 0,
        ]);

        Visitor::create([
            'news_id' => 10,
            'visitor' => 0,
        ]);

        Visitor::create([
            'news_id' => 11,
            'visitor' => 0,
        ]);

        Visitor::create([
            'news_id' => 12,
            'visitor' => 0,
        ]);

        Visitor::create([
            'news_id' => 13,
            'visitor' => 0,
        ]);
    }
}
