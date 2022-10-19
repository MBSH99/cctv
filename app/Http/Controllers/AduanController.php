<?php

namespace App\Http\Controllers;

use App\Models\Kakitangan;
use App\Models\Lokasi;
use App\Models\Maklumbalas;
use App\Models\Report;
use App\Models\Aduan;
use Illuminate\Http\Request;
use Auth;
use DB;

class AduanController extends Controller
{
    //create new data for aduan
    public function addAduan(Request $request)
    {
          $user = auth()->user();
            $data=aduan::create([
            'aduan_kod'=>$request->aduan_kod,
            'aduan_detail'=>$request->input('aduan_detail', ''),
            
        ]);
        $data->save();
    
        return redirect('/kategori_1/kategori_aduan')->with('success','Kategori Aduan Berjaya Daftar');

    }
    //show the data for aduan
    public function viewAduan(Aduan $aduan)
    {
        $user = auth()->user();
        $aduan = Aduan::all();
        return view('/kategori_1/kategori_aduan',['aduans'=>$aduan]);
        
    }
    //delete the data for aduan
    public function deleteAduan($aduan_id)
    {
        aduan::find($aduan_id) -> delete();        
        return redirect('/kategori_1/kategori_aduan')->with('success','Berjaya Dihapuskan');
    }
    //edit the data for aduan
    public function editAduan($aduan_id)
    {
        $aduan= aduan::find($aduan_id);

       return view('/kategori_1/editkategori_aduan', [
        'aduan' => $aduan]);
    }
    //update the data for aduan
    public function updateAduan(Request $request, $aduan_id)
    {
        aduan::find($aduan_id)->update([
            'aduan_kod'=>$request->aduan_kod,
            'aduan_detail'=>$request->aduan_detail,
            
        ]);
    
        return redirect('/kategori_1/kategori_aduan')->with('success','Kategori Aduan Berjaya Edit');
    }
    
}
