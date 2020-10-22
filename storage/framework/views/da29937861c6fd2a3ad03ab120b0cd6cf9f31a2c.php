

<?php $__env->startSection('main'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h3 class="text-center pt-3">Register</h3>

            <?php echo $__env->make('frontend.partials._message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <form action="<?php echo e(route('register')); ?>" method="post" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label for="">Full Name</label>
                    <input type="text" class="form-control" name="name" value="<?php echo e(old('name')); ?>">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>">
                </div>
                <div class="form-group">
                    <label for="">Phone</label>
                    <input type="phone" class="form-control" name="phone_number" value="<?php echo e(old('phone_number')); ?>">
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <br>
                <div class="form-group">
                    <input type="submit" value="Register" class="btn btn-success btn-lg btn-block">
                </div>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laracomllc\resources\views/frontend/auth/register.blade.php ENDPATH**/ ?>