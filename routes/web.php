<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/testroute', function () {
    return "Test route";
});

Route::get('/testroute2', function () {
    return "Test route added from PHPStorm";
});

//Route::get('/testdb', function () {
//    return "Test route to check if DB connection is working. Connection: ".DB::connection()->getPdo()->getAttribute(PDO::ATTR_CONNECTION_STATUS);
//});

Route::get('/test_get_all_customers', function () {     // FIXME remove in final
    echo "Test route to check if Customers model contains anything<br><br>";
    $customers_dump= \App\Models\Customer::all();
    dd($customers_dump);
});

