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

                        <div class="row g-3 align-items-center mt-2">
                            <div class="col-auto">
                              <form action="/konten" method="GET">
                                <input type="search" id="search" name="search" class="form-control" placeholder="Cari Judul Konten" aria-label="Search Dashboard">
                              </form>
                            </div>
                          </div>

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
                                        {{-- <th >Destination Bidang</th> --}}
                                        <th >Tujuan Seksi</th>
                                        <th >Judul Konten</th>
                                        <th >Author</th>
                                        {{-- <th >file</th> --}}
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- @foreach ($konten as $data) --}}
                                    @foreach($konten as $key => $data)
                                    <tr>
                                        {{-- <td>{{ $loop->iteration }}</td> --}}
                                        <td>{{ $konten->firstItem() + $key }}</td>
                                        <td>{{ $data->id }}</td>
                                        {{-- <td>{{ $data->bidang->nama_bidang }}</td> --}}
                                        <td>{{ $data->seksi->nama_seksi }}</td>
                                        <td>{{ $data->judul }}</td>
                                        <td>{{ $data->users->name }}</td>
                                        {{-- <td><a href="{{ asset('file/'.$data->file) }}" target="_blank">lihat file</a></td> --}}
                                        <td class="text-center">
                                            <a href="/detailkonten{{$data->id}}" class="btn btn-warning btn-sm">
                                                <i class="fa fa-eye"> lihat</i>
                                              </a>

                                              {{-- @if(auth()->user()->role=='admin')
                                              @if(auth()->user()->name=='mad3') --}}
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
                                              {{-- @endif
                                              @endif --}}

                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                </table>
                                <div>
                                  Showing 
                                  {{ $konten->firstItem() }}
                                  to
                                  {{ $konten->lastItem() }}
                                  of
                                  {{ $konten->total() }}
                                  entries
                                </div>
                                <div class="pull-right">
                                {{ $konten->links() }}
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