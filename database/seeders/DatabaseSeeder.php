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
                CompanySeeder::class,  // must be called first
                CustomerSeeder::class, // depend on companies

                ManagerSeeder::class,  // may be called first too

                OrderSeeder::class,// Order seeding must be called AFTER *managers* and *customers* as it refers to them!

                UserSeeder::class // here the admin:admin user will be created, and maybe also anonymous read-only user
                # ADD MORE SEEDERS HERE
                # SEPARATE SEEDERS CAN BE CALLED MANUALLY , like : php artisan db:seed CustomerSeeder
        ]);



        // \App\Models\UserSeeder::factory(10)->create();

        // \App\Models\UserSeeder::factory()->create([
        //     'name' => 'Test UserSeeder',
        //     'email' => 'test@example.com',
        // ]);

        // $this->call(ManagerSeeder::class); // If I implement manager seeder as a separate file/class
        // $this->call(CustomerSeeder::class); // If I implement customer seeder as a separate file/class
        // $this->call(OrderSeeder::class); // If I implement order seeder as a separate file/class
    }
}
