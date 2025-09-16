@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Company Manager</h1>
        <a href="{{ route('companies.create') }}" class="btn btn-primary mb-3">Create a Company</a>

        @if ($companies->count())
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Company Name</th>
                    <th>Address</th>
<!--                    <th>Status</th>  -->
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($companies as $company)
                    <tr>
                        <td>{{ $company->name }}</td>
                        <td>{{ $company->address }}</td>
<!--                        <td>{{ $company->status }}</td>     -->
                        <td>
                            <a href="{{ route('companies.edit', $company->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('companies.destroy', $company->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                <tr><td> </td></tr>
                <tr><td>Total number of companies: {{$companies->count() }}</td></tr>
                </tbody>
            </table>
        @else
            <p>No companies available in DB (did you do seeding? there should be 5).</p>
        @endif
    </div>
@endsection
