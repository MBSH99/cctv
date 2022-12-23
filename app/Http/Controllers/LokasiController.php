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

class LokasiController extends Controller
{
 //create new data for lokasi
 public function addLokasi(Request $request)
 {
     $user = auth()->user();
     $lokasi_status = "exist";
     
     $this->validate($request,[
        'lokasi_kod' => ['required'],
        'lokasi_detail' => ['required'],
    ]);


         $data=lokasi::create([
         'lokasi_kod'=>$request->lokasi_kod,
         'lokasi_detail'=>$request->input('lokasi_detail', ''),
         'lokasi_status'=>$lokasi_status,
         
     ]);
     $data->save();
 
     return redirect('/kategori_2/lokasi')->with('success','Kategori lokasi Berjaya Daftar');

 }
 //show the data for lokasi
 public function viewLokasi(Lokasi $lokasi)
 {
     $user = auth()->user();
     
     $lokasi = Lokasi::where('lokasi_status', 'exist')->get();
     return view('/kategori_2/lokasi',['lokasis' => $lokasi]);
 }
 //delete the data for lokasi
 public function deleteLokasi($lokasi_id)
 {
     $lokasi_status = "nonexist";
     lokasi::find($lokasi_id)->update([
         
         'lokasi_status'=>$lokasi_status,
     ]);
     return redirect('/kategori_2/lokasi')->with('success','Berjaya Dihapuskan');
 }
 //edit the data for lokasi
 public function editLokasi($lokasi_id)
 {
     $lokasi= lokasi::find($lokasi_id);

    return view('/kategori_2/editlokasi', [
     'lokasi' => $lokasi,]);
 }
 //update the data for lokasi
 public function updateLokasi(Request $request, $lokasi_id)
 {
     $id = Auth::user()->id;
     
     $this->validate($request,[
        'lokasi_kod' => ['required'],
        'lokasi_detail' => ['required'],
    ]);

     lokasi::find($lokasi_id)->update([
         'lokasi_kod'=>$request->lokasi_kod,
         'lokasi_detail'=>$request->lokasi_detail,
         
     ]);
 
     return redirect('/kategori_2/lokasi')->with('success','Lokasi Berjaya Edit');
 }
}
