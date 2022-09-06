<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rt;
use App\Models\Kk;

class RtController extends Controller
{
    public function index($id) {
        $rt = Rt::find($id);
        $kk = Kk::where('id_rt',$id)->get();
        $semua = Rt::all();
        return view('rt', compact('semua','rt','kk'));
    }

    public function tambah($id) {
        $jumlah = Kk::where('id_rt',$id)->count() + 1;
        Kk::create([
            'kk' => $jumlah,
            'id_rt' => $id
        ]);
        return back();
    }
}
