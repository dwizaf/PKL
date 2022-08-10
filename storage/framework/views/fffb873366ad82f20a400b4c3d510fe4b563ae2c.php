<!DOCTYPE html>

<?php $__env->startSection('container'); ?>
<html lang="en">
<head>
    
</head>
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
                        <h4 class="card-title">Daftar Konten</h4>

                        <div class="row g-3 align-items-center mt-2">
                            <div class="col-auto">
                              <form action="/konten" method="GET">
                                <input type="search" id="search" name="search" class="form-control" placeholder="Search" aria-label="Search Dashboard">
                              </form>
                            </div>
                          </div>

                            <div class="pull-right">
                                  <a href="/tambahkonten" class="btn btn-success btn-sm">
                                    <i class="fa fa-plus"></i> Buat Konten
                                  </a>
                                </div><br>
                            
                            <div class="table-responsive">
                            <table class="table table-striped table-bordered zero-configuration">
                                <thead>
                                    <tr>
                                        <th >No</th>
                                        <th >ID_Konten</th>
                                        <th >Judul Konten</th>
                                        
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $konten; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($loop->iteration); ?></td>
                                        <td><?php echo e($data->id); ?></td>
                                        <td><?php echo e($data->judul); ?></td>
                                        
                                        <td class="text-center">
                                            <a href="/detailkonten<?php echo e($data->id); ?>" class="btn btn-warning btn-sm">
                                                <i class="fa fa-eye"> lihat</i>
                                              </a>
                                            <a href="/editkonten<?php echo e($data->id); ?>" class="btn btn-primary btn-sm">
                                              <i class="fa fa-pencil"> edit</i>
                                            </a>
                                            <form action="/hapuskonten<?php echo e($data->id); ?>" method="post" class="d-inline" onsubmit="return confirm('Yakin hapus data?')">
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
                                <?php echo e($konten->links()); ?>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php $__env->stopSection(); ?>

</body>
</html>
<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PKL\resources\views/konten/index.blade.php ENDPATH**/ ?>