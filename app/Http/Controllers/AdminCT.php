<?php

namespace App\Http\Controllers;

use App\Models\MabaModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;

class AdminCT extends Controller
{
    public function index(){
        $tahun = Carbon::now()->format('Y');
        $totalData = DB::table('data')->count();
        $dataTahun = DB::table('data')->where('tahun', $tahun)->count();
        return view('admin.content.dashboard', compact('tahun', 'totalData', 'dataTahun'));
    }

    public function peserta(Request $request){
        $data = MabaModel::orderBy('created_at', 'DESC');
        if ($request->ajax()) {
            return DataTables::of($data)
                    ->addIndexColumn()
                    ->make(true);
        }
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
            'created_at' => Carbon::now(),
        ]);

        return redirect('/admin/pesertas');

    }
}
