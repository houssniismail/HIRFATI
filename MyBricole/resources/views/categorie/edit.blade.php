@extends('layouts.app')

@section('content')
    <h1>Edit category</h1>

    <form action="{{ route('categorie.update', $categorie) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nom">Name</label>
            <input type="text" name="nom" id="nom" class="form-control" value="{{ $categorie->nom }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
