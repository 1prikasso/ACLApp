<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        \App\Models\User::factory()->create([
            'name' => 'ownerUser',
            'email' => 'owner@example.com',
            'password' => bcrypt('owner@example.com') 
        ]);
        \App\Models\User::factory()->create([
            'name' => 'adminUser',
            'email' => 'admin@example.com',
            'password' => bcrypt('admin@example.com') 
        ]);
        \App\Models\User::factory()->create([
            'name' => 'employeeUser',
            'email' => 'employee@example.com',
            'password' => bcrypt('employee@example.com') 
        ]);

        \App\Models\Report::factory(6)->create();
    }
}
