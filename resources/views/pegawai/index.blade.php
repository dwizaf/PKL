<!DOCTYPE html>
@extends('main')
@section('container')
<html lang="en">
<head></head>
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
                        <h4 class="card-title">Data Pegawai</h4>

                        <div class="row g-3 align-items-center mt-2">
                          <div class="col-auto">
                            <form action="/pegawai" method="GET">
                              <input type="search" id="search" name="search" class="form-control" placeholder="Search" aria-label="Search Dashboard">
                            </form>
                          </div>
                        </div>

                            <div class="pull-right">
                              <a href="/tambahpegawai" class="btn btn-success btn-sm">
                                <i class="fa fa-plus"></i> Tambah Data
                              </a>
                            </div><br>
                            
                            <div class="table-responsive">
                            <table class="table table-striped table-bordered zero-configuration">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>ID Pegawai</th>
                                        <th>Nama Pegawai</th>
                                        <th>Role</th>
                                        <th>Seksi</th>
                                        <th>Telepon</th>
                                        <th>Username</th>
                                        <th>Email</th>
                                        {{-- <th>Password</th> --}}
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- @foreach ($pegawai as $data) --}}
                                    @foreach($pegawai as $key => $data)
                                    <tr>
                                        {{-- <td>{{ $loop->iteration }}</td> --}}
                                        <td>{{ $pegawai->firstItem() + $key }}</td>
                                        <td>{{ $data->id }}</td>
                                        <td>{{ $data->nama_pegawai}}</td>
                                        <td>{{ $data->users->role}}</td>
                                        <td>{{ $data->seksi->nama_seksi }}</td>
                                        <td>{{ $data->tlp_pegawai }}</td>
                                        <td>{{ $data->username }}</td>
                                        <td>{{ $data->email }}</td>
                                        {{-- <td>{{ $data->password }}</td> --}}
                                        <td class="text-center">
                                            <a href="/editpegawai{{$data->id}}" class="btn btn-primary btn-sm">
                                              <i class="fa fa-pencil"> edit</i>
                                            </a>
                                
                                              <form action="/hapuspegawai{{ $data->id }}" method="post" class="d-inline" onsubmit="return confirm('Yakin hapus data?')">
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
                                <div>
                                  Showing 
                                  {{ $pegawai->firstItem() }}
                                  to
                                  {{ $pegawai->lastItem() }}
                                  of
                                  {{ $pegawai->total() }}
                                  entries
                                </div>
                                <div class="pull-right">
                                {{ $pegawai->links() }}
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