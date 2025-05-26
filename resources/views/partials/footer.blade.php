<style>
  .footer a {
    transition: color 0.3s ease;
  }

  .footer a:hover {
    color: #ffffff;
  }

  .footer h3 {
    font-size: 1.125rem;
    font-weight: 600;
  }

  .footer p, .footer li {
    font-size: 0.875rem;
  }

  .footer input[type="email"] {
    background-color: #1f2937; /* bg-gray-800 */
    color: #fff;
  }

  .footer button {
    background-color: #dc2626;
  }

  .footer button:hover {
    background-color: #b91c1c;
  }

  .footer svg {
    stroke-width: 2;
  }
</style>

<footer class="footer bg-gray-900 text-white pt-16 pb-6 mt-16 border-t border-gray-700">
  <div class="container mx-auto px-4">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">
      <!-- Tentang -->
      <div>
        <div class="flex items-center mb-4">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-red-600 mr-2" viewBox="0 0 24 24" fill="none" stroke="currentColor"
            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path
              d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z" />
          </svg>
          <span class="text-xl font-bold">Bengkel <span class="text-red-600">Beteng Betawi</span></span>
        </div>
        <p class="text-gray-400 mb-4 leading-relaxed">
          Bengkel kami menyediakan layanan servis dan perawatan mobil terbaik dengan teknisi profesional dan peralatan modern.
        </p>
        <p class="text-gray-400">Jl. Pahlawan No. 123, Jakarta</p>
        <p class="text-gray-400">Senin - Sabtu: 08.00 - 17.00</p>
        <div class="flex space-x-4 mt-4">
          <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-instagram"></i></a>
          <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-twitter"></i></a>
        </div>
      </div>

      <!-- Link Cepat -->
      <div>
        <h3 class="mb-4">Link Cepat</h3>
        <ul class="space-y-3">
          <li><a href="{{ route('home') }}" class="text-gray-400 hover:text-white">Beranda</a></li>
          <li><a href="{{ route('services') }}" class="text-gray-400 hover:text-white">Layanan</a></li>
          <li><a href="{{ route('about') }}" class="text-gray-400 hover:text-white">Tentang Kami</a></li>
          <li><a href="{{ route('gallery') }}" class="text-gray-400 hover:text-white">Galeri</a></li>
          <li><a href="{{ route('contact') }}" class="text-gray-400 hover:text-white">Kontak</a></li>
        </ul>
      </div>

      <!-- Layanan -->
      <div>
        <h3 class="mb-4">Layanan</h3>
        <ul class="space-y-3 text-gray-400">
          <li>Servis Berkala</li>
          <li>Tune-Up Mesin</li>
          <li>Ganti Oli & Filter</li>
          <li>Perbaikan Rem</li>
          <li>AC & Elektrikal</li>
        </ul>
      </div>

      <!-- Hubungi Kami -->
      <div>
        <h3 class="mb-4">Hubungi Kami</h3>
        <p class="text-gray-400 mb-2">📞 0812-3456-7890</p>
        <p class="text-gray-400 mb-4">✉️ info@betengbetawi.com</p>
        <form>
          <input type="email" placeholder="Email Anda"
            class="w-full px-3 py-2 rounded placeholder-gray-500 focus:outline-none focus:ring focus:ring-red-600">
          <button type="submit"
            class="mt-2 w-full transition-colors text-white px-3 py-2 rounded text-sm">Berlangganan</button>
        </form>
      </div>
    </div>

    <!-- Copyright -->
    <div class="mt-12 border-t border-gray-700 pt-6 text-center text-sm text-gray-400">
      &copy; {{ date('Y') }} Bengkel Beteng Betawi. All rights reserved.
    </div>
  </div>
</footer>
