<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        
        $this->call(NoteTableSeeder::class); 
    // $this->call(UsersTableSeeder::class);
    
//        User::truncate();//hamaro pack mikone va az aval misaze
//        factory(Card::class,50)->make();//create but no save in db
    }
}
