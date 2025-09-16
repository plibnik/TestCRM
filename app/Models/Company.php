<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Company extends Model
{
    use HasFactory;
    protected $table = 'companies'; //not necessary here, but what if?

    public function customers():HasMany
    {
        return $this->hasmany(Customer::class);
    }
}
