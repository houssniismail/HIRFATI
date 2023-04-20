{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>

<body>
    <!-- Main navigation container -->
    <nav class="relative flex w-full flex-wrap items-center justify-between bg-neutral-900 py-2 text-neutral-200 shadow-lg lg:flex-wrap lg:justify-start lg:py-4"
        data-te-navbar-ref>
        <div class="flex w-full flex-wrap items-center justify-between px-3">
            <!-- Hamburger button for mobile view -->
            <button
                class="block border-0 bg-transparent px-2 text-neutral-200 hover:no-underline hover:shadow-none focus:no-underline focus:shadow-none focus:outline-none focus:ring-0 lg:hidden"
                type="button" data-te-collapse-init data-te-target="#navbarSupportedContent4"
                aria-controls="navbarSupportedContent4" aria-expanded="false" aria-label="Toggle navigation">
                <!-- Hamburger icon -->
                <span class="[&>svg]:w-7">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-7 w-7">
                        <path fill-rule="evenodd"
                            d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z"
                            clip-rule="evenodd" />
                    </svg>
                </span>
            </button>

            <!-- Collapsible navigation container -->
            <div class="!visible mt-2 hidden flex-grow basis-[100%] items-center lg:mt-0 lg:!flex lg:basis-auto"
                id="navbarSupportedContent4" data-te-collapse-item>
                <!-- Navbar title -->
                <a class="pr-2 text-xl font-semibold text-white" href="#">Navbar</a>
                <!-- Left navigation links -->
                <ul class="list-style-none mr-auto flex flex-col pl-0 lg:flex-row" data-te-navbar-nav-ref>
                    <!-- Dashboard link -->
                    <li class="my-4 lg:my-0 lg:pr-2" data-te-nav-item-ref>
                        <a class="text-white disabled:text-black/30 lg:px-2 [&.active]:text-black/90 dark:[&.active]:text-neutral-400"
                            href="#" data-te-nav-link-ref>Dashboard</a>
                    </li>
                    <!-- Team link -->
                    <li class="mb-4 lg:mb-0 lg:pr-2" data-te-nav-item-ref>
                        <a class="p-0 text-white opacity-60 hover:opacity-80 focus:opacity-80 disabled:text-black/30 lg:px-2 [&.active]:text-black/90 dark:[&.active]:text-neutral-400"
                            href="#" data-te-nav-link-ref>Team</a>
                    </li>
                    <!-- Projects link -->
                    <li class="mb-4 lg:mb-0 lg:pr-2" data-te-nav-item-ref>
                        <a class="p-0 text-white opacity-60 hover:opacity-80 focus:opacity-80 disabled:text-black/30 lg:px-2 [&.active]:text-black/90 dark:[&.active]:text-neutral-400"
                            href="#" data-te-nav-link-ref>Projects</a>
                    </li>
                </ul>
            </div>

            <!-- Right elements -->
            <div class="relative flex items-center">
                <!-- Cart Icon -->
                <a class="mr-4 text-white opacity-60 hover:opacity-80 focus:opacity-80" href="#">
                    <span class="[&>svg]:w-5">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5">
                            <path
                                d="M2.25 2.25a.75.75 0 000 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 00-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 000-1.5H5.378A2.25 2.25 0 017.5 15h11.218a.75.75 0 00.674-.421 60.358 60.358 0 002.96-7.228.75.75 0 00-.525-.965A60.864 60.864 0 005.68 4.509l-.232-.867A1.875 1.875 0 003.636 2.25H2.25zM3.75 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zM16.5 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0z" />
                        </svg>
                    </span>
                </a>

                <!-- Container with two dropdown menus -->
                <div class="relative" data-te-dropdown-ref>
                    <!-- First dropdown trigger -->
                    <a class="hidden-arrow mr-4 flex items-center text-white opacity-60 hover:opacity-80 focus:opacity-80"
                        href="#" id="dropdownMenuButton1" role="button" data-te-dropdown-toggle-ref
                        aria-expanded="false">
                        <!-- Dropdown trigger icon -->
                        <span class="[&>svg]:w-5">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="h-5 w-5">
                                <path fill-rule="evenodd"
                                    d="M5.25 9a6.75 6.75 0 0113.5 0v.75c0 2.123.8 4.057 2.118 5.52a.75.75 0 01-.297 1.206c-1.544.57-3.16.99-4.831 1.243a3.75 3.75 0 11-7.48 0 24.585 24.585 0 01-4.831-1.244.75.75 0 01-.298-1.205A8.217 8.217 0 005.25 9.75V9zm4.502 8.9a2.25 2.25 0 104.496 0 25.057 25.057 0 01-4.496 0z"
                                    clip-rule="evenodd" />
                            </svg>
                        </span>
                        <!-- Notification counter -->
                        <span
                            class="absolute -mt-2.5 ml-2 rounded-full bg-red-700 px-1.5 py-0 text-xs text-white">1</span>
                    </a>
                    <!-- First dropdown menu -->
                    <ul class="absolute left-auto right-0 z-[1000] float-left m-0 mt-1 hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg dark:bg-neutral-700 [&[data-te-dropdown-show]]:block"
                        aria-labelledby="dropdownMenuButton1" data-te-dropdown-menu-ref>
                        <!-- First dropdown menu items -->
                        <li>
                            <a class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-white/30"
                                href="#" data-te-dropdown-item-ref>Action</a>
                        </li>
                        <li>
                            <a class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-white/30"
                                href="#" data-te-dropdown-item-ref>Another action</a>
                        </li>
                        <li>
                            <a class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-white/30"
                                href="#" data-te-dropdown-item-ref>Something else here</a>
                        </li>
                    </ul>
                </div>

                <!-- Second dropdown container -->
                <div class="relative" data-te-dropdown-ref>
                    <!-- Second dropdown trigger -->
                    <a class="hidden-arrow flex items-center whitespace-nowrap transition duration-150 ease-in-out motion-reduce:transition-none"
                        href="#" id="dropdownMenuButton2" role="button" data-te-dropdown-toggle-ref
                        aria-expanded="false">
                        <!-- User avatar -->
                        <img src="https://tecdn.b-cdn.net/img/new/avatars/2.jpg" class="rounded-full"
                            style="height: 25px; width: 25px" alt="" loading="lazy" />
                    </a>
                    <!-- Second dropdown menu -->
                    <ul class="absolute left-auto right-0 z-[1000] float-left m-0 mt-1 hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg dark:bg-neutral-700 [&[data-te-dropdown-show]]:block"
                        aria-labelledby="dropdownMenuButton2" data-te-dropdown-menu-ref>
                        <!-- Second dropdown menu items -->
                        <li>
                            <a class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-white/30"
                                href="#" data-te-dropdown-item-ref>Action</a>
                        </li>
                        <li>
                            <a class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-white/30"
                                href="#" data-te-dropdown-item-ref>Another action</a>
                        </li>
                        <li>
                            <a class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-white/30"
                                href="#" data-te-dropdown-item-ref>Something else here</a>
                        </li>
                    </ul>
                </div>

                <!-- Second dropdown container -->
                <div class="relative" data-te-dropdown-ref>
                    <!-- Second dropdown trigger -->
                    <a
                        class="hidden-arrow flex items-center whitespace-nowrap transition duration-150 ease-in-out motion-reduce:transition-none">
                        @if (Route::has('login'))
                            <div class="order-2 md:order-3 flex items-center" id="nav-content">
                                @auth
                                    <a class="inline-block no-underline hover:text-black" href="{{ url('/dashboard') }}">
                                        <svg class="fill-current hover:text-black" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24">
                                            <circle fill="none" cx="12" cy="7" r="3" />
                                            <path
                                                d="M12 2C9.243 2 7 4.243 7 7s2.243 5 5 5 5-2.243 5-5S14.757 2 12 2zM12 10c-1.654 0-3-1.346-3-3s1.346-3 3-3 3 1.346 3 3S13.654 10 12 10zM21 21v-1c0-3.859-3.141-7-7-7h-4c-3.86 0-7 3.141-7 7v1h2v-1c0-2.757 2.243-5 5-5h4c2.757 0 5 2.243 5 5v1H21z" />
                                        </svg>
                                    </a>
                                @else
                                    <a href="{{ route('login') }}"
                                        class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                                        in</a>

                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}"
                                            class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                                    @endif
                                @endauth
                            </div>
                        @endif
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>
</body>

</html> --}}



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>

<body>
    <!-- component -->
    <!-- follow me on twitter @asad_codes -->

    <div class="flex flex-wrap  h-screen">
        <section class="relative mx-auto">
            <!-- navbar -->
            <nav class="flex justify-between bg-gray-900 text-white w-[100vw]">
                <div class="px-5 xl:px-12 py-6 flex w-full items-center">
                    <a class="text-3xl font-bold font-heading" href="#">
                        <!-- <img class="h-9" src="logo.png" alt="logo"> -->
                        Logo Here.
                    </a>
                    <!-- Nav Links -->
                    <ul class="hidden md:flex px-4 mx-auto font-semibold font-heading space-x-12">
                        <li><a class="hover:text-gray-200" href="{{asset('/')}}">Accueil</a></li>
                        <li><a class="hover:text-gray-200" href="{{asset('/')}}">Vendre</a></li>
                        <li><a class="hover:text-gray-200" href="#">Acheter</a></li>
                        <li><a class="hover:text-gray-200" href="#">Ajoute</a></li>
                        <li><a class="hover:text-gray-200" href="#">Compte</a></li>
                    </ul>

                    <!-- Header Icons -->
                    <div class="hidden xl:flex items-center space-x-5">
                        <a class="hover:text-gray-200" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg>
                        </a>
                        <a class="flex items-center hover:text-gray-200" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                            <span class="flex absolute -mt-5 ml-4">
                                <span
                                    class="animate-ping absolute inline-flex h-3 w-3 rounded-full bg-pink-400 opacity-75"></span>
                                <span class="relative inline-flex rounded-full h-3 w-3 bg-pink-500">
                                </span>
                            </span>
                        </a>
                        <!-- Sign In / Register      -->
                        <a class="flex items-center hover:text-gray-200" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hover:text-gray-200" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </a>
                    </div>
                </div>
                <!-- Responsive navbar -->
                <a class="xl:hidden flex mr-6 items-center" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hover:text-gray-200" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                    <span class="flex absolute -mt-5 ml-4">
                        <span
                            class="animate-ping absolute inline-flex h-3 w-3 rounded-full bg-pink-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-3 w-3 bg-pink-500">
                        </span>
                    </span>
                </a>
                <a class="navbar-burger self-center mr-12 xl:hidden" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" id="open" class="h-6 w-6 hover:text-gray-200"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg class="hidden h-6 w-6" id="close" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </a>
            </nav>
            <div class="hidden md:hidden bg-gray-900" id="navmobiel">
                <div id="navmobiel" class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                    <a href="#"
                        class="block px-3 py-2 rounded-md text-base font-medium text-white bg-gray-900">Home</a>
                    <a href="#"
                        class="block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:text-white hover:bg-gray-700">About</a>
                    <a href="#"
                        class="block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:text-white hover:bg-gray-700">Contact</a>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                @foreach ($bricoles as $bricole)
                    <div
                        class=" !z-5 relative mx-5 rounded-[20px] max-w-[300px] bg-clip-border shadow-3xl shadow-shadow-500 flex flex-col w-full !p-4 3xl:p-![18px] bg-white undefined ml-auto mr-auto mt-6 shadow-2xl">
                        <div class="h-full w-full">
                            <div class="relative w-full">
                                <a href="{{ route('bricole.show', ['id' => $bricole->id]) }}"><img
                                        src="{{ asset('images/' . $bricole->image) }}"
                                        class="mb-3 h-full w-full rounded-xl 3xl:h-full 3xl:w-full" alt=""
                                        style="width:268px; height:178px;"></a>
                                <button
                                    class=" hover:bg-pink-600 absolute top-3 right-3 flex items-center justify-center rounded-full bg-white p-2 text-brand-500 hover:cursor-pointer">
                                    <div
                                        class="hover:bg-pink-600  flex h-full w-full items-center justify-center rounded-full text-xl ">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                            viewBox="0 0 512 512" height="1em" width="1em"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill="none" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="32"
                                                d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z">
                                            </path>
                                        </svg>
                                    </div>
                                </button>
                            </div>
                            <div class="mb-3 flex items-center justify-between px-1 md:items-start">
                                <div class="mb-2">
                                    <p class="text-lg font-bold text-navy-700"> {{ $bricole->nom }} </p>
                                    <p class="mt-1 text-sm font-medium text-gray-600 md:mt-2">
                                        {{ $bricole->description }} </p>
                                    <p class="mt-1 text-sm font-medium text-gray-600 md:mt-2">vill & l'adress:
                                        {{ $bricole->vill }},{{ $bricole->adress }}</p>
                                    <p>nom: {{ $bricole->users->name }}, email:<a
                                            href="mailto:{{ $bricole->users->email }}">{{ $bricole->users->email }}</a>
                                    </p>
                                    <p> </p>
                                </div>
                            </div>
                            <div class="flex items-center justify-between md:items-center lg:justify-between ">
                                <div class="flex">
                                    <p class="!mb-0 text-sm font-bold text-brand-500">prix: {{ $bricole->prix }}
                                        <span>$</span>
                                    </p>
                                </div>
                                <button class="rounded bg-sky-600 w-12 h-8">Save</button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </div>
    <script>
        const open = document.getElementById('open');
        const close = document.getElementById('close');
        const mobilenav = document.getElementById('navmobiel');
        open.addEventListener('click', () => {
            mobilenav.classList.remove('hidden');
            close.classList.remove('hidden');
            open.classList.add('hidden')
        })
        close.addEventListener('click', () => {
            mobilenav.classList.add('hidden');
            close.classList.add('hidden');
            open.classList.remove('hidden')
        })
    </script>
</body>

</html>
