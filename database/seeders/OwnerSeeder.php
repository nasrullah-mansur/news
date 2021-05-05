<?php

namespace Database\Seeders;

use App\Models\Admin\Owner;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class OwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Owner::create([
            'name' => 'Owner Name',
            'email' => 'owner@email.com',
            'password' => Hash::make('password'),
        ]);
    }
}
