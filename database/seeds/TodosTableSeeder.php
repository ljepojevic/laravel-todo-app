<?php

use Illuminate\Database\Seeder;

class TodosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('todos')->insert([
            'text' => 'First todo',
            'body' => 'My first todo',
            'due' => 'Moday May 7',
        ]);

        DB::table('todos')->insert([
            'text' => 'Second todo',
            'body' => 'My second todo',
            'due' => 'Tuesday May 8',
        ]);

        DB::table('todos')->insert([
            'text' => 'Third todo',
            'body' => 'My third todo',
            'due' => 'Wednesday May 9',
        ]);
    }
}
