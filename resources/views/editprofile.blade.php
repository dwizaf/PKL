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
                            <h1>Edit Profile</h1>
                            <div class="pull-right">
                                <a href="/profile" class="btn btn-secondary btn-sm">
                                  <i class="fa fa-undo"></i> Back
                                </a>
                            </div><br>
                            <div class="form-validation">
                                <form action="/updateprofile{{ old('id', Auth::user()->id) }}" method="POST">
                                    @method('put') 
                                    @csrf
                                    <div class="form-group" >
                                        <label>Nama Pegawai</label>
                                        <input type="text" name="name" class="form-control" value="{{ old('name', Auth::user()->name) }}" autofocus required>
                                    </div>
                                    <div class="form-group" >
                                        <label>Email</label>
                                        <input type="email" name="email" class="form-control" value="{{ old('email', Auth::user()->email) }}" autofocus>
                                        
                                    </div>
                                    <div class="form-group" >
                                        <label>Role Pegawai</label>
                                        <input type="text" name="role" class="form-control" value="{{ old('role', Auth::user()->role) }}" readonly>
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

@endsection
</body>
</html>