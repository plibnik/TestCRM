<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
#use Illuminate\Support\Facades\DB; #unused now as I switched to appropriate ORM
//use Illuminate\Support\Facades\Hash;
#use Illuminate\Support\Str;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // now it is an appropriate Factory-using Seeder!
        // Let's create 10 customers
        Customer::factory()->count(10)->create();
    }
}
