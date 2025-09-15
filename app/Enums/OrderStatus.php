<?php
// app/Enums/OrderStatus.php
// WARNING, AI code :(


//FIXME this may be not necessary if I am defining a "db-Enum" in migration "create_orders_table"; ask about it!
namespace App\Enums;

enum OrderStatus: string
{
case New = 'new';
case Working = 'working';
case Completed = 'completed';
case Cancelled = 'cancelled';
}
