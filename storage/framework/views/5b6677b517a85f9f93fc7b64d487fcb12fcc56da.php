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
                            <h1>Buat Konten</h1>
                            <div class="form-validation">
                                <form action="/storekonten" method="POST" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    
                                    <div class="form-group">
                                        <h5><i class="fa fa-paperclip" ></i> Untuk Bidang :</h5>
                                        <select name="bidang_id" class="form-control" autofocus required>
                                            <option value="">- pilih -</option> 
                                            <?php $__currentLoopData = $bidang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($data->id); ?>"><?php echo e($data->nama_bidang); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>         
                                    </select>
                                    </div>

                                    <h5><i class="fa fa-paperclip"></i> Judul Konten :</h5>
                                    <div class="form-group">
                                        <input type="text" name="judul" class="form-control bg-transparent" placeholder="Masukkan Judul" autofocus required>
                                    </div>

                                    <h5><i class="fa fa-paperclip"></i> Isi Konten :</h5>
                                    <div class="form-group">
                                        <textarea class="textarea_editor form-control bg-light" rows="15" name="isi_konten" placeholder="Masukkan Isi Konten ..." autofocus required></textarea>
                                    </div>
                                    
                                    <h5><i class="fa fa-paperclip"></i> Upload File</h5>
                                    <div class="form-group">
                                        <div class="fallback">
                                            <input class="l-border-1" name="file" type="file" id="file" autofocus required >
                                        </div>
                                    </div>
                                    
                                    <button class="btn btn-primary" type="submit"><i class="fa fa-paper-plane m-r-5"></i> Send</button>
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
<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PKL\resources\views/konten/create.blade.php ENDPATH**/ ?>