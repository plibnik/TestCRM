@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Company</h1>

        {{-- <form action="{{ route('companies.update', ['company'=>$company['id']]) }}" method="PUT"> --}}
        <form action="{{ route('companies.update', ['company'=>$company['id']]) }}" method="POST">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="name">Company Name</label>
                <input type="text" name="name" id="name" value="{{ old('name', $company->name) }}" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="address">Company Address</label>

                <!-- cannot pass value here, must insert inside tags-->
                <textarea name="address" id="address"  class="form-control" required>{{ old('address', $company->address) }}</textarea>


            </div>
            <button type="submit" class="btn btn-success">Save</button>
        </form>
    </div>
@endsection
