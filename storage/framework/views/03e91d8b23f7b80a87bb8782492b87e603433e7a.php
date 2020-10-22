

<?php $__env->startSection('main'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="text-center pt-3">Welcome <?php echo e(auth()->user()->name); ?></h3>
                <h4>Your Orders</h4>
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Order ID</th>
                            <th>Customer Name</th>
                            <th>Customer Phone</th>
                            <th>Total Amount</th>
                            <th>Paid Amount</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td>#<?php echo e($order->id); ?></td>
                                <td><?php echo e($order->customer_name); ?></td>
                                <td><?php echo e($order->customer_phone_number); ?></td>
                                <td><?php echo e($order->total_amount); ?></td>
                                <td><?php echo e($order->paid_amount); ?></td>
                                <td><?php echo e($order->operational_status); ?></td>
                                <td><a href="<?php echo e(route('order.details', $order->id)); ?>">Details</a></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laracomllc\resources\views/frontend/auth/profile.blade.php ENDPATH**/ ?>