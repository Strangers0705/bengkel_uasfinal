
<?php $__env->startSection('title', 'Beranda'); ?>

<?php $__env->startSection('content'); ?>

<style>
  body {
    margin: 0;
    padding: 0;
  }

  main {
    padding: 0;
    margin: 0;
  }

  .hero {
    background: url('/images/hero.jpg') center center / cover no-repeat;
    height: 100vh;
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
  }

  .hero::before {
    content: "";
    position: absolute;
    inset: 0;
    background-color: rgba(0, 0, 0, 0.6);
    z-index: 0;
  }

  .hero-content {
    position: relative;
    z-index: 1;
    text-align: center;
    padding: 2rem;
  }

  .hero h1 {
    font-size: 3rem;
    font-weight: bold;
    margin-bottom: 1rem;
  }

  .hero p {
    font-size: 1.2rem;
    margin-bottom: 1.5rem;
  }

  .hero a {
    display: inline-block;
    padding: 0.75rem 1.5rem;
    margin: 0 0.5rem;
    border-radius: 5px;
    font-weight: 600;
    text-decoration: none;
    transition: all 0.3s ease;
  }

  .btn-outline {
    border: 2px solid white;
    color: white;
  }

  .btn-outline:hover {
    background-color: white;
    color: black;
  }

  .btn-primary {
    background-color: #dc2626;
    color: white;
  }

  .btn-primary:hover {
    background-color: #b91c1c;
    color: white;
  }
</style>

<!-- Hero Section -->
<section style="background: url('/images/hero.jpg') center center / cover no-repeat; height: 100vh; position: relative; margin: 0; padding: 0;">
  <div style="background-color: rgba(0,0,0,0.6); width: 100%; height: 100%; display: flex; align-items: center; justify-content: center;">
    <div style="color: white; text-align: center; padding: 2rem;">
      <h1 style="font-size: 3rem; font-weight: bold;">Servis dan Cuci Mobil<br>Terpercaya di Jakarta</h1>
      <p style="font-size: 1.2rem; margin-top: 1rem;">Solusi perawatan mobil profesional dengan teknisi berpengalaman.</p>
      <div style="margin-top: 1.5rem;">
        <a href="#layanan" style="padding: 0.75rem 1.5rem; border: 2px solid white; color: white; text-decoration: none; margin-right: 1rem;">Lihat Layanan</a>
        <a href="/appointment" style="padding: 0.75rem 1.5rem; background: red; color: white; text-decoration: none;">Booking Sekarang</a>
      </div>
    </div>
  </div>
</section>

<!-- Tentang Kami -->
<section class="py-5 text-center">
  <div class="container">
    <h2 class="mb-3">Tentang Kami</h2>
    <p class="lead">Bengkel Mobil Beteng Betawi sudah melayani pelanggan sejak 2010 dengan teknisi bersertifikat dan fasilitas lengkap. Kami berkomitmen memberikan pelayanan terbaik untuk perawatan kendaraan Anda.</p>
  </div>
</section>

<!-- Layanan Unggulan -->
<section id="layanan" class="py-5 bg-light">
  <div class="container">
    <h2 class="text-center mb-4">Layanan Unggulan</h2>
    <div class="row">
      <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $layanan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($layanan->is_featured): ?>
        <div class="col-md-4 mb-4">
          <div class="card h-100 shadow-sm">
            <div class="card-body text-center">
              <h5 class="card-title"><?php echo e($layanan->nama_layanan); ?></h5>
              <p class="card-text"><?php echo e($layanan->deskripsi); ?></p>
              <p class="text-muted">Rp<?php echo e(number_format($layanan->harga)); ?></p>
            </div>
          </div>
        </div>
        <?php endif; ?>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
  </div>
</section>

<!-- Testimoni -->
<section class="py-5">
  <div class="container">
    <h2 class="text-center mb-4">Apa Kata Pelanggan Kami?</h2>
    <div class="row">
      <?php $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="col-md-6 mb-4">
        <div class="border p-4 rounded shadow-sm h-100">
          <p>"<?php echo e($t->komentar); ?>"</p>
          <strong class="d-block mt-2">- <?php echo e($t->nama); ?></strong>
        </div>
      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="py-5 bg-primary text-white text-center">
  <div class="container">
    <h2 class="mb-3">Ingin Mobil Anda Dirawat Profesional?</h2>
    <a href="/appointment" class="btn btn-light btn-lg">Buat Appointment Sekarang</a>
  </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\BengkelBeteng\resources\views/home.blade.php ENDPATH**/ ?>