<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Vintage')); ?></title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">

    <style>
    .navbar {
		-webkit-box-shadow: 0 8px 6px -6px #999;
		-moz-box-shadow: 0 8px 6px -6px #999;
		box-shadow: 0 8px 6px -6px #999;
    }

    .sidenav {
        font-family: "Courier New", Courier, monospace;
        position: fixed;
        z-index: 1;
        overflow-x: hidden;
        padding: 8px 0;
    }

    .sidenav a {
        padding: 6px 8px 6px 16px;
        text-decoration: none;
        font-size: 20px;
        color: #000F00;
        display: block;
    }

    .sidenav a:hover {
        color: #191970;
    }
    
    @media  screen and (max-height: 450px) {
        .sidenav {padding-top: 15px;}
        .sidenav a {font-size: 18px;}
    }    

    th{
      color: #808080;
    }

    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        width: 200px;
    }

    li a {
      display: block;
      color: #124;
      padding: 8px 16px;
      text-decoration: none;
    }

    /* Change the link color on hover */
    li a:hover {
      background-color: #555;
      color: white;
    }
    </style>
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                    <img src="images/vintage.png" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <?php if(auth()->guard()->guest()): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                            </li>
                            <li class="nav-item">
                                <?php if(Route::has('register')): ?>
                                    <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                                <?php endif; ?>
                            </li>
                        <?php else: ?>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <div class="container">
                <div class="row" style="padding-top:20px;">
                    <div class="col-2">
                        <div class="sidenav">
                            <h4 style="text-align:center">MENU</h4>
                            <a href="#">Products</a>
                            <a href="#">Orders</a>
                            <a href="#">Customers</a>
                            <a href="#">Analitycs</a>
                            <a href="#">Discounts</a>
                            <a href="#">Apps</a>
                        </div>    
                    </div>

                    <div class="col-10">
                        <?php echo $__env->yieldContent('editable_content'); ?>
                    </div>
                </div>
            
                

        </main>
    </div>

    
    <footer class="footer font-medium pt-2">
        <div class="footer-copyright text-center py-3">© 2018 Vintage - All rights reserved</div>
    </footer>
</body>
</html>
