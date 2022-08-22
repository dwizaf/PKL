<!DOCTYPE html>
@extends('main')
@section('container')
<html lang="en">
<head>
    
</head>
<body>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4>Edit Data Bidang</h4><br>

                        <div class="pull-right">
                            <a href="/pegawai" class="btn btn-secondary btn-sm">
                              <i class="fa fa-undo"></i> Back
                            </a>
                          </div><br>

                        <div class="form-validation">
                            <form action="/updatepegawai{{ $pegawai->id }}" method="POST">
                                @method('put') 
                                @csrf
                                <div class="form-group" >
                                    <label>Nama Pegawai</label>
                                    <input type="text" name="nama_pegawai" class="form-control" value="{{ $pegawai->nama_pegawai }}" autofocus required>
                                </div>
                                <div class="form-group" >
                                    <label>Nomor Telepon</label>
                                    <input type="number" name="tlp_pegawai" class="form-control @error('tlp_pegawai') is-invalid @enderror" value="{{ $pegawai->tlp_pegawai }}" autofocus>
                                    @error('tlp_pegawai')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                               
                                <button type="submit" class="btn btn-success">Save</button>
                            </form>
        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
@endsection
</body>
</html>