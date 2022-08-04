<!DOCTYPE html>
@extends('main')
@section('container')
<html lang="en">
<head>
    
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
                        <h4 class="card-title">Daftar Konten</h4>

                            <div class="pull-right">
                                  <a href="/tambahkonten" class="btn btn-success btn-sm">
                                    <i class="fa fa-plus"></i> Buat Konten
                                  </a>
                                </div><br>
                            
                            <div class="table-responsive">
                            <table class="table table-striped table-bordered zero-configuration">
                                <thead>
                                    <tr>
                                        <th >No</th>
                                        <th >ID_Konten</th>
                                        <th >Judul Konten</th>
                                        {{-- <th >file</th> --}}
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($konten as $data)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $data->id }}</td>
                                        <td>{{ $data->judul }}</td>
                                        {{-- <td><a href="{{ asset('file/'.$data->file) }}" target="_blank">lihat file</a></td> --}}
                                        <td class="text-center">
                                            <a href="/detailkonten{{$data->id}}" class="btn btn-warning btn-sm">
                                                <i class="fa fa-eye"> lihat</i>
                                              </a>
                                            <a href="/editkonten{{$data->id}}" class="btn btn-primary btn-sm">
                                              <i class="fa fa-pencil"> edit</i>
                                            </a>
                                            <form action="/hapuskonten{{ $data->id }}" method="post" class="d-inline" onsubmit="return confirm('Yakin hapus data?')">
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