<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Users;
use App\Models\Category;
use App\Models\Tags;
use App\Models\Images;
use App\Models\Posts;
use App\Models\Post_tag;



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
        Users::factory(10)->create();
        Category::factory(10)->create();
        Tags::factory(10)->create();
        Images::factory(10)->create();
        Posts::factory(10)->create();
        Tags::factory(10)->create();
        Post_tag::factory(10)->create();
    }
}
