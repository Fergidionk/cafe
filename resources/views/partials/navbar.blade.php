<nav class="navbar navbar-expand-lg navbar-light font-league-spartan sticky w-full z-10 bg-[#573624]">
    <div class="container mx-auto flex items-center justify-between lg:px-8 lg:py-3">
        <!-- Bagian Logo -->
        <a class="navbar-brand flex items-center" href="#">
            <img src="{{ asset('img/icon.png') }}" class="h-12 w-24 mr-3" alt="Logo">
        </a>
        <!-- Bagian Menu -->
        <div class="navbar-nav flex-grow flex justify-center space-x-10">
            <a href="#beranda" class="nav-link font-medium text-[#ffffff] border-b-2 rounded">Beranda</a>
            <a href="#produk" class="nav-link font-medium text-[#ffffff]">Produk</a>
            <a href="#blog" class="nav-link font-medium text-[#ffffff]">Blog</a>
            <a href="#kontak" class="nav-link font-medium text-[#ffffff]">Telp</a>
        </div>
        <!-- Bagian Kanan -->
        <div class="kanan flex items-center gap-4 ml-auto">
            <img src="{{ asset('img/imageNav1.png') }}" class="h-8" alt="Logo">
            <img src="{{ asset('img/imageNav2.png') }}" class="h-8" alt="Logo">
            <img src="{{ asset('img/imageNav3.png') }}" class="h-8" alt="Logo">
            <a class="nav-link font-medium text-[#ffffff] opacity-40">Login</a>
        </div>
    </div>
</nav>
