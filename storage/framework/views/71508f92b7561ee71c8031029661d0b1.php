<?php $__env->startPush('header-section'); ?>
    <title>Softwala | Gallery </title>
<?php $__env->stopPush(); ?>


<?php $__env->startSection('content'); ?>
    <!-- Include navigation section -->
    <?php echo $__env->make('admin.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Include navigation section -->

    <!-- Start Body section -->
    <div class="container-fluid">
        <div class="container">
            <div class="row mt-5">
                <div class="col">
                    <span class="fs-2 fw-bold">Gallery Images (<?php echo e(count($gallery)); ?>)</span>
                </div>
                <div class="col text-end my-auto">
                    <button
                        type="button"
                        id="UploadGalleryImage"
                        class="btn btn-theme btn-outline btn-rounded"
                        > <i class="fas fa-plus"></i> Upload Image
                    </button>

                </div>
            </div> <hr/>

            <!--Gallery images show section start-->
            <div class="row my-5">
                <?php $__currentLoopData = $gallery; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-12 col-sm-6 col-md-4 mb-3" id="gallery_image_<?php echo e($loop->index); ?>">
                    <!-- Image with no mask -->
                    <div class="bg-image rounded-6" style="max-height:200px">
                        <img src="<?php echo e($image); ?>" class="w-100"/>
                        <!-- Mask -->
                        <div class="mask">
                            <div class="bottom-0 d-flex align-items-end h-100 text-center justify-content-center pb-1">
                                <div>
                                    <button
                                        type="button"
                                        title="View image"
                                        onclick="window.open('<?php echo e($image); ?>','_blank');"
                                        class="btn btn-sm btn-success btn-floating">
                                        <i class="fas fa-eye"></i>
                                    </button>

                                    <button
                                        type="button"
                                        title="Copy URL"
                                        data-id="<?php echo e($image); ?>"
                                        class="btn btn-sm btn-primary btn-floating CopyGalleryURL">
                                        <i class="fas fa-copy"></i>
                                    </button>

                                    <button
                                        type="button"
                                        title="Delete image"
                                        data-index="gallery_image_<?php echo e($loop->index); ?>"
                                        data-id="<?php echo e($image); ?>"
                                        class="btn btn-sm btn-danger btn-floating DeleteGalleryImage">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <!--Gallery images show section end-->

        </div>
    </div>
    <!-- End Body section -->

    <!-- Include footer section -->
    <?php echo $__env->make('admin.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Include footer section -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\softwala.com\resources\views/admin/pages/gallery.blade.php ENDPATH**/ ?>