<!-- Navbar Section Start -->
<?php $user = auth()->user(); ?>
<section id="navbar_section">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-theme">
        <!-- Container wrapper -->
        <div class="container-fluid">
            <!-- Toggle button -->
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
                data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fas fa-bars text-light"></i>
            </button>

            <!-- Collapsible wrapper -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Navbar brand -->
                <a class="navbar-brand mt-2 mt-lg-0" href="#">
                    <img src="<?php echo e(asset('assets/images/softwala/softwala-vertical-logo.png')); ?>" height="35"
                        alt="Softwala logo" loading="lazy" />
                </a>
                <!-- Left links -->
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link <?php echo e(request()->is('admin/dashboard') ? 'active' : ''); ?>"
                            href="<?php echo e(url('admin/dashboard')); ?>">
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo e(request()->is('admin/category*') ? 'active' : ''); ?>

                <?php echo e(request()->is('admin/category/*') ? 'active' : ''); ?>"
                            href="<?php echo e(url('admin/category')); ?>">
                            Category
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link <?php echo e(request()->is('admin/post*') ? 'active' : ''); ?>

                <?php echo e(request()->is('admin/post/*') ? 'active' : ''); ?>"
                            href="<?php echo e(url('admin/post')); ?>">
                            Posts
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link <?php echo e(request()->is('admin/carousel*') ? 'active' : ''); ?>

                <?php echo e(request()->is('admin/carousel/*') ? 'active' : ''); ?>"
                            href="<?php echo e(url('admin/carousel')); ?>">
                            Carousel
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link <?php echo e(request()->is('admin/gallery') ? 'active' : ''); ?>

                <?php echo e(request()->is('admin/gallery') ? 'active' : ''); ?>"
                            href="<?php echo e(url('admin/gallery')); ?>">
                            Gallery
                        </a>
                    </li>

                </ul>
                <!-- Left links -->
            </div>
            <!-- Collapsible wrapper -->

            <!-- Right elements -->
            <div class="d-flex align-items-center">

                <!-- Avatar -->
                <div class="dropdown">
                    <a class="dropdown-toggle d-flex align-items-center hidden-arrow" href="#"
                        id="navbarDropdownMenuAvatar" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                        <img <?php if(isset($user->profile)): ?>
            src="<?php echo e(asset('assets/images/website/' . $user->profile)); ?>"
            <?php else: ?>
            src="<?php echo e(asset('assets/images/website/non.png')); ?>"
            <?php endif; ?>
                            class="rounded-circle" height="35" alt="Shesh yadav profile" loading="lazy" />
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuAvatar">
                        <li>
                            <a class="dropdown-item fw-bold">
                                Hi, <?php echo e($user->name); ?>

                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item fw-bold" href="<?php echo e(url('admin/profile')); ?>">
                                <i class="fas fa-user text-theme"></i> Profile
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item fw-bold" href="<?php echo e(route('logout')); ?>"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="fas fa-sign-out-alt text-theme "></i> Sign-Out
                            </a>
                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                <?php echo csrf_field(); ?>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Right elements -->
        </div>
        <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->
</section>
<!-- Navbar Section End -->
<?php /**PATH D:\laragon\www\softwala.com\resources\views/admin/layouts/header.blade.php ENDPATH**/ ?>