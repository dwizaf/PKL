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
                            <h1>Edit Konten</h1>
                            <div class="form-validation">
                                <form action="/updatekonten<?php echo e($konten->id); ?>" method="POST" enctype="multipart/form-data">
                                    <?php echo method_field('put'); ?> 
                                    <?php echo csrf_field(); ?>
                                    

                                    <h5><i class="fa fa-paperclip"></i> Judul Konten :</h5>
                                    <div class="form-group">
                                        <input type="text" name="judul" class="form-control bg-transparent" value="<?php echo e($konten->judul); ?>" autofocus required>
                                    </div>

                                    <h5><i class="fa fa-paperclip"></i> Isi Konten :</h5>
                                    <div class="form-group">
                                        <textarea class="textarea_editor form-control bg-light" rows="15" name="isi_konten" autofocus required><?php echo e($konten->isi_konten); ?></textarea>
                                    </div>
                                    
                                    
                                    <button class="btn btn-primary" type="submit"><i class="fa fa-paper-plane m-r-5"></i> Save</button>
                                    <a class="btn btn-danger" type="button" class="ti-close m-r-5 f-s-12" href="/konten">Close</a>
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
<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PKL\resources\views/konten/edit.blade.php ENDPATH**/ ?>