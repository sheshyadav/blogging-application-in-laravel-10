<?php $__env->startPush("header-section"); ?>
<title>Softwala | Contact Us</title>
<?php $__env->stopPush(); ?>


<?php $__env->startSection("content"); ?>
<!-- Include navigation section -->
<?php echo $__env->make("layouts.header", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- Include navigation section -->

<!-- Start Body section -->
<div class="container-fluid">
    <div class="row mx-md-2">
        <!-- left side form section -->
        <div class="col-xm-12 col-sm-12 col-md-8 col-lg-8 col-xl-8 col-xxl-8 mb-3">
            <div class="section-heading mb-5">
                <div class="text-theme fw-bold mt-5 fs-5"> Contact Us </div>
            </div>
            <form method="post" action="" class="row">
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="mb-3">
                        <label  class="form-label">Name <strong class="text-danger">*</strong> </label>
                        <input
                            type="email"
                            class="form-control"
                            name="name"
                            value="<?php echo e(old("name")); ?>"
                            required
                        />
                        <div class="form-text text-danger">
                            <?php $__errorArgs = ["name"];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($messages); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="mb-3">
                        <label  class="form-label">Email <strong class="text-danger">*</strong> </label>
                        <input
                            type="email"
                            class="form-control"
                            name="email"
                            value="<?php echo e(old("email")); ?>"
                            required
                        />
                        <div class="form-text text-danger">
                            <?php $__errorArgs = ["email"];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($messages); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-3">
                        <label  class="form-label">Subject <strong class="text-danger">*</strong> </label>
                        <input
                            type="text"
                            class="form-control"
                            name="subject"
                            value="<?php echo e(old("subject")); ?>"
                            required
                        />
                        <div class="form-text text-danger">
                            <?php $__errorArgs = ["subject"];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($messages); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-3">
                        <label  class="form-label">Messages <strong class="text-danger">*</strong> </label>
                        <textarea
                            class="form-control"
                            style="height:150px"
                            name="message"
                            required><?php echo e(old("message")); ?></textarea>
                        <div class="form-text text-danger">
                            <?php $__errorArgs = ["message"];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($messages); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <button
                        class="btn btn-theme w-auto"
                        type="button"
                    >Send
                    </button>
                </div>
            </form>

            <!-- social media link section -->
            <div class="my-5">
                <p class="fw-bold">Get connected with us on social networks:</p>
                <div class="text-center">
                    <a
                        class="btn text-white btn-lg btn-floating btn-theme mx-1 mb-2"
                        href="<?php echo e(site('facebook')); ?>"
                        target="_blank"
                        role="button">
                        <i class="fab fa-facebook-f"></i>
                    </a>

                    <a
                        class="btn text-white btn-lg btn-floating btn-theme mx-1 mb-2"
                        href="<?php echo e(site('twitter')); ?>"
                        target="_blank"
                        role="button">
                        <i class="fab fa-twitter"></i>
                    </a>

                    <a
                        class="btn text-white btn-lg btn-floating btn-theme mx-1 mb-2"
                        href="<?php echo e(site('instagram')); ?>"
                        target="_blank"
                        role="button">
                        <i class="fab fa-instagram"></i>
                    </a>

                    <a
                        class="btn text-white btn-lg btn-floating btn-theme mx-1 mb-2"
                        href="<?php echo e(site('linkedin')); ?>"
                        target="_blank"
                        role="button">
                        <i class="fab fa-linkedin"></i>
                    </a>

                    <a
                        class="btn text-white btn-lg btn-floating btn-theme mx-1 mb-2"
                        href="<?php echo e(site('pinterest')); ?>"
                        target="_blank"
                        role="button">
                        <i class="fab fa-pinterest"></i>
                    </a>

                    <a
                        class="btn text-white btn-lg btn-floating btn-theme mx-1 mb-2"
                        href="<?php echo e(site('whatsapplink')); ?>"
                        target="_blank"
                        role="button">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                    <a
                        class="btn text-white btn-lg btn-floating btn-theme mx-1 mb-2"
                        href="mailto:<?php echo e(site('email')); ?>"
                        target="_blank"
                        role="button">
                        <i class="fas fa-envelope"></i>
                    </a>
                </div>


                <p class="mt-3 fw-bold">
                    If you are looking for post or product promotion then you can follow this link:
                    <a
                        href="<?php echo e(url('advertisement')); ?>"
                        class="text-decoration-underline"
                    > Advertisement With US. </a>
                </p>
            </div>

            <!-- Adds section -->
            <div class="adds-section"></div>

            <!-- Recommended Posts section -->
            <?php if (isset($component)) { $__componentOriginald3bbf8ac00e213016bc4da73df2c98e9 = $component; } ?>
<?php $component = App\View\Components\RecommendPostComponent::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('recommend-post-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\RecommendPostComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald3bbf8ac00e213016bc4da73df2c98e9)): ?>
<?php $component = $__componentOriginald3bbf8ac00e213016bc4da73df2c98e9; ?>
<?php unset($__componentOriginald3bbf8ac00e213016bc4da73df2c98e9); ?>
<?php endif; ?>

            <!-- Adds section -->
            <div class="adds-section"></div>
        </div>
        <!-- right side section -->
        <div class="col-xm-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4 mb-3">

            <!-- Catrgory list section -->
            <?php if (isset($component)) { $__componentOriginal3d115d65c8af7307b24cc300d75c0fb6 = $component; } ?>
<?php $component = App\View\Components\CategoryComponent::resolve(['type' => 'simple'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('category-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\CategoryComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3d115d65c8af7307b24cc300d75c0fb6)): ?>
<?php $component = $__componentOriginal3d115d65c8af7307b24cc300d75c0fb6; ?>
<?php unset($__componentOriginal3d115d65c8af7307b24cc300d75c0fb6); ?>
<?php endif; ?>

            <!-- Adds section -->
            <div class="adds-section"></div>

            <!-- Recent posts list section -->
            <?php if (isset($component)) { $__componentOriginalfb0b3f217e8eda715419b6c61ce11242 = $component; } ?>
<?php $component = App\View\Components\RecentPostsComponent::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('recent-posts-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\RecentPostsComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfb0b3f217e8eda715419b6c61ce11242)): ?>
<?php $component = $__componentOriginalfb0b3f217e8eda715419b6c61ce11242; ?>
<?php unset($__componentOriginalfb0b3f217e8eda715419b6c61ce11242); ?>
<?php endif; ?>

            <!-- Adds section -->
            <div class="adds-section"></div>

            <!-- Tool section -->
            <?php if (isset($component)) { $__componentOriginala67fc72326500e695626ce7a782383a7 = $component; } ?>
<?php $component = App\View\Components\ToolsComponent::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tools-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\ToolsComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala67fc72326500e695626ce7a782383a7)): ?>
<?php $component = $__componentOriginala67fc72326500e695626ce7a782383a7; ?>
<?php unset($__componentOriginala67fc72326500e695626ce7a782383a7); ?>
<?php endif; ?>

        </div>
    </div>
</div>
<!-- End Body section -->

<!-- Include footer section -->
<?php echo $__env->make("layouts.footer", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- Include footer section -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make("app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\softwala.com\resources\views/pages/contact-us.blade.php ENDPATH**/ ?>