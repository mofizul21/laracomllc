

<?php $__env->startSection('main'); ?>
    <?php echo $__env->make('frontend.partials._hero', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
    <div class="album py-5 bg-light">
        <div class="container">
            
            <?php echo $__env->make('frontend.partials._message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col">
                    <div class="card shadow-sm">

                        <a href="<?php echo e(route('product.details', $product->slug)); ?>"><img src="<?php echo e($product->getFirstMediaUrl('products')); ?>" class="bd-placeholder-img card-img-top" alt="Product Image"></a>

                        <div class="card-body">
                            <p class="card-text"><a href="<?php echo e(route('product.details', $product->slug)); ?>"><?php echo e($product->title); ?></a></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <form action="<?php echo e(route('cart.add')); ?>" method="post">
                                        <?php echo csrf_field(); ?>
                                        <input type="hidden" name="product_id" value="<?php echo e($product->id); ?>">
                                        <button type="submit" class="btn btn-sm btn-outline-secondary">Add to Cart</button>
                                    </form>
                                    
                                </div>
                                <strong class="text-muted">
                                    Price: BDT
                                    <?php if($product->sale_price != null && $product->sale_price > 0): ?>
                                        <strike style="font-size: 12px;"><?php echo e($product->price); ?></strike> <?php echo e($product->sale_price); ?>

                                    <?php else: ?>
                                        <?php echo e($product->price); ?>

                                    <?php endif; ?>
                                    
                                </strong>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                
    
            </div>
            <div class="row">
                <div class="col-md-12 mt-5">
                    <?php echo e($products->render()); ?>

                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laracomllc\resources\views/frontend/home.blade.php ENDPATH**/ ?>