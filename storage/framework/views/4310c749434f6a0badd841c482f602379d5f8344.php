<!DOCTYPE html>

<?php $__env->startSection('container'); ?>
<html lang="en">
<head>
    
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
    
                        <div class="email-box">
                            <h1>Edit Profile</h1>
                            <div class="pull-right">
                                <a href="/profile" class="btn btn-secondary btn-sm">
                                  <i class="fa fa-undo"></i> Back
                                </a>
                            </div><br>
                            <div class="form-validation">
                                <form action="/updateprofile<?php echo e(old('id', Auth::user()->id)); ?>" method="POST">
                                    <?php echo method_field('put'); ?> 
                                    <?php echo csrf_field(); ?>
                                    <div class="form-group" >
                                        <label>Nama Pegawai</label>
                                        <input type="text" name="name" class="form-control" value="<?php echo e(old('name', Auth::user()->name)); ?>" autofocus required>
                                    </div>
                                    <div class="form-group" >
                                        <label>Email</label>
                                        <input type="email" name="email" class="form-control" value="<?php echo e(old('email', Auth::user()->email)); ?>" autofocus>
                                        
                                    </div>
                                    <div class="form-group" >
                                        <label>Role Pegawai</label>
                                        <input type="text" name="role" class="form-control" value="<?php echo e(old('role', Auth::user()->role)); ?>" readonly>
                                    </div>
                                   
                                    <button type="submit" class="btn btn-success">Save</button>
                                </form>
            
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
</body>
</html>
<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PKL\resources\views/editprofile.blade.php ENDPATH**/ ?>