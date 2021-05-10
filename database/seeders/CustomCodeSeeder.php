<?php

namespace Database\Seeders;

use App\Models\Admin\CustomCode;
use Illuminate\Database\Seeder;

class CustomCodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CustomCode::create([
            'css' => null,
            'js' => null,
        ]);
    }
}
