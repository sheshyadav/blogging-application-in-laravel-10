<div class="widget mb-3">
    <div class="section-heading">
        <div class="text-theme fw-bold mt-5 fs-5"> Recent Posts </div>
    </div>
    <div class="widget-latest">
        <ul class="block-list">
        <?php $__currentLoopData = $recentPosts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li class="single-item">
                <div class="item-img">
                    <div class="count-number"><?php echo e($loop->index+1); ?></div>
                </div>
                <div class="item-content">
                    <h4 class="item-title text-theme">
                        <a
                            href="<?php echo e(url('post/'.$post->slug)); ?>"
                            title="<?php echo e($post->title); ?>"
                            class="link-hover">
                            <?php echo e($post->title); ?>

                        </a>
                    </h4>
                </div>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
</div>
<?php /**PATH D:\xampp\htdocs\softwala\resources\views/components/recent-posts-component.blade.php ENDPATH**/ ?>