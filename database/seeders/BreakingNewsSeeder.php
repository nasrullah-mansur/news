<?php

namespace Database\Seeders;

use App\Models\Admin\BreakingNews;
use Illuminate\Database\Seeder;

class BreakingNewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BreakingNews::create([
            'pl_breaking_news' => 'Kanye West says he\'s running for president in 2021.',
            'sl_breaking_news' => 'Kanye West dice que se postulará para presidente en 2021.',
            'url' => '#',
            'status' => 1,
        ]);
        BreakingNews::create([
            'pl_breaking_news' => 'Celebs Workout at Home Amid Coronavirus ..',
            'sl_breaking_news' => 'Entrenamiento de celebridades en casa en ..',
            'url' => '#',
            'status' => 1,
        ]);
    }
}
