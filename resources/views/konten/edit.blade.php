<!DOCTYPE html>
@extends('main')
@section('container')
<html lang="en">
<head>
    {{-- <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title> --}}
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
    
                        <div class="email-box">
                            <h1>Edit Konten</h1>
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
                                <button class="btn btn-danger" type="button"><i class="ti-close m-r-5 f-s-12"></i> Close</button>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
</body>
</html>