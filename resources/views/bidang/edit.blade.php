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
                            <a href="/bidang" class="btn btn-secondary btn-sm">
                              <i class="fa fa-undo"></i> Back
                            </a>
                          </div><br>

                        <div class="form-validation">
                            <form action="/updatebidang{{ $bidang->id }}" method="POST">
                                @method('put') 
                                @csrf
                                <div class="form-group" >
                                <label>Nama Bidang</label>
                                <input type="text" name="nama_bidang" class="form-control" value="{{ $bidang->nama_bidang }}" autofocus required>
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