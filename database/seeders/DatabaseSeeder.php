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
        $this->call([
                CustomerSeeder::class,
                ManagerSeeder::class,
                OrderSeeder::class // Order seeding must be called AFTER managers and customers as it refers to them!
                # ADD MORE SEEDERS HERE
                # SEPARATE SEEDERS CAN BE CALLED MANUALLY , like : php artisan db:seed CustomerSeeder
        ]);



        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // $this->call(ManagerSeeder::class); // If I implement manager seeder as a separate file/class
        // $this->call(CustomerSeeder::class); // If I implement customer seeder as a separate file/class
        // $this->call(OrderSeeder::class); // If I implement order seeder as a separate file/class
    }
}
