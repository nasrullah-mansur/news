<?php

namespace Database\Seeders;

use App\Models\Admin\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Auth::loginUsingId(1);
        Category::create([
            'p_id' => 0,
            'pl_name' => 'Business',
            'sl_name' => 'Negocio',
            'pl_slug' => 'business',
            'sl_slug' => 'Negocio',
        ]);

        Category::create([
            'p_id' => 0,
            'pl_name' => 'Life Style',
            'sl_name' => 'Estilo Vida',
            'pl_slug' => 'life-style',
            'sl_slug' => 'Estilo Vida',
        ]);

        Category::create([
            'p_id' => 0,
            'pl_name' => 'Health',
            'sl_name' => 'salud',
            'pl_slug' => 'Health',
            'sl_slug' => 'salud',
        ]);

        Category::create([
            'p_id' => 0,
            'pl_name' => 'Sports',
            'sl_name' => 'deportes',
            'pl_slug' => 'sports',
            'sl_slug' => 'deportes',
        ]);

        Category::create([
            'p_id' => 0,
            'pl_name' => 'Entertainment',
            'sl_name' => 'entretenimiento',
            'pl_slug' => 'Entertainment',
            'sl_slug' => 'entretenimiento',
        ]);



    }
}
