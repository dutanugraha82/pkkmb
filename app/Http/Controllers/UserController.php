<?php

namespace App\Http\Controllers;

use App\Models\MabaModel;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class UserController extends Controller
{
    public function data2018(Request $request){
        $data = MabaModel::where('created_at', 'LIKE', '2018%');
        if ($request->ajax()) {
            return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($data){
                        return '<a class="btn btn-warning btn-md" href="/data-pkkmb/2018/'.$data->id.'/cetak">Cetak</a>';
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return view('user.data2018');
    }

    public function cetakSertifikat2018($id){
        $data = MabaModel::find($id);
        $pdf = Pdf::loadView("report.sertifikat", compact('data'))->setPaper('a4', 'landscape');
        return $pdf->download('sertifikat-pkkmb-'.$data->tahun.'.pdf');
    }
}
