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
                        <h4>Tambah Data Seksi</h4><br>

                        <div class="pull-right">
                            <a href="/seksi" class="btn btn-secondary btn-sm">
                              <i class="fa fa-undo"></i> Back
                            </a>
                          </div><br>

                        <div class="form-validation">
                            <form action="/storeseksi" method="POST">
                            @csrf
                            <div class="form-group" >
                                <label>Bidang</label>
                                <select type="text" name="bidang_id" class="form-control">
                                    <option value="">-- Pilih --</option>
                                    @foreach ($bidang as $item)
                                        <option value="{{ $item->id }}">{{ $item->nama_bidang }}</option>
                                    @endforeach
                                </select>
                            </div>
                                <div class="form-group" >
                                    <label>Nama Seksi</label>
                                    <input type="text" name="nama_seksi" class="form-control" autofocus required>
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