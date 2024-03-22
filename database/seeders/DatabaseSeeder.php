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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        \App\Models\Gender::factory()->create([
            'gender' => 'Male'
        ]);

        \App\Models\Gender::factory()->create([
            'gender' => 'Female'
        ]);

        \App\Models\User::factory(100)->create();

        // \App\Models\User::factory()->create([
        //     'first_name' => 'Leoneil',
        //     'middle_name' => 'Saladar',
        //     'last_name' => 'Odrunia',
        //     'suffix_name' => null,
        //     'birth_day' => 'fake()->date()',
        //     'gender_id' => fake()->numberBetween($min = 1, $max = 2),
        //     'address' => fake()->streetAddress(),
        //     'contact_number' => fake()->phoneNumber(),
        //     'email_address' => fake()->safeEmail(),
        //     'username' => fake()->userName(),
        //     'password' => bcrypt('123')
        // ]);
    }
}
