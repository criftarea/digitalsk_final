<form action="<?php echo e(route('login_proses')); ?>" method="post">
	<?php echo csrf_field(); ?>
	<div class="form-group">
        <label class="form-control-label">Username : </label>
        <input type="text" name="username" class="form-control" placeholder="Enter your username">
        <div>
            <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <span style="color:crimson"><?php echo e($message); ?></span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
    </div>

    <div class="form-group">
        <label class="form-control-label">Password :</label>
        <input type="password" name="password" class="form-control" placeholder="Enter your password">
        <div>
            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <span style="color:crimson"><?php echo e($message); ?></span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
    </div>
    <br />
    <button type="submit" class="btn btn-block">Login</button>
</form>
<?php /**PATH C:\xampp\htdocs\ruangan\resources\views/auth/login.blade.php ENDPATH**/ ?>