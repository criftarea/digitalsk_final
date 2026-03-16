
<?php $__env->startSection('konten2'); ?>

<a href="<?php echo e(route('home')); ?>" class="btn btn-secondary btn-sm" title="Home">
    <i class="fa fa-home mr-2"></i>Home
</a>

<button type="button" data-toggle="modal" data-target="#tambah" 
class="btn btn-info btn-sm" title="Tambah Data Digitalsk"><i class="fa fa-plus"></i> &nbsp; Tambah Data</button>
<br />

<div class="table-responsive">
    <table class="table table-bordered table-hover" id="example">
        <thead class="thead-dark">
            <tr>
                <th>No</th>
                <th>Nama File</th>
                <th>File PDF</th>
                <th>Tanggal Upload</th>
                <th>Tindakan</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $digitalsk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($loop->iteration); ?></td>
                <td><?php echo e($d->nama_file); ?></td>
                <td><?php echo e($d->file_pdf); ?>

                    <a href="<?php echo e(Storage::url('pdf/'. $d->file_pdf)); ?>" target="_blank">Lihat PDF</a>
                </td>
                <td><?php echo e($d->tanggal_upload); ?></td>
                <td>
                    <form onsubmit="return confirm('Yakin hapus data?');" method="POST" action="<?php echo e(route('digitalsk2.destroy', $d->id)); ?>">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <a href="<?php echo e(route('digitalsk2.edit', $d->id)); ?>" class="btn btn-success btn-sm mb-2">
                            <i class="fa fa-edit"></i> Edit
                        </a>
                        <button type="submit" class="btn btn-danger btn-sm mb-2">
                            <i class="fa fa-trash"></i> Hapus
                        </button>
                    </form>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>

<?php if(session('status')): ?>
    <script>
        Swal.fire({
            title: "<?php echo e(session('status')['judul']); ?>",
            text: "<?php echo e(session('status')['pesan']); ?>",
            icon: "<?php echo e(session('status')['icon']); ?>"
        });
    </script>
<?php endif; ?>

<?php if($errors->any()): ?>
<script>
    Swal.fire({
        title: 'Ada Kesalahan!',
        text: '<?php echo e($errors->first()); ?>',
        icon: 'error',
        confirmButtonText: 'OK'
    });
</script>
<?php endif; ?>

<div class="modal fade" id="tambah" tabindex="-1" aria-labelledby="tambahLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form method="POST" action="<?php echo e(route('digitalsk2.store')); ?>" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tambahLabel">Tambah Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="fa fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nama_file">Nama File</label>
                        <input type="text" class="form-control" id="nama_file" name="nama_file" required>
                        <?php $__errorArgs = ['nama_file'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <small class="text-danger"><?php echo e($message); ?></small> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="form-group">
                        <label for="file_pdf">File PDF</label>
                        <input type="file" class="form-control" id="file_pdf" name="file_pdf" required>
                        <?php $__errorArgs = ['file_pdf'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <small class="text-danger"><?php echo e($message); ?></small> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="form-group">
                        <label for="tanggal_upload">Tanggal Upload</label>
                        <input type="date" class="form-control" id="tanggal_upload" name="tanggal_upload" required>
                        <?php $__errorArgs = ['tanggal_upload'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <small class="text-danger"><?php echo e($message); ?></small> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        <i class="fa fa-times"></i> Close
                    </button>
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-save"></i> Save changes
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.menu2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\digitalsk\resources\views/digitalsk/index.blade.php ENDPATH**/ ?>