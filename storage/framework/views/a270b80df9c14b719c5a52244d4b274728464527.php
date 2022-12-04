<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aplikasi Restoran SMK</title>
    <link rel="stylesheet" href="<?php echo e(asset('bootstrap/css/bootstrap.min.css')); ?>">
</head>
<body>
    
    <div class="container">
        <div class="mt-2">
            <nav class="navbar navbar-expand-lg bg-light">
                <div class="container-fluid">
                    <a href="/">
                        <img style="width: 100px" src="<?php echo e(asset('gambar/logo restoran.png')); ?>" alt="">
                    </a>
                    <ul class="navbar-nav gap-4">

                        <?php if(session()->has('cart')): ?>
                            <li class="nav-item"><a href="<?php echo e(url('cart')); ?>"> Cart (
                                <?php
                                    $count =count(session('cart'));
                                    echo $count;
                                ?>
                            )</a></li>
                        <?php else: ?>
                            <li class="nav-item">Cart</li>
                        <?php endif; ?>
                        
                        <?php if(session()->missing('idpelanggan')): ?>
                            <li class="nav-item"><a href="<?php echo e(url('register')); ?>">Register</a></li>
                            <li class="nav-item"><a href="<?php echo e(url('login')); ?>">Login</a></li>
                        <?php endif; ?>
                        
                        <?php if(session()->has('idpelanggan')): ?>
                            <li class="nav-item"><?php echo e(session('idpelanggan')['email']); ?></li>
                            <li class="nav-item"><a href="<?php echo e(url('logout')); ?>">Logout</a></li>
                        <?php endif; ?>
                        
                    </ul>
                </div>
            </nav>
        </div>
        <div class="row mt-4">
            <div class="col-2">
                <ul class="list-group">
                    <?php $__currentLoopData = $kategoris; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kategori): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="list-group-item"><a href="<?php echo e(url('show/'.$kategori->idkategori )); ?>"> <?php echo e($kategori -> kategori); ?> </a></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
            <div class="col-10">

                <?php echo $__env->yieldContent('content'); ?>

            </div>
        </div>
        <div class="bg-light mt=3">
            <p class="text-center">@Mastershifu.com</p>
        </div>
    </div>


    <script src="<?php echo e(asset('bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
</body>
</html><?php /**PATH C:\xampp\htdocs\laravel-restosmk\resources\views/front.blade.php ENDPATH**/ ?>