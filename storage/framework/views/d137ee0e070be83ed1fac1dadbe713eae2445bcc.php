<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.75.1">
    <title><?php echo e(config('app.name')); ?></title>

    <link rel="canonical" href="https://v5.getbootstrap.com/docs/5.0/examples/album/">

    <!-- Bootstrap core CSS -->
    <link href="https://v5.getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }
        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <?php echo $__env->yieldContent('before_head'); ?>
</head>

<body>

    <?php echo $__env->make('frontend.partials._header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <main>

        <?php echo $__env->yieldContent('main'); ?>

    </main>

    <?php echo $__env->make('frontend.partials._footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
    <script src="https://v5.getbootstrap.com/docs/5.0/dist/js/bootstrap.bundle.min.js">
    </script>

    <?php echo $__env->yieldContent('before_body'); ?>
</body>

</html><?php /**PATH C:\xampp\htdocs\laracomllc\resources\views/frontend/layouts/master.blade.php ENDPATH**/ ?>