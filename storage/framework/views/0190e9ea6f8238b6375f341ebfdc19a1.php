<?php $__env->startPush("header-section"); ?>
<title>Softwala | Login</title>
<?php $__env->stopPush(); ?>


<?php $__env->startSection("content"); ?>
<!-- Start Body section -->
<div class="container-fluid bg-theme">
    <div class="py-5">
        <div class="row justify-content-center">
            <div class="col-auto col-sm-auto col-md-4">
                <div class="card" >
                    <div class="card-header text-center ">
                        <img
                            src="<?php echo e(asset('assets/images/softwala/softwala-horizontal-logo.png')); ?>"
                            height="auto"
                            width="auto"
                            alt="Softwala logo"
                        />
                        <div class="headline">
                            <h1 class="text-theme fw-bold my-5"> User Login </h1>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo e(route('login')); ?>" method="post"> <?php echo csrf_field(); ?>
                            <div class="mb-3">
                                <label class="form-label">
                                    Email Address   <strong class="text-danger">*</strong>
                                </label>
                                <input
                                    type="email"
                                    class="form-control"
                                    name="email"
                                    placeholder="Your Email Id"
                                    aria-describedby="email"
                                    value="<?php echo e(old('email')); ?>"
                                    required
                                />
                                <div
                                    id="email"
                                    class="form-text text-danger">
                                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <?php echo e($message); ?>

                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">
                                    Password <strong class="text-danger">*</strong>
                                </label>
                                <input
                                    type="password"
                                    name="password"
                                    class="form-control"
                                    placeholder="Your Password"
                                    aria-describedby="password"
                                    required
                                />

                                <div
                                    id="password"
                                    class="form-text text-danger">
                                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <?php echo e($message); ?>

                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                            <?php if(Session::get('success')): ?>
                                <div class="alert alert-success" role="alert">
                                    <strong>Success!</strong> <?php echo e(Session::get('success')); ?>

                                </div>
                            <?php elseif(Session::get('error')): ?>
                                <div class="alert alert-danger" role="alert">
                                    <strong>Error!</strong> <?php echo e(Session::get('error')); ?>

                                </div>
                            <?php endif; ?>

                            <button
                                type="submit"
                                class="btn btn-theme">
                                Login
                            </button>
                            <?php if(Route::has('password.request')): ?>
                                <a class="btn btn-link" href="<?php echo e(route('password.request')); ?>">
                                    Forgot Your Password?
                                </a>
                            <?php endif; ?>
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Body section -->
<?php $__env->stopSection(); ?>


<?php echo $__env->make("app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\softwala.com\resources\views/auth/login.blade.php ENDPATH**/ ?>