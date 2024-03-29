<?php

use Illuminate\Database\Seeder;
use App\Note;

class NoteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Note::truncate();
        factory(Note::class,10)->create();
    }
}
