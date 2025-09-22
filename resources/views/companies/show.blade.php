@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Showing data card for a single company</h1>
        <br>
        <h2>Company Name:</h2>
            {{$company['name']}}

        <br>
        <h2>Company Address</h2>
            {{$company['address']}}
        <br>
    </div>
    <br><br><br>

    {{-- the style of this button is horrible, but as I have no actions now on Company card, this will be ok --}}

    <input type="button" value="back" onclick="window.history.back()"
           style="color: white; background-color:rgb(196, 196, 196);
font: 15px arial, sans-serif; font-weight: bold;" />

@endsection
