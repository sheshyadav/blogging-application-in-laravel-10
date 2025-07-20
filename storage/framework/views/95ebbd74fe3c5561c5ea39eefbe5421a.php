<?php $__env->startPush("header-section"); ?>
    <title>Softwala | About - US</title>
<?php $__env->stopPush(); ?>


<?php $__env->startSection("content"); ?>
<!-- Include navigation section -->
<?php echo $__env->make("layouts.header", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- Include navigation section -->

<!-- Start Body section -->

<section id="about_us_section">
    <div class="container">
        <div class="headline">
            <h1 class="text-theme fw-bold my-5"> About US</h1>
        </div>
        <div class="row">
            <!-- left side section -->
            <div class="col-12 col-sm-12 col-md-8 ol-lg-8 col-xl-8 col-xxl-8">
                <p class="mt-5">
                    <strong>Welcome to Softwala</strong>, a platform for coding enthusiasts to learn and develop their programming skills. Our goal is to make programming accessible and enjoyable for everyone, regardless of their skill level.
                </p>
                <p class="">
                    At Softwala, we provide a wide range of coding tutorials, from basic concepts to advanced techniques. Our tutorials are designed to be easy-to-follow and engaging, with practical examples and real-world applications. Whether you're a beginner or an experienced programmer, you'll find something valuable on our site.
                </p>
                <p class="">
                    We believe that programming is more than just a skill – it's a mindset. That's why we strive to inspire and motivate our readers to become lifelong learners and problem solvers. We encourage you to ask questions, share your ideas, and collaborate with others in our community.
                </p>
                <p class="">
                    Softwala specifically for sharing programming issue and examples. We’ll be sharing some solutions  of codes of PHP, Laravel Framework, CSS3, HTML5, MYSQL, Bootstrap, React JS, Vue JS Framework, JQuery, Javascript etc. In our site i am sure you will find something better solution.
                </p>
                <p class="">
                    At Softwala, we're passionate about coding and we're committed to helping you achieve your goals. We hope you'll join us on this exciting journey of learning and discovery.
                </p>

                <p class="fw-bold">
                    !! Thank you for visiting Softwala !!
                </p>


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

            </div>

            <!-- right side section -->
            <div class="col-xm-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">

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


                <!-- tags list section -->
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
</section>

<!-- End Body section -->

<!-- Include footer section -->
<?php echo $__env->make("layouts.footer", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- Include footer section -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make("app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\softwala.com\resources\views/pages/about-us.blade.php ENDPATH**/ ?>