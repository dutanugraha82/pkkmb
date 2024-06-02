<?php

namespace App\Http\Controllers;

use App\Models\MabaModel;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\HtmlString;

class AbsensiCT extends Controller
{
    public function cert(Request $request, $nomor){
        $data = MabaModel::where('nomor', $nomor)->first();
        $test = DB::select("SELECT *, (SELECT COUNT(DISTINCT id_day) FROM absen_log WHERE absen_log.nomor = `data`.nomor) AS hadir FROM `data` WHERE kode_prodi  = ".$data->kode_prodi." AND nomor = '".$nomor."' ORDER BY nama_lengkap asc");
        // $qr = (string)QrCode::format('png')->margin(0)->size(100)->generate('test');
        
        if ($data->tahun == 2020) {
            $pdf = Pdf::loadView("report.sertifikat", compact('data'))->setPaper('a4', 'landscape');
        }elseif ($data->tahun == 2021){
            $pdf = Pdf::loadView("report.sertifikat_2021", compact('data'))->setPaper('a4', 'landscape');
        }
					return $pdf->download('sertifikat-pkkmb-'.$data->tahun.'-'.$nomor.'.pdf');
        // dd($test);
        
    }
}
