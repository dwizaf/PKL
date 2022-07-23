<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bidang extends Model
{
    use HasFactory;
    protected $table = 'bidang';
    // protected $fillable = ['nama_bidang'];
    protected $guarded = [];

    public function seksi(){
        return $this->hasMany(Seksi::class);
    }
    public function pegawai(){
        return $this->hasMany(Pegawai::class);
    }
}
