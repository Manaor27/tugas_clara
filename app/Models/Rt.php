<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rt extends Model
{
    use HasFactory;
    protected $table = "rt";
    protected $fillable = ['rt'];

    public function kk() {
        return $this->hasOne(Kk::class, 'id_rt');
    }
}
