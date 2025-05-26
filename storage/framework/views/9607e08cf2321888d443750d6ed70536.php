<style>
  /* Navbar styling */
  nav.navbar-custom {
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 1000;
    background: transparent;
    transition: all 0.3s ease-in-out;
  }

  nav.navbar-custom.scrolled {
    background-color: white;
    box-shadow: 0 2px 10px rgba(255, 255, 255, 0.1);
  }

  .navbar-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 1rem;
    display: flex;
    justify-content: space-between;
    align-items: center;
  }

  .navbar-logo {
    font-size: 1.5rem;
    font-weight: bold;
    color: #dc2626;
    text-decoration: none;
  }

  .navbar-menu {
    display: flex;
    gap: 1rem;
  }

  .navbar-link {
    text-decoration: none;
    color: #333;
    font-weight: 500;
    transition: color 0.3s;
  }

  .navbar-link:hover {
    color: #dc2626;
  }

  .btn-red {
    background-color: #dc2626;
    color: white;
    padding: 0.5rem 1.2rem;
    border-radius: 6px;
    text-decoration: none;
    font-weight: 600;
    transition: background 0.3s;
  }

  .btn-red:hover {
    background-color: #b91c1c;
  }

  .mobile-toggle {
    display: none;
    font-size: 1.5rem;
    background: none;
    border: none;
    color: #333;
  }

  .mobile-menu {
    display: none;
    flex-direction: column;
    gap: 0.5rem;
    background: white;
    padding: 1rem;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
  }

  .mobile-menu a {
    color: #333;
    text-decoration: none;
    font-weight: 500;
  }

  .mobile-menu a:hover {
    color:rgb(228, 72, 72);
  }

  @media (max-width: 768px) {
    .navbar-menu {
      display: none;
    }

    .mobile-toggle {
      display: block;
    }

    .mobile-menu.active {
      display: flex;
    }
  }
</style>

<nav class="navbar-custom" id="mainNavbar">
  <div class="navbar-container">
    <!-- Logo -->
    <a href="<?php echo e(route('home')); ?>" class="navbar-logo">
      Bengkel <span style="color: #000;">Beteng Betawi</span>
    </a>

    <!-- Desktop Menu -->
    <div class="navbar-menu">
      <a href="<?php echo e(route('home')); ?>" class="navbar-link">Beranda</a>
      <a href="<?php echo e(route('services')); ?>" class="navbar-link">Layanan</a>
      <a href="<?php echo e(route('about')); ?>" class="navbar-link">Tentang Kami</a>
      <a href="<?php echo e(route('gallery')); ?>" class="navbar-link">Galeri</a>
      <a href="<?php echo e(route('contact')); ?>" class="navbar-link">Kontak</a>
      <a href="<?php echo e(route('appointments.create')); ?>" class="btn-red">Buat Janji</a>
    </div>

    <!-- Mobile Button -->
    <button class="mobile-toggle" onclick="toggleMobileMenu()">☰</button>
  </div>

  <!-- Mobile Menu -->
  <div class="mobile-menu" id="mobileMenu">
    <a href="<?php echo e(route('home')); ?>">Beranda</a>
    <a href="<?php echo e(route('services')); ?>">Layanan</a>
    <a href="<?php echo e(route('about')); ?>">Tentang Kami</a>
    <a href="<?php echo e(route('gallery')); ?>">Galeri</a>
    <a href="<?php echo e(route('contact')); ?>">Kontak</a>
    <a href="<?php echo e(route('appointments.create')); ?>" class="btn-red" style="text-align:center;">Buat Janji</a>
  </div>
</nav>

<script>
  // Scroll effect
  window.addEventListener('scroll', function () {
    const navbar = document.getElementById('mainNavbar');
    if (window.scrollY > 20) {
      navbar.classList.add('scrolled');
    } else {
      navbar.classList.remove('scrolled');
    }
  });

  // Toggle mobile menu
  function toggleMobileMenu() {
    const menu = document.getElementById('mobileMenu');
    menu.classList.toggle('active');
  }
</script>
<?php /**PATH C:\xampp\htdocs\BengkelBeteng\resources\views/partials/navbar.blade.php ENDPATH**/ ?>