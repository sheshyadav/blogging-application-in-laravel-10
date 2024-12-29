<div class="widget mb-3 card">
    <div class="card-header fs-2 fw-bold text-dark">
        We Are Recommending You
    </div>
    <div class="card-body py-0">
        <ul class="list-unstyled my-4">
            <?php $__currentLoopData = $recommendedpost; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li class="mb-1">
                <i class="fas fa-long-arrow-alt-right me-2 text-theme"></i>
                <a
                    href="<?php echo e(url('post/'.$post->slug)); ?>"
                    title="<?php echo e($post->title); ?>"
                    class="text-theme fw-bold link-hover fs-5">
                    <?php echo e($post->title); ?>

                </a>
            </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
</div>

<?php /**PATH D:\xampp\htdocs\softwala\resources\views/components/recommend-post-component.blade.php ENDPATH**/ ?>