<?php $__env->startPush("header-section"); ?>
<title><?php echo e($post->title); ?></title>
    <!--- SEO Setting Section Start --->
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
    <link rel="canonical" href="<?php echo e(url('post/'.$post->slug)); ?>" />
    <meta name="title" content="<?php echo e($post->title); ?>">
    <meta name="description" content="<?php echo e($post->metadescription); ?>" />
    <meta name="keywords" content="<?php echo e($post->metakeyword); ?>" />
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo e(url('post/'.$post->slug)); ?>">
    <meta property="og:title" content="<?php echo e($post->title); ?>">
    <meta property="og:description" content="<?php echo e($post->metadescription); ?>">
    <meta property="og:image" content="<?php echo e(url('assets/images/blog/'.$post->thumbnail)); ?>">
    <!-- Twitter -->
    <meta property="fb:app_id" content="966242223397117">
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@softwalatech">
    <meta property="twitter:domain" content="softwala.com">
    <meta property="twitter:url" content="<?php echo e(url('post/'.$post->slug)); ?>">
    <meta property="twitter:title" content="<?php echo e($post->title); ?>">
    <meta property="twitter:description" content="<?php echo e($post->metadescription); ?>">
    <meta property="twitter:image" content="<?php echo e(url('assets/images/blog/'.$post->thumbnail)); ?>">
    <!--- SEO Setting Section End --->
<?php $__env->stopPush(); ?>


<?php $__env->startSection("content"); ?>
<!-- Include navigation section -->
<?php echo $__env->make("layouts.header", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
        <div class="row">
            <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8 col-xxl-8">
                <div class="section-heading mb-5">
                    <h1 class="text-theme fw-bold"> <?php echo e($post->title); ?> </h1>
                    <div class="">
                        <small class="fw-bold px-2" title="Author">
                            <i class="fas fa-user"></i> <?php echo e($post->Author->name); ?>

                        </small>
                        <small class="fw-bold px-2" title="Publish date">
                            <i class="fas fa-calendar"></i> <?php echo e($post->created_at->format("d-M-Y")); ?>

                        </small>
                        
                        <span class="badge rounded-pill badge-dark mx-2 px-2" title="Category">
                            <?php echo e($post->Category->name); ?>

                        </span>
                    </div>
                </div>
                
                <?php if($post->thumbnail): ?>
                <div class="mb-5">
                    <img
                        src="<?php echo e(asset('assets/images/blog/'.$post->thumbnail)); ?>"
                        height="100%"
                        width="100%"
                        class="rounded"
                        loading="lazy"
                        alt="<?php echo e($post->title); ?>" />
                </div>
                <?php endif; ?>
                

                
                <div class="mb-5">
                    <?php echo $post->description; ?>

                </div>
                

                
                
                

                
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

            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
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
            </div>
        </div>
    </div>
    <?php if (isset($component)) { $__componentOriginal1e91b5ac3b2f53bd690d6af9b77915de = $component; } ?>
<?php $component = App\View\Components\ShareComponent::resolve(['url' => url('post/'.$post->slug),'title' => $post->title] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
</div>
<!-- End Body section -->

<!-- Include footer section -->
<?php echo $__env->make("layouts.footer", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- Include footer section -->
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script-section'); ?>
<script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make("app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\softwala\resources\views/pages/post-view.blade.php ENDPATH**/ ?>