@extends('Layouts.app')
@extends('Layouts.navBricoloure')
@section('content')
    <br>
    <div class="w-full max-w-xs ml-auto mr-auto ">
        <form class="bg-white shadow-md  px-8 pt-4 pb-4 mb-4 overflow-auto" method="POST"
            action="{{ asset('/storebricole') }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                    nom
                </label>
                <input
                    class="shadow appearance-none border  w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    name="nom" id="username" type="text" placeholder="nom">
                @error('nom')
                    <p class="text-red-700">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                    description
                </label>
                <textarea name="description" id="" cols="28" rows="3" ></textarea>
                @error('description')
                    <p class="text-red-700">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                    image
                </label>
                <input
                    class="shadow appearance-none border  w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    name="image" id="username" type="file" placeholder="image">
                @error('image')
                    <p class="text-red-700">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="prix">
                    prix
                </label>
                <input
                    class="shadow appearance-none border  w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    name="prix" id="username" type="text" placeholder="prix">
                @error('prix')
                    <p class="text-red-700">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                    categorie
                </label>
                <select name="categorie_id"
                    class="shadow appearance-none border  w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="">
                    @foreach ($categorie as $item)
                        <option value="{{ $item->id }}">{{ $item->nom }}</option>
                    @endforeach
                </select>
                @error('categorie')
                    <p class="text-red-700">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                    date de creation
                </label>
                <input
                    class="shadow appearance-none border  w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    name="date_de_creation" id="username" type="date" placeholder="">
                @error('date_de_creation')
                    <p class="text-red-700">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                    date de demission
                </label>
                <input
                    class="shadow appearance-none border  w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    name="date_de_demission" id="username" type="date" placeholder="">
                @error('date_de_demission')
                    <p class="text-red-700">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="prix">
                    vill
                </label>
                <input
                    class="shadow appearance-none border  w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    name="vill" id="username" type="text" placeholder="vill">
                @error('vill')
                    <p class="text-red-700">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="prix">
                    adress
                </label>
                <input
                    class="shadow appearance-none border  w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    name="adress" id="username" type="text" placeholder="adress">
                @error('adress')
                    <p class="text-red-700">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex items-center justify-between">
                <button
                    class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4  focus:outline-none focus:shadow-outline"
                    type="submit">
                    create
                </button>
            </div>
        </form>
    </div>
@endsection
