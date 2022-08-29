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
                        <h4>Edit Data Pegawai</h4><br>

                        <div class="pull-right">
                            <a href="/pegawai" class="btn btn-secondary btn-sm">
                              <i class="fa fa-undo"></i> Back
                            </a>
                          </div><br>

                        <div class="form-validation">
                            <form action="/updatepegawai<?php echo e($pegawai->id); ?>" method="POST">
                                <?php echo method_field('put'); ?> 
                                <?php echo csrf_field(); ?>
                                <div class="form-group" >
                                    <label>Nama Pegawai</label>
                                    <input type="text" name="nama_pegawai" class="form-control" value="<?php echo e($pegawai->nama_pegawai); ?>" autofocus required>
                                </div>
                                <div class="form-group" >
                                    <label>Nomor Telepon</label>
                                    <input type="number" name="tlp_pegawai" class="form-control <?php $__errorArgs = ['tlp_pegawai'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e($pegawai->tlp_pegawai); ?>" autofocus>
                                    <?php $__errorArgs = ['tlp_pegawai'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="invalid-feedback"><?php echo e($message); ?></div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
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
<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PKL\resources\views/pegawai/edit.blade.php ENDPATH**/ ?>