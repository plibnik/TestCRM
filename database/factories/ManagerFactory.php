<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Manager>
 */
class ManagerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        // Each time I create a Manager i create a Laravel User for it
        // I leave this logic here, it is not cool but this is a special case as I hybridize/bastardize
        // Managers and Users tables/models/entitites

        $manager_name ??= fake()->name;    // If it was passed, don't generate random


        return [
            'full_name'=>$manager_name,      // should be unique, but for now...
            'login'=>Str::random(5), // should be unique, but for now...
            'password'=>Str::random(5),
            // Now I have manager's data, why should I have a password here ? TODO: remove later
            // but now will demonstrate param passing

            // I create a User in Laravel's users table with the same name/password as Manager here (BAD)
            // but they will be related by hasOne (GOOD)
            'user_id'=>User::factory()->create([
                'name'=>$manager_name
                ]),

        ];
    }
}
