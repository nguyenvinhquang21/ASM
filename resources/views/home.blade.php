<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Trang Chủ - Cửa Hàng Quần Áo</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>
<body class="bg-gray-100 dark:bg-gray-900 text-gray-800 dark:text-gray-200">
    <header class="bg-white dark:bg-gray-800 shadow py-4">
        <div class="container mx-auto px-4">
            <h1 class="text-2xl font-semibold">Cửa Hàng Quần Áo</h1>
            <nav class="mt-2">
                <a href="{{ route('home') }}" class="text-gray-600 dark:text-gray-300 hover:text-gray-800 dark:hover:text-gray-100 mr-4">Trang Chủ</a>
                <a href="#" class="text-gray-600 dark:text-gray-300 hover:text-gray-800 dark:hover:text-gray-100 mr-4">Sản Phẩm</a>
                <a href="#" class="text-gray-600 dark:text-gray-300 hover:text-gray-800 dark:hover:text-gray-100 mr-4">Bộ Sưu Tập</a>
                <a href="#" class="text-gray-600 dark:text-gray-300 hover:text-gray-800 dark:hover:text-gray-100">Liên Hệ</a>
                @if (Route::has('login'))
                    <div class="ml-auto">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="text-gray-600 dark:text-gray-300 hover:text-gray-800 dark:hover:text-gray-100 ml-4">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="text-gray-600 dark:text-gray-300 hover:text-gray-800 dark:hover:text-gray-100 ml-4">Đăng Nhập</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="text-gray-600 dark:text-gray-300 hover:text-gray-800 dark:hover:text-gray-100 ml-4">Đăng Ký</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </nav>
        </div>
    </header>

    <main class="container mx-auto px-4 py-8">
        <section class="hero mb-8">
            <div class="bg-cover bg-center h-96 rounded-lg" style="background-image: url('{{ asset('images/hero.jpg') }}')">
                <div class="flex items-center justify-center h-full bg-black bg-opacity-50 text-white rounded-lg">
                    <div class="text-center">
                        <h2 class="text-4xl font-bold mb-4">Khám Phá Phong Cách Của Bạn</h2>
                        <p class="text-lg mb-6">Bộ sưu tập quần áo mới nhất với chất lượng và thiết kế hàng đầu.</p>
                        <a href="#" class="bg-red-500 hover:bg-red-700 text-white font-bold py-3 px-6 rounded-full">Xem Ngay</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="products">
            <h2 class="text-2xl font-semibold mb-4">Sản Phẩm Nổi Bật</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-white dark:bg-gray-800 shadow rounded-lg p-4">
                    <img src="{{ asset('images/product2.jpg') }}" alt="Sản phẩm 1" class="w-full h-48 object-cover rounded-md mb-2">
                    <h3 class="text-lg font-semibold">Áo Thun Cao Cấp</h3>
                    <p class="text-gray-600 dark:text-gray-300">$29.99</p>
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full mt-2">Thêm vào giỏ hàng</button>
                </div>
                </div>
        </section>
    </main>

    <footer class="bg-gray-200 dark:bg-gray-800 py-4 text-center text-gray-600 dark:text-gray-300">
        <p>&copy; {{ date('Y') }} Cửa Hàng Quần Áo. All rights reserved.</p>
    </footer>
</body>
</html>
