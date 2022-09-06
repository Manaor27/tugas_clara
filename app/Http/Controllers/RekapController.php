<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rt;
use DB;

class RekapController extends Controller
{
    public function index() {
        $rt =  Rt::all();
        $nilai = DB::table('data')->join('kk','id_kk','=','kk.id')->join('rt','id_rt','=','rt.id')->select(DB::raw('rt.rt as rt, SUM(CASE WHEN data.umur > 50 THEN 1 ELSE 0 END) as lansia, SUM(CASE WHEN data.umur > 17 and data.umur < 50 THEN 1 ELSE 0 END) as dewasa, SUM(CASE WHEN data.umur > 12 and data.umur < 18 THEN 1 ELSE 0 END) as remaja, SUM(CASE WHEN data.umur > 5 and data.umur < 13 THEN 1 ELSE 0 END) as anak, SUM(CASE WHEN data.umur >= 0 and data.umur < 6 THEN 1 ELSE 0 END) as balita'))->groupBy('rt')->get();
        return view('rekap', compact('rt','nilai'));
    }
}
