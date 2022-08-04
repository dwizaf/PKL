<!DOCTYPE html>

<?php $__env->startSection('container'); ?>
<html lang="en">
<head>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <div class="pull-right">
                            <a href="/konten" class="btn btn-secondary btn-sm">
                              <i class="fa fa-undo"></i> Back
                            </a>
                          </div><br>

                        <h3><?php echo e($konten->judul); ?></h3>
                        <p><?php echo e($konten->isi_konten); ?></p>

                        <td><a href="file/<?php echo e($konten->file); ?>"><button class="btn btn-danger" type="button">File Tambahan</button></a></td><br><br>
                        <span class="mr-2">Diunggah pada : <?php echo e($konten->updated_at); ?></span> 
                        

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #/ container -->
<?php $__env->stopSection(); ?>
</body>
</html>
<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PKL\resources\views/konten/detail.blade.php ENDPATH**/ ?>