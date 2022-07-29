<!DOCTYPE html>
@extends('main')
@section('container')
<html lang="en">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4>Tambah Data Pegawai</h4><br>

                        <div class="pull-right">
                            <a href="/pegawai" class="btn btn-secondary btn-sm">
                              <i class="fa fa-undo"></i> Back
                            </a>
                          </div><br>

                        <div class="form-validation">
                            <div class="form-group" >
                                <label>Bidang</label>
                                <select type="text" name="" id="bidang" class="form-control">
                                    <option value="">-- Pilih --</option>
                                    @foreach ($bidang as $item)
                                        <option value="{{ $item->id }}">{{ $item->nama_bidang }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <form action="/storepegawai" method="POST">
                            @csrf
                                <div class="form-group" >
                                    <label>Seksi</label>
                                    <select type="text" name="seksi_id" id="seksi" class="form-control">
                                        <option value="">-- Pilih --</option>
                                    </select>
                                </div>
                                <div class="form-group" hidden>
                                    <label>Username</label>
                                    <input type="text" name="password" class="form-control" value="pegawai">
                                </div>
                                <div class="form-group" >
                                    <label>Nama Pegawai</label>
                                    <input type="text" name="nama_pegawai" class="form-control" autofocus required>
                                </div>
                                <div class="form-group" >
                                    <label>Username</label>
                                    <input type="text" name="username" class="form-control" autofocus required>
                                </div>
                                <div class="form-group" >
                                    <label>Nomor Telepon</label>
                                    <input type="number" name="tlp_pegawai" class="form-control" maxlength="13" minlength="10" autofocus required>
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

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
   
        <script type="text/javascript">
            $(function(){
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $(function(){
                    $('#bidang').on('change', function(){
                        let bidang_id = $('#bidang').val();
                        $.ajax({
                            type : 'POST',
                            url : "{{ route('getseksi') }}",
                            data : { bidang_id: bidang_id },
                            cache : false,

                            success: function(msg){
                                $('#seksi').html(msg);
                            },

                            error: function(data){
                                console.log('error:', data);
                            },
                        })
                    })
                });
        });

        </script>