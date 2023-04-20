

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

    <div class="max-w-sm rounded overflow-hidden shadow-lg ml-auto mr-auto mt-2">
        <img class="w-full" src="{{ asset('images/' . $bricole->image) }}" alt="Sunset in the mountains">
        <div class="px-6 py-4">
            <div class="font-bold text-xl mb-2">{{ $bricole->nom }}</div>
            <p class="text-gray-700 text-base">
                {{ $bricole->description }}
            </p>
        </div>
        <div class="px-6 pt-4 pb-2">
            <span
                class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
            <span
                class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
            <span
                class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
        </div>
    </div>
    <div class="ml-auto mr-auto border w-[384px] rounded shadow-xl mt-2">
        @foreach ($bricole->commentaires as $commentaire)
            <p>{{ $commentaire->commentaire }}</p>
        @endforeach

    </div>
    @livewireStyles
    <livewire:coments id_bricole="{{ $bricole->id }}" />
    @livewireScripts
    <script>
        function showPopover() {
            document.getElementById("popover").classList.toggle("opacity-0");
        }
    </script>
</body>

</html>
