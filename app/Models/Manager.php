<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Manager extends Model
{
    use HasFactory;

    public static function GetOne() { return 1;}

    protected $table = 'managers'; //not necessary here, but what if?

    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }
}
