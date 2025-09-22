@extends('adminlte::page')
{{-- @extends('layouts.app')<!DOCTYPE html> --}}

@section('title','Головна панель')

@section('content_header')
    <h1>Головна панель</h1>
@stop

@section('content')

    <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Кількість клієнтів</span>
                    <span class="info-box-number">{{ $number_of_customers }}</span>
                </div>
            </div>
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-red"><i class="fa fa-google-plus"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Кількість замовлень</span>
                    <span class="info-box-number">{{ $number_of_orders }}</span>
                </div>
            </div>
        </div>
        <!-- /.col -->
        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Кількість менеджерів</span>
                    <span class="info-box-number">{{ $number_of_managers }}</span>
                </div>
            </div>
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Кількість компаній</span>
                    <span class="info-box-number">{{ $number_of_companies }}</span>
                </div>
            </div>
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->

    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Останні події/новини</h3>
        </div>
        <div class="box-body">
            <p>Вітаємо на доданій панелі AdminLTE.</p>
        </div>
    </div>

<h1>{{ $message }}</h1>
<p>Це вміст головної сторінки Test CRM. Наразі тут відображається певна статистика, щоб не було пусто (ми подумаємо, що сховати від гостей, але зараз це техно-демо)</p>
<br>
<br>
Середня сума замовлення: {{ $average_order_sum }} <p style="font-size: 12px;">[Формат PHP number_format, округлення до 2 знаків після точки]</p> <br>

<br>
Випадаючий список компаній тут — просто щоб показати, що розібрався з цим з минулої розмови. Передається з моделі компанії, там статичний метод повертає self::all(['id','name']),
а тут контролер домашньої сторінки приймає це у слот

    <x-adminlte-select name="myCompanySelect" label="Виберіть компанію">
        @foreach ($companies_with_ids_and_names_only as $company)
        <option value="option{{$company->id}}">{{$company->name}}</option>
        @endforeach
    </x-adminlte-select>

{{$companies_with_ids_and_names_only}}
@endsection



<!--
'number_of_customers' => Customer::count(),
'number_of_orders' => Order::count(),
'number_of_managers' => Manager::count(),
'number_of_companies' => Company::count(),
'average_order_sum' => Order::avg('amount')
-->
