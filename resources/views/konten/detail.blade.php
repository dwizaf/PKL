<!DOCTYPE html>
@extends('main')
@section('container')
<html lang="en">
<head>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <div class="pull-right">
                            <a href="/konten" class="btn btn-secondary btn-sm">
                              <i class="fa fa-undo"></i> Back
                            </a>
                          </div><br>

                        <h3>{{ $konten->judul }}</h3>
                        <p>{{ $konten->isi_konten }}</p>

                        <td><a href="file/{{ $konten->file }}"><button class="btn btn-danger" type="button">File Tambahan</button></a></td><br><br>
                        <span class="mr-2">Diunggah pada : {{ $konten->updated_at }}</span> 
                        {{-- <span><i class="mdi mdi-eye"></i> 436</span> --}}

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #/ container -->
@endsection
</body>
</html>