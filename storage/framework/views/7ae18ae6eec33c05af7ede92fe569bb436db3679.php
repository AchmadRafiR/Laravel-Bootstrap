

<?php $__env->startSection('admincontent'); ?>
    
<div class="row">
    <div class="col-6">
        <form action="<?php echo e(url('admin/user')); ?>" method="post">
            <?php echo csrf_field(); ?>

            <div class="mt-2">
                <label class="form-label" for="">Level</label>
                <select class="form-select" name="level" id="">
                    <option value="manager">manager</option>
                    <option value="kasir">kasir</option>
                    <option value="admin">admin</option>
                </select>
            </div>

            <div class="mt-2">
                <label class="form-label" for="">Nama</label>
                <input class="form-control" value="<?php echo e(old('name')); ?>" type="text" name="name">
                <span class="text-danger">
                    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <?php echo e($message); ?>

                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </span>
            </div>

            <div class="mt-2">
                <label class="form-label" for="">Email</label>
                <input class="form-control" value="<?php echo e(old('email')); ?>" type="email" name="email">
                <span class="text-danger">
                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <?php echo e($message); ?>

                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </span>
            </div>

            <div class="mt-2">
                <label class="form-label" for="">Password</label>
                <input class="form-control" value="<?php echo e(old('password')); ?>" type="password" name="password">
                <span class="text-danger">
                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <?php echo e($message); ?>

                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </span>
            </div>

            <div class="mt-4">
                <button class="btn btn-dark" type="submit">Simpan</button>
            </div>

        </form>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('Backend.back', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-restosmk\resources\views/Backend/user/insert.blade.php ENDPATH**/ ?>