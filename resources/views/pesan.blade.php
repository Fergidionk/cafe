<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Pemesanan</title>
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <style>
        body {
            font-family: 'League Spartan', sans-serif;
        }
    </style>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#F4ECEC]">

    <div class="container mx-auto py-12 px-6">
        <!-- 2 Section Layout -->
        <div class="grid grid-cols-12 gap-6">

            <!-- Left Section: Product Details (8/12) -->
            <div class="col-span-8 bg-[#FFF4F0] p-6 rounded-lg shadow-lg">
                <!-- Dynamic Title -->
                <h1 id="product-title" class="text-4xl font-bold text-[#5C3219] mb-6">Coffe Latte</h1>

                <!-- Dynamic Image -->
                <div class="flex justify-center mb-6">
                    <img id="product-image" src="{{ asset('img/menu1.png') }}" alt="Coffe Latte"
                        class="w-1/2 rounded-lg shadow">
                </div>

                <!-- Toppings Options -->
                <div class="mb-6">
                    <h2 class="text-2xl text-[#573624] font-bold mb-3">Topping</h2>
                    <div class="grid grid-cols-2 gap-4">
                        <label class="flex items-center">
                            <input type="checkbox" class="mr-2" value="Chocolate">
                            <span class="text-lg">Coklat</span>
                        </label>
                        <label class="flex items-center">
                            <input type="checkbox" class="mr-2" value="Oreo">
                            <span class="text-lg">Oreo</span>
                        </label>
                        <label class="flex items-center">
                            <input type="checkbox" class="mr-2" value="White Chocolate">
                            <span class="text-lg">White Coklat</span>
                        </label>
                        <label class="flex items-center">
                            <input type="checkbox" class="mr-2" value="Caramel">
                            <span class="text-lg">Caramel</span>
                        </label>
                    </div>
                </div>

                <!-- Quantity Control -->
                <div class="mb-6">
                    <h2 class="text-2xl text-[#573624] font-bold mb-3">Jumlah</h2>
                    <div class="flex items-center">
                        <button id="decrease"
                            class="px-4 py-2 bg-[#956448] text-white font-bold rounded hover:bg-[#442e21]">-</button>
                        <span id="quantity" class="mx-4 text-lg">1</span>
                        <button id="increase"
                            class="px-4 py-2 bg-[#956448] text-white font-bold rounded hover:bg-[#442e21]">+</button>
                    </div>
                </div>

            </div>

            <!-- Right Section: Payment Form (4/12) -->
            <div class="col-span-4 bg-[#FFF4F0] p-6 rounded-lg shadow-lg">
                <h2 class="text-3xl font-bold text-[#573624] mb-6">Detail Pemesanan</h2>

                <!-- Form -->
                <form>
                    <!-- Name -->
                    <div class="mb-4">
                        <label for="name" class="block text-lg text-[#573624] font-bold mb-2">Nama</label>
                        <input type="text" id="name"
                            class="w-full p-3 border border-[#956448] rounded focus:outline-none"
                            placeholder="Nama Anda">
                    </div>

                    <!-- Address (Nomor Meja) -->
                    <div class="mb-4">
                        <label for="address" class="block text-lg text-[#573624] font-bold mb-2">Nomor Meja</label>
                        <input type="text" id="address"
                            class="w-full p-3 border border-[#956448] rounded focus:outline-none"
                            placeholder="Nomor Meja">
                    </div>

                    <!-- Phone Number -->
                    <div class="mb-4">
                        <label for="phone" class="block text-lg text-[#573624] font-bold mb-2">Nomor Telepon</label>
                        <input type="tel" id="phone"
                            class="w-full p-3 border border-[#956448] rounded focus:outline-none"
                            placeholder="Nomor Telepon">
                    </div>

                    <!-- Selected Toppings -->
                    <div class="mb-4">
                        <h3 class="text-lg text-[#573624] font-bold">Topping Pilihan:</h3>
                        <p id="selected-toppings" class="text-[#573624]">Coklat, Oreo</p>
                    </div>

                    <!-- Price -->
                    <div class="mb-6">
                        <h3 class="text-lg text-[#573624] font-bold">Harga:</h3>
                        <p class="text-[#573624]">Rp 35.000</p>
                    </div>

                    <!-- Order Button -->
                    <div class="text-center">
                        <button type="submit" onclick="pesan()"
                            class="w-full bg-[#956448] text-white font-bold py-3 rounded hover:bg-[#442e21]">Pesan
                            Sekarang</button>
                    </div>

                </form>

                <!-- Rating Section -->
                <div class="mt-6">
                    <h3 class="text-lg text-[#573624] font-bold">Beri Rating:</h3>
                    <div id="rating-stars" class="flex space-x-2 mt-2">
                        <!-- Stars will be dynamically updated here -->
                    </div>
                </div>

            </div>

        </div>
    </div>

    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        const products = {
            'CoffeLatte': {
                title: 'Coffe Latte',
                image: '{{ asset('img/menu1.png') }}',
                description: 'Kopi ini memiliki rasa yang milky. Anda bisa menambah topping lain sesuai selera. Kopi ini bisa diminum dengan keadaan dingin maupun hangat.'
            },
            'IceCreamCappucino': {
                title: 'Ice Cream Cappucino',
                image: '{{ asset('img/menu2.png') }}',
                description: 'Es Krim dengan rasa kopi cappucino adalah menu terbaik di kafe kami. Anda bisa menambahkan topping sesuai selera.'
            },
            'BreadBaguette': {
                title: 'Bread Baguette',
                image: '{{ asset('img/menu3.png') }}',
                description: 'Roti ini adalah yang paling unik di kafe kami. Anda bisa memesan sandwich atau roti manis sesuai selera.'
            }
        };

        // Ambil ID produk dari URL
        const urlParams = new URLSearchParams(window.location.search);
        const productId = urlParams.get('product') || 'CoffeLatte'; // Default ke Coffe Latte jika ID tidak ada

        // Dapatkan produk yang sesuai
        const product = products[productId];

         // Rating Control
         const ratingStarsContainer = document.getElementById('rating-stars');
        let currentRating = 0;

        function updateStars() {
            ratingStarsContainer.innerHTML = '';
            for (let i = 1; i <= 5; i++) {
                const star = document.createElement('span');
                star.textContent = i <= currentRating ? '★' : '☆';
                star.className = 'text-yellow-500 text-2xl cursor-pointer';
                star.addEventListener('click', () => {
                    currentRating = i;
                    updateStars();
                });
                ratingStarsContainer.appendChild(star);
            }
        }

        updateStars(); // Initialize stars display

        updateStars(); // Initialize stars display

        // Update halaman dengan detail produk
        document.getElementById('product-title').textContent = product.title;
        document.getElementById('product-image').src = product.image;
        document.getElementById('product-description').textContent = product.description;

        function pesan() {
            let timerInterval;
            Swal.fire({
                title: "Pesanan akan Terkirim",
                html: "Pesan Terkirim Dalam <b></b> milliseconds.",
                timer: 2000,
                timerProgressBar: true,
                didOpen: () => {
                    Swal.showLoading();
                    const timer = Swal.getPopup().querySelector("b");
                    timerInterval = setInterval(() => {
                        timer.textContent = `${Swal.getTimerLeft()}`;
                    }, 100);
                },
                willClose: () => {
                    clearInterval(timerInterval);
                }
            }).then((result) => {
                /* Read more about handling dismissals below */
                if (result.dismiss === Swal.DismissReason.timer) {
                    console.log("I was closed by the timer");
                }
            });
        }
        // Handle tombol "Pesan Sekarang"
    </script>

</body>

</html>
