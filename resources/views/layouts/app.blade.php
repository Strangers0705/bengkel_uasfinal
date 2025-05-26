<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bengkel Mobil Beteng Betawi - @yield('title')</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome (jika pakai ikon sosial media) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

    <!-- Tailwind + App CSS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
</head>
<body class="font-sans antialiased">

    <!-- Navbar -->
    @include('partials.navbar')

    <!-- Main Content -->
    <main class="pt-20">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white mt-16">
        <div class="container mx-auto px-4 py-12">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Kolom 1 -->
                <div>
                    <h3 class="text-xl font-bold mb-4">Bengkel Mobil Beteng Betawi</h3>
                    <p class="text-gray-400 text-sm leading-relaxed">
                        Melayani berbagai perbaikan dan perawatan kendaraan Anda dengan teknisi profesional dan peralatan modern.
                    </p>
                </div>

                <!-- Kolom 2 -->
                <div>
                    <h3 class="text-xl font-bold mb-4">Kontak</h3>
                    <p class="text-gray-400 text-sm">Jl. Beteng Betawi No. 123</p>
                    <p class="text-gray-400 text-sm">Jakarta Selatan</p>
                    <p class="text-gray-400 text-sm">Telp: (021) 1234-5678</p>
                    <p class="text-gray-400 text-sm">Email: info@betengbetawi.com</p>
                </div>

                <!-- Kolom 3 -->
                <div>
                    <h3 class="text-xl font-bold mb-4">Jam Operasional</h3>
                    <p class="text-gray-400 text-sm">Senin - Jumat: 08.00 - 17.00</p>
                    <p class="text-gray-400 text-sm">Sabtu: 08.00 - 15.00</p>
                    <p class="text-gray-400 text-sm">Minggu: Tutup</p>
                </div>
            </div>

            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400 text-sm">
                <p>&copy; {{ date('Y') }} Bengkel Mobil Beteng Betawi. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Mobile Menu Script -->
    <script>
        function toggleMenu() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        }
    </script>

    @stack('scripts')
</body>
</html>
