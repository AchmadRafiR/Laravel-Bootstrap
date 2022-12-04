<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Admin Aplikasi Restoran Master Shifu</title>
    <link rel="stylesheet" href="<?php echo e(asset('bootstrap/css/bootstrap.min.css')); ?>">
</head>
<body>
    <div class="container">
        <div class="mt-4">
            <nav class="navbar navbar-expand-lg bg-light">
                <div class="container-fluid">
                    <h2>Admin Page</h2>
                    <ul class="navbar-nav gap-5">
                        <li class="nav-item"><?php echo e(Auth::user()->email); ?></li>
                        <li class="nav-item">Level : <?php echo e(Auth::user()->level); ?></li>
                        <li class="nav-item"><a href="<?php echo e(url('admin/logout')); ?>">Logout</a></li>
                    </ul>
                </div>
            </nav>
        </div>

        <div class="row">
            <div class="col-2">
                <ul class="list-group">
                    <?php if(Auth::user()->level == 'admin'): ?>
                        <li class="list-group-item"><a href="<?php echo e(url('admin/user')); ?>">User</a></li>
                    <?php endif; ?>

                    <?php if(Auth::user()->level == 'kasir'): ?>
                        <li class="list-group-item"><a href="">Order</a></li>
                        <li class="list-group-item"><a href="">Order Detail</a></li>
                    <?php endif; ?>
                    
                    <?php if(Auth::user()->level == 'manager'): ?>
                        <li class="list-group-item"><a href="<?php echo e(url('admin/kategori')); ?>">Kategori</a></li>
                        <li class="list-group-item"><a href="<?php echo e(url('admin/menu')); ?>">Menu</a></li>
                        <li class="list-group-item"><a href="<?php echo e(url('admin/pelanggan')); ?>">Pelanggan</a></li>
                        <li class="list-group-item"><a href="<?php echo e(url('admin/order')); ?>">Order</a></li>
                        <li class="list-group-item"><a href="<?php echo e(url('admin/orderdetail')); ?>">Order Detail</a></li>
                    <?php endif; ?>
                </ul>
            </div>
            <div class="col-10">
                <?php echo $__env->yieldContent('admincontent'); ?>
            </div>
        </div>

        <div class="bg-light mt-5">
            <p class="text-center">@Mastershifu.com</p>
        </div>
    </div>
    
    <script src="<?php echo e(asset('bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
</body>
</html><?php /**PATH C:\xampp\htdocs\laravel-restosmk\resources\views/Backend/back.blade.php ENDPATH**/ ?>