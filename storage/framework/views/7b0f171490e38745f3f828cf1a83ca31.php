<?php $__env->startPush("header-section"); ?>
<title>Softwala | Programming Tutorials & Solutions</title>
    <!-- Start SEO Settings -->
    <meta name="allow-search" content="yes" />
    <meta name="robots" content="index, follow">
    <meta name="author" content = "Shesh Yadav" />
    <meta name="copyright" content="Softwala" />
    <meta property="og:type" content="article" />
    <meta property="og:locale" content="en-us" />
    <meta property="og:locale:alternate" content="en-us" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="pinterest-rich-pin" content="true" />
    <meta name="language" content="English">
    <link rel="canonical" href="<?php echo e(url('/')); ?>" />
    <meta name="title" content="Softwala Programming Tutorials & Solutions">
    <meta name="description" content = "Softwala provide a collection of tutorials about PHP, Laravel, VueJS, ReactJS, JavaScript, JQuery and SQL etc. You will find the best example an articles about programing Languages." />
    <meta name="keywords" content = "softwala, programming language,php,laravel,jquery,javascript,mysql,git,html,css,MySQL,HTML,CSS,git,AJAX,bootstrap, jQuery,JavaScript,Designing,Demo, software" />
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo e(url('/')); ?>">
    <meta property="og:title" content="Softwala Programming Tutorials & Solutions">
    <meta property="og:description" content="Softwala provide a collection of tutorials about PHP, Laravel, VueJS, ReactJS, JavaScript, JQuery and SQL etc. You will find the best example an articles about programing Languages.">
    <meta property="og:image" content="<?php echo e(asset('assets/images/softwala/icon.png')); ?>">
    <!-- Twitter -->
    <meta property="fb:app_id" content="966242223397117">
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@softwalatech">
    <meta property="twitter:domain" content="softwala.com">
    <meta property="twitter:url" content="<?php echo e(url('/')); ?>">
    <meta property="twitter:title" content="Softwala Programming Tutorials & Solutions">
    <meta property="twitter:description" content="Softwala provide a collection of tutorials about PHP, Laravel, VueJS, ReactJS, JavaScript, JQuery and SQL etc. You will find the best example an articles about programing Languages.">
    <meta property="twitter:image" content="<?php echo e(asset('assets/images/softwala/icon.png')); ?>">
    <!-- End SEO Settings -->
<?php $__env->stopPush(); ?>


<?php $__env->startSection("content"); ?>
<!-- Include navigation section -->
<?php echo $__env->make("layouts.header", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- Include navigation section -->

<!-- Start Body section -->

    <!-- Carousel Section Start -->
    <?php if (isset($component)) { $__componentOriginal986d3c025a98348a457ec758fffbe4fe = $component; } ?>
<?php $component = App\View\Components\CarouselComponent::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('carousel-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\CarouselComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal986d3c025a98348a457ec758fffbe4fe)): ?>
<?php $component = $__componentOriginal986d3c025a98348a457ec758fffbe4fe; ?>
<?php unset($__componentOriginal986d3c025a98348a457ec758fffbe4fe); ?>
<?php endif; ?>
    <!-- Carousel Section End -->

    <!-- LATEST POSTS SECTION -->
        <div class="container-fluid">
            <div class="row mx-md-2">
                <!-- Adds section -->
                <div class="adds-section"></div>

                <!-- Latest post section -->
                <div class="col-xm-12 col-sm-12 col-md-8 col-lg-8 col-xl-8 col-xxl-8 mb-3">
                    <div class="section-heading mb-5">
                        <div class="text-theme fw-bold mt-5 fs-5"> Latest Posts </div>
                    </div>
                    <?php $__currentLoopData = $latestPost; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if (isset($component)) { $__componentOriginald4e772fa4934606a742afbd295bcc434 = $component; } ?>
<?php $component = App\View\Components\PostCardComponent::resolve(['postid' => $post->pid] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('post-card-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\PostCardComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald4e772fa4934606a742afbd295bcc434)): ?>
<?php $component = $__componentOriginald4e772fa4934606a742afbd295bcc434; ?>
<?php unset($__componentOriginald4e772fa4934606a742afbd295bcc434); ?>
<?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>

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
                </div>

                <!-- Adds section -->
                <div class="col-12">
                    <div class="adds-section"></div>
                </div>
            </div>
        </div>
    <!-- LATEST POSTS SECTION -->
    <?php if (isset($component)) { $__componentOriginal1e91b5ac3b2f53bd690d6af9b77915de = $component; } ?>
<?php $component = App\View\Components\ShareComponent::resolve(['url' => url('/'),'title' => 'Softwala Programming Tutorials & Solutions'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('share-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\ShareComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1e91b5ac3b2f53bd690d6af9b77915de)): ?>
<?php $component = $__componentOriginal1e91b5ac3b2f53bd690d6af9b77915de; ?>
<?php unset($__componentOriginal1e91b5ac3b2f53bd690d6af9b77915de); ?>
<?php endif; ?>
<!-- End Body section -->

<!-- Include footer section -->
<?php echo $__env->make("layouts.footer", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- Include footer section -->
<?php $__env->stopSection(); ?>



<?php echo $__env->make("app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\softwala\resources\views/pages/dashboard.blade.php ENDPATH**/ ?>