<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Company extends Model
{
    use HasFactory;
    protected $table = 'companies'; //not necessary here, but what if?
    protected $fillable = ['name','address'];
    public function customers():HasMany
    {
        return $this->hasmany(Customer::class);
    }

    public static function return_only_ids_and_names()
    {
        $list_of_ids_and_names= self::all(['id','name']);
        return $list_of_ids_and_names;
    }
}
