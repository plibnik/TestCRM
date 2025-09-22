<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Customer;
use App\Models\Manager;
use App\Models\Order;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
            {
                // Fetch any data needed for the home page, e.g., from a database
                //FIXME add statistics from database
                // $homePageTitle = 'Welcome to the Test CRM';
                $data = ['message' => 'Вітаємо на головній сторінці Test CRM!',
                        'number_of_customers' => Customer::count(),
                        'number_of_orders' => Order::count(),
                        'number_of_managers' => Manager::count(),
                        'number_of_companies' => Company::count(),
                        'average_order_sum' => number_format(Order::avg('amount'),2),
                        'companies_with_ids_and_names_only'=> Company::return_only_ids_and_names()
                    ];

                return view('home', $data); // 'home' refers to resources/views/home.blade.php
            }
}
