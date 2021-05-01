<?php

namespace Database\Seeders;

use App\Models\Admin\Comment;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Comment::create([
            'news_id' => 3,
            'p_id' => 0,
            'name' => 'Cooper ggs',
            'email' => 'user@email.com',
            'phone' => '+1 (389) 342-2036',
            'comment' => 'Very Nice News',
        ]);
    }
}
