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
                @if (session('status'))
                <div class="alert alert-success">
                {{ session('status') }}
                </div>
                @endif
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Data Seksi</h4>

                            <div class="pull-right">
                                  <a href="/tambahseksi" class="btn btn-success btn-sm">
                                    <i class="fa fa-plus"></i> Tambah Data
                                  </a>
                                </div><br>
                            
                            <div class="table-responsive">
                            <table class="table table-striped table-bordered zero-configuration">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>ID_Seksi</th>
                                        <th>ID_Bidang</th>
                                        <th>Nama Seksi</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($seksi as $data)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $data->id }}</td>
                                        <td>{{ $data->bidang->nama_bidang }}</td>
                                        <td>{{ $data->nama_seksi }}</td>
                                        <td class="text-center">
                                            <a href="/editseksi{{$data->id}}" class="btn btn-primary btn-sm">
                                              <i class="fa fa-pencil"> edit</i>
                                            </a>
                                              {{-- <button class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash"> hapus</i>
                                              </button> --}}
                                              <form action="/hapusseksi{{ $data->id }}" method="post" class="d-inline" onsubmit="return confirm('Yakin hapus data?')">
                                                @method('delete')
                                                @csrf
                                                <button class="btn btn-danger btn-sm">
                                                  <i class="fa fa-trash"> hapus</i>
                                                </button>
                                              </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

</body>
</html>