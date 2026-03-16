
<?php $__env->startSection('konten2'); ?>

<div class="container mt-5 position-relative">
    <h2>Edit Data Digital SK</h2>
    <a href="<?php echo e(route('digitalsk2.index')); ?>" title="Kembali" class="btn-back">
        <i class="fas fa-arrow-left"></i>
    </a>
    <form method="POST" action="<?php echo e(route('digitalsk2.update', $digitalsk->id)); ?>"  enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
        <div class="form-group">
            <label for="nama_file">Nama File</label>
            <input type="text" class="form-control" id="nama_file" name="nama_file" value="<?php echo e(old('nama_file', $digitalsk->nama_file)); ?>">
            <?php $__errorArgs = ['nama_file'];
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
            <label for="file_pdf">File PDF</label>
            <input type="file" class="form-control" id="file_pdf" name="file_pdf">
            <?php $__errorArgs = ['file_pdf'];
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
            <label for="tanggal_upload">Tanggal Upload</label>
            <input type="date" class="form-control" id="tanggal_upload" name="tanggal_upload" value="<?php echo e(old('tanggal_upload', $digitalsk->tanggal_upload)); ?>">
            <?php $__errorArgs = ['tanggal_upload'];
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

<?php echo $__env->make('layout.menu2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\digitalsk\resources\views/digitalsk/edit.blade.php ENDPATH**/ ?>