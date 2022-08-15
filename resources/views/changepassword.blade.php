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
                        <h4>Ubah Password</h4><br>

                        <div class="pull-right">
                            <a href="/dashboard" class="btn btn-secondary btn-sm">
                              <i class="fa fa-undo"></i> Back
                            </a>
                          </div><br>

                        <div class="form-validation">
                            <form action="{{ route('updatepassword') }}" method="POST">
                            @csrf
                            <div class="card-body">
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @elseif (session('error'))
                                    <div class="alert alert-danger" role="alert">
                                        {{ session('error') }}
                                    </div>
                                @endif
                                <div class="form-group" >
                                    <label>Masukkan Password Lama</label>
                                    <input type="password" name="passwordlama" class="form-control @error ('passwordlama') is-invalid @enderror">
                                    @error('passwordlama')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group" >
                                    <label>Masukkan Password Baru</label>
                                    <input type="password" name="passwordbaru" class="form-control @error ('passwordbaru') is-invalid @enderror">
                                    @error('passwordbaru')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group" >
                                    <label>Konfirmasi Masukkan Password Baru</label>
                                    <input type="password" name="passwordbaru_confirmation" class="form-control @error ('passwordbaru_confirmation') is-invalid @enderror">
                                    @error('passwordbaru_confirmation')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
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
   
@endsection
</body>
</html>