<?php

namespace Database\Seeders;

use App\Models\Answer;
use App\Models\Question;
use App\Models\Survey;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        DB::table('respondents')->insert([
            'name' => 'Respondent'
        ]);

        Survey::factory(1)->has(Question::factory(4)->has(Answer::factory(2)))->create();

        // \App\Models\User::factory(10)->create();
    }
}
