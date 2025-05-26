

<?php $__env->startSection('title', 'Tentang Kami - Bengkel Mobil Beteng Betawi'); ?>

<?php $__env->startSection('content'); ?>
<style>
  /* Tempel CSS LANGSUNG DI SINI */
  .hover\:scale-105 {
    transition: transform 0.5s ease;
  }
  .hover\:scale-105:hover {
    transform: scale(1.05);
  }

  section.bg-blue-800 h1 {
    font-size: 2.5rem;
    font-weight: 700;
  }

  .text-blue-100 {
    color: #dbeafe;
  }

  .icon-circle {
    width: 4rem;
    height: 4rem;
    border-radius: 9999px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 1rem;
  }

  .team-card img {
    object-fit: cover;
    height: 16rem;
  }

  .team-card h3 {
    font-size: 1.125rem;
    font-weight: 600;
  }

  @media (min-width: 768px) {
    section.bg-blue-800 h1 {
      font-size: 3rem;
    }
  }
</style>

<?php $__env->startSection('content'); ?>
    <!-- Header Section -->
    <section class="pt-32 pb-16 bg-blue-800 text-white">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl">
                <h1 class="mb-4">Tentang Kami</h1>
                <p class="text-xl text-blue-100">
                    Mengenal lebih dekat Bengkel Mobil Beteng Betawi dan komitmen kami untuk menyediakan layanan perbaikan mobil terbaik.
                </p>
            </div>
        </div>
    </section>

    <!-- Our Story -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center gap-12">
                <div class="md:w-1/2">
                    <img src="https://images.pexels.com/photos/4489794/pexels-photo-4489794.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
                         alt="Bengkel Mobil Beteng Betawi"
                         class="rounded-lg shadow-lg w-full h-auto object-cover">
                </div>
                <div class="md:w-1/2">
                    <h2 class="text-3xl font-bold mb-6">Kisah Kami</h2>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Bengkel Mobil Beteng Betawi didirikan pada tahun 2010 dengan visi sederhana: menyediakan layanan perbaikan mobil yang jujur, berkualitas, dan terjangkau untuk masyarakat Jakarta dan sekitarnya.
                    </p>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Berawal dari bengkel kecil di kawasan Beteng Betawi, Jakarta Selatan, kami terus berkembang berkat dukungan pelanggan setia dan komitmen kami terhadap kualitas pelayanan. Saat ini, kami memiliki fasilitas modern dengan peralatan diagnostik terkini dan tim teknisi terlatih.
                    </p>
                    <p class="text-gray-600 leading-relaxed">
                        Nama "Beteng Betawi" diambil dari lokasi kami yang berada di kawasan bersejarah Jakarta, melambangkan kekuatan dan ketahanan budaya Betawi yang menjadi inspirasi nilai-nilai bisnis kami.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Values -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold mb-2">Nilai-Nilai Kami</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Prinsip-prinsip yang menjadi panduan kami dalam memberikan layanan terbaik.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Value 1 -->
                <div class="bg-white p-8 rounded-lg shadow-sm flex flex-col items-center text-center">
                    <div class="icon-circle bg-blue-100">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-700" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <line x1="12" y1="8" x2="12" y2="16"></line>
                            <line x1="8" y1="12" x2="16" y2="12"></line>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Integritas</h3>
                    <p class="text-gray-600">
                        Kami selalu bersikap jujur dan transparan dalam setiap aspek bisnis kami, dari diagnosis hingga penagihan.
                    </p>
                </div>

                <!-- Value 2 -->
                <div class="bg-white p-8 rounded-lg shadow-sm flex flex-col items-center text-center">
                    <div class="icon-circle bg-red-100">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-red-700" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path>
                            <circle cx="12" cy="12" r="3"></circle>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Keunggulan</h3>
                    <p class="text-gray-600">
                        Kami berkomitmen untuk memberikan hasil kerja yang luar biasa dengan standar kualitas tinggi.
                    </p>
                </div>

                <!-- Value 3 -->
                <div class="bg-white p-8 rounded-lg shadow-sm flex flex-col items-center text-center">
                    <div class="icon-circle bg-green-100">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-green-700" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Fokus Pelanggan</h3>
                    <p class="text-gray-600">
                        Kepuasan pelanggan adalah prioritas utama kami, kami berusaha melebihi harapan Anda setiap kali.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Team -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold mb-2">Tim Kami</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Kenali para profesional berpengalaman yang siap melayani kebutuhan perbaikan mobil Anda.
                </p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <?php $__currentLoopData = [
                    ['img' => '8961218', 'nama' => 'Budi Santoso', 'posisi' => 'Kepala Mekanik', 'desc' => 'Berpengalaman lebih dari 15 tahun menangani berbagai merek mobil Jepang dan Eropa.'],
                    ['img' => '3807134', 'nama' => 'Deni Wijaya', 'posisi' => 'Spesialis Elektrikal', 'desc' => 'Ahli dalam mendiagnosis dan memperbaiki masalah elektrikal dan komputerisasi pada mobil modern.'],
                    ['img' => '8989469', 'nama' => 'Rina Hartono', 'posisi' => 'Manajer Layanan', 'desc' => 'Mengelola operasional bengkel dan memastikan standar kualitas layanan terpenuhi.'],
                    ['img' => '3806288', 'nama' => 'Anton Gunawan', 'posisi' => 'Teknisi Mesin', 'desc' => 'Spesialis dalam perbaikan mesin dan transmisi dengan ketelitian tinggi.']
                ]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $person): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="bg-gray-50 rounded-lg shadow-sm overflow-hidden team-card">
                    <img src="https://images.pexels.com/photos/<?php echo e($person['img']); ?>/pexels-photo-<?php echo e($person['img']); ?>.jpeg?auto=compress&cs=tinysrgb&w=800"
                         alt="<?php echo e($person['nama']); ?>"
                         class="w-full object-cover object-center">
                    <div class="p-6">
                        <h3><?php echo e($person['nama']); ?></h3>
                        <p class="text-blue-700 mb-3"><?php echo e($person['posisi']); ?></p>
                        <p class="text-gray-600 text-sm"><?php echo e($person['desc']); ?></p>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>

    <!-- Facilities -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold mb-2">Fasilitas Kami</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Bengkel kami dilengkapi dengan peralatan modern dan fasilitas lengkap untuk memberikan layanan terbaik.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <?php $__currentLoopData = [
                    ['img' => '3822843', 'title' => 'Area Bengkel Modern', 'desc' => 'Dilengkapi dengan lift mobil, peralatan diagnostik, dan area kerja yang luas untuk menangani berbagai jenis perbaikan.'],
                    ['img' => '97075', 'title' => 'Ruang Tunggu Nyaman', 'desc' => 'Ruang tunggu pelanggan dengan Wi-Fi gratis, kopi, dan area kerja untuk kenyamanan selama menunggu.']
                ]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="overflow-hidden rounded-lg shadow-md">
                    <img src="https://images.pexels.com/photos/<?php echo e($item['img']); ?>/pexels-photo-<?php echo e($item['img']); ?>.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
                         alt="<?php echo e($item['title']); ?>"
                         class="w-full h-64 object-cover hover:scale-105">
                    <div class="p-6 bg-white">
                        <h3 class="text-xl font-semibold mb-2"><?php echo e($item['title']); ?></h3>
                        <p class="text-gray-600"><?php echo e($item['desc']); ?></p>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\BengkelBeteng\resources\views/about.blade.php ENDPATH**/ ?>