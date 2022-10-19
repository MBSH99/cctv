<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;
use App\Views\Composers\MultiComposer;

use App\Models\Kakitangan;
use App\Models\Lokasi;
use App\Models\Maklumbalas;
use App\Models\Report;
use App\Models\Aduan;
use Illuminate\Http\Request;
use Auth;
use DB;

class ReportController extends Controller
{



    //return view to report
    public function tengokReport()
    {
        $user = auth()->user();
        $data = Lokasi::all();
        $data1 = Aduan::all();
        return view('/reports/report', compact('data', 'data1'));

    }



    //function untuk add report
    public function addReport(Request $request)
    {
        $user = auth()->user();
        if($request->hasFile('report_image')){
            $file = $request->file('report_image');
            $filename = $file->getClientOriginalName();
            $file->move(public_path("images"), $filename);
            $Report_image = $filename;
            $report_status = "active";
        }

        $data=report::create([
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



    //view the data for Kemaskini
    public function viewReport(Request $request)
    {
        $user = auth()->user();
        $report_status = "active";
        $search = $request['search'] ?? "";
        if ($search != ""){

            $report = Report::where('report_tarikh', 'LIKE', "%$search%")->get();

        } else {

            $report = Report::where('report_status', 'active')->get();
        }
        $data = compact('report', 'search');
        return view('/kemaskini/Kemaskini')->with($data);
        
    }



    //show the data for Carian mengikut kategori{
    public function showReport(Report $report)
    {
        $user = auth()->user();
        $search = $request['search'] ?? "";
        $report_status = "active";
        if ($search != ""){

            $report = Report::where('report_kaduan', 'active', "%$search%")->get();

        } else {

            $report = Report::where('report_status', 'active')->get();
        }
        $data = compact('report', 'search');
        return view('/carian/mengikut_kategori')->with($data);
    }
    


    //show the data for Carian mengikut tarikh
    public function lookReport(Request $request)
    {
        $user = auth()->user();
        $report_status = "active";
        $search = $request['search'] ?? "";
        if ($search != ""){

            $report = Report::where('report_tarikh', 'LIKE', "%$search%")->get();

        } else {

            $report = Report::where('report_status', 'active')->get();
        }
        $data = compact('report', 'search');
        return view('/carian/mengikut_tarikh')->with($data);
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

            $report = Report::where('report_status', 'active')->get();
        }
        $data = compact('report', 'search');
        return view('/laporan/keseluruhan')->with($data);
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
        if($request->hasFile('report_image')){
            $file = $request->file('report_image');
            $filename = $file->getClientOriginalName();
            $file->move(public_path("images"), $filename);
            $Report_image = $filename;

            report::find($report_id)->update([
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
    public function seeReport(Request $report)
    {
        $user = auth()->user();
        $report_status = "active";
        $search = $request['search'] ?? "";
        if ($search != ""){

            $report = Report::whereBetween('created_at', [$request->dateFrom. '00:00:00', $request->dataTo. '23:59:59'])->get();

        } else {

            $report = Report::where('report_status', 'active')->get();
        }
        $data = compact('report', 'search');
        return view('/laporan/belum_diberi_maklumbalas')->with($data);
    }

    
    //view report for the active report
    public function lihatReport(Request $report)
    {
        $user = auth()->user();
        $report_status = "active";
        $search = $request['search'] ?? "";
        if ($search != ""){

            $report = Report::whereBetween('created_at', [$request->dateFrom. '00:00:00', $request->dataTo. '23:59:59'])
                                ->where('report_daerah', 'LIKE', "%search%" )
                                ->where('report_kaduan', 'LIKE', '%search')
                                ->get();

        } else {

            $report = Report::where('report_status', 'active')->get();
        }
        $data = compact('report', 'search');
        return view('/laporan/tarikh&daerah')->with($data);
    }

    public function seenReport(Request $report)
    {
        $user = auth()->user();
        $report_status = "active";
        $search = $request['search'] ?? "";
        if ($search != ""){

            $report = Report::whereBetween('created_at', [$request->dateFrom. '00:00:00', $request->dataTo. '23:59:59'])->get();

        } else {

            $report = Report::where('report_status', 'active')->get();
        }
        $data = compact('report', 'search');
        return view('/laporan/tarikh&daerah')->with($data);
    }



}
