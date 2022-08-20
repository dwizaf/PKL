<!DOCTYPE html>
@extends('main')
@section('container')
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
                                    <input type="password" name="passwordlama" id="inputpass1" class="form-control @error ('passwordlama') is-invalid @enderror">
                                    <span class="eye" onclick="myFunction1()">
                                        <i id="hide1" class="fa fa-eye"></i>
                                        <i id="hide2" class="fa fa-eye-slash"></i>
                                    </span>
                                    @error('passwordlama')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group" >
                                    <label>Masukkan Password Baru</label>
                                    <input type="password" name="passwordbaru" id="inputpass2" class="form-control @error ('passwordbaru') is-invalid @enderror">
                                    <span class="eye" onclick="myFunction2()">
                                        <i id="hide3" class="fa fa-eye"></i>
                                        <i id="hide4" class="fa fa-eye-slash"></i>
                                    </span>
                                    @error('passwordbaru')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group" >
                                    <label>Konfirmasi Masukkan Password Baru</label>
                                    <input type="password" name="passwordbaru_confirmation" id="inputpass3" class="form-control @error ('passwordbaru_confirmation') is-invalid @enderror">
                                    <span class="eye" onclick="myFunction3()">
                                        <i id="hide5" class="fa fa-eye"></i>
                                        <i id="hide6" class="fa fa-eye-slash"></i>
                                    </span>
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
@endsection
</body>
</html>