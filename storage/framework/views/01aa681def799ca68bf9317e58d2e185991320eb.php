

<?php $__env->startSection('main'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="text-center pt-3">Cart</h3>

                <?php if(session('message')): ?>
                <div class="alert alert-success">
                    <?php echo e(session('message')); ?>

                </div>
                <?php endif; ?>

                <?php if(empty($cart)): ?>
                    <div class="alert alert-info">
                        <h3>Your cart is empty. Please add to cart something. <a href="<?php echo e(route('frontend.home')); ?>">Let's shopping...</a></h3>
                    </div>
                <?php else: ?>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>SL.</th>
                                <th>Product</th>
                                <th>Unit Price</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i=1 ?>
                            <?php $__currentLoopData = $cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                            
                            <tr>                            
                                <td><?php echo e($i++); ?></td>
                                <td><?php echo e($product['title']); ?></td>
                                <td><?php echo e(number_format($product['unit_price'], 2)); ?></td>
                                <td><input type="number" name="quantity" value="<?php echo e($product['quantity']); ?>"></td>
                                <td>BDT <?php echo e(number_format($product['total_price'], 2)); ?></td>
                                <td>
                                    <form action="<?php echo e(route('cart.remove')); ?>" method="post">
                                        <?php echo csrf_field(); ?>
                                        <input type="hidden" name="product_id" value="<?php echo e($key); ?>">
                                        <button type="submit" class="btn btn-sm btn-outline-secondary">Remove</button>
                                    </form>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Total:</td>
                                <th>BDT <?php echo e(number_format($total, 2)); ?></th>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                    <a href="<?php echo e(route('cart.clear')); ?>" class="btn btn-danger btn-lg float-left">Clear Cart</a>
                    <a href="<?php echo e(route('checkout')); ?>" class="btn btn-success btn-lg float-right">Checkout</a>
                <?php endif; ?>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laracomllc\resources\views/frontend/cart.blade.php ENDPATH**/ ?>