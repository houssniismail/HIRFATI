@extends('layouts.app')
{{$categorie}}
{{$bricoles}}
@section('content')
    <h1>{{ $categorie->nom }}</h1>
    <a href="{{ route('categorie.edit', ['id' => $categorie]) }}" class="btn btn-primary">Edit</a>
    <form action="{{ route('categorie.destroy', $categorie->id) }}" method="POST" class="d-inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
@endsection
