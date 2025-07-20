<?php $__env->startPush("header-section"); ?>
    <title>Softwala | Category</title>
<?php $__env->stopPush(); ?>


<?php $__env->startSection("content"); ?>
<!-- Include navigation section -->
<?php echo $__env->make("layouts.header", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- Include navigation section -->

<!-- Start Body section -->
<!-- Blog Category Section start -->
<section id="blog_category_section">
    <div class="container-fluid">
        <div class="row my-5 mx-md-5">
            <!-- Adds section -->
            <div class="adds-section"></div>

            <!-- Left side Category Section -->
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
                <div class="section-heading mb-5">
                    <div class="text-theme fw-bold mt-5 fs-3"> Category </div>
                </div>
                <!-- Blog Category Section -->
                <?php if (isset($component)) { $__componentOriginal3d115d65c8af7307b24cc300d75c0fb6 = $component; } ?>
<?php $component = App\View\Components\CategoryComponent::resolve(['type' => 'card'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                <!-- Blog Category Section -->

                
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
                
            </div>

            <!-- Right side Section -->
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">

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

                <!-- recent posts -->
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

                <!-- Popular Tag -->
                <?php if (isset($component)) { $__componentOriginalccc7bf51239fcdbde86372e0cc101afd = $component; } ?>
<?php $component = App\View\Components\TagsComponent::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tags-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\TagsComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalccc7bf51239fcdbde86372e0cc101afd)): ?>
<?php $component = $__componentOriginalccc7bf51239fcdbde86372e0cc101afd; ?>
<?php unset($__componentOriginalccc7bf51239fcdbde86372e0cc101afd); ?>
<?php endif; ?>

                <!-- Adds section -->
                <div class="adds-section"></div>
            </div>

            <!-- Adds section -->
            <div class="adds-section"></div>
        </div>
    </div>
</section>
<!-- Blog Category Section End -->
<!-- End Body section -->

<!-- Include footer section -->
<?php echo $__env->make("layouts.footer", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- Include footer section -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make("app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\softwala.com\resources\views/pages/category.blade.php ENDPATH**/ ?>