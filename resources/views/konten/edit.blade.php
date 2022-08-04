<!DOCTYPE html>
@extends('main')
@section('container')
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
                                <form action="/updatekonten{{ $konten->id }}" method="POST" enctype="multipart/form-data">
                                    @method('put') 
                                    @csrf
                                    {{-- <h5 class="m-b-20"><i class="fa fa-paperclip m-r-5 f-s-18"></i> Untuk Bidang :</h5>
                                    <div class="form-group">
                                        <input type="text" class="form-control bg-transparent" placeholder=" To">
                                    </div> --}}

                                    <h5><i class="fa fa-paperclip"></i> Judul Konten :</h5>
                                    <div class="form-group">
                                        <input type="text" name="judul" class="form-control bg-transparent" value="{{ $konten->judul }}" autofocus required>
                                    </div>

                                    <h5><i class="fa fa-paperclip"></i> Isi Konten :</h5>
                                    <div class="form-group">
                                        <textarea class="textarea_editor form-control bg-light" rows="15" name="isi_konten" autofocus required>{{ $konten->isi_konten }}</textarea>
                                    </div>
                                    
                                    {{-- <h5><i class="fa fa-paperclip"></i> Upload File</h5>
                                    <div class="form-group">
                                        <div class="fallback">
                                            <input class="l-border-1" name="file" type="file" id="file" autofocus required >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="fallback">
                                            <img src="{{ asset('file/'.$konten->file) }}" height="10%" width="50%" alt="">
                                        </div>
                                    </div> --}}
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

@endsection
</body>
</html>