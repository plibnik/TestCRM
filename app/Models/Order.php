<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    //додати тут константи станів замовлень
    use HasFactory;
    protected $table = 'orders'; //not necessary here, but what if?
}
