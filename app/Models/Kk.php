<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kk extends Model
{
    use HasFactory;
    protected $table = "kk";
    protected $fillable = ['kk','id_rt'];

    public function rt() {
        return $this->belongsTo(Rt::class, 'id_rt');
    }

    public function data() {
        return $this->hasOne(Data::class, 'id_kk');
    }
}
