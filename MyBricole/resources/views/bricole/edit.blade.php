@extends('Layouts.App')
@extends('Layouts.navBricoloure')
@section('content')
<div class="w-[100vw] h-[88vh] bg-black">
    <br>
    <div class="w-full max-w-xs ml-auto mr-auto">
        <form class="bg-white shadow-md  px-8 pt-4 pb-4 mb-4" method="POST" action="{{ asset('bricole/'. $bricole->id) }}" enctype="multipart/form-data">
          @csrf
        
          <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="nom">
              nom
            </label>
            <input class="shadow appearance-none border  w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="nom" id="nom" type="text" placeholder="nom" value="{{ $bricole->nom }}">
          </div>
          <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="image">
              image
            </label>
            <input class="shadow appearance-none border  w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="image" id="image" type="file" placeholder="image">
          </div>
          <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="categorie">
              categorie
            </label>
            <input class="shadow appearance-none border  w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="categorie" id="categorie" type="text" placeholder="categorie" value="{{ $bricole->categorie }}">
          </div>
          <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="description">
              description
            </label>
            <input class="shadow appearance-none border  w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="description" id="description" type="text" placeholder="description" value="{{ $bricole->description }}">
          </div>
          <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="date_de_creation">
              date de creation
            </label>
            <input class="shadow appearance-none border  w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="date_de_creation" id="date_de_creation" type="date" placeholder="" value="{{ $bricole->date_de_creation }}">
          </div>
          <div class="flex items-center justify-between">
            <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4  focus:outline-none focus:shadow-outline" type="submit">
              update
            </button>
          </div>
        </form>
      </div>
</div>
@endsection
