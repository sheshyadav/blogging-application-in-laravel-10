<?php $__env->startPush("header-section"); ?>
<title>Softwala | Blog Carousel</title>
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.0/css/dataTables.bootstrap5.min.css" />
<?php $__env->stopPush(); ?>


<?php $__env->startSection("content"); ?>
<!-- Include navigation section -->
<?php echo $__env->make("admin.layouts.header", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
            <div class="col-12 headline">
                <h1 class="text-theme fw-bold my-5"> Carousel </h1>
            </div>
            <div class="col-12 text-end mb-3">
                <a
                    href="<?php echo e(url('admin/carousel/add-new')); ?>"
                    class="btn btn-theme btn-outline btn-rounded"
                > <i class="fas fa-plus"></i> Add New
                </a>
            </div>
            <div class="col-12">
                <div class="table-responsive">
                    <table class="table table-striped data-table-list border">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Description</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $carousels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $carousel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($loop->index+1); ?></td>
                                <td><?php echo e($carousel->title); ?></td>
                                <td><?php echo e($carousel->description); ?></td>
                                <td>
                                    <a
                                        href="<?php echo e(url('admin/carousel/'.$carousel->id.'/update')); ?>"
                                        class="text-decoration-none"
                                        ><i class="fas fa-edit text-success px-1"></i>
                                    </a>
                                    <a
                                        role="button"
                                        class="tableDatadelete"
                                        for='<?php echo json_encode(["id"=>$carousel->id, "url"=>"/admin/carousel/delete"], 512) ?>'
                                        ><i class="fas fa-trash text-danger px-1"></i>
                                    </a>
                                    <div class="mx-1 align-middle form-check form-check-inline form-switch">
                                        <input
                                            class="form-check-input updateStatus"
                                            type="checkbox"
                                            for='<?php echo json_encode(["id"=>$carousel->id, "url"=>"/admin/carousel/status"], 512) ?>'
                                            <?php echo e($carousel->status ? 'checked':''); ?>

                                        />
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Body section -->

<!-- Include footer section -->
<?php echo $__env->make("admin.layouts.footer", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- Include footer section -->
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script-section'); ?>
<script type="text/javascript" src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.12.0/js/dataTables.bootstrap5.min.js"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make("admin.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\softwala.com\resources\views/admin/pages/carousel.blade.php ENDPATH**/ ?>