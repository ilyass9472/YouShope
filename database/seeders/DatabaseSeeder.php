<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
  
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'client']);


        
        // \App\Models\User::factory(10)->create();

        
        $user = \App\Models\User::create([
            'name' => 'client',
            'email' => 'client@example.com',
            'password' => bcrypt('password'),
        ]);

        $user->assignRole('client');
        $adminUser = \App\Models\User::create([
            'name' => 'admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
        ]);
        
        $adminUser->assignRole('admin');
    }
}
