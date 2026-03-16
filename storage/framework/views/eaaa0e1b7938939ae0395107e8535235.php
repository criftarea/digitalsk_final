
<?php $__env->startSection('konten2'); ?>

<div class="container mt-5 position-relative">
    <h2>Edit Kenaikan Pangkat</h2>
    <a href="<?php echo e(route('pangkat.index')); ?>" title="Kembali" class="btn-back">
        <i class="fas fa-arrow-left"></i>
    </a>
    <form method="POST" action="<?php echo e(route('pangkat.update', $pangkat->id)); ?>"  enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="<?php echo e(old('nama', $pangkat->nama)); ?>">
            <?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="text-danger"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="form-group">
            <label for="periode">Periode</label>
            <input type="text" class="form-control" id="periode" name="periode">
            <?php $__errorArgs = ['periode'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="text-danger"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="form-group">
            <label for="[pangkat_lama]">Pangkat Lama</label>
            <input type="text" class="form-control" id="pangkat_lama" name="pangkat_lama" value="<?php echo e(old('pangkat_lama', $pangkat->pangkat_lama)); ?>">
            <?php $__errorArgs = ['pangkat_lama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="text-danger"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="form-group">
            <label for="[pangkat_baru]">Pangkat Baru</label>
            <input type="text" class="form-control" id="pangkat_baru" name="pangkat_baru" value="<?php echo e(old('pangkat_baru', $pangkat->pangkat_baru)); ?>">
            <?php $__errorArgs = ['pangkat_baru'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="text-danger"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="form-group">
            <label for="[jabatan]">Jabatan</label>
            <input type="text" class="form-control" id="jabatan" name="jabatan" value="<?php echo e(old('jabatan', $pangkat->jabatan)); ?>">
            <?php $__errorArgs = ['jabatan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="text-danger"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="btn-container">
            <button type="submit" title="Simpan Data" class="btn btn-custom-save">
                <i class='fas fa-save' style='color:#010101'></i> Simpan
            </button>
        </div>
    </form>
</div>

<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.menu2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\digitalsk\resources\views/pangkat/edit.blade.php ENDPATH**/ ?>