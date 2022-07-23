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
                        <h4>Tambah Data Seksi</h4><br>

                        <div class="pull-right">
                            <a href="/seksi" class="btn btn-secondary btn-sm">
                              <i class="fa fa-undo"></i> Back
                            </a>
                          </div><br>

                        <div class="form-validation">
                            <form action="/storeseksi" method="POST">
                            <?php echo csrf_field(); ?>
                            <div class="form-group" >
                                <label>Bidang</label>
                                <select type="text" name="bidang_id" class="form-control">
                                    <option value="">-- Pilih --</option>
                                    <?php $__currentLoopData = $bidang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($item->id); ?>"><?php echo e($item->nama_bidang); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                                <div class="form-group" >
                                    <label>Nama Seksi</label>
                                    <input type="text" name="nama_seksi" class="form-control" autofocus required>
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
<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PKL\resources\views/seksi/create.blade.php ENDPATH**/ ?>