
<?php $__env->startSection('konten2'); ?>

<div class="container mt-5 position-relative">
    <h2>Edit Data Ruangan</h2>
    <a href="<?php echo e(route('ruangan2.index')); ?>" title="Kembali" class="btn-back">
        <i class="fas fa-arrow-left"></i>
    </a>
    <form method="POST" action="<?php echo e(route('ruangan2.update', $ruangan->id)); ?>">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
        <div class="form-group">
            <label for="id_ruangan">ID Ruangan</label>
            <input type="text" class="form-control" id="id_ruangan" name="id_ruangan" value="<?php echo e(old('id_ruangan', $ruangan->id_ruangan)); ?>">
            <?php $__errorArgs = ['id_ruangan'];
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
            <label for="jenis_ruangan">Jenis Ruangan</label>
            <select class="form-control" id="jenis_ruangan" name="jenis_ruangan">
                <option value="Ruang Rapat" <?php echo e(old('jenis_ruangan', $ruangan->jenis_ruangan) == 'Ruang Rapat' ? 'selected' : ''); ?>>Ruang Rapat</option>
                <option value="Aula" <?php echo e(old('jenis_ruangan', $ruangan->jenis_ruangan) == 'Aula' ? 'selected' : ''); ?>>Aula</option>
                <option value="Ruang Olahraga" <?php echo e(old('jenis_ruangan', $ruangan->jenis_ruangan) == 'Ruang Olahraga' ? 'selected' : ''); ?>>Ruang Olahraga</option>
                <option value="Gudang" <?php echo e(old('jenis_ruangan', $ruangan->jenis_ruangan) == 'Gudang' ? 'selected' : ''); ?>>Gudang</option>
            </select>
            <?php $__errorArgs = ['jenis_ruangan'];
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
            <label for="nama_ruangan">Nama Ruangan</label>
            <input type="text" class="form-control" id="nama_ruangan" name="nama_ruangan" value="<?php echo e(old('nama_ruangan', $ruangan->nama_ruangan)); ?>">
            <?php $__errorArgs = ['nama_ruangan'];
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
            <label for="kapasitas_ruangan">Kapasitas Ruangan</label>
            <input type="number" class="form-control" id="kapasitas_ruangan" name="kapasitas_ruangan" value="<?php echo e(old('kapasitas_ruangan', $ruangan->kapasitas_ruangan)); ?>">
            <?php $__errorArgs = ['kapasitas_ruangan'];
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
            <label for="penanggung_jawab">Penanggung Jawab</label>
            <input type="text" class="form-control" id="penanggung_jawab" name="penanggung_jawab" value="<?php echo e(old('penanggung_jawab', $ruangan->penanggung_jawab)); ?>">
            <?php $__errorArgs = ['penanggung_jawab'];
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
            <label for="fasilitas_ruangan">Fasilitas Ruangan</label>
            <input type="text" class="form-control" id="fasilitas_ruangan" name="fasilitas_ruangan" value="<?php echo e(old('fasilitas_ruangan', $ruangan->fasilitas_ruangan)); ?>">
            <?php $__errorArgs = ['fasilitas_ruangan'];
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
            <label for="lcd">LCD</label>
            <select class="form-control" id="lcd" name="lcd">
                <option value="1" <?php echo e(old('lcd', $ruangan->lcd) == 1 ? 'selected' : ''); ?>>Ada</option>
                <option value="0" <?php echo e(old('lcd', $ruangan->lcd) == 0 ? 'selected' : ''); ?>>Tidak Ada</option>
            </select>
            <?php $__errorArgs = ['lcd'];
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
            <label for="tanggal_dibangun">Tanggal Dibangun</label>
            <input type="date" class="form-control" id="tanggal_dibangun" name="tanggal_dibangun" value="<?php echo e(old('tanggal_dibangun', $ruangan->tanggal_dibangun)); ?>">
            <?php $__errorArgs = ['tanggal_dibangun'];
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

<?php echo $__env->make('layout.menu2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ruangan\resources\views/ruangan/edit.blade.php ENDPATH**/ ?>