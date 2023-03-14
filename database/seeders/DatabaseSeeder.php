<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Log;
use App\Models\Newspaper;
use App\Models\Title;
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
//        Title::factory(10)->create();
//         \App\Models\User::factory(10)->create();
//        Newspaper::factory(10)->create();

//        Log::factory(10)->create();
        Comment::factory(50)->create();


    }
}
