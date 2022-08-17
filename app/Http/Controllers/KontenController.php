<?php

namespace App\Http\Controllers;
use App\Models\Konten;
use App\Models\Bidang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KontenController extends Controller
{
    public function index(Request $request){
        // $konten = Konten::all();
        if($request->has('search')){
            $konten = Konten::where('judul', 'LIKE', '%' .$request->search. '%')->paginate(5);
        }else{
            $konten = Konten::paginate(5);
        }
        return view('konten.index',compact(['konten']));
    }

    public function detail($id){
        $konten = Konten::find($id);
        // return $konten;
        return view('konten.detail', compact('konten'));
    }

    public function create(){
        $bidang = Bidang::all();
        return view('konten.create',compact(['bidang']));
    }

    public function store(Request $request){
        // dd($request->all());
        // Konten::create($request->except(['_token','submit']));

        $dok=$request->file;
        $namadok= time().rand(100,999).".".$dok->getClientOriginalName();

        $konten=new Konten;
        $konten->user_id=Auth::id();
        $konten->bidang_id=$request->bidang_id;
        $konten->judul=$request->judul;
        $konten->isi_konten=$request->isi_konten;
        $konten->file=$namadok;
        $konten->views=0;

        $dok->move(public_path().'/file',$namadok);
        $konten->save();
        
        return redirect ('/konten')->with('status', 'Konten berhasil ditambah');
    }

    public function edit($id){
        $konten = Konten::find($id);
        return view('konten.edit', compact('konten'));
    }

    public function update ($id, Request $request){
        $konten = Konten::find($id);
        $konten->update($request->except(['_token','submit']));

        // $ubah=Konten::find($id);
        // $awal=$ubah->file;
        // $konten = [
        //     'judul'=>$request['judul'],
        //     'isi_konten'=>$request['isi_konten'],
        //     'file'=>$awal,
        // ];
        // $request->file->move(public_path().'/file',$awal);
        // $ubah->update($konten);

        return redirect ('/konten')->with('status', 'Konten berhasil diupdate');
    }

    public function destroy ($id){
        // $konten = Konten::find($id);
        // $konten->delete();

        $konten = Konten::find($id);
        $file=public_path('/file/').$konten->file;
        if(file_exists($file)){
            @unlink($file);
        }
        $konten->delete();
        return redirect ('/konten')->with('status', 'Konten berhasil dihapus');
    }
}
