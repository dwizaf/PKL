<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konten extends Model
{
    use HasFactory;
    protected $table = 'konten';
    protected $guarded = [];

    public function users(){
        return $this-> belongsTo (User::class, 'user_id', 'id');
    }

    public function bidang(){
        return $this-> belongsTo (Bidang::class, 'bidang_id', 'id');
    }
}
