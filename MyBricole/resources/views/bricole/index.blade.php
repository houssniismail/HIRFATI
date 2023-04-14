@extends('Layouts.App')
@extends('Layouts.navBricoloure')
@section('content')
<div class="overflow-x-auto">
    <table class="table w-full border">
      <thead>
        <tr>
          <th class="px-4 py-2 border text-gray-50">ID</th>
          <th class="px-4 py-2 border text-gray-50">Nom</th>
          <th class="px-4 py-2 border text-gray-50">Image</th>
          <th class="px-4 py-2 border text-gray-50">Catégorie</th>
          <th class="px-4 py-2 border text-gray-50">Description</th>
          <th class="px-4 py-2 border text-gray-50">Disponible</th>
          <th class="px-4 py-2 border text-gray-50">Date de création</th>
          <th class="px-4 py-2 border text-gray-50">Actions</th>
        </tr>
      </thead>
      <tbody>
        <!-- Loop through your data to generate rows -->
        @foreach($bricoles as $bricole)
        <tr>
          <td class="px-4 py-2 border">{{ $bricole->id }}</td>
          <td class="px-4 py-2 border">{{ $bricole->nom }}</td>
          <td class="px-4 py-2 border"><img src="{{ asset('/images/'.$bricole->image) }}" alt="{{ $bricole->nom }}" class="w-16 h-16 object-cover"></td>
          <td class="px-4 py-2 border">{{ $bricole->categorie }}</td>
          <td class="px-4 py-2 border">{{ $bricole->description }}</td>
          <td class="px-4 py-2 border">{{ $bricole->disponible }}</td>
          <td class="px-4 py-2 border">{{ $bricole->date_de_creation }}</td>
          <td class="px-4 py-2 border">
            <a href="{{ asset('bricoles/' . $bricole->id) }}" class="btn btn-primary">Update</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  
@endsection