

<?php $__env->startSection('main'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="text-center pt-3">Checkout</h3>

                <?php echo $__env->make('frontend.partials._message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <?php if(auth()->guard()->guest()): ?>
                <div class="alert alert-info">
                    You need to <a href="<?php echo e(route('login')); ?>">login</a> to continue order.
                </div>

                <?php else: ?>
                <div class="alert alert-info">
                    You are ordering as <b><?php echo e(auth()->user()->name); ?></b>
                </div>

                <div class="row g-3">
                    <div class="col-md-5 col-lg-4 order-md-last">
                        <h4 class="d-flex justify-content-between align-items-center mb-3">
                            <span class="text-muted">Your cart</span>
                            <span class="badge bg-secondary rounded-pill"><?php echo e(count($cart)); ?></span>
                        </h4>
                        <ul class="list-group mb-3">
                            <?php $__currentLoopData = $cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="list-group-item d-flex justify-content-between lh-sm">
                                <div>
                                    <h6 class="my-0"><?php echo e($product['title']); ?></h6>
                                    <small class="text-muted">Quantity: <?php echo e($product['quantity']); ?> x <?php echo e($product['unit_price']); ?></small>
                                </div>
                                <span class="text-muted">BDT <?php echo e(number_format($product['total_price'], 2)); ?></span>
                            </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            
                            <li class="list-group-item d-flex justify-content-between">
                                <span>Total (BDT)</span>
                                <strong><?php echo e(number_format($total, 2)); ?></strong>
                            </li>
                        </ul>
                
                        <form class="card p-2">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Promo code">
                                <button type="submit" class="btn btn-secondary">Redeem</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-7 col-lg-8">
                        <h4 class="mb-3">Billing address</h4>
                        <form method="post" action="<?php echo e(route('order')); ?>" class="needs-validation">
                            <?php echo csrf_field(); ?>
                            <div class="row g-3">
                                <div class="col-sm-6">
                                    <label for="name" class="form-label">Customer name</label>
                                    <input type="text" class="form-control" id="name" value="<?php echo e(auth()->user()->name); ?>" name="customer_name">
                                </div>
                
                                <div class="col-sm-6">
                                    <label for="phone_number" class="form-label">Customer Phone Number</label>
                                    <input type="number" class="form-control" id="phone_number" name="customer_phone_number" value="<?php echo e(auth()->user()->phone_number); ?>">
                                </div>
                
                                <div class="col-12">
                                    <label for="address" class="form-label">Address</label>
                                    <textarea name="address" class="form-control"></textarea>
                                </div>
                
                                <div class="col-md-5">
                                    <label for="country" class="form-label">Country</label>
                                    <select class="form-select" id="country" required="">
                                        <option>Bangladesh</option>
                                    </select>
                                </div>
                
                                <div class="col-md-4">
                                    <label for="state" class="form-label">City</label>
                                   <input type="text" class="form-control" name="city" placeholder="Satkhira">
                                </div>
                
                                <div class="col-md-3">
                                    <label for="zip" class="form-label">Postal code</label>
                                    <input type="text" class="form-control" id="zip" placeholder="9461" name="postal_code">
                                </div>
                            </div>
                
                            <br>
                
                            <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>
                        </form>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laracomllc\resources\views/frontend/checkout.blade.php ENDPATH**/ ?>