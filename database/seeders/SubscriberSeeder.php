<?php

namespace Database\Seeders;

use App\Models\Admin\Subscriber;
use Illuminate\Database\Seeder;

class SubscriberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Subscriber::create([
            'email' => 'subscriber@email.com',
        ]);
    }
}
