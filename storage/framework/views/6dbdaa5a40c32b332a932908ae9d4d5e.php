
<?php $__env->startSection('konten2'); ?>

<a href="<?php echo e(route('home')); ?>" class="btn btn-secondary btn-sm" title="Home">
    <i class="fa fa-home mr-2"></i>Home
</a>

<button type="button" data-toggle="modal" data-target="#tambah" 
class="btn btn-info btn-sm" title="Tambah Data Ruangan"><i class="fa fa-plus"></i> &nbsp; Tambah Data</button>
<br />

<div class="table-responsive">
    <table class="table table-bordered table-hover" id="example">
        <thead class="thead-dark">
            <tr>
                <th>No</th>
                <th>ID Ruangan</th>
                <th>Jenis Ruangan</th>
                <th>Nama Ruangan</th>
                <th>Kapasitas</th>
                <th>Penanggung Jawab</th>
                <th>Fasilitas</th>
                <th>LCD</th>
                <th>Tanggal Dibangun</th>
                <th>Tindakan</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $ruangan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($loop->iteration); ?></td>
                <td><?php echo e($d->id_ruangan); ?></td>
                <td><?php echo e($d->jenis_ruangan); ?></td>
                <td><?php echo e($d->nama_ruangan); ?></td>
                <td><?php echo e($d->kapasitas_ruangan); ?></td>
                <td><?php echo e($d->penanggung_jawab); ?></td>
                <td><?php echo e($d->fasilitas_ruangan); ?></td>
                <td><?php echo e($d->lcd ? 'Ada' : 'Tidak Ada'); ?></td>
                <td><?php echo e($d->tanggal_dibangun); ?></td>
                <td>
                    <form onsubmit="return confirm('Yakin hapus data?');" method="POST" action="<?php echo e(route('ruangan2.destroy', $d->id)); ?>">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <a href="<?php echo e(route('ruangan2.edit', $d->id)); ?>" class="btn btn-success btn-sm mb-2">
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
        <form method="POST" action="<?php echo e(route('ruangan2.store')); ?>" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tambahLabel">Tambah Data Ruangan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="fa fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="id_ruangan">ID Ruangan</label>
                        <input type="text" class="form-control" id="id_ruangan" name="id_ruangan" required>
                        <?php $__errorArgs = ['id_ruangan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <small class="text-danger"><?php echo e($message); ?></small> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="form-group">
                        <label for="jenis_ruangan">Jenis Ruangan</label>
                        <select class="form-control" id="jenis_ruangan" name="jenis_ruangan" required>
                            <option value="Ruang Rapat">Ruang Rapat</option>
                            <option value="Aula">Aula</option>
                            <option value="Ruang Olahraga">Ruang Olahraga</option>
                            <option value="Gudang">Gudang</option>
                        </select>
                        <?php $__errorArgs = ['jenis_ruangan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <small class="text-danger"><?php echo e($message); ?></small> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="form-group">
                        <label for="nama_ruangan">Nama Ruangan</label>
                        <input type="text" class="form-control" id="nama_ruangan" name="nama_ruangan" required>
                        <?php $__errorArgs = ['nama_ruangan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <small class="text-danger"><?php echo e($message); ?></small> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="form-group">
                        <label for="kapasitas_ruangan">Kapasitas Ruangan</label>
                        <input type="number" class="form-control" id="kapasitas_ruangan" name="kapasitas_ruangan" required>
                        <?php $__errorArgs = ['kapasitas_ruangan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <small class="text-danger"><?php echo e($message); ?></small> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="form-group">
                        <label for="penanggung_jawab">Penanggung Jawab</label>
                        <input type="text" class="form-control" id="penanggung_jawab" name="penanggung_jawab" required>
                        <?php $__errorArgs = ['penanggung_jawab'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <small class="text-danger"><?php echo e($message); ?></small> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="form-group">
                        <label for="fasilitas_ruangan">Fasilitas</label>
                        <input type="text" class="form-control" id="fasilitas_ruangan" name="fasilitas_ruangan">
                        <?php $__errorArgs = ['fasilitas_ruangan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <small class="text-danger"><?php echo e($message); ?></small> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="form-group">
                        <label for="lcd">LCD</label>
                        <select class="form-control" id="lcd" name="lcd" required>
                            <option value="1">Ada</option>
                            <option value="0">Tidak Ada</option>
                        </select>
                        <?php $__errorArgs = ['lcd'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <small class="text-danger"><?php echo e($message); ?></small> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="form-group">
                        <label for="tanggal_dibangun">Tanggal Dibangun</label>
                        <input type="date" class="form-control" id="tanggal_dibangun" name="tanggal_dibangun" required>
                        <?php $__errorArgs = ['tanggal_dibangun'];
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

<?php echo $__env->make('layout.menu2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ruangan\resources\views/ruangan/index.blade.php ENDPATH**/ ?>