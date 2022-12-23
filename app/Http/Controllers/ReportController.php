<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;
use App\Views\Composers\MultiComposer;
use App\Models\Lokasi;
use App\Models\Maklumbalas;
use App\Models\Report;
use App\Models\User;
use App\Models\Aduan;
use Illuminate\Http\Request;
use Auth;
use Barryvdh\DomPDF\Facade\Pdf;
use DB;

class ReportController extends Controller
{



    //return view to report
    public function tengokReport()
    {
        $user = auth()->user();
        $data = Lokasi::where('lokasi_status', 'exist')->get();
        $data1 = Aduan::where('aduan_status', 'valid')->get();
        return view('/reports/report', compact('data', 'data1'));

    }



    //function untuk add report
    public function addReport(Request $request)
    {
        $user = auth()->user();
        $id = Auth::user()->id;
        
        $this->validate($request,[
            'report_tarikh' => ['required'],
            'report_masa' => ['required'],
            'report_lokasi' => ['required'],
            'report_daerah' => ['required'],
            'report_kaduan' => ['required'],
            'report_saduan' => ['required'],
            'report_jabatan' => ['required'],
            'report_masalapor' => ['required'],
            'report_laporan' => ['required'],
            'report_image' => ['required'],
        ]);

        if($request->hasFile('report_image')){
            $file = $request->file('report_image');
            $filename = $file->getClientOriginalName();
            $file->move(public_path("images"), $filename);
            $Report_image = $filename;
            $report_status = "active";
        }

        $data=report::create([
            'report_admin_id'=>$id,
            'report_tarikh'=>$request->report_tarikh,
            'report_masa'=>$request->report_masa,
            'report_lokasi'=>$request->report_lokasi,
            'report_daerah'=>$request->report_daerah,
            'report_kaduan'=>$request->report_kaduan,
            'report_saduan'=>$request->report_saduan,
            'report_jabatan'=>$request->report_jabatan,
            'report_masalapor'=>$request->report_masalapor,
            'report_laporan'=>$request->report_laporan,
            'report_image'=>$request->report_image,
            'report_status'=>$report_status,

        ]);
        $data->save();
    
        return redirect('/reports/report')->with('success','Laporan Kenyataan Disimpan'); 
    }

    //delete the data on status but not in database for Report
    public function deleteReport($report_id)
    {
            $report_status = "inactive";
            report::find($report_id)->update([
                
                'report_status'=>$report_status,
            ]);

            return redirect('/kemaskini/Kemaskini')->with('success','Berjaya Dihapuskan');
    }
    

    //edit the data for Report
    public function editReport($report_id)
    {
        $report= report::find($report_id);
        $data = Lokasi::all();
        $data1 = Aduan::all();
        return view('/kemaskini/KemaskiniEdit', compact('report', 'data', 'data1'));
    }


    //update the data for Report
    public function updateReport(Request $request, $report_id)
    {
        $user = auth()->user();
        $id = Auth::user()->id;
        
        $this->validate($request,[
            'report_tarikh' => ['required'],
            'report_masa' => ['required'],
            'report_lokasi' => ['required'],
            'report_daerah' => ['required'],
            'report_kaduan' => ['required'],
            'report_saduan' => ['required'],
            'report_jabatan' => ['required'],
            'report_masalapor' => ['required'],
            'report_laporan' => ['required'],
            'report_image' => ['required'],
        ]);

        if($request->hasFile('report_image')){
            $file = $request->file('report_image');
            $filename = $file->getClientOriginalName();
            $file->move(public_path("images"), $filename);
            $report_image = $filename;

            report::find($report_id)->update([
                'report_admin_id'=>$id,
                'report_image'=>$request->report_image,
                'report_tarikh'=>$request->report_tarikh,
                'report_masa'=>$request->report_masa,
                'report_lokasi'=>$request->report_lokasi,
                'report_daerah'=>$request->report_daerah,
                'report_kaduan'=>$request->report_kaduan,
                'report_saduan'=>$request->report_saduan,
                'report_jabatan'=>$request->report_jabatan,
                'report_masalapor'=>$request->report_masalapor,
                'report_laporan'=>$request->report_laporan,
                

            ]);
        }
        else{

            report::find($report_id)->update([
                'report_admin_id'=>$id,
                'report_image'=>$request->report_image,
                'report_tarikh'=>$request->report_tarikh,
                'report_masa'=>$request->report_masa,
                'report_lokasi'=>$request->report_lokasi,
                'report_daerah'=>$request->report_daerah,
                'report_kaduan'=>$request->report_kaduan,
                'report_saduan'=>$request->report_saduan,
                'report_jabatan'=>$request->report_jabatan,
                'report_masalapor'=>$request->report_masalapor,
                'report_laporan'=>$request->report_laporan,
                
            ]);
        }
        
    
        return redirect('/kemaskini/Kemaskini')->with('success','Input Baru Dapat Di Edit'); 


    }




    //view report for the active report
    public function seeReport(Request $request)
    {
        $user = auth()->user();
        $report = Report::where('report_status', 'active')
                         ->orderBy(column: 'report_tarikh')
                         ->get();
        return view('/laporan/belum_diberi_maklumbalas', compact('report'));

    }

    public function seenReport(Request $request)
    {
        $user = auth()->user();
        $report_status = "maklumbalas";
        $data9 = Report::where('report_status', 'maklumbalas')
                        ->orderBy(column: 'report_tarikh')
                        ->get();
        $data = compact('data9');
        return view('/laporan/kes_selesai')->with($data);
    }

    //view the data for Kemaskini
    public function viewReport(Request $request)
    {
        $dateFrom = $request->dateFrom;

        $report = DB::select("SELECT * FROM `reports` WHERE (report_tarikh = '".$dateFrom."' and report_status = 'active') ");
        
        if($report == null ){
            return back()->with('failed','Tiada maklumat direkodkan!');
        }
        else{
            return view('/kemaskini/Kemaskini_result', compact('report', 'dateFrom'));
        }
            
        }

    //Get the data for carian result kategori{
     public function showReport(Request $request)
    {
        $report_kaduan = $request->report_kaduan;

        $report = DB::select("SELECT * FROM `reports` WHERE (report_kaduan = '".$report_kaduan."' and report_status = 'active')");
        
        if($report == null ){
            return back()->with('failed','Tiada maklumat direkodkan! Sila CUba Lagi');
        }
        else{
            return view('/carian/result_kategori', compact('report', 'report_kaduan'));
        }
    }

    //get the data for carian result_tarikh
    public function lookReport(Request $request)
    {
        
        $dateFrom = $request->dateFrom;

        $report = DB::select("SELECT * FROM `reports` WHERE (report_tarikh = '".$dateFrom."' and report_status = 'active')");
        
        if($report == null ){
            return back()->with('failed','Tiada maklumat direkodkan! Sila CUba Lagi');
        }
        else{
            return view('/carian/result_tarikh', compact('report', 'dateFrom'));
        }
    }
    

    //show the data for laporan Keseluruhan
    public function keseluruhanReport(Request $request)
    {
       
        $dateFrom = $request->dateFrom;
        $dateTo = $request->dateTo;
       // $report = DB::select("SELECT * FROM `reports` WHERE (report_tarikh >= '".$dateFrom."' and report_tarikh <= '".$dateTo."')");
        
       // ni kalau nk  join ngan maklumbalas 
        $report = DB::select("SELECT * FROM `reports` JOIN `maklumbalas` on reports.report_id = maklumbalas.maklumbalas_report_id WHERE (report_tarikh >= '".$dateFrom."' and report_tarikh <= '".$dateTo."' and report_status = 'maklumbalas') ORDER BY `report_tarikh` DESC");
        
        if($report == null ){
            return back()->with('failed','Tiada maklumat direkodkan! Sila CUba Lagi');
        }
        else{
            return view('/laporan/result_keseluruhan', compact('report', 'dateFrom', 'dateTo'));
        }
    
        
    }
    
    //view report for the active report
    public function lihatReport(Request $request)
    {
        $dateFrom = $request->dateFrom;
        $dateTo = $request->dateTo;
        $report_daerah = $request->report_daerah;
        $report_kaduan = $request->report_kaduan;
       // $report = DB::select("SELECT * FROM `reports` WHERE (report_tarikh >= '".$dateFrom."' and report_tarikh <= '".$dateTo."')");
        
       // ni kalau nk  join ngan maklumbalas 
        $report = DB::select("SELECT * FROM `reports` JOIN `maklumbalas` on reports.report_id = maklumbalas.maklumbalas_report_id WHERE (report_tarikh >= '".$dateFrom."' and report_tarikh <= '".$dateTo."' and report_daerah LIKE '".$report_daerah."' and report_kaduan LIKE '".$report_kaduan."' and report_status = 'maklumbalas') ORDER BY `report_tarikh` DESC");
        
        if($report == null ){
            return back()->with('failed','Tiada maklumat direkodkan! Sila CUba Lagi');
        }
        else{
            return view('/laporan/result_tdka', compact('report', 'dateFrom', 'dateTo', 'report_daerah', 'report_kaduan'));
        }
}
}