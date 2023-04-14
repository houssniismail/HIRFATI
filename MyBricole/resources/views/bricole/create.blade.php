@extends('Layouts.app')
@extends('Layouts.navBricoloure')
@section('content') 
<div class="w-[100vw] h-[88vh] bg-black ">
    <br>
    <div class="w-full max-w-xs ml-auto mr-auto">
        <form class="bg-white shadow-md  px-8 pt-4 pb-4 mb-4" method="POST" action="{{asset('/storebricole')}}" enctype="multipart/form-data">
          @csrf
          <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
              nom
            </label>
            <input class="shadow appearance-none border  w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="nom" id="username" type="text" placeholder="nom">
          </div>
          <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
              image
            </label>
            <input class="shadow appearance-none border  w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="image" id="username" type="file" placeholder="image">
          </div>
          <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
              categorie
            </label>
            <input class="shadow appearance-none border  w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="categorie" id="username" type="text" placeholder="categorie">
          </div>
          <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
              description
            </label>
            <input class="shadow appearance-none border  w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="description" id="username" type="text" placeholder="description">
          </div>
          <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
              date de creation
            </label>
            <input class="shadow appearance-none border  w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="date_de_creation" id="username" type="date" placeholder="">
          </div>
          <div class="flex items-center justify-between">
            <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4  focus:outline-none focus:shadow-outline" type="submit">
              create
            </button>
          </div>
        </form>
      </div>
</div>
@endsection