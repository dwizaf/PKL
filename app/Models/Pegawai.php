<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;
    protected $table = "pegawai";
    protected $guarded = [];
    protected $fillable = ['id','seksi_id','nama_pegawai','email','tlp_pegawai','username','password','user_id'];

    public function seksi(){
        return $this->belongsTo(Seksi::class);
    }
}
