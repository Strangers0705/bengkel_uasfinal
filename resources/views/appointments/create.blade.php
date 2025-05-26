@extends('layouts.app')

@section('title', 'Buat Janji - Bengkel Mobil Beteng Betawi')

@section('content')
    <!-- Appointment Header -->
    <section class="pt-32 pb-16 bg-blue-800 text-white">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl">
                <h1 class="text-4xl font-bold mb-4">Buat Janji</h1>
                <p class="text-xl text-blue-100">
                    Isi formulir di bawah ini untuk menjadwalkan perbaikan atau perawatan kendaraan Anda. Kami akan menghubungi Anda untuk konfirmasi.
                </p>
            </div>
        </div>
    </section>
    
    <!-- Appointment Form -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl mx-auto bg-gray-50 rounded-lg shadow-md p-8">
                @if ($errors->any())
                    <div class="mb-6 bg-red-100 border-l-4 border-red-500 text-red-700 p-4 rounded">
                        <p class="font-medium">Mohon perbaiki kesalahan berikut:</p>
                        <ul class="mt-2 list-disc list-inside">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                
                <form action="{{ route('appointments.store') }}" method="POST" class="space-y-6">
                    @csrf
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Personal Information -->
                        <div class="space-y-6">
                            <h3 class="text-xl font-semibold mb-4">Informasi Pribadi</h3>
                            
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap *</label>
                                <input type="text" name="name" id="name" value="{{ old('name') }}" required
                                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500">
                            </div>
                            
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email *</label>
                                <input type="email" name="email" id="email" value="{{ old('email') }}" required
                                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500">
                            </div>
                            
                            <div>
                                <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Nomor Telepon *</label>
                                <input type="text" name="phone" id="phone" value="{{ old('phone') }}" required
                                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500">
                            </div>
                        </div>
                        
                        <!-- Vehicle Information -->
                        <div class="space-y-6">
                            <h3 class="text-xl font-semibold mb-4">Informasi Kendaraan</h3>
                            
                            <div>
                                <label for="vehicle_make" class="block text-sm font-medium text-gray-700 mb-1">Merek Mobil *</label>
                                <input type="text" name="vehicle_make" id="vehicle_make" value="{{ old('vehicle_make') }}" required
                                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500">
                            </div>
                            
                            <div>
                                <label for="vehicle_model" class="block text-sm font-medium text-gray-700 mb-1">Model Mobil *</label>
                                <input type="text" name="vehicle_model" id="vehicle_model" value="{{ old('vehicle_model') }}" required
                                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500">
                            </div>
                            
                            <div>
                                <label for="year" class="block text-sm font-medium text-gray-700 mb-1">Tahun *</label>
                                <input type="number" name="year" id="year" value="{{ old('year') }}" required min="1900" max="{{ date('Y') + 1 }}"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500">
                            </div>
                        </div>
                    </div>
                    
                    <div class="space-y-6 pt-6 border-t border-gray-200">
                        <h3 class="text-xl font-semibold mb-4">Informasi Layanan</h3>
                        
                        <div>
                            <label for="service_id" class="block text-sm font-medium text-gray-700 mb-1">Jenis Layanan *</label>
                            <select name="service_id" id="service_id" required
                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500">
                                <option value="">Pilih Layanan</option>
                                @foreach($services as $service)
                                    <option value="{{ $service->id }}" {{ old('service_id') == $service->id ? 'selected' : '' }}>
                                        {{ $service->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="preferred_date" class="block text-sm font-medium text-gray-700 mb-1">Tanggal *</label>
                                <input type="date" name="preferred_date" id="preferred_date" value="{{ old('preferred_date') }}" required
                                    min="{{ date('Y-m-d') }}"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500">
                            </div>
                            
                            <div>
                                <label for="preferred_time" class="block text-sm font-medium text-gray-700 mb-1">Waktu *</label>
                                <select name="preferred_time" id="preferred_time" required
                                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500">
                                    <option value="">Pilih Waktu</option>
                                    <option value="08:00" {{ old('preferred_time') == '08:00' ? 'selected' : '' }}>08:00</option>
                                    <option value="09:00" {{ old('preferred_time') == '09:00' ? 'selected' : '' }}>09:00</option>
                                    <option value="10:00" {{ old('preferred_time') == '10:00' ? 'selected' : '' }}>10:00</option>
                                    <option value="11:00" {{ old('preferred_time') == '11:00' ? 'selected' : '' }}>11:00</option>
                                    <option value="13:00" {{ old('preferred_time') == '13:00' ? 'selected' : '' }}>13:00</option>
                                    <option value="14:00" {{ old('preferred_time') == '14:00' ? 'selected' : '' }}>14:00</option>
                                    <option value="15:00" {{ old('preferred_time') == '15:00' ? 'selected' : '' }}>15:00</option>
                                    <option value="16:00" {{ old('preferred_time') == '16:00' ? 'selected' : '' }}>16:00</option>
                                </select>
                            </div>
                        </div>
                        
                        <div>
                            <label for="description" class="block text-sm font-medium text-gray-700 mb-1">Deskripsi Masalah</label>
                            <textarea name="description" id="description" rows="4"
                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500">{{ old('description') }}</textarea>
                        </div>
                    </div>
                    
                    <div class="pt-6 border-t border-gray-200">
                        <button type="submit" class="w-full px-6 py-3 bg-red-600 text-white font-medium rounded-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition-colors">
                            Buat Janji
                        </button>
                        <p class="mt-4 text-sm text-gray-500 text-center">
                            Kami akan menghubungi Anda segera untuk mengkonfirmasi janji Anda.
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </section>
    
    <!-- Business Hours -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl mx-auto">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold mb-2">Jam Operasional</h2>
                    <p class="text-gray-600">
                        Bengkel kami buka setiap hari dengan jam operasional berikut.
                    </p>
                </div>
                
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="divide-y divide-gray-200">
                        <div class="flex py-4 px-6">
                            <span class="w-1/2 font-medium">Senin - Jumat</span>
                            <span class="w-1/2 text-gray-600">08:00 - 17:00</span>
                        </div>
                        <div class="flex py-4 px-6">
                            <span class="w-1/2 font-medium">Sabtu</span>
                            <span class="w-1/2 text-gray-600">08:00 - 15:00</span>
                        </div>
                        <div class="flex py-4 px-6">
                            <span class="w-1/2 font-medium">Minggu</span>
                            <span class="w-1/2 text-gray-600">09:00 - 14:00</span>
                        </div>
                    </div>
                </div>
                
                <div class="mt-8 bg-blue-50 border-l-4 border-blue-500 text-blue-700 p-4 rounded">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10"></circle>
                                <line x1="12" y1="8" x2="12" y2="12"></line>
                                <line x1="12" y1="16" x2="12.01" y2="16"></line>
                            </svg>
                        </div>
                        <div class="ml-3">
                            <p class="text-sm">
                                <span class="font-medium">Catatan:</span> Untuk keadaan darurat di luar jam operasional, silakan hubungi nomor layanan darurat kami di <a href="tel:+6281234567890" class="font-semibold">+62 812-3456-7890</a>.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection