@extends('layouts.app')

@section('title', 'Galeri - Bengkel Mobil Beteng Betawi')

@section('head')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />
@endsection

@section('content')
    <!-- Gallery Header -->
    <section class="pt-32 pb-16 bg-blue-800 text-white">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl">
                <h1 class="text-4xl font-bold mb-4">Galeri</h1>
                <p class="text-xl text-blue-100">
                    Lihat hasil kerja kami dan fasilitas bengkel modern yang kami miliki.
                </p>
            </div>
        </div>
    </section>
    
    <!-- Gallery Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="mb-12">
                <h2 class="text-3xl font-bold mb-8 text-center">Hasil Pekerjaan Kami</h2>
                
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    <a href="https://images.pexels.com/photos/3807349/pexels-photo-3807349.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" class="glightbox" data-gallery="gallery1">
                        <div class="overflow-hidden rounded-lg shadow-md group">
                            <img src="https://images.pexels.com/photos/3807349/pexels-photo-3807349.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Car Engine Repair" class="w-full h-64 object-cover object-center group-hover:scale-110 transition-transform duration-500">
                            <div class="p-4 bg-white">
                                <p class="font-medium text-gray-800">Perbaikan Mesin</p>
                            </div>
                        </div>
                    </a>
                    
                    <a href="https://images.pexels.com/photos/3807495/pexels-photo-3807495.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" class="glightbox" data-gallery="gallery1">
                        <div class="overflow-hidden rounded-lg shadow-md group">
                            <img src="https://images.pexels.com/photos/3807495/pexels-photo-3807495.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Brake System" class="w-full h-64 object-cover object-center group-hover:scale-110 transition-transform duration-500">
                            <div class="p-4 bg-white">
                                <p class="font-medium text-gray-800">Sistem Pengereman</p>
                            </div>
                        </div>
                    </a>
                    
                    <a href="https://images.pexels.com/photos/4489734/pexels-photo-4489734.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" class="glightbox" data-gallery="gallery1">
                        <div class="overflow-hidden rounded-lg shadow-md group">
                            <img src="https://images.pexels.com/photos/4489734/pexels-photo-4489734.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Wheel Alignment" class="w-full h-64 object-cover object-center group-hover:scale-110 transition-transform duration-500">
                            <div class="p-4 bg-white">
                                <p class="font-medium text-gray-800">Spooring & Balancing</p>
                            </div>
                        </div>
                    </a>
                    
                    <a href="https://images.pexels.com/photos/2244746/pexels-photo-2244746.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" class="glightbox" data-gallery="gallery1">
                        <div class="overflow-hidden rounded-lg shadow-md group">
                            <img src="https://images.pexels.com/photos/2244746/pexels-photo-2244746.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Car Painting" class="w-full h-64 object-cover object-center group-hover:scale-110 transition-transform duration-500">
                            <div class="p-4 bg-white">
                                <p class="font-medium text-gray-800">Pengecatan Mobil</p>
                            </div>
                        </div>
                    </a>
                    
                    <a href="https://images.pexels.com/photos/3806249/pexels-photo-3806249.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" class="glightbox" data-gallery="gallery1">
                        <div class="overflow-hidden rounded-lg shadow-md group">
                            <img src="https://images.pexels.com/photos/3806249/pexels-photo-3806249.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Car Electrical System" class="w-full h-64 object-cover object-center group-hover:scale-110 transition-transform duration-500">
                            <div class="p-4 bg-white">
                                <p class="font-medium text-gray-800">Sistem Elektrikal</p>
                            </div>
                        </div>
                    </a>
                    
                    <a href="https://images.pexels.com/photos/8985459/pexels-photo-8985459.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" class="glightbox" data-gallery="gallery1">
                        <div class="overflow-hidden rounded-lg shadow-md group">
                            <img src="https://images.pexels.com/photos/8985459/pexels-photo-8985459.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Air Conditioning Service" class="w-full h-64 object-cover object-center group-hover:scale-110 transition-transform duration-500">
                            <div class="p-4 bg-white">
                                <p class="font-medium text-gray-800">Servis AC</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            
            <div class="mt-16">
                <h2 class="text-3xl font-bold mb-8 text-center">Fasilitas Kami</h2>
                
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    <a href="https://images.pexels.com/photos/3822843/pexels-photo-3822843.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" class="glightbox" data-gallery="gallery2">
                        <div class="overflow-hidden rounded-lg shadow-md group">
                            <img src="https://images.pexels.com/photos/3822843/pexels-photo-3822843.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Workshop Area" class="w-full h-64 object-cover object-center group-hover:scale-110 transition-transform duration-500">
                            <div class="p-4 bg-white">
                                <p class="font-medium text-gray-800">Area Bengkel</p>
                            </div>
                        </div>
                    </a>
                    
                    <a href="https://images.pexels.com/photos/97075/pexels-photo-97075.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" class="glightbox" data-gallery="gallery2">
                        <div class="overflow-hidden rounded-lg shadow-md group">
                            <img src="https://images.pexels.com/photos/97075/pexels-photo-97075.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Waiting Room" class="w-full h-64 object-cover object-center group-hover:scale-110 transition-transform duration-500">
                            <div class="p-4 bg-white">
                                <p class="font-medium text-gray-800">Ruang Tunggu</p>
                            </div>
                        </div>
                    </a>
                    
                    <a href="https://images.pexels.com/photos/4489742/pexels-photo-4489742.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" class="glightbox" data-gallery="gallery2">
                        <div class="overflow-hidden rounded-lg shadow-md group">
                            <img src="https://images.pexels.com/photos/4489742/pexels-photo-4489742.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Diagnostic Equipment" class="w-full h-64 object-cover object-center group-hover:scale-110 transition-transform duration-500">
                            <div class="p-4 bg-white">
                                <p class="font-medium text-gray-800">Peralatan Diagnostik</p>
                            </div>
                        </div>
                    </a>
                    
                    <a href="https://images.pexels.com/photos/3807811/pexels-photo-3807811.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" class="glightbox" data-gallery="gallery2">
                        <div class="overflow-hidden rounded-lg shadow-md group">
                            <img src="https://images.pexels.com/photos/3807811/pexels-photo-3807811.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Service Bays" class="w-full h-64 object-cover object-center group-hover:scale-110 transition-transform duration-500">
                            <div class="p-4 bg-white">
                                <p class="font-medium text-gray-800">Area Servis</p>
                            </div>
                        </div>
                    </a>
                    
                    <a href="https://images.pexels.com/photos/2700533/pexels-photo-2700533.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" class="glightbox" data-gallery="gallery2">
                        <div class="overflow-hidden rounded-lg shadow-md group">
                            <img src="https://images.pexels.com/photos/2700533/pexels-photo-2700533.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Tools" class="w-full h-64 object-cover object-center group-hover:scale-110 transition-transform duration-500">
                            <div class="p-4 bg-white">
                                <p class="font-medium text-gray-800">Peralatan Modern</p>
                            </div>
                        </div>
                    </a>
                    
                    <a href="https://images.pexels.com/photos/3807213/pexels-photo-3807213.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" class="glightbox" data-gallery="gallery2">
                        <div class="overflow-hidden rounded-lg shadow-md group">
                            <img src="https://images.pexels.com/photos/3807213/pexels-photo-3807213.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Workshop Exterior" class="w-full h-64 object-cover object-center group-hover:scale-110 transition-transform duration-500">
                            <div class="p-4 bg-white">
                                <p class="font-medium text-gray-800">Eksterior Bengkel</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>
<script>
    const lightbox = GLightbox({
        touchNavigation: true,
        loop: true,
        autoplayVideos: true
    });
</script>
@endsection