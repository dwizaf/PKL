<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use App\Models\Bidang;
use App\Models\Pegawai;
use App\Models\Seksi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaiController extends Controller
{
    function __construct()
    {
        $this->pegawai = new Pegawai();
        $this->seksi = new Seksi();
    }

    public function index(Request $request){
        // $pegawai = Pegawai::all();
        if($request->has('search')){
            $pegawai = Pegawai::where('nama_pegawai', 'LIKE', '%' .$request->search. '%')->paginate(5);
        }else{
            $pegawai = Pegawai::paginate(5);
        }
        return view('pegawai.index',compact(['pegawai']));
    }

    public function create(){
        $pegawai = Pegawai::all();
        $bidang = Bidang::all();
        return view('pegawai.create', compact(['bidang']));
    }

    public function getseksi(request $request){
        $bidang_id = $request->bidang_id;
        $seksis = Seksi::where('bidang_id', '=', $bidang_id)->get();

        foreach($seksis as $seksi){
            echo "<option value='$seksi->id'> $seksi->nama_seksi </option>";
        }
    }

    public function store(Request $request){
        $request->validate([
            'tlp_pegawai'=>'required|max:13'
        ],
    );
        //insert ke table users
        $user = new User;
        $user->role = 'pegawai';
        $user->name = $request->username;
        $user->email = $request->email;
        $user->password = bcrypt('pegawai');
        $user->remember_token = Str::random(60);
        $user->save();

       
        //insert ke table Pegawai
        $request->request->add(['user_id' => $user->id]);
        Pegawai::create($request->except(['_token','submit']));
        return redirect ('/pegawai')->with('status', 'Data Pegawai berhasil ditambah');
     }

     public function edit ($id){
        $pegawai = Pegawai::find($id);
        return view('pegawai.edit', compact('pegawai'));
    }

    public function update ($id, Request $request){
        $request->validate([
            'tlp_pegawai'=>'required|max:13'
        ],
    );
        $pegawai = Pegawai::find($id);
        $pegawai->update($request->except(['_token','submit']));
        return redirect ('/pegawai')->with('status', 'Data pegawai berhasil diupdate');
    }

    public function destroy ($id){
        $pegawai = Pegawai::find($id);
        $pegawai->delete();
        return redirect ('/pegawai')->with('status', 'Data pegawai berhasil dihapus');
    }
}
