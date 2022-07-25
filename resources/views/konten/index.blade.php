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
                                        <th>No</th>
                                        <th>Judul Konten</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td>1</td>
                                        <td>blabla</td>
                                        <td class="text-center">
                                            <a href="/detailkonten" class="btn btn-warning btn-sm">
                                                <i class="fa fa-eye"> lihat</i>
                                              </a>
                                            <a href="/editkonten" class="btn btn-primary btn-sm">
                                              <i class="fa fa-pencil"> edit</i>
                                            </a>
                                              <form action="" method="post" class="d-inline" onsubmit="return confirm('Yakin hapus konten?')">
                                                @method('delete')
                                                @csrf
                                                <button class="btn btn-danger btn-sm">
                                                  <i class="fa fa-trash"> hapus</i>
                                                </button>
                                              </form>
                                        </td>
                                    </tr>

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