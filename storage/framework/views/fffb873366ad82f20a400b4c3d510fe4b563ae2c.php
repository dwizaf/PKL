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

                            <div class="pull-right">
                                  <a href="/tambahkonten" class="btn btn-success btn-sm">
                                    <i class="fa fa-plus"></i> Buat Konten
                                  </a>
                                </div><br>
                            
                            <div class="table-responsive">
                            <table class="table table-striped table-bordered zero-configuration">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Judul Konten</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td>1</td>
                                        <td>blabla</td>
                                        <td class="text-center">
                                            <a href="/detailkonten" class="btn btn-warning btn-sm">
                                                <i class="fa fa-eye"> lihat</i>
                                              </a>
                                            <a href="/editkonten" class="btn btn-primary btn-sm">
                                              <i class="fa fa-pencil"> edit</i>
                                            </a>
                                              <form action="" method="post" class="d-inline" onsubmit="return confirm('Yakin hapus konten?')">
                                                <?php echo method_field('delete'); ?>
                                                <?php echo csrf_field(); ?>
                                                <button class="btn btn-danger btn-sm">
                                                  <i class="fa fa-trash"> hapus</i>
                                                </button>
                                              </form>
                                        </td>
                                    </tr>

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
<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PKL\resources\views/konten/index.blade.php ENDPATH**/ ?>