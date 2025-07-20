<?php $__env->startPush('header-section'); ?>
    <title>Softwala | Blogs lists</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.0/css/dataTables.bootstrap5.min.css" />
<?php $__env->stopPush(); ?>


<?php $__env->startSection('content'); ?>
    <!-- Include navigation section -->
    <?php echo $__env->make('admin.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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

                <div class="col-12 headline">
                    <h1 class="text-theme fw-bold my-5">
                        <?php if(isset($category->name)): ?>
                            <?php echo e($category->name); ?>

                        <?php endif; ?> Posts
                    </h1>
                </div>
                <div class="col-12 text-end mb-3">
                    <a href="<?php echo e(url('admin/post/create')); ?>" class="btn btn-theme btn-outline btn-rounded"><i
                            class="fas fa-plus"></i> Add New
                    </a>
                </div>

                <div class="col-12">
                    <div class="table-responsive">
                        <table class="table table-striped data-table-list border">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Slug</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($loop->index + 1); ?></td>
                                        <td><?php echo e($post->title); ?></td>
                                        <td><?php echo e($post->slug); ?></td>
                                        <td><?php echo e($post->Category->name); ?></td>
                                        <td>
                                            <?php if($post->status->value === 1): ?>
                                                <span
                                                    class="badge badge-success rounded-pill"><?php echo e($post->status->name); ?></span>
                                            <?php elseif($post->status->value === 2): ?>
                                                <span
                                                    class="badge badge-warning rounded-pill"><?php echo e($post->status->name); ?></span>
                                            <?php elseif($post->status->value === 0): ?>
                                                <span
                                                    class="badge badge-danger rounded-pill"><?php echo e($post->status->name); ?></span>
                                            <?php endif; ?>
                                        </td>
                                        <td><?php echo e($post->created_at->format('d-M-Y')); ?></td>
                                        <td>
                                            <!-- Post Edit button -->
                                            <a href="/admin/post/<?php echo e($post->slug); ?>" class="px-1">
                                                <i class="fas fa-eye  text-theme"></i>
                                            </a>

                                            <!-- Post Edit button -->
                                            <a href="/admin/post/<?php echo e($post->pid); ?>/update" class="px-1">
                                                <i class="fas fa-edit  text-success"></i>
                                            </a>

                                            <!-- Post Delete button -->
                                            <a role="button" class="tableDatadelete px-1"
                                                for='<?php echo json_encode(['id' => $post->pid, 'url' => '/admin/post/delete'], 512) ?>'>
                                                <i class="fas fa-trash text-danger"></i>
                                            </a>
                                            <!-- status manage -->
                                            <div class="mx-1 align-middle form-check form-check-inline form-switch">
                                                <input class="form-check-input updateStatus" type="checkbox"
                                                    for='<?php echo json_encode(['id' => $post->pid, 'url' => '/admin/post/status'], 512) ?>'
                                                    <?php echo e($post->status->value == 1 ? 'checked' : ''); ?> />
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Body section -->

    <!-- Include footer section -->
    <?php echo $__env->make('admin.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Include footer section -->
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script-section'); ?>
    <script type="text/javascript" src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.12.0/js/dataTables.bootstrap5.min.js"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\softwala.com\resources\views/admin/pages/posts.blade.php ENDPATH**/ ?>