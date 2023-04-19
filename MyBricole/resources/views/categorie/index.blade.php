@extends('layouts.app')

@section('content')
    <h1>Categories</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('categorie/create') }}" class="btn btn-primary mb-3">Create new category</a>

    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->nom }}</td>
                    <td><a href="{{ route('categorie.show', $category->id) }}" class="btn btn-primary">Show</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
