<section id="carousel_section">
    <div id="carouselExampleCaptions" class="carousel slide" data-mdb-ride="carousel">
    <div class="carousel-inner">
        <?php $__currentLoopData = $carousels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $carousel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="carousel-item <?php echo e($loop->index == 0 ? 'active':''); ?>">
            <img
                src="<?php echo e($carousel->carouselurl); ?>"
                class="d-block w-100"
                alt="<?php echo e($carousel->title); ?>"
            />
            <div class="carousel-caption d-none d-md-block">
                <a href="<?php echo e($carousel->posturl); ?>" class="text-light" target="_blank">
                    <h5><?php echo e($carousel->title); ?></h5>
                    <p><?php echo e($carousel->description); ?></p>
                </a>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    <button
        class="carousel-control-prev"
        type="button"
        data-mdb-target="#carouselExampleCaptions"
        data-mdb-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button
        class="carousel-control-next"
        type="button"
        data-mdb-target="#carouselExampleCaptions"
        data-mdb-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    </div>
</section>
<?php /**PATH D:\xampp\htdocs\softwala\resources\views/components/carousel-component.blade.php ENDPATH**/ ?>