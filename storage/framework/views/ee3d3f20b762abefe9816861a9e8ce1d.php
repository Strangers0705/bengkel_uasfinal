

<?php $__env->startSection('title', 'Kontak Kami - Bengkel Mobil Beteng Betawi'); ?>

<?php $__env->startSection('content'); ?>
<!-- Header -->
<section class="pt-32 pb-12 bg-blue-800 text-white">
    <div class="container mx-auto px-4">
        <h1 class="text-4xl font-bold mb-2">Hubungi Kami</h1>
        <p class="text-blue-100">Kami siap membantu Anda kapan saja.</p>
    </div>
</section>

<!-- Konten -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="flex flex-col lg:flex-row gap-12">
            <!-- Info Kontak -->
            <div class="lg:w-1/3 space-y-8">
                <h2 class="text-2xl font-bold text-gray-900">Informasi Kontak</h2>

                <!-- Telepon -->
                <div class="flex items-start gap-4">
                    <div class="flex-shrink-0 text-blue-700 mt-1">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"
                             viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2
                            19.79 19.79 0 0 1-8.63-3.07
                            19.5 19.5 0 0 1-6-6
                            19.79 19.79 0 0 1-3.07-8.67
                            A2 2 0 0 1 4.11 2h3a2 2 0 0 1
                            2 1.72 12.84 12.84 0 0 0
                            .7 2.81 2 2 0 0 1-.45
                            2.11L8.09 9.91a16 16 0 0 0
                            6 6l1.27-1.27a2 2 0 0 1
                            2.11-.45 12.84 12.84 0 0 0
                            2.81.7A2 2 0 0 1 22 16.92z" />
                        </svg>
                    </div>
                    <div>
                        <p class="font-medium">Nomor Telepon</p>
                        <p class="text-gray-600 text-sm">+62 21-2345-6789</p>
                        <p class="text-gray-600 text-sm">+62 812-3456-7890 (Darurat)</p>
                    </div>
                </div>

                <!-- Email -->
                <div class="flex items-start gap-4">
                    <div class="flex-shrink-0 text-blue-700 mt-1">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"
                             viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0
                            1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2
                            2-2z"></path>
                            <polyline points="22,6 12,13 2,6"></polyline>
                        </svg>
                    </div>
                    <div>
                        <p class="font-medium">Email</p>
                        <p class="text-gray-600 text-sm">info@bengkelbetengbetawi.com</p>
                        <p class="text-gray-600 text-sm">layanan@bengkelbetengbetawi.com</p>
                    </div>
                </div>

                <!-- Alamat -->
                <div class="flex items-start gap-4">
                    <div class="flex-shrink-0 text-blue-700 mt-1">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"
                             viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9
                            9 0 0 1 18 0z"></path>
                            <circle cx="12" cy="10" r="3"></circle>
                        </svg>
                    </div>
                    <div>
                        <p class="font-medium">Alamat</p>
                        <p class="text-gray-600 text-sm">
                            Jl. Kemang Raya No. 123<br>
                            Kemang, Jakarta Selatan 12730<br>
                            Indonesia
                        </p>
                    </div>
                </div>

                <!-- Jam Operasional -->
                <div class="flex items-start gap-4">
                    <div class="flex-shrink-0 text-blue-700 mt-1">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"
                             viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <polyline points="12 6 12 12 16 14"></polyline>
                        </svg>
                    </div>
                    <div>
                        <p class="font-medium">Jam Operasional</p>
                        <p class="text-gray-600 text-sm">Senin - Jumat: 08:00 - 17:00</p>
                        <p class="text-gray-600 text-sm">Sabtu: 08:00 - 15:00</p>
                        <p class="text-gray-600 text-sm">Minggu: 09:00 - 14:00</p>
                    </div>
                </div>

                <!-- Sosial Media -->
                <div>
                    <h3 class="text-lg font-semibold mb-2">Ikuti Kami</h3>
                    <div class="flex space-x-4 text-gray-500">
                        <a href="#" class="hover:text-blue-700" aria-label="Facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="hover:text-red-500" aria-label="Instagram">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="hover:text-blue-400" aria-label="Twitter">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Formulir -->
            <div class="lg:w-2/3">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">Kirim Pesan</h2>

                <?php if(session('success')): ?>
                    <div class="mb-6 bg-green-100 border-l-4 border-green-500 text-green-700 p-4 rounded">
                        <?php echo e(session('success')); ?>

                    </div>
                <?php endif; ?>

                <form action="<?php echo e(route('contact.submit')); ?>" method="POST" class="space-y-6">
                    <?php echo csrf_field(); ?>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700">Nama *</label>
                            <input type="text" name="name" id="name" value="<?php echo e(old('name')); ?>" required
                                class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700">Email *</label>
                            <input type="email" name="email" id="email" value="<?php echo e(old('email')); ?>" required
                                class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                        </div>
                    </div>

                    <div>
                        <label for="phone" class="block text-sm font-medium text-gray-700">Nomor Telepon</label>
                        <input type="text" name="phone" id="phone" value="<?php echo e(old('phone')); ?>"
                            class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    </div>

                    <div>
                        <label for="subject" class="block text-sm font-medium text-gray-700">Subjek *</label>
                        <input type="text" name="subject" id="subject" value="<?php echo e(old('subject')); ?>" required
                            class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    </div>

                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700">Pesan *</label>
                        <textarea name="message" id="message" rows="6" required
                            class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"><?php echo e(old('message')); ?></textarea>
                    </div>

                    <div>
                        <button type="submit"
                            class="inline-flex items-center px-6 py-3 bg-blue-700 text-white font-semibold rounded-md hover:bg-blue-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition">
                            Kirim Pesan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\BengkelBeteng\resources\views/contact.blade.php ENDPATH**/ ?>