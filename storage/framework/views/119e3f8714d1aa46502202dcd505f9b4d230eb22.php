<header>
    <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-md-7 py-4">
                    <h4 class="text-white">Categories</h4>
                    <ul class="list-unstyled">
                        <li class="nav-item">
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <a class="nav-link" href="<?php echo e($category->slug); ?>"><?php echo e($category->name); ?></a>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                            
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                aria-expanded="false">
                                Dropdown
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-4 offset-md-1 py-4">
                    <h4 class="text-white">Menu</h4>
                    <ul class="list-unstyled">
                        <?php if(auth()->guard()->check()): ?>                                
                            <li><a href="<?php echo e(route('profile')); ?>" class="text-white">Dashboard</a></li>
                            <li><a href="<?php echo e(route('logout')); ?>" class="text-white">Logout</a></li>
                        <?php endif; ?>
                        <?php if(auth()->guard()->guest()): ?>                                
                            <li><a href="<?php echo e(route('register')); ?>"  class="text-white">Register</a></li>
                            <li><a href="<?php echo e(route('login')); ?>" class="text-white">Login</a></li>
                        <?php endif; ?>                                                     
                        <li><a href="<?php echo e(route('cart.show')); ?>" class="text-white">Cart</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="navbar navbar-dark bg-dark shadow-sm">
        <div class="container">
            <a href="<?php echo e(route('frontend.home')); ?>" class="navbar-brand d-flex align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor"
                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="mr-2"
                    viewBox="0 0 24 24">
                    <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z" />
                    <circle cx="12" cy="13" r="4" /></svg>
                <strong><?php echo e(config('app.name')); ?></strong>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </div>
</header><?php /**PATH C:\xampp\htdocs\laracomllc\resources\views/frontend/partials/_header.blade.php ENDPATH**/ ?>