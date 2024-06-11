<?php

namespace App\Http\Controllers;

use App\Models\MabaModel;
use Illuminate\Http\Request;

class AdminCT extends Controller
{
    public function index(){
        return view('admin.content.dashboard');
    }

    public function peserta(){
        return view('admin.content.peserta.index');
    }
    
    public function tambahData(){
        return view('admin.content.peserta.create');
    }

    public function tambahDataStore(Request $request){

        $request->validate([
            'nama_lengkap' => 'required',
            'prodi' => 'required',
            'angkatan' => 'required',
            'nim' => 'required',
        ]);

        MabaModel::insert([
            'nama_lengkap' => $request->nama_lengkap,
            'nama_prodi' => $request->prodi,
            'tahun' => $request->angkatan,
            'nomor' => $request->nim,
        ]);

        return redirect('/admin/pesertas');

    }
}
