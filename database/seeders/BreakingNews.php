<?php

namespace Database\Seeders;

use App\Models\Admin\BreakingNews as AdminBreakingNews;
use Illuminate\Database\Seeder;

class BreakingNews extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AdminBreakingNews::create([
            'pl_breaking_news' => 'Kanye West says he\'s running for president in 2021.',
            'sl_breaking_news' => 'Kanye West says he\'s running for president in 2021.',
            'url' => '#',
        ]);
        AdminBreakingNews::create([
            'pl_breaking_news' => 'Kanye West says he\'s running for president in 2021.',
            'sl_breaking_news' => 'Kanye West says he\'s running for president in 2021.',
            'url' => '#',
        ]);
    }
}
