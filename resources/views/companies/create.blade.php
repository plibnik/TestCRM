@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create Company</h1>
        <form action="{{ route('companies.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <textarea name="address" id="address" class="form-control" required></textarea>
            </div>
            <button type="submit" class="btn btn-success">Save</button>
        </form>
    </div>
@endsection
