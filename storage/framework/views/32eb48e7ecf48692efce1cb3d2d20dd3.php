<?php $__env->startPush("header-section"); ?>
<title>Softwala | Admin Profile</title>
<?php $__env->stopPush(); ?>


<?php $__env->startSection("content"); ?>
<!-- Include navigation section -->
<?php echo $__env->make("admin.layouts.header", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- Include navigation section -->
<?php  $user =  auth()->user(); ?>
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
            <div class="col-12 headline">
                <h1 class="text-theme fw-bold my-5"> Admin Profile </h1>
            </div>

            <div class="col-12 col-sm-12 col-md-6">
                <div class="card text-white mb-3">
                    <div class="card-header bg-theme">Update Account Info </div>
                    <div class="card-body">
                        <div class="text-center">
                            <img
                                <?php if(isset($user->profile)): ?>
                                src="<?php echo e(asset('assets/images/website/'.$user->profile)); ?>"
                                <?php else: ?>
                                src="<?php echo e(asset('assets/images/website/non.png')); ?>"
                                <?php endif; ?>
                                class="upload_image_file profile_image_section"
                                for='<?php echo json_encode(["id"=>$user->id, "url"=>"/admin/profile/image/update"], 512) ?>'
                                title="Click to update your profile image."
                            />
                        </div>

                        <form method="post" action="/admin/profile/info/update"> <?php echo csrf_field(); ?>
                            <div class="mb-3">
                                <label  class="form-label">Name <strong class="text-danger">*</strong> </label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="name"
                                    value="<?php echo e(old("name") ?? $user->name); ?>"
                                    placeholder="Enter your name"
                                    required
                                />
                                <div class="form-text text-danger">
                                    <?php $__errorArgs = ["name"];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label  class="form-label">Email <strong class="text-danger">*</strong> </label>
                                <input
                                    type="email"
                                    class="form-control"
                                    name="email"
                                    value="<?php echo e(old("email") ?? $user->email); ?>"
                                    placeholder="Enter your email"
                                    readonly
                                />
                                <div class="form-text text-danger">
                                    <?php $__errorArgs = ["email"];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label  class="form-label">About <strong class="text-danger">*</strong> </label>
                                <textarea
                                    class="form-control"
                                    rows="3"
                                    name="about"
                                    placeholder="Write about self."
                                    required
                                ><?php echo e(old("about") ?? $user->about); ?></textarea>

                                <div class="form-text text-danger">
                                    <?php $__errorArgs = ["about"];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>

                            <div class="mb-3">
                                <button
                                    type="submit"
                                    class="btn btn-theme"
                                >Update
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-12 col-md-6">
                <div class="card text-white mb-3">
                    <div class="card-header bg-theme">Update Social Media Links</div>
                    <div class="card-body">
                        <form method="post" action="/admin/profile/social-media/update"> <?php echo csrf_field(); ?>
                            <div class="mb-3">
                                <div class="input-group mb-3">
                                    <span class="input-group-text">
                                        <i class="fab fa-facebook-f text-theme"></i>
                                    </span>
                                    <input
                                        type="url"
                                        class="form-control"
                                        name="facebook_url"
                                        value="<?php echo e(old("facebook_url") ?? $user->Social->facebook); ?>"
                                        placeholder="Facebook link"
                                    />
                                </div>
                                <div class="form-text text-danger">
                                    <?php $__errorArgs = ["facebook_url"];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>

                                <div class="input-group mb-3">
                                    <span class="input-group-text">
                                        <i class="fab fa-twitter text-theme"></i>
                                    </span>
                                    <input
                                        type="url"
                                        class="form-control"
                                        name="twitter_url"
                                        value="<?php echo e(old("twitter_url") ?? $user->Social->twitter); ?>"
                                        placeholder="Twitter link"
                                    />
                                </div>
                                <div class="form-text text-danger">
                                    <?php $__errorArgs = ["twitter_url"];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>

                                <div class="input-group mb-3">
                                    <span class="input-group-text">
                                        <i class="fab fa-instagram text-theme"></i>
                                    </span>
                                    <input
                                        type="url"
                                        class="form-control"
                                        name="instagram_url"
                                        value="<?php echo e(old("instagram_url") ?? $user->Social->instagram); ?>"
                                        placeholder="Instagram link"
                                    />
                                </div>
                                <div class="form-text text-danger">
                                    <?php $__errorArgs = ["instagram_url"];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>

                                <div class="input-group mb-3">
                                    <span class="input-group-text">
                                        <i class="fab fa-linkedin text-theme"></i>
                                    </span>
                                    <input
                                        type="url"
                                        class="form-control"
                                        name="linkedin_url"
                                        value="<?php echo e(old("linkedin_url") ?? $user->Social->linkedin); ?>"
                                        placeholder="Linkedin link"
                                    />
                                </div>
                                <div class="form-text text-danger">
                                    <?php $__errorArgs = ["linkedin_url"];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>

                                <div class="input-group mb-3">
                                    <span class="input-group-text">
                                        <i class="fab fa-pinterest text-theme"></i>
                                    </span>
                                    <input
                                        type="url"
                                        class="form-control"
                                        name="pinterest_url"
                                        value="<?php echo e(old("pinterest_url") ?? $user->Social->pinterest); ?>"
                                        placeholder="Pinterest link"
                                    />
                                </div>
                                <div class="form-text text-danger">
                                    <?php $__errorArgs = ["pinterest_url"];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>

                                <div class="input-group mb-3">
                                    <span class="input-group-text">
                                        <i class="fab fa-whatsapp text-theme"></i>
                                    </span>
                                    <input
                                        type="url"
                                        class="form-control"
                                        name="whatsapp_url"
                                        value="<?php echo e(old("whatsapp_url") ?? $user->Social->whatsapp); ?>"
                                        placeholder="Whatsapp link"
                                    />
                                </div>
                                <div class="form-text text-danger">
                                    <?php $__errorArgs = ["whatsapp_url"];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>

                                <div class="input-group mb-3">
                                    <span class="input-group-text">
                                        <i class="fab fa-youtube text-theme"></i>
                                    </span>
                                    <input
                                        type="url"
                                        class="form-control"
                                        name="youtube_url"
                                        value="<?php echo e(old("youtube_url") ?? $user->Social->youtube); ?>"
                                        placeholder="Youtube link"
                                    />
                                </div>
                                <div class="form-text text-danger">
                                    <?php $__errorArgs = ["youtube_url"];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>

                                <div class="input-group mb-3">
                                    <span class="input-group-text">
                                        <i class="fab fa-telegram text-theme"></i>
                                    </span>
                                    <input
                                        type="url"
                                        class="form-control"
                                        name="telegram_url"
                                        value="<?php echo e(old("telegram_url") ?? $user->Social->telegram); ?>"
                                        placeholder="Telegram link"
                                    />
                                </div>
                                <div class="form-text text-danger">
                                    <?php $__errorArgs = ["telegram_url"];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>

                                <div class="input-group mb-3">
                                    <span class="input-group-text">
                                        <i class="fab fa-internet-explorer text-theme"></i>
                                    </span>
                                    <input
                                        type="url"
                                        class="form-control"
                                        name="website_url"
                                        value="<?php echo e(old("website_url") ?? $user->Social->website); ?>"
                                        placeholder="Website link"
                                    />
                                </div>
                                <div class="form-text text-danger">
                                    <?php $__errorArgs = ["website_url"];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>


                            </div>
                            <div class="mb-3">
                                <button
                                    type="submit"
                                    class="btn btn-theme"
                                    >Update
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-12 col-md-6">
                <div class="card text-white mb-3">
                    <div class="card-header bg-theme">Change Account Email</div>
                    <div class="card-body">
                        <form method="post" action="/admin/account/email/update"> <?php echo csrf_field(); ?>
                            <div class="mb-3">
                                <label  class="form-label">Current Email <strong class="text-danger">*</strong> </label>
                                <input
                                    type="email"
                                    class="form-control"
                                    name="current_email"
                                    value="<?php echo e($user->email); ?>"
                                    readonly
                                />
                            </div>

                            <div class="mb-3">
                                <label  class="form-label">New Email <strong class="text-danger">*</strong> </label>
                                <input
                                    type="email"
                                    class="form-control"
                                    name="new_email"
                                    value="<?php echo e(old("new_email")); ?>"
                                    placeholder="Enter new email"
                                    required
                                />
                                <div class="form-text text-danger">
                                    <?php $__errorArgs = ["new_email"];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label  class="form-label">Current Password <strong class="text-danger">*</strong> </label>
                                <input
                                    type="password"
                                    class="form-control"
                                    name="current_password"
                                    value="<?php echo e(old('current_password')); ?>"
                                    required
                                    placeholder="Enter you current password"
                                />
                                <div class="form-text text-danger">
                                    <?php $__errorArgs = ["current_password"];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>

                            <div class="mb-3">
                                <button
                                    type="submit"
                                    class="btn btn-theme"
                                >Update Email
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-12 col-md-6">
                <div class="card text-white mb-3">
                    <div class="card-header bg-theme">Change Account Password </div>
                    <div class="card-body">
                        <form method="post" action="/admin/account/password/update"> <?php echo csrf_field(); ?>
                            <div class="mb-3">
                                <label  class="form-label">Current Password <strong class="text-danger">*</strong> </label>
                                <input
                                    type="password"
                                    class="form-control"
                                    name="current_password"
                                    value="<?php echo e(old('current_password')); ?>"
                                    required
                                    placeholder="Enter you current password"
                                />
                                <div class="form-text text-danger">
                                    <?php $__errorArgs = ["current_password"];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label  class="form-label">New Password <strong class="text-danger">*</strong> </label>
                                <input
                                    type="password"
                                    class="form-control"
                                    name="password"
                                    value="<?php echo e(old('password')); ?>"
                                    required
                                    placeholder="Enter new password"
                                />
                                <div class="form-text text-danger">
                                    <?php $__errorArgs = ["password"];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label  class="form-label">Confirm Password <strong class="text-danger">*</strong> </label>
                                <input
                                    type="password"
                                    class="form-control"
                                    name="password_confirmation"
                                    value="<?php echo e(old('password_confirmation')); ?>"
                                    required
                                    placeholder="Enter confirm password"
                                />
                                <div class="form-text text-danger">
                                    <?php $__errorArgs = ["password_confirmation"];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>

                            <div class="mb-3">
                                <button
                                    type="submit"
                                    class="btn btn-theme"
                                >Update Password
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- End Body section -->

<!-- Include footer section -->
<?php echo $__env->make("admin.layouts.footer", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- Include footer section -->
<?php $__env->stopSection(); ?>


<?php echo $__env->make("admin.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\softwala.com\resources\views/admin/pages/profile.blade.php ENDPATH**/ ?>