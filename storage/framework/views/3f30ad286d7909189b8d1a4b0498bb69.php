<?php $__env->startPush('header-section'); ?>
    <title>Softwala | Admin Dashboard</title>
<?php $__env->stopPush(); ?>


<?php $__env->startSection('content'); ?>
    <!-- Include navigation section -->
    <?php echo $__env->make('admin.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Include navigation section -->

    <!-- Start Body section -->
    <div class="container-fluid">
        <div class="container">
            <div class="row my-5">
                <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 mb-3">
                    <div class="card admin_dashboard_card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div class="icon-box">
                                    <i class="fa-solid fa-list-alt text-theme"></i>
                                </div>
                                <div class="">
                                    <p class="card-text fs-4 fw-bold"><?php echo e($category); ?></p>
                                    <p class="card-title fw-bold">Category</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 mb-3">
                    <div class="card admin_dashboard_card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div class="icon-box">
                                    <i class="fa-solid fa-file text-theme"></i>
                                </div>
                                <div class="">
                                    <p class="card-text fs-4 fw-bold"><?php echo e($posts); ?></p>
                                    <p class="card-title fw-bold">Posts</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 mb-3">
                    <div class="card admin_dashboard_card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div class="icon-box">
                                    <i class="fa-solid fa-images text-theme"></i>
                                </div>
                                <div class="">
                                    <p class="card-text fs-4 fw-bold"><?php echo e($carousel); ?></p>
                                    <p class="card-title fw-bold">Carousels</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 mb-3">
                    <div class="card admin_dashboard_card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div class="icon-box">
                                    <i class="fa-solid fa-gear text-theme"></i>
                                </div>
                                <div class="">
                                    <p class="card-text fs-4 fw-bold"><?php echo e($subscriber); ?></p>
                                    <p class="card-title fw-bold">Subscribers</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row my-5">
                <div class="col-12 col-sm-12 col-md-8">
                    <div class="section-heading">
                        <div class="text-theme fw-bold fs-3"> Today Trending </div>
                    </div>
                    <canvas id="myChart"></canvas>
                </div>
                <div class="col-12 col-sm-12 col-md-4">
                    <div class="section-heading">
                        <div class="text-theme fw-bold fs-3"> Today Trending </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- End Body section -->

    <!-- Include footer section -->
    <?php echo $__env->make('admin.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Include footer section -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\softwala.com\resources\views/admin/pages/dashboard.blade.php ENDPATH**/ ?>