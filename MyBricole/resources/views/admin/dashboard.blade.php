@extends('Layouts.app')
@section('content') 
<div class="bg-gray-100 font-family-karla flex">

<aside class="bg-gray-900 relative bg-sidebar h-screen w-64 hidden sm:block shadow-xl">
    <div class="p-6">
        <a href="index.html" class="text-white text-3xl font-semibold uppercase hover:text-gray-300">Admin</a>
        <button class="w-full bg-white cta-btn font-semibold py-2 mt-5 rounded-br-lg rounded-bl-lg rounded-tr-lg shadow-lg hover:shadow-xl hover:bg-gray-300 flex items-center justify-center">
            <i class="fas fa-plus mr-3"></i> New Report
        </button>
    </div>
    <nav class="text-white text-base font-semibold pt-3">
        <a href="{{asset('admin/dashboard')}}" class="flex items-center active-nav-link text-white py-4 pl-6 nav-item">
            <i class="fas fa-tachometer-alt mr-3"></i>
            Dashboard
        </a>
        <a href="blank.html" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fas fa-sticky-note mr-3"></i>
            Blank Page
        </a>
        <a href="tables.html" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fas fa-table mr-3"></i>
            Tables
        </a>
        <a href="forms.html" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fas fa-align-left mr-3"></i>
            Forms
        </a>
        <a href="tabs.html" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fas fa-tablet-alt mr-3"></i>
            Tabbed Content
        </a>
        <a href="calendar.html" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fas fa-calendar mr-3"></i>
            Calendar
        </a>
    </nav>
    <a href="#" class="absolute w-full upgrade-btn bottom-0 active-nav-link text-white flex items-center justify-center py-4">
        <i class="fas fa-arrow-circle-up mr-3"></i>
        Upgrade to Pro!
    </a>
</aside>

<div class="  w-full flex flex-col h-screen overflow-y-hidden">
    <!-- Desktop Header -->
    <header class="w-full items-center bg-white py-2 px-6 hidden sm:flex">
        <div class="w-1/2"></div>
        <div x-data="{ isOpen: false }" class="relative w-1/2 flex justify-end">
            <button @click="isOpen = !isOpen" class="realtive z-10 w-12 h-12 rounded-full overflow-hidden border-4 border-gray-400 hover:border-gray-300 focus:border-gray-300 focus:outline-none">
                <img src="https://source.unsplash.com/uJ8LNVCBjFQ/400x400">
            </button>
            <button x-show="isOpen" @click="isOpen = false" class="h-full w-full fixed inset-0 cursor-default"></button>
            <div x-show="isOpen" class="absolute w-32 bg-white rounded-lg shadow-lg py-2 mt-16">
                <a href="#" class="block px-4 py-2 account-link hover:text-white">Account</a>
                <a href="#" class="block px-4 py-2 account-link hover:text-white">Support</a>
                <a href="#" class="block px-4 py-2 account-link hover:text-white">Sign Out</a>
            </div>
        </div>
    </header>

    <!-- Mobile Header & Nav -->
    <header x-data="{ isOpen: false }" class="bg-gray-900 w-full bg-sidebar py-5 px-6 sm:hidden">
        <div class="flex items-center justify-between">
            <a href="index.html" class="text-white text-3xl font-semibold uppercase hover:text-gray-300">Admin</a>
            <button @click="isOpen = !isOpen" class="text-white text-3xl focus:outline-none">
                <i x-show="isOpen" class="fas fa-bars"></i>
                <i x-show="!isOpen" class="fas fa-times"></i>
            </button>
        </div>

        <!-- Dropdown Nav -->
        <nav :class="!isOpen ? 'flex': 'hidden'" class="flex flex-col pt-4">
            <a href="index.html" class="flex  items-center active-nav-link text-white py-2 pl-4 nav-item">
                <i class="fas fa-tachometer-alt mr-3"></i>
                Dashboard
            </a>
            <a href="blank.html" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                <i class="fas fa-sticky-note mr-3"></i>
                Blank Page
            </a>
            <a href="tables.html" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                <i class="fas fa-table mr-3"></i>
                Tables
            </a>
            <a href="forms.html" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                <i class="fas fa-align-left mr-3"></i>
                Forms
            </a>
            <a href="tabs.html" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                <i class="fas fa-tablet-alt mr-3"></i>
                Tabbed Content
            </a>
            <a href="calendar.html" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                <i class="fas fa-calendar mr-3"></i>
                Calendar
            </a>
            <a href="#" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                <i class="fas fa-cogs mr-3"></i>
                Support
            </a>
            <a href="#" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                <i class="fas fa-user mr-3"></i>
                My Account
            </a>
            <a href="#" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                <i class="fas fa-sign-out-alt mr-3"></i>
                Sign Out
            </a>
            <button class="w-full bg-white cta-btn font-semibold py-2 mt-3 rounded-lg shadow-lg hover:shadow-xl hover:bg-gray-300 flex items-center justify-center">
                <i class="fas fa-arrow-circle-up mr-3"></i> Upgrade to Pro!
            </button>
        </nav>
    </header>
    <div class="w-full overflow-x-hidden border-t flex flex-col">
        <h1 class="text-3xl text-black pb-6 mt-3">Dashboard</h1>
        <main class="w-full flex-grow p-6">
            <div class="w-full">
                <div class="flex items-center justify-between">
                    <p class="text-xl pb-3 flex items-center">
                        <i class="fas fa-list mr-3"></i> table de categries
                    </p>
                    <button class=" items-center p-2 rounded text-white mb-3 text-xl bg-blue-700"><a href="{{asset('categorie/create')}}">button</a></button>
                </div>
                <div class="bg-white overflow-auto">
                    <table class="min-w-full bg-white">
                        <thead class="bg-gray-800 text-white">
                            <tr>
                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">nom</th>
                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">date de creation</th>
                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">actions</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-700">
                            @foreach ($categories as $categorie)
                            <tr>
                                <td class="text-left py-3 px-4">{{$categorie->nom}}</td>
                                <td class="text-left py-3 px-4">{{$categorie->created_at}}</td>
                                <td class="text-left py-3 px-4"><div class="flex space-x-4">
                                    <a href="{{ route('categorie.edit', ['id' => $categorie]) }}" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">Edit</a>
                                    <form action="{{ route('categorie.destroy', $categorie->id) }}" method="POST" class="inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="px-4 py-2 bg-red-500 text-white rounded-md hover:bg-red-600">Delete</button>
                                    </form>
                                </div>
                                </td>
                            </tr>  
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
        <main class="w-full flex-grow p-6">
            <div class="w-full">
            <div class="flex items-center justify-between">
                <p class="text-xl pb-3 flex items-center">
                    <i class="fas fa-list mr-3"></i> table de bricoles
                </p>
            </div>
                <div class="bg-white overflow-auto">
                    <table class="min-w-full bg-white">
                        <thead class="bg-gray-800 text-white">
                            <tr>
                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">nom</th>
                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">image</th>
                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">categoryie</th>
                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">description</th>
                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">date de creation</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-700">
                            @foreach ($bricoles as $item)
                            <tr>
                                <td class="text-left py-3 px-4">{{$item->nom}}</td>
                                <td class="text-left py-3 px-4">{{$item->image}}</td>
                                <td class="text-left py-3 px-4">{{$item->categorie->nom}}</td>
                                <td class="text-left py-3 px-4">{{$item->description}} </td>
                                <td class="text-left py-3 px-4">{{$item->date_de_creation}}</td>
                                <td class="text-left py-3 px-4">
                                    @foreach ($item->commentaires as $comment)
                                    <td class="text-left py-3 px-4">{{ $comment->commentaire }}</td>
                                @endforeach</td>
                            </tr>  
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
        <main class="w-full flex-grow p-6">
            <div class="w-full ">
                <div class="flex items-center justify-between">
                    <p class="text-xl pb-3 flex items-center">
                        <i class="fas fa-list mr-3"></i> table de users
                    </p>
                </div>
                <div class="bg-white overflow-auto">
                    <table class="min-w-full bg-white">
                        <thead class="bg-gray-800 text-white">
                            <tr>
                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">nom</th>
                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">email</th>
                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">date de creation</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-700">
                            @foreach ($users as $user)
                            @if ($user->role === 'user')
                            <tr>
                                <td class="text-left py-3 px-4">{{$user->name}}</td>
                                <td class="text-left py-3 px-4"><a href="mailto:{{$user->email}}">{{$user->email}}</a></td>
                                <td class="text-left py-3 px-4">{{$user->created_at}}</td>
                            </tr>       
                            @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
        <main class="w-full flex-grow p-6">
            <div class="w-full ">
                <div class="flex items-center justify-between">
                    <p class="text-xl pb-3 flex items-center">
                        <i class="fas fa-list mr-3"></i> table de bricoleurs
                    </p>
                </div>
                <div class="bg-white overflow-auto">
                    <table class="min-w-full bg-white">
                        <thead class="bg-gray-800 text-white">
                            <tr>
                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">nom</th>
                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">email</th>
                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">date de creation</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-700">
                            @foreach ($users as $user)
                            @if ($user->role === 'bricoleur')
                            <tr>
                                <td class="text-left py-3 px-4">{{$user->name}}</td>
                                <td class="text-left py-3 px-4"><a href="mailto:{{$user->email}}">{{$user->email}}</a></td>
                                <td class="text-left py-3 px-4">{{$user->created_at}}</td>
                            </tr>       
                            @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
        <footer class="w-full bg-white text-right p-4">
            Built by <a target="_blank" href="https://davidgrzyb.com" class="underline">David Grzyb</a>.
        </footer>
    </div>
    
</div>
</div>
<!-- AlpineJS -->
<script src="{{url('https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js')}}" defer></script>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
<!-- Font Awesome -->
<script src="{{url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js')}}" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
<!-- ChartJS -->
<script src="{{url('https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js')}}" integrity="sha256-R4pqcOYV8lt7snxMQO/HSbVCFRPMdrhAFMH+vr9giYI=" crossorigin="anonymous"></script>
@endsection