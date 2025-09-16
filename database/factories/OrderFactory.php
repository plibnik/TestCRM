<?php

namespace Database\Factories;

use App\Models\Customer;
use App\Models\Manager;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $possible_status_list = ['new', 'working','completed','cancelled'];

        return [
            'amount'=>random_int(1,100), // of course it would not be int, the DB value is BigInteger
            'status'=> $possible_status_list[rand(0,count($possible_status_list)-1)],
            'customer_id'=>Customer::inRandomOrder()->first(), // computationally inefficient but great??
            'manager_id'=>Manager::inRandomOrder()->first(), // I LOVE this feature!
            'comment'=>'',
            'creation_date'=>Carbon::now()
            //
        ];
    }
}
