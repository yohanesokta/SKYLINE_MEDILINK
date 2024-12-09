<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
    <link rel="stylesheet" href="/app/css/app_home.css">
    <div class="apps">
        <div class="navbar">
            <div class="container">
                <div class="search">
                    <input type="text" name="" id="" placeholder="SKYLINE MEDILINK">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
            </div>

            <div class="container">
                <button class="order">
                    <span>Riwayat Order</span>
                    <i class="fa-solid fa-arrow-right"></i>
                </button>
            </div>
        </div>
        <div class="menu">
            <div class="container">
                <img src="/app/asset/g1.svg" alt="">
                <button>
                    <span>Ojek Sehat</span>
                    <img src="/app/asset/image1.webp" alt="">
                </button>
            </div>
            <div class="container">
                <button><img src="/app/asset/image2.webp" alt=""><span>Delivery Obat</span></button>
                <img src="/app/asset/g2.svg" alt="">
            </div>
            <div class="container">
                <div class="top">
                    <h1>Any Other Information</h1>
                    <p>Skyline Medilink adalah aplikasi yang menyediakan layanan pengantaran obat dan ojek.  Aplikasi ini bertujuan untuk meningkatkan aksesibilitas layanan kesehatan dan memberikan kemudahan dalam mendapatkan obat dan layanan kesehatan lainnya</p>
                </div>
                <div class="bottom">
                    <button type="button" class="lacak">
                        <span>Lacak Orderan</span>
                        <img src="/app/asset/g3.svg" alt="">
                    </button>
                    <button>
                        <img src="/app/asset/g4.svg" alt="">
                            <h1>Pesanan Selesai</h1>
                    </button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
