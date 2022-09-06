<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rt;
use App\Models\Kk;
use App\Models\Data;

class KkController extends Controller
{
    public function index($id,$id2) {
        $rt = Rt::find($id);
        $kk = Kk::find($id2);
        $data = Data::where('id_kk',$id2)->get();
        $semua = Rt::all();
        return view('kk', compact('semua','rt','kk','data'));
    }

    public function form($id,$id2) {
        $rt = Rt::find($id);
        $kk = Kk::find($id2);
        $semua = Rt::all();
        return view('form', compact('semua','rt','kk'));
    }

    public function simpan(Request $request,$id,$id2) {
        $umur = date('Y') - date('Y',strtotime($request->tanggal_lahir));;
        $request->validate([
            'nama' => 'required',
            'nik' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'status_keluarga' => 'required',
            'jekel' => 'required',
            'status_kawin' => 'required',
            'goldar' => 'required',
            'agama' => 'required',
            'pendidikan' => 'required',
            'nama_ayah' => 'required',
            'nama_ibu' => 'required',
        ]);
        Data::create([
            'nama'=> $request->nama,
            'nik' => $request->nik,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'status_keluarga' => $request->status_keluarga,
            'jekel' => $request->jekel,
            'status_kawin' => $request->status_kawin,
            'goldar' => $request->goldar,
            'agama' => $request->agama,
            'pendidikan' => $request->pendidikan,
            'nama_ayah' => $request->nama_ayah,
            'nama_ibu' => $request->nama_ibu,
            'ket' => $request->ket,
            'umur' => $umur,
            'id_kk' => $request->id_kk
        ]);
        return redirect("/".$id."kk".$id2);
    }

    public function edit($id,$id2,$id3) {
        $rt = Rt::find($id);
        $kk = Kk::find($id2);
        $semua = Rt::all();
        $data = Data::find($id3);
        return view('edit', compact('semua','rt','kk','data'));
    }

    public function update(Request $request, $id, $id2, $id3) {
        $d = Data::find($id3);
        $request->validate([
            'nama' => 'required',
            'nik' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'status_keluarga' => 'required',
            'jekel' => 'required',
            'status_kawin' => 'required',
            'goldar' => 'required',
            'agama' => 'required',
            'pendidikan' => 'required',
            'nama_ayah' => 'required',
            'nama_ibu' => 'required',
        ]);
        $d->nama = $request->nama;
        $d->nik = $request->nik;
        $d->tempat_lahir = $request->tempat_lahir;
        $d->tanggal_lahir = $request->tanggal_lahir;
        $d->status_keluarga = $request->status_keluarga;
        $d->jekel = $request->jekel;
        $d->status_kawin = $request->status_kawin;
        $d->goldar = $request->goldar;
        $d->agama = $request->agama;
        $d->pendidikan = $request->pendidikan;
        $d->nama_ayah = $request->nama_ayah;
        $d->nama_ibu = $request->nama_ibu;
        $d->ket = $request->ket;
        $d->save();
        return redirect("/".$id."kk".$id2);
    }
}
