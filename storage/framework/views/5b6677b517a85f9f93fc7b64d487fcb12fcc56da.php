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
                            <div class="compose-content mt-5">
                                <form action="#">
                                    <h5 class="m-b-20"><i class="fa fa-paperclip m-r-5 f-s-18"></i> Untuk Bidang :</h5>
                                    <div class="form-group">
                                        <input type="text" class="form-control bg-transparent" placeholder=" To">
                                    </div>
                                    <h5 class="m-b-20"><i class="fa fa-paperclip m-r-5 f-s-18"></i> Judul Konten :</h5>
                                    <div class="form-group">
                                        <input type="text" class="form-control bg-transparent" placeholder=" Subject">
                                    </div>
                                    <h5 class="m-b-20"><i class="fa fa-paperclip m-r-5 f-s-18"></i> Isi Konten :</h5>
                                    <div class="form-group">
                                        <textarea class="textarea_editor form-control bg-light" rows="15" placeholder="Enter text ..."></textarea>
                                    </div>
                                    <h5 class="m-b-20"><i class="fa fa-paperclip m-r-5 f-s-18"></i> Attatchment</h5>
                                    <div class="form-group">
                                        <div class="fallback">
                                            <input class="l-border-1" name="file" type="file" multiple="multiple">
                                        </div>
                                    </div>
                                    <button class="btn btn-primary" type="button"><i class="fa fa-paper-plane m-r-5"></i> Send</button>
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