<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Member;
use App\Models\Article;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = Member::factory(3)->create();
        Article::factory(30)->create();
    }
}
