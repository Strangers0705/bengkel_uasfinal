

<?php $__env->startSection('title', 'Layanan Kami - Bengkel Mobil Beteng Betawi'); ?>

<?php $__env->startSection('content'); ?>
    <!-- Services Header -->
    <section class="pt-32 pb-16 bg-blue-800 text-white">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl">
                <h1 class="text-4xl font-bold mb-4">Layanan Kami</h1>
                <p class="text-xl text-blue-100">
                    Bengkel Beteng Betawi menyediakan berbagai layanan perbaikan dan perawatan mobil untuk semua merek dan model kendaraan.
                </p>
            </div>
        </div>
    </section>
    
    <!-- Services List -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="bg-gray-50 rounded-lg shadow-md overflow-hidden transform transition-transform hover:-translate-y-1 hover:shadow-lg duration-300">
                    <div class="p-6">
                        <div class="w-12 h-12 rounded-full bg-blue-100 flex items-center justify-center mb-4">
                            <span class="text-blue-700 text-xl w-8 h-8 flex items-center justify-center mx-auto">
                                <span class="w-6 h-6"><?php echo $service->icon; ?></span>
                            </span>
                        </div>
                        <h3 class="text-xl font-semibold mb-2"><?php echo e($service->name); ?></h3>
                        <p class="text-gray-600 mb-4"><?php echo e($service->description); ?></p>
                        <div class="flex items-center justify-between">
                            <p class="text-sm text-gray-500">Mulai dari <?php echo e($service->price_range); ?></p>
                            <a href="<?php echo e(route('services.show', $service)); ?>" class="text-blue-700 hover:text-blue-800 font-medium flex items-center">
                                Detail
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14M12 5l7 7-7 7"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>
    
    <!-- Why Choose Us -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold mb-2">Mengapa Memilih Kami</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Bengkel Beteng Betawi berkomitmen untuk memberikan layanan perbaikan mobil terbaik dengan standar kualitas tinggi.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-100 text-center">
                    <div class="w-16 h-16 mx-auto rounded-full bg-blue-100 flex items-center justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-700" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <path d="M12 8v4l3 3"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold mb-2">Layanan Tepat Waktu</h3>
                    <p class="text-gray-600">Kami menyelesaikan pekerjaan sesuai dengan jadwal yang disepakati.</p>
                </div>
                
                <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-100 text-center">
                    <div class="w-16 h-16 mx-auto rounded-full bg-green-100 flex items-center justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-green-700" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold mb-2">Garansi Pekerjaan</h3>
                    <p class="text-gray-600">Semua perbaikan kami didukung oleh garansi untuk ketenangan pikiran Anda.</p>
                </div>
                
                <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-100 text-center">
                    <div class="w-16 h-16 mx-auto rounded-full bg-red-100 flex items-center justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-red-700" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold mb-2">Pelayanan Pelanggan</h3>
                    <p class="text-gray-600">Tim kami selalu siap membantu dan menjawab semua pertanyaan Anda.</p>
                </div>
                
                <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-100 text-center">
                    <div class="w-16 h-16 mx-auto rounded-full bg-yellow-100 flex items-center justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-yellow-700" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path>
                            <path d="M22 12A10 10 0 0 0 12 2v10z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold mb-2">Harga Transparan</h3>
                    <p class="text-gray-600">Tidak ada biaya tersembunyi. Anda mendapatkan estimasi jelas sebelum pekerjaan dimulai.</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Brands We Service -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold mb-2">Merek Kendaraan yang Kami Layani</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Tim teknisi kami berpengalaman dalam menangani berbagai merek dan model kendaraan.
                </p>
            </div>
            
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-8">
                <div class="p-4 bg-gray-50 rounded-lg flex items-center justify-center">
                    <p class="font-semibold text-gray-700">Toyota</p>
                </div>
                <div class="p-4 bg-gray-50 rounded-lg flex items-center justify-center">
                    <p class="font-semibold text-gray-700">Honda</p>
                </div>
                <div class="p-4 bg-gray-50 rounded-lg flex items-center justify-center">
                    <p class="font-semibold text-gray-700">Suzuki</p>
                </div>
                <div class="p-4 bg-gray-50 rounded-lg flex items-center justify-center">
                    <p class="font-semibold text-gray-700">Daihatsu</p>
                </div>
                <div class="p-4 bg-gray-50 rounded-lg flex items-center justify-center">
                    <p class="font-semibold text-gray-700">Mitsubishi</p>
                </div>
                <div class="p-4 bg-gray-50 rounded-lg flex items-center justify-center">
                    <p class="font-semibold text-gray-700">Nissan</p>
                </div>
                <div class="p-4 bg-gray-50 rounded-lg flex items-center justify-center">
                    <p class="font-semibold text-gray-700">Mazda</p>
                </div>
                <div class="p-4 bg-gray-50 rounded-lg flex items-center justify-center">
                    <p class="font-semibold text-gray-700">BMW</p>
                </div>
                <div class="p-4 bg-gray-50 rounded-lg flex items-center justify-center">
                    <p class="font-semibold text-gray-700">Mercedes</p>
                </div>
                <div class="p-4 bg-gray-50 rounded-lg flex items-center justify-center">
                    <p class="font-semibold text-gray-700">Hyundai</p>
                </div>
                <div class="p-4 bg-gray-50 rounded-lg flex items-center justify-center">
                    <p class="font-semibold text-gray-700">Kia</p>
                </div>
                <div class="p-4 bg-gray-50 rounded-lg flex items-center justify-center">
                    <p class="font-semibold text-gray-700">Wuling</p>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\BengkelBeteng\resources\views/services/index.blade.php ENDPATH**/ ?>