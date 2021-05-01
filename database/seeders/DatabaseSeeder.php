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

            AddSeeder::class,
            AddPlaceSeeder::class,
            BreakingNewsSeeder::class,
            CategorySeeder::class,
            CommentSeeder::class,
            ContactSeeder::class,
            FaqSeeder::class,
            FooterSeeder::class,
            FooterMenuSeeder::class,
            MainMenuSeeder::class,
            PageSeeder::class,
            ProfileSeeder::class,
            SocialSeeder::class,
            SubscriberSeeder::class,
            SubscriberSectionSeeder::class,
            ThemeSeeder::class,
            TranslationSeeder::class,
            VisitorSeeder::class,
            WizardSeeder::class,

            NewsSeeder::class,
            ImageSeeder::class,
        ]);
    }
}
