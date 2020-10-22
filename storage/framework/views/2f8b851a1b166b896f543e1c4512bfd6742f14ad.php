

<?php $__env->startSection('main'); ?>
    <div class="container">
        <div class="row">

            <?php echo $__env->make('frontend.partials._message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <h3 class="text-center pt-3">Order Details | Order ID: #<?php echo e($order->id); ?></h3>

            <div class="col-md-6">
                <ul class="list-group">                       
                    <li class="list-group-item"><b>Customer Name:</b> <?php echo e($order->customer_name); ?></li>
                    <li class="list-group-item"><b>Customer Phone:</b> <?php echo e($order->customer_phone_number); ?></li>
                    <li class="list-group-item"><b>Address:</b> <?php echo e($order->address); ?></li>
                </ul>

                <h5>More dynamic way</h5>
                <ul class="list-group">
                    <?php $__currentLoopData = $order->toArray(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $column => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($column === 'user_id'): ?>
                            
                            <?php continue; ?>
                        <?php endif; ?>
                        <li class="list-group-item"><b><?php echo e(ucwords(str_replace('_', ' ', $column))); ?>:</b> <?php echo e($value); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                    
                </ul>
            </div>

            <div class="col-md-6">
                <h5>Product(s) in this order</h5>
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Product Title</th>
                            <th>Quantity</th>
                            <th>Total Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $order->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                        
                        <tr>
                            <td><?php echo e($product->product->title); ?></td>
                            <td><?php echo e($product->quantity); ?></td>
                            <td><span style="floar:right"><?php echo e(number_format($product->price, 2)); ?></span></td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laracomllc\resources\views/frontend/orders/details.blade.php ENDPATH**/ ?>