<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Seeder;

class TestimonialsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $testimonials = [
            [
                'name' => 'Ahmad Ridwan',
                'position' => 'Pengusaha',
                'content' => 'Saya sangat puas dengan pelayanan Bengkel Beteng Betawi. Mereka memperbaiki masalah AC mobil saya dengan cepat dan harga yang wajar. Teknisinya ramah dan profesional.',
                'rating' => 5,
                'image' => null,
                'is_featured' => true,
            ],
            [
                'name' => 'Siti Nurhayati',
                'position' => 'Dokter',
                'content' => 'Bengkel yang sangat terpercaya! Saya selalu membawa mobil saya kesini untuk servis rutin. Tim mereka selalu menjelaskan dengan detail apa yang perlu diperbaiki dan tidak pernah mengenakan biaya untuk hal yang tidak perlu.',
                'rating' => 5,
                'image' => null,
                'is_featured' => true,
            ],
            [
                'name' => 'Budi Prakoso',
                'position' => 'Guru',
                'content' => 'Perbaikan mesin yang dilakukan sangat memuaskan. Mobil saya kembali bertenaga seperti baru. Harga juga bersaing dengan bengkel lain. Sangat direkomendasikan!',
                'rating' => 4,
                'image' => null,
                'is_featured' => true,
            ],
        ];

        foreach ($testimonials as $testimonial) {
            Testimonial::create($testimonial);
        }
    }
}