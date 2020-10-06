<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.75.1">
    <title>{{config('app.name')}}</title>

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
    @yield('before_head')
</head>

<body>

    @include('frontend.partials._header')

    <main>

        @yield('main')

    </main>

    @include('frontend.partials._footer')
    
    <script src="https://v5.getbootstrap.com/docs/5.0/dist/js/bootstrap.bundle.min.js">
    </script>

    @yield('before_body')
</body>

</html>