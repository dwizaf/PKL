<?php

namespace App\Http\Controllers;

use App\Models\Bidang;
use Illuminate\Http\Request;

class BidangController extends Controller
{
    public function index(){
        $bidang = Bidang::all();
        return view('bidang.index',compact(['bidang']));
    }

    public function create(){
        return view('bidang.create');
    }

    public function store(Request $request){
       Bidang::create($request->except(['_token','submit']));
       return redirect ('/bidang')->with('status', 'Data bidang berhasil ditambah');
    }

    public function edit ($id){
        $bidang = Bidang::find($id);
        return view('bidang.edit', compact(['bidang']));
    }

    public function update ($id, Request $request){
        $bidang = Bidang::find($id);
        $bidang->update($request->except(['_token','submit']));
        return redirect ('/bidang')->with('status', 'Data bidang berhasil diupdate');
    }

    public function destroy ($id){
        $bidang = Bidang::find($id);
        $bidang->delete();
        return redirect ('/bidang')->with('status', 'Data bidang berhasil dihapus');
    }
}
