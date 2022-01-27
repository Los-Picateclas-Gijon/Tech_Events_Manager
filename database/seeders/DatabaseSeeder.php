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
        \App\Models\Role::factory(2)->create();
         \App\Models\User::factory(30)->create();
         \App\Models\Event::factory(50)->create();
         \App\Models\Location::factory(10)->create();
        
    }
}
