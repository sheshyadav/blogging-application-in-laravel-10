<!-- Navbar Section Start -->
<section id="navbar_section">
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-theme">
    <!-- Container wrapper -->
    <div class="container-fluid">
      <!-- Toggle button -->
      <button
        class="navbar-toggler"
        type="button"
        data-mdb-toggle="collapse"
        data-mdb-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <i class="fas fa-bars text-light"></i>
      </button>

      <!-- Collapsible wrapper -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Navbar brand -->
        <a class="navbar-brand mt-2 mt-lg-0" href="#">
          <img
            src="<?php echo e(asset('assets/images/softwala/softwala-vertical-logo.png')); ?>"
            height="35"
            alt="Softwala logo"
            loading="lazy"
          />
        </a>
        <!-- Left links -->
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a
                class="nav-link <?php echo e(request()->is('/') ? 'active':''); ?>"
                href="<?php echo e(url('/')); ?>">
                Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a
                class="nav-link <?php echo e(request()->is('category*') ? 'active':''); ?>"
                href="<?php echo e(url('category')); ?>">
                Category
            </a>
          </li>
          <li class="nav-item">
            <a
                class="nav-link <?php echo e(request()->is('post') ? 'active':''); ?>"
                href="<?php echo e(url('post')); ?>">
                Post
            </a>
          </li>
          
          <li class="nav-item">
            <a
                class="nav-link <?php echo e(request()->is('about-us') ? 'active':''); ?>"
                href="<?php echo e(url('about-us')); ?>">
                About Us
            </a>
          </li>
          <li class="nav-item">
            <a
                class="nav-link <?php echo e(request()->is('contact-us') ? 'active':''); ?>"
                href="<?php echo e(url('contact-us')); ?>">
                Contact Us
            </a>
          </li>
        </ul>
        <!-- Left links -->
      </div>
      <!-- Collapsible wrapper -->
    </div>
    <!-- Container wrapper -->
</nav>
<!-- Navbar -->
</section>
<!-- Navbar Section End -->
<?php /**PATH D:\xampp\htdocs\softwala\resources\views/layouts/header.blade.php ENDPATH**/ ?>