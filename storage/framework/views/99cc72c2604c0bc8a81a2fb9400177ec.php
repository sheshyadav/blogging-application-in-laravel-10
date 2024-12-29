<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
         <!-- Device view setting -->
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, minimal-ui, viewport-fit=cover" />
        <!-- CSRF Token -->
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <!-- Theme color -->
        <meta name="theme-color" content="#7952b3">
        <!-- Manifest.json file setup -->
        <meta name="mobile-web-app-capable" content="yes" />
        <!-- Begin: Windows Meta Tags -->
        <meta name="application-name" content="Softwala" />
        <meta name="msapplication-navbutton-color" content="#7952b3" />
        <meta name="msapplication-TileColor" content="#7952b3" />
        <meta name="msapplication-TileImage" content="<?php echo e(asset('assets/images/softwala/icon.png')); ?>" />


        <!-- Begin: Favicons -->
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo e(asset('assets/images/softwala/icon.png')); ?>" />
        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo e(asset('assets/images/softwala/icon.png')); ?>" />
        <link rel="shortcut icon" type="image/png" href="<?php echo e(asset('assets/images/softwala/icon.png')); ?>" />
        <!-- 16x16 32x32 48x48 -->
        <!-- End: Favicons -->

        <!-- Dynamic header section  -->
        <?php echo $__env->yieldPushContent("header-section"); ?>
        <!-- End Dynamic header section  -->
        <!-- Style CDN -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css" />
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/style.main.css')); ?>" />
    </head>
    <body>
    <!-- Start main section start -->
    <main><?php echo $__env->yieldContent('content'); ?></main>
    <!-- End main section start -->

    <!-- Script CDN -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
    <script type="text/javascript" src="<?php echo e(asset('assets/js/script.main.js')); ?>"></script>
    <!-- END CDN -->
    <!-- Put dynamic script -->
    <?php echo $__env->yieldPushContent("script-section"); ?>
</body>
</html>
<?php /**PATH D:\xampp\htdocs\softwala\resources\views/app.blade.php ENDPATH**/ ?>