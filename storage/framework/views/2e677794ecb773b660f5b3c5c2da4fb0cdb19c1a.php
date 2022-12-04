

<?php $__env->startSection('content'); ?>
    <div class="row">
        <?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="card mx-2 mb-3" style="width: 18rem;">

            <img src="<?php echo e(asset('gambar/'.$menu->gambar)); ?>" class="card-img-top" alt="...">

            <div class="card-body">
                <h5 class="card-title"><?php echo e($menu->menu); ?></h5>
                <p class="card-text"><?php echo e($menu->deskripsi); ?></p>
                <p class="card-title"><?php echo e($menu->harga); ?></p>
                <a href="<?php echo e(url('beli/'.$menu->idmenu)); ?>" class="btn btn-primary">Beli</a>
            </div>

        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <div class="d-flex justify-content-center mt-4">
            <?php echo e($menus->links()); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-restosmk\resources\views/kategori.blade.php ENDPATH**/ ?>