<?php $__env->startPush('header-section'); ?>
    <title><?php echo e($post->title); ?></title>
<?php $__env->stopPush(); ?>


<?php $__env->startSection('content'); ?>
    <!-- Include navigation section -->
    <?php echo $__env->make('admin.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Include navigation section -->

    <!-- Start Body section -->
    <div class="container-fluid">
        <div class="container">
            <div class="row my-5">
                <?php if(Session::get('success')): ?>
                    <div class="alert alert-success" role="alert">
                        <strong>Success! </strong> <?php echo e(Session::get('success')); ?>

                    </div>
                <?php elseif(Session::get('error')): ?>
                    <div class="alert alert-danger" role="alert">
                        <strong>Error! </strong> <?php echo e(Session::get('error')); ?>

                    </div>
                <?php endif; ?>
            </div>

            
            <div class="row mb-5">
                <div class="col-12">
                    <div class="section-heading mb-5">
                        <h1 class="text-theme fw-bold"> <?php echo e($post->title); ?> </h1>
                        <div class="">
                            <small class="fw-bold px-2" title="Author">
                                <i class="fas fa-user"></i> <?php echo e($post->Author->name); ?>

                            </small>
                            <small class="fw-bold px-2" title="Publish date">
                                <i class="fas fa-calendar"></i> <?php echo e($post->created_at->format('d-M-Y')); ?>

                            </small>
                            <small class="fw-bold px-2" title="Publish date">
                                <i class="fas fa-eye"></i> 0
                            </small>
                            <span class="badge rounded-pill badge-dark mx-2 px-2" title="Category">
                                <?php echo e($post->Category->name); ?>

                            </span>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    
                    <?php if($post->thumbnail): ?>
                        <div class="mb-5">
                            <img src="<?php echo e(asset('assets/images/blog/' . $post->thumbnail)); ?>" height="100%" width="100%"
                                class="rounded" loading="lazy" alt="<?php echo e($post->thumbnail); ?>" />
                        </div>
                    <?php endif; ?>
                    
                    <?php echo $post->description; ?>

                </div>

            </div>
            
            <hr />
            
            <div class="row">
                <div class="col-12 col-sm-6 col-md-3 mb-2">
                    <div class="card bg-theme">
                        <div class="card-body text-center text-light">
                            <i class="fas fa-eye fs-4"></i>
                            <span class="fs-4">12k</h1>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-3 mb-2">
                    <div class="card bg-theme">
                        <div class="card-body text-center text-light">
                            <i class="fas fa-share fs-4"></i>
                            <span class="fs-4">12k</h1>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-3 mb-2">
                    <div class="card bg-theme">
                        <div class="card-body text-center text-light">
                            <i class="fas fa-eye fs-4"></i>
                            <span class="fs-4">12k</h1>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-3 mb-2">
                    <div class="card bg-theme">
                        <div class="card-body text-center text-light">
                            <i class="fas fa-eye fs-4"></i>
                            <span class="fs-4">12k</h1>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8 col-xxl-8">
                    <div class="widget mb-3">
                        <div class="section-heading">
                            <div class="text-theme fw-bold mt-5 fs-5"> Month Reports </div>
                        </div>
                        <canvas id="PostMonthReportsChart"></canvas>
                        <div class="text-center">
                            <span class="form-text fw-bold">Total View: 12</span>
                            <span class="form-text fw-bold">,</span>
                            <span class="form-text fw-bold">Share: 10</span>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                    <!-- Today Analytics section -->
                    <div class="widget mb-3">
                        <div class="section-heading">
                            <div class="text-theme fw-bold mt-5 fs-5"> Today Reports </div>
                        </div>
                        <canvas id="PostTodayReportsChart"></canvas>
                        <div class="text-center">
                            <span class="form-text fw-bold">Total View: 12</span>
                            <span class="form-text fw-bold">,</span>
                            <span class="form-text fw-bold">Share: 10</span>
                        </div>
                    </div>

                    <!-- Week Analytics section -->
                    <div class="widget mb-3">
                        <div class="section-heading">
                            <div class="text-theme fw-bold mt-5 fs-5"> Week Reports </div>
                        </div>
                        <canvas id="PostWeekReportsChart"></canvas>
                        <div class="text-center">
                            <span class="form-text fw-bold">Total View: 12</span>
                            <span class="form-text fw-bold">,</span>
                            <span class="form-text fw-bold">Share: 10</span>
                        </div>
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

<?php $__env->startPush('script-section'); ?>
    <script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <script src="<?php echo e(asset('assets/js/chart.main.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\softwala.com\resources\views/admin/pages/post-view.blade.php ENDPATH**/ ?>