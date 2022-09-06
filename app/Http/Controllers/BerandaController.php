<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rt;

class BerandaController extends Controller
{
    public function index() {
        $rt = Rt::all();
        return view('beranda', compact('rt'));
    }

    public function tambah() {
        $jumlah = Rt::count() + 1;
        Rt::create([
            'rt' => $jumlah
        ]);
        return back();
    }
}
