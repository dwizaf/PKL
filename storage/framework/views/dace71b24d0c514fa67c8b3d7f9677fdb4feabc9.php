<!DOCTYPE html>

<?php $__env->startSection('container'); ?>
<html lang="en">
<head>

</head>
<body>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4>Tambah Data Bidang</h4><br>

                        <div class="pull-right">
                            <a href="/bidang" class="btn btn-secondary btn-sm">
                              <i class="fa fa-undo"></i> Back
                            </a>
                          </div><br>

                        <div class="form-validation">
                            <form action="/storebidang" method="POST">
                            <?php echo csrf_field(); ?>
                                <div class="form-group" >
                                <label>Nama Bidang</label>
                                <input type="text" name="nama_bidang" class="form-control" autofocus required>
                                </div>
                                <button type="submit" class="btn btn-success">Save</button>
                            </form>
        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
<?php $__env->stopSection(); ?>
</body>
</html>
<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PKL\resources\views/bidang/create.blade.php ENDPATH**/ ?>