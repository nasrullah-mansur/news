<?php

namespace Database\Seeders;

use App\Models\Admin\AdminProfile;
use Illuminate\Database\Seeder;

class AdminProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AdminProfile::create([
            'admin_id' => 1,
            'facebook' => '#',
            'twitter' => '#',
            'linkedin' => '#',
            'profile' => 'avatar-s-1.png',
            'banner' => '22.jpg',
        ]);
    }
}
