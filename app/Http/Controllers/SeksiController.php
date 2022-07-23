<?php

namespace App\Http\Controllers;

use App\Models\Bidang;
use Illuminate\Http\Request;
use App\Models\Seksi;
use Illuminate\Support\Facades\DB;

class SeksiController extends Controller
{
    function __construct()
    {
        $this->bidang = new Bidang();
        $this->seksi = new Seksi();
    }

    public function index(){
        $seksi = Seksi::all();
        return view('seksi.index',compact(['seksi']));
    }

    public function create(){
        $bidang = Bidang::all();
        return view('seksi.create', compact(['bidang']));
    }
    
    public function store(Request $request){
        // return $request;
        Seksi::create($request->except(['_token','submit']));
        return redirect ('/seksi')->with('status', 'Data Seksi berhasil ditambah');
     }
 
     public function edit ($id){
         $seksi = Seksi::find($id);
         return view('seksi.edit', compact('seksi'));
     }
 
     public function update ($id, Request $request){
         $seksi = Seksi::find($id);
         $seksi->update($request->except(['_token','submit']));
         return redirect ('/seksi')->with('status', 'Data seksi berhasil diupdate');
     }
 
     public function destroy ($id){
         $seksi = Seksi::find($id);
         $seksi->delete();
         return redirect ('/seksi')->with('status', 'Data seksi berhasil dihapus');
     }
}
