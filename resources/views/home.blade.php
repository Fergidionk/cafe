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

<body class="bg-[#6C4731]">
  
@include('partials.navbar')
    {{-- CTA --}}
    <div class="background-image h-screen bg-cover bg-center">
      
        <div class="absolute inset-0 bg-[#573624] opacity-40"></div>
        <div class="grid grid-cols-2 gap-4 lg:px-20 items-center h-64">
            {{-- col-1 --}}
            <div class="flex flex-col h-full justify-center relative">
                <h1 class="font-inknut text-4xl text-[#FFC4A3]">Cooffe teen</h1>
                <p class="font-league-spartan font-medium text-[#ffffff] lg:py-5 text-lg">
                    Enjoy your coffee in the morning or evening with a variety of bread menus to accompany you in a very
                    unique place.
                </p>
                <div class="">
                    <button
                        class="px-10 bg-[#956448] hover:bg-[#442e21] text-white font-bold py-2 border border-[#523626] rounded-lg w-auto">
                        Order Now
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
    <div class="what-menu bg-[#573624] content-center px-20 py-10">
        <div class="text-center ">
            <h1 class="text-xl font-bold justify-center text-[#ffffff]">What's on the menu here?</h1>
        </div>
        {{-- Grid --}}
        <div class="grid grid-cols-3 gap-4 parent-grid py-4">
            <div class="parent-cols-grid">
                <div class="child-grid flex gap-4">
                    <img src="{{ asset('img/kopiPutih.png') }}" class="h-12" alt="">
                    <h2 class="text text-md text-white font-bold">Dessert <br> Bowl</h2>
                </div>
                <div class="chil-grid-text">
                    <p class="font-league-spartan text-white py-4 px-4">
                        menyediakan berbagai macam rasa dan topping. Anda juga bisa memesan dua rasa dengan harga yang
                        sama. Kami juga menyediakan topping aneka buah-buahan dan jelly yang memiliki karakter lucu
                    </p>
                </div>
            </div>
            <div class="parent-cols-grid px-10">
                <div class="child-grid-heading flex gap-4">
                    <img src="{{ asset('img/kopiPutih.png') }}" class="h-12" alt="">
                    <h2 class="text text-md text-white font-bold">Hot/Cold <br> Coffe</h2>
                </div>
                <div class="chil-grid-text">
                    <p class="font-league-spartan text-white py-4 px-1">
                        menyediakan berbagai macam kopi untuk menemani Anda sepanjang waktu. Anda juga bisa meminta menu
                        yang Anda suka dengan tambahan susu, coklat dan topping lainnya
                    </p>
                </div>
            </div>
            <div class="parent-cols-grid">
                <div class="child-grid flex gap-4">
                    <img src="{{ asset('img/kopiPutih.png') }}" class="h-12" alt="">
                    <h2 class="text text-md text-white font-bold">Bread <br> Baguette</h2>
                </div>
                <div class="chil-grid-text">
                    <p class="font-league-spartan text-white py-4 px-4">
                        menyediakan berbagai macam roti yang sangat renyah dalam satu gigitan. Tidak hanya baguette
                        saja, kami juga menyediakan sandwich, burger, roti buah, roti gulung. Tentunya dengan berbagai
                        rasa sesuai permintaan Anda
                    </p>
                </div>
            </div>
        </div>
        {{-- end Grid --}}
    </div>

    <div class="p-7">
        {{-- favorit --}}
        <div class="favorit-page background-image-2">
            <div class="parent-grid-favorit ">
                <div class="grid grid-cols-2">
                    {{-- kiri --}}
                    <div>
                        <img src="{{ asset('img/breakfast1.png') }}" class="" alt="Kopi">
                    </div>

                    {{-- kanan --}}
                    <div>
                        <h1 class="text-md text-center mt-5 font-bold text-white text-3xl font-inknut">Menu Rekomendasi
                            Untuk Sarapan</h1>
                    </div>
                </div>
            </div>
            {{-- end padding --}}
        </div>

    </div>


</body>

</div>

</html>
