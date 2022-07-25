<!DOCTYPE html>

<?php $__env->startSection('container'); ?>
<html lang="en">
<head></head>
<body>
    <div class="container-fluid">
        <div class="row">
                <?php if(session('status')): ?>
                <div class="alert alert-success">
                <?php echo e(session('status')); ?>

                </div>
                <?php endif; ?>
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Data Pegawai</h4>

                            <div class="pull-right">
                                  <a href="/tambahpegawai" class="btn btn-success btn-sm">
                                    <i class="fa fa-plus"></i> Tambah Data
                                  </a>
                                </div><br>
                            
                            <div class="table-responsive">
                            <table class="table table-striped table-bordered zero-configuration">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>ID Pegawai</th>
                                        <th>Nama Pegawai</th>
                                        <th>Bidang</th>
                                        <th>Seksi</th>
                                        <th>Telepon</th>
                                        <th>Username</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($loop->iteration); ?></td>
                                        <td><?php echo e($data->id); ?></td>
                                        <td><?php echo e($data->nama_pegawai); ?></td>
                                        <td><?php echo e($data->nama_bidang); ?></td>
                                        <td><?php echo e($data->nama_seksi); ?></td>
                                        <td><?php echo e($data->tlp_pegawai); ?></td>
                                        <td><?php echo e($data->username); ?></td>
                                        <td class="text-center">
                                            <a href="/editbidang<?php echo e($data->id); ?>" class="btn btn-primary btn-sm">
                                              <i class="fa fa-pencil"> edit</i>
                                            </a>
                                              
                                              <form action="/hapusbidang<?php echo e($data->id); ?>" method="post" class="d-inline" onsubmit="return confirm('Yakin hapus data?')">
                                                <?php echo method_field('delete'); ?>
                                                <?php echo csrf_field(); ?>
                                                <button class="btn btn-danger btn-sm">
                                                  <i class="fa fa-trash"> hapus</i>
                                                </button>
                                              </form>
                                        </td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php $__env->stopSection(); ?>

</body>
</html>
<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PKL\resources\views/pegawai/index.blade.php ENDPATH**/ ?>