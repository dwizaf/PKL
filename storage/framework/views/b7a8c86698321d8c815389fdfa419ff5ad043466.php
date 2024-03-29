<!DOCTYPE html>

<?php $__env->startSection('container'); ?>
<html lang="en">
<head></head>
<body>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4>Ubah Password</h4><br>

                        <div class="pull-right">
                            <a href="/dashboard" class="btn btn-secondary btn-sm">
                              <i class="fa fa-undo"></i> Back
                            </a>
                          </div><br>

                        <div class="form-validation">
                            <form action="<?php echo e(route('updatepassword')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <div class="card-body">
                                <?php if(session('status')): ?>
                                    <div class="alert alert-success" role="alert">
                                        <?php echo e(session('status')); ?>

                                    </div>
                                <?php elseif(session('error')): ?>
                                    <div class="alert alert-danger" role="alert">
                                        <?php echo e(session('error')); ?>

                                    </div>
                                <?php endif; ?>
                                <div class="form-group" >
                                    <label>Masukkan Password Lama</label>
                                    <input type="password" name="passwordlama" id="inputpass1" class="form-control <?php $__errorArgs = ['passwordlama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                    <span class="eye" onclick="myFunction1()">
                                        <i id="hide1" class="fa fa-eye"></i>
                                        <i id="hide2" class="fa fa-eye-slash"></i>
                                    </span>
                                    <?php $__errorArgs = ['passwordlama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="text-danger"><?php echo e($message); ?></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="form-group" >
                                    <label>Masukkan Password Baru</label>
                                    <input type="password" name="passwordbaru" id="inputpass2" class="form-control <?php $__errorArgs = ['passwordbaru'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                    <span class="eye" onclick="myFunction2()">
                                        <i id="hide3" class="fa fa-eye"></i>
                                        <i id="hide4" class="fa fa-eye-slash"></i>
                                    </span>
                                    <?php $__errorArgs = ['passwordbaru'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="text-danger"><?php echo e($message); ?></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="form-group" >
                                    <label>Konfirmasi Masukkan Password Baru</label>
                                    <input type="password" name="passwordbaru_confirmation" id="inputpass3" class="form-control <?php $__errorArgs = ['passwordbaru_confirmation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                    <span class="eye" onclick="myFunction3()">
                                        <i id="hide5" class="fa fa-eye"></i>
                                        <i id="hide6" class="fa fa-eye-slash"></i>
                                    </span>
                                    <?php $__errorArgs = ['passwordbaru_confirmation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="text-danger"><?php echo e($message); ?></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <button type="submit" class="btn btn-success">Save</button>
                            </div>
                            </form>
        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function myFunction1() {
            var x = document.getElementById("inputpass1");
            var y = document.getElementById("hide1");
            var z = document.getElementById("hide2");
    
            if(x.type === 'password'){
                x.type = 'text';
                y.style.display = "inline-block";
                z.style.display = "none";
            } else{
                x.type = 'password';
                y.style.display = "none";
                z.style.display = "inline-block";
            }
        }

        function myFunction2() {
            var x = document.getElementById("inputpass2");
            var y = document.getElementById("hide3");
            var z = document.getElementById("hide4");
    
            if(x.type === 'password'){
                x.type = 'text';
                y.style.display = "inline-block";
                z.style.display = "none";
            } else{
                x.type = 'password';
                y.style.display = "none";
                z.style.display = "inline-block";
            }
        }

        function myFunction3() {
            var x = document.getElementById("inputpass3");
            var y = document.getElementById("hide5");
            var z = document.getElementById("hide6");
    
            if(x.type === 'password'){
                x.type = 'text';
                y.style.display = "inline-block";
                z.style.display = "none";
            } else{
                x.type = 'password';
                y.style.display = "none";
                z.style.display = "inline-block";
            }
        }
    </script>
<?php $__env->stopSection(); ?>
</body>
</html>
<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PKL\resources\views//changepassword.blade.php ENDPATH**/ ?>