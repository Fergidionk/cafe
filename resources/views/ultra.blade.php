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
    <div class="background-image h-screen bg-cover bg-center shadow-lg	">
        <div class="grid grid-cols-2 gap-4 lg:px-20 items-center h-64">
            {{-- col-1 --}}
            <div class="flex flex-col justify-center relative">
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
    <div class="what-menu content-center px-20 py-10 background-image-kopiTransparan h-screen border-2 shadow-lg	">
        <div class="text-center ">
            <h1 class="text-xl font-bold justify-center text-[#573624]">Apa Menunya Di Sini?</h1>
        </div>
        {{-- Grid --}}
        <div class="grid grid-cols-3 gap-4 parent-grid py-4">
            <div class="parent-cols-grid">
                <div class="max-w-sm rounded overflow-hidden shadow-lg bg-[#6C4731] ">
                    <div class="img px-6 pt-4 flex">
                        <img src="{{ asset('img/kopiPutih.png') }}" class="h-12" alt="">
                        <div class="font-bold text-white font-spartan text-xl mb-2 px-4">Dessert <br> Bowl</div>
                    </div>
                    <div class="px-6 py-4">
                        <p class="text-white font-spartan text-base">
                            menyediakan berbagai macam kopi untuk menemani Anda sepanjang waktu. Bosan dengan kopi
                            polosan? Anda juga bisa meminta
                            menu yang Anda suka dengan tambahan susu, coklat dan topping lainnya
                        </p>
                    </div>
                </div>
            </div>
            <div class="parent-cols-grid">
                <div class="max-w-sm rounded overflow-hidden shadow-lg bg-[#6C4731]">
                    <div class="img px-6 pt-4 flex">
                        <img src="{{ asset('img/desertBowl.png') }}" class="h-12" alt="">
                        <div class="font-bold text-white font-spartan text-xl mb-2 px-4">Dessert <br> Bowl</div>
                    </div>
                    <div class="px-6 py-4">
                        <p class="text-white font-spartan text-base">
                            menyediakan berbagai macam rasa dan topping. Anda juga bisa memesan dua rasa dengan harga
                            yang sama. Kami juga menyediakan topping aneka buah-buahan dan jelly yang memiliki karakter
                            lucu
                        </p>
                    </div>
                </div>
            </div>
            <div class="parent-cols-grid">
                <div class="max-w-sm rounded overflow-hidden shadow-lg bg-[#6C4731]">
                    <div class="img px-6 pt-4 flex">
                        <img src="{{ asset('img/bread.png') }}" class="h-12" alt="">
                        <div class="font-bold text-white font-spartan text-xl mb-2 px-4">Dessert <br> Bowl</div>
                    </div>
                    <div class="px-6 py-4">
                        <p class="text-white font-spartan text-base">
                            Kami menyediakan berbagai jenis roti renyah untuk dinikmati. Mulai dari baguette, sandwich,
                            burger, hingga roti gulung dan roti buah, dengan berbagai rasa yang dapat disesuaikan dengan
                            permintaan Anda.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        {{-- end Grid --}}
    </div>
    {{-- Suasana --}}
    <div class="p-7">
        <div class="suasana-page px-4">
            <div class="parent-grid-favorit">
                {{-- heading --}}
                <div class="h1">
                    <h1 class="text-[#573624] font-spartan text-4xl text-bold text-center py-8 ">Suasana Kafe</h1>
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
    {{-- Menu --}}
    <div class="menu bg-[#573624] h-screen">
        <div class="judul text-4xl text-[#FFFFFF] text-center py-8">
            <h1 class="font-spartan">
                Menu Terbaik di kafe kami
            </h1>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 px-8">
            {{-- card 1 --}}
            <div class="max-w-sm hover:scale-105 ease-in duration-150 rounded overflow-hidden shadow-lg background-image-menu mx-auto">
                <img class="mx-auto" src="{{ asset('img/menu1.png') }}" alt="Sunset in the mountains">
                <div class="px-6 py-4 text-center">
                    <div class="font-bold text-xl mb-2 text-white">Coffe Latte</div>
                    <p class="text-white text-base font-spartan">
                        Kopi ini memiliki rasa yang milky. Anda bisa menambah topping lain sesuai selera. Kopi ini bisa
                        diminum dengan keadaan dingin maupun hangat
                    </p>
                    <div class="button px-8 mt-4 opacity-80">
                        <a href="pesan?product=CoffeLatte" class="bg-[#956448] hover:bg-[#7d543c] text-white font-bold py-2 px-4 rounded">Pesan</a>
                    </div>
                </div>
            </div>

            {{-- card 2 --}}
            <div class="max-w-sm hover:scale-105 ease-in duration-150 rounded overflow-hidden shadow-lg background-image-menu mx-auto">
                <img class="mx-auto" src="{{ asset('img/menu2.png') }}" alt="Sunset in the mountains">
                <div class="px-6 py-4 text-center">
                    <div class="font-bold text-xl mb-2 text-white">Ice Cream Cappucino</div>
                    <p class="text-white text-base font-spartan">
                        Es Krim dengan rasa kopi cappucino adalah menu terbaik di kafe kami. Bukan hanya rasa kopi saja,
                        berbagai toping juga bisa anda tambahkan dan rasakan kenikmatan es krim cappucino disini.
                    </p>
                    <div class="button px-8 mt-4 opacity-80">
                        <a href="pesan?product=IceCreamCappucino" class="bg-[#956448] hover:bg-[#7d543c] text-white font-bold py-2 px-4 rounded">Pesan</a>

                    </div>
                </div>
            </div>

            {{-- card 3 --}}
            <div class="max-w-sm hover:scale-105 ease-in duration-150 rounded overflow-hidden shadow-lg background-image-menu mx-auto">
                <img class="mx-auto" src="{{ asset('img/menu3.png') }}" alt="Sunset in the mountains">
                <div class="px-6 py-4 text-center">
                    <div class="font-bold text-xl mb-2 text-white">Bread Baguette</div>
                    <p class="text-white text-base font-spartan">
                        Roti ini adalah yang paling unik di kafe kami. Bentuknya yang panjang menyerupai tongkat dan
                        berbagai rasa lain tersedia.
                        Sesuai dengan selera, anda bisa memesan sandwich atau roti manis
                    </p>
                    <div class="button px-8 mt-4 opacity-80">
                        <a href="pesan?product=BreadBaguette" class="bg-[#956448] hover:bg-[#7d543c] text-white font-bold py-2 px-4 rounded">Pesan</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @include('partials/footer')
</body>

</div>

</html>
