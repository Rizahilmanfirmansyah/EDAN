<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class perizinan extends Model
{
    use HasFactory;
    protected $table = "tblcuti";
    protected $primaryKey = "id";
    protected $fillable = [
        "nama","awalcuti","akhircuti","ket"

    ];

    public function pegawaifungsi()
    {
        return $this->belongsTo(pegawai::class, 'id', 'nama');
    }

}
