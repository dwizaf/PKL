<!DOCTYPE html>
@extends('main')
@section('container')
<html lang="en">
<head>
    
</head>
<body>

    
    <div class="container-fluid mt-3">
        {{-- ADMIN --}}
       
        <div class="row">
            @if(auth()->user()->role=='admin')
            <div class="col-lg-3 col-sm-6">
                <div class="card gradient-1">
                    <div class="card-body">
                        <a href="/bidang"><h3 class="card-title text-white">Bidang</h3></a>
                        <div class="d-inline-block">
                            <h2 class="text-white">4565</h2>
                            <p class="text-white mb-0"></p>
                        </div>
                        <span class="float-right display-5 opacity-5"><i class="fa fa-building"></i></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card gradient-2">
                    <div class="card-body">
                        <a href="/seksi"><h3 class="card-title text-white">Seksi</h3></a>
                        <div class="d-inline-block">
                            <h2 class="text-white">8541</h2>
                            <p class="text-white mb-0"></p>
                        </div>
                        <span class="float-right display-5 opacity-5"><i class="fa fa-puzzle-piece"></i></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card gradient-3">
                    <div class="card-body">
                        <a href="/pegawai"><h3 class="card-title text-white">User</h3></a>
                        <div class="d-inline-block">
                            <h2 class="text-white">4565</h2>
                            <p class="text-white mb-0"></p>
                        </div>
                        <span class="float-right display-5 opacity-5"><i class="fa fa-id-badge"></i></span>
                    </div>
                </div>
            </div>
            @endif
           
            <div class="col-lg-3 col-sm-6">
                <div class="card gradient-4">
                    <div class="card-body">
                        <a href="/konten"><h3 class="card-title text-white">Konten</h3></a>
                        <div class="d-inline-block">
                            <h2 class="text-white">99</h2>
                            <p class="text-white mb-0"></p>
                        </div>
                        <span class="float-right display-5 opacity-5"><i class="fa fa-newspaper-o"></i></span>
                    </div>
                </div>
            </div>
         
        </div>
        
        {{-- ADMIN --}}
        

        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-12">
    
                        <div class="card">
                            <div class="card-body">
                                <div class="inline-editor">
                                    <h3 class="text-center">DINAS KOMUNIKASI DAN INFORMATIKA PROVINSI JAWA TIMUR</h3><br>
                                    <p>Dinas Komunikasi dan Informatika merupakan unsur pelaksana otonomi daerah, 
                                        dipimpin oleh seorang kepala dinas, yang berada di bawah dan bertanggung jawab kepada 
                                        Gubernur melalui Sekretaris Daerah.</p>
                                    <h5>Tugas dan Fungsi</h5>
                                    <p>Sesuai dengan Peraturan Gubernur Provinsi Jawa Timur Nomor : 80 Tahun 2016 bahwa Dinas Komunikasi dan Informatika Provinsi Jawa Timur berkedudukan 
                                        sebagai unsur pelaksana urusan pemerintahan di bidang komunikasi dan informatika, bidang statistik dan bidang persandian yang dipimpin oleh 
                                        Kepala Dinas yang berkedudukan di bawah dan bertanggung jawab kepada Gubernur melalui Sekretaris Daerah Provinsi. Dinas Komunikasi dan Informatika 
                                        Provinsi Jawa Timur mempunyai tugas membantu Gubernur menyiapkan bahan pelaksanaan urusan pemerintahan yang menjadi kewenangan Pemerintah 
                                        Provinsi di Bidang Komunikasi dan informatika serta tugas pembantuan.</p>
                                    <p>Dalam melaksanakan tugas pokok tersebut Dinas Komunikasi dan Informatika mempunyai fungsi sebagai berikut :</p>
                                    <h6>a. Perumusan kebijakan di bidang komunikasi dan informatika, statistik dan persandian;</h6>
                                    <h6>b. Pelaksanaan kebijakan di bidang komunikasi dan informatika, statistik dan persandian;
                                    <h6>c. Pelaksanaan evaluasi dan pelaporan di bidang komunikasi dan informatika, statistik dan persandian;
                                    <h6>d. Pelaksanaan administrasi dinas di bidang komunikasi dan informasi dan informatika, statistik dan persandian; dan
                                    <h6>e. Pelaksanaan fungsi lain yang diberikan oleh gubernur terkait dengan tugas dan fungsinya.</h6>
                                    
                                    <br><h5>Alamat</h5>
                                    <p>Dinas Komunikasi dan Informatika Pemerintah Provinsi Jawa Timur</p>
                                    <p>Jl. A Yani 242-244 Surabaya</p>
                                    <ul class="list-icons">
                                        <li><i class="fa fa-check text-success"></i> Email : kominfo@jatimprov.go.id</li>
                                        <li><i class="fa fa-check text-success"></i> Website : https://kominfo.jatimprov.go.id</li>
                                        <li><i class="fa fa-check text-success"></i> Telp. (031) 8294608, Fax (031) 8294517</li>
                                    </ul>
                                </div>
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