<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call([
            UserSeeder::class,
            CategorySeeder::class,
            WizardSeeder::class,
            FooterSeeder::class,
            TranslationSeeder::class,
            ThemeSeeder::class,
            ProfileSeeder::class,
            PageSeeder::class,
            MainMenuSeeder::class,
            FooterMenuSeeder::class,
            SocialSeeder::class,
        ]);
    }
}
