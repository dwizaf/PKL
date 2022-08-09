<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use App\Models\Bidang;
use App\Models\Seksi;
use App\Models\Konten;
use Illuminate\Http\Request;

class Dashboard extends Controller
{
    public function index(){
        $data = pegawai::all()-> count();
        $data1 = bidang::all()-> count();
        $data2 = seksi::all()-> count();
        $data3 = konten::all()-> count();
        return view('diagram', compact('data', 'data1', 'data2', 'data3'));
    }
}
