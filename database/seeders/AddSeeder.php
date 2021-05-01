<?php

namespace Database\Seeders;

use App\Models\Admin\Add;
use Illuminate\Database\Seeder;

class AddSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Add::create([
            'email' => 'wyzolotom@mailinator.com',
            'address' => 'Ab doloremque irure',
            'name' => 'Jessamine Green',
            'number' => '+880 12345678',
            'message' => 'Thank you for accepting my add',
            'file' => 'add/request/1619673257_1.jpg',
        ]);

    }
}
