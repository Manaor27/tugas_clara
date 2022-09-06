<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use HasFactory;
    protected $table = "data";
    protected $fillable = ['nama','nik','tempat_lahir','tanggal_lahir','status_keluarga','jekel','status_kawin','goldar','agama','pendidikan','nama_ayah','nama_ibu','ket','umur','id_kk'];

    public function kk() {
        return $this->belongsTo(Kk::class, 'id_kk');
    }
}
