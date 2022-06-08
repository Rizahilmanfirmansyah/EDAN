<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pegawai_penghargaan extends Model
{
    use HasFactory;
    protected $table = "pegawai_penghargaan";
    protected $fillable = [
        "datapegawai_id", "penghargaan_id"
    ];

   // public function pegawai()
    //{
     //   return $this->belongsTo(pegawai::class);
    //}
    //public function penghargaan()
    //{
      //  return $this->belongsTo(penghargaan::class);
    //}
} 
