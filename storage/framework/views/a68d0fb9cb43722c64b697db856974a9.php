
<?php if($type === 'simple'): ?>
<div class="widget-follow-us mb-3">
    <div class="section-heading mb-5">
        <div class="text-theme fw-bold mt-5 fs-5"> Categories </div>
    </div>
    <ul>
        <?php $__currentLoopData = $categorys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li class="single-item">
            <a
                title="<?php echo e($category->name); ?>"
                href="<?php echo e(url('category/'.$category->slug)); ?>">
                <?php echo e($category->name); ?> (<?php echo e($category->Posts->count()); ?>)
            </a>
        </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>
<?php elseif($type === 'card'): ?>
<div class="row">
    <?php $__currentLoopData = $categorys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-xs-12 col-sm-12 col-md-6 mb-5">
            <a class="nav-link" href="<?php echo e(url('category/'.$category->slug)); ?>">
                <div class="card">
                    <div class="card-body text-center">
                        <img src="<?php echo e(asset('assets/images/category/' . $category->icon)); ?>"
                            alt="<?php echo e($category->name); ?>" class="rounded-circle" height="100px"
                            width="100px" />
                        <h4 class="card-title fw-bold mt-3"><?php echo e($category->name); ?> (<?php echo e($category->Posts->count()); ?>)</h4>
                    </div>
                </div>
            </a>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php endif; ?>
<?php /**PATH D:\xampp\htdocs\softwala\resources\views/components/category-component.blade.php ENDPATH**/ ?>