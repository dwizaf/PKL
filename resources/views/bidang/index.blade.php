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
                        <h4 class="card-title">Data Bidang</h4>

                        <div class="row g-3 align-items-center mt-2">
                            <div class="col-auto">
                              <form action="/bidang" method="GET">
                                <input type="search" id="search" name="search" class="form-control" placeholder="Search" aria-label="Search Dashboard">
                              </form>
                            </div>
                          </div>

                            <div class="pull-right">
                                  <a href="/tambahbidang" class="btn btn-success btn-sm">
                                    <i class="fa fa-plus"></i> Tambah Data
                                  </a>
                                </div><br>
                            
                            <div class="table-responsive">
                            <table class="table table-striped table-bordered zero-configuration">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>ID_Bidang</th>
                                        <th>Nama Bidang</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- @foreach ($bidang as $data) --}}
                                    @foreach($bidang as $key => $data)
                                    <tr>
                                        {{-- <td>{{ $loop->iteration }}</td> --}}
                                        <td>{{ $bidang->firstItem() + $key }}</td>
                                        <td>{{ $data->id }}</td>
                                        <td>{{ $data->nama_bidang }}</td>
                                        <td class="text-center">
                                            <a href="/editbidang{{$data->id}}" class="btn btn-primary btn-sm">
                                              <i class="fa fa-pencil"> edit</i>
                                            </a>
                                              
                                              <form action="/hapusbidang{{ $data->id }}" method="post" class="d-inline" onsubmit="return confirm('Yakin hapus data?')">
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
                                  {{ $bidang->firstItem() }}
                                  to
                                  {{ $bidang->lastItem() }}
                                  of
                                  {{ $bidang->total() }}
                                  entries
                                </div>
                                <div class="pull-right">
                                {{ $bidang->links() }}
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