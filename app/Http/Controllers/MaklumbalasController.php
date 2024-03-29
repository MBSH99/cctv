<?php

namespace App\Http\Controllers;


use App\Models\Lokasi;
use App\Models\Maklumbalas;
use App\Models\Report;
use App\Models\Aduan;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;
use DB;

class MaklumbalasController extends Controller
{

    public function maklumbalasView($report_id)
    {
        $user = auth()->user();
        $type = $user->user_type;
        $data3 = Report::all();
        $report= report::find($report_id);
        return view('/maklumbalas', compact('report', 'data3'));
    }

    public function addMaklumbalas(Request $request)
    {
        $user = auth()->user();
        $type = $user->user_type;
        $report_id = $request->report_id;
        $data = maklumbalas::create([
            'maklumbalas_report_id'=> $report_id,
            'maklumbalas_date'=>$request->maklumbalas_date,
            'maklumbalas_jabatan'=>$request->maklumbalas_jabatan,
            'maklumbalas_catatan'=>$request->maklumbalas_catatan,
        ]);
        $data->save();
        
        $status = 'maklumbalas';
        Report::find($report_id)->update(['report_status'=>$status]);
        return redirect('/carian/mengikut_tarikh')->with('success', 'Berjaya Memberi Maklumbalas');
    }

}
