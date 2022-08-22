<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seksi extends Model
{
    use HasFactory;
    protected $table = "seksi";
    protected $guarded = [];

    public function bidang(){
        return $this->belongsTo(Bidang::class);
    }
    
    public function pegawai(){
        return $this->hasMany(Pegawai::class);
    }

    public function konten(){
        return $this-> hasMany(Konten::class);
    }
}
