<!DOCTYPE html>
<html>
<head>
    <title>Test CRM Home Page</title>
</head>
<body>
<h1>{{ $message }}</h1>
<p>This is the content of the Test CRM Home Page. I will add some numeric stats here.</p>
<br>
Number of customers: {{ $number_of_customers }} <br>
Number of orders: {{ $number_of_orders }} <br>
Number of managers: {{ $number_of_managers }} <br>
Number of companies: {{ $number_of_companies }} <br>
<br>
Average order amount: {{ $average_order_sum }} <p style="font-size: 12px;">[PHP number_format, rounded to 2 decimals]</p> <br>
</body>
</html>

<!--
'number_of_customers' => Customer::count(),
'number_of_orders' => Order::count(),
'number_of_managers' => Manager::count(),
'number_of_companies' => Company::count(),
'average_order_sum' => Order::avg('amount')
-->
