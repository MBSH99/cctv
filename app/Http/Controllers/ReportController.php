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
        return view('/laporan/belum_diberi_maklumbalas');

        
    }

    //view report for the active report
    public function getseeReport(Request $request)
    {
        $user = auth()->user();
        $report_status = "active";
        $fdate = $request->fdate;
        $sdate = $request->sdate;
        $data04 = DB::table('reports')
                    ->where('report_status', 'active')
                    ->whereBetween('report_tarikh', [$request->fdate, $request->sdate])
                    ->get();
                
        return view('/laporan/result_bdm', compact ('data04'));
 
    }

    


    public function seenReport(Request $request)
    {
        $user = auth()->user();
        $report_status = "maklumbalas";
        $data9 = Report::where('report_status', 'maklumbalas')->get();
        $data = compact('data9');
        return view('/laporan/kes_selesai')->with($data);
    }




    //view the data for Kemaskini
    public function viewReport(Request $request)
    {
        $user = auth()->user();
        return view('/kemaskini/Kemaskini');
        
    }

    //view the data for Kemaskini
    public function getviewReport(Request $request)
    {
        $user = auth()->user();
        $ondate = $request->ondate;
        $report_status = "active";
        $data03 = DB::table('reports')
                     ->where('report_status', 'active')
                     ->where('report_tarikh', [$request->ondate])
                     ->get();

            return view('/kemaskini/Kemaskini_result', compact('data03'));
            
        }




    //show the data for Carian mengikut kategori{
    public function showReport(Report $report)
    {
        $user = auth()->user();

        return view('/carian/mengikut_kategori');
    }

    //Get the data for carian result kategori{
     public function getshowReport(Report $report)
    {
        $user = auth()->user();

        $fdate = $request->fdate;
        $sdate = $request->sdate;


        $report_status = "active";
        $data01 = DB::table('reports')
                        ->where('report_status', 'active')
                        ->whereBetween('report_kaduan', 'LIKE', "%search%")
                        ->get();

        return view('/carian/result_kategori', compact('data01'));
    }
    



    //show the data for Carian mengikut tarikh
    public function lookReport(Request $request)
    {
        $user = auth()->user();
        return view('/carian/mengikut_tarikh');
    }

    //get the data for carian result_tarikh
    public function getlookReport(Request $request)
    {
        $user = auth()->user();
        $onedate = $request->onedate;
        $report_status = "active";

        $data02 = DB::table('reports')
                        ->where('report_status', 'active')
                        ->where('report_tarikh', [$request->onedate])
                        ->get();

        return view('/carian/mengikut_tarikh', compact('data02'));
    }
    



    //show the data for laporan Keseluruhan
    public function keseluruhanReport(Request $request)
    {
        $user = auth()->user();
        $report_status = "active";
        $search = $request['search'] ?? "";
        if ($search != ""){

            $report = Report::whereBetween('created_at', [$request->dateFrom. '00:00:00', $request->dataTo. '23:59:59'])->get();

        } else {

            $join = DB::select('select * from reports join maklumbalas on reports.report_id = maklumbalas.maklumbalas_report_id');
                    //where('report_status', 'maklumbalas')->get();
            
        }
        $data = compact('search', 'join');
        return view('/laporan/keseluruhan')->with($data);
    }
    
    //view report for the active report
    public function lihatReport(Request $report)
    {
        $user = auth()->user();
        $report_status = "active";
        $search = $request['search'] ?? "";
        if ($search != ""){

            $report = DB::table('reports')->select()
                                ->where('report_tarikh', '>=', $dateFrom)
                                ->where('report_tarikh', '<=', $dateTo)
                                ->where('report_daerah', 'LIKE', "%search%" )
                                ->where('report_kaduan', 'LIKE', '%search')
                                ->get();

        } else {
            
            $join1 = DB::select('select * from reports join maklumbalas on reports.report_id = maklumbalas.maklumbalas_report_id');
            //$data8 = Report::where('report_status', 'maklumbalas')->get();
        }
        $data = compact('join1', 'search');
        return view('/laporan/tarikh&daerah')->with($data);
}
}