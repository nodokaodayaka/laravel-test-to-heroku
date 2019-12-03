<?php

use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Question::class, 50)->create()->each(function ($u) {
            $u->answers()->save(factory(App\Answer::class)->create(['question_id' => $u->id]));
            $u->answers()->save(factory(App\Answer::class)->create(['question_id' => $u->id]));
            $u->answers()->save(factory(App\Answer::class)->create(['question_id' => $u->id]));
            $u->answers()->save(factory(App\Answer::class)->create(['question_id' => $u->id]));
        });
    }
}
