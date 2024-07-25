<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Department;
use Illuminate\Database\Seeder;
use Database\Seeders\CitySeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345'),
            'is_admin' => true,
        ]);

        $this->call([
            CountrySeeder::class,
            StateSeeder::class,
            CitySeeder::class,
        ]);

      
    }
}