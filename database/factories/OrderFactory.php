<?php

namespace Database\Factories;

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
            'customer_id'=>1, //FIXME this is just for testing, actually there can be not a customer with ID 1!
            'manager_id'=>1, //FIXME this is just for testing, actually there can be not a manager with ID 1!
            'comment'=>'',
            'creation_date'=>Carbon::now()
            //
        ];
    }
}
