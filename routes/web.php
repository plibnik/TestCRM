<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;

Route::resource('companies', \App\Http\Controllers\CompanyController::class); // this is copy-paste but I WILL dig it
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

Route::get('/', [HomeController::class, 'index'])->name('home');
// I have saved this syntax for review, the path is "/" but Laravel will invoke
// HomeController->index with *home*.blade.php

// added, it should be automatic tho as "companies.create" worked w/o it?
Route::resource('companies', CompanyController::class);

//Route::get('/', function () {
//    return view('home');
//});

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



