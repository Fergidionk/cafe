<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inknut+Antiqua:wght@400;500;600;700&display=swap"
        rel="stylesheet">
</head>

<body class="bg-[#F4ECEC]">
    @include('partials.navbar')

    {{-- CTA --}}
    <div class="background-image h-screen bg-cover bg-center">
        <div class="grid grid-cols-2 gap-4 lg:px-20 items-center h-64">
            {{-- col-1 --}}
            <div class="flex flex-col h-full justify-center relative">
                <h1 class="font-inknut text-4xl font-bold text-[#5C3219]">Cooffe teen</h1>
                <p class="font-league-spartan font-medium text-[#555454] lg:py-5 text-lg">
                    Nikmati kopi Anda di pagi atau sore hari dengan beragam menu roti untuk menemani Anda di tempat yang
                    sangat unik
                </p>
                <div class="">
                    <button
                        class="px-10 bg-[#956448] hover:bg-[#442e21] text-white font-bold py-2 border border-[#523626] rounded-lg w-auto">
                        Pesan Sekarang
                    </button>
                </div>

            </div>
            {{-- col-2 --}}
            <div class="flex items-center h-full justify-center float-end relative">
                <img src="{{ asset('img/kopi1.png') }}" class="object-contain w-417 lg:py-10" alt="Kopi">
            </div>
        </div>
    </div>
    {{-- Menu --}}
    <div class="what-menu content-center px-20 py-10 background-image-kopiTransparan h-screen">
        <div class="text-center ">
            <h1 class="text-xl font-bold justify-center text-[#ffffff]">Apa Menunya Di Sini?</h1>
        </div>
        {{-- Grid --}}
        <div class="grid grid-cols-3 gap-4 parent-grid py-4">
            <div class="parent-cols-grid">
                <div class="max-w-sm rounded overflow-hidden shadow-lg bg-[#6C4731]">
                    <div class="img px-6 pt-4 flex">
                        <img src="{{ asset('img/kopiPutih.png') }}" class="h-12" alt="">
                        <div class="font-bold text-white font-spartan text-xl mb-2 px-4">Dessert <br> Bowl</div>
                    </div>
                    <div class="px-6 py-4">
                        <p class="text-white font-spartan text-base">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores
                            et perferendis eaque, exercitationem praesentium nihil.
                        </p>
                    </div>
                </div>
            </div>
            <div class="parent-cols-grid">
                <div class="max-w-sm rounded overflow-hidden shadow-lg bg-[#6C4731]">
                    <div class="img px-6 pt-4 flex">
                        <img src="{{ asset('img/kopiPutih.png') }}" class="h-12" alt="">
                        <div class="font-bold text-white font-spartan text-xl mb-2 px-4">Dessert <br> Bowl</div>
                    </div>
                    <div class="px-6 py-4">
                        <p class="text-white font-spartan text-base">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores
                            et perferendis eaque, exercitationem praesentium nihil.
                        </p>
                    </div>
                </div>
            </div>
            <div class="parent-cols-grid">
                <div class="max-w-sm rounded overflow-hidden shadow-lg bg-[#6C4731]">
                    <div class="img px-6 pt-4 flex">
                        <img src="{{ asset('img/kopiPutih.png') }}" class="h-12" alt="">
                        <div class="font-bold text-white font-spartan text-xl mb-2 px-4">Dessert <br> Bowl</div>
                    </div>
                    <div class="px-6 py-4">
                        <p class="text-white font-spartan text-base">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores
                            et perferendis eaque, exercitationem praesentium nihil.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        {{-- end Grid --}}
    </div>

    <div class="p-7">
        {{-- Suasana --}}
        <div class="suasana-page px-4">
            <div class="parent-grid-favorit">
                {{-- heading --}}
                <div class="h1">
                    <h1 class="text-[#573624] font-spartan text-4xl text-bold text-center py-8">Suasana Kafe</h1>
                </div>
                <div class="grid grid-cols-4 gap-4">
                    {{-- satu --}}
                    <div>
                        <img src="{{ asset('img/suasana1.png') }}" class="rounded-110" alt="Kopi">
                    </div>
                    {{-- dua --}}
                    <div>
                        <img src="{{ asset('img/suasana2.png') }}" class="rounded-110" alt="Kopi">
                    </div>
                    <div>
                        <img src="{{ asset('img/suasana3.png') }}" class="rounded-110" alt="Kopi">
                    </div>
                    {{-- dua --}}
                    <div>
                        <img src="{{ asset('img/suasana4.png') }}" class="rounded-110" alt="Kopi">
                    </div>
                </div>
            </div>
            {{-- end padding --}}
        </div>

    </div>


</body>

</div>

</html>
