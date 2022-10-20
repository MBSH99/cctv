<?php

namespace App\Http\Controllers;

use App\Models\Kakitangan;
use App\Models\Lokasi;
use App\Models\Maklumbalas;
use App\Models\Report;
use App\Models\Aduan;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;
use DB;

class KakitanganController extends Controller
{
    //create new data for Kakitangan table
    public function addKakitangan(Request $request)
    {
        $user = auth()->user();
        $data=kakitangan::create([
        'kakitangan_no'=>$request->kakitangan_no,
        'kakitangan_name'=>$request->kakitangan_name,
        'kakitangan_jenis'=>$request->input('kakitangan_jenis', '')
        
    ]);
    $data->save();

    return redirect('/kategori_3/pengguna')->with('success','Pengguna Berjaya Daftar');
    }
    //show the data for Kakitangan table
    public function viewKakitangan(Kakitangan $kakitangan)
    {
        $user = auth()->user();
        $kakitangan = Kakitangan::all();
        return view('/kategori_3/pengguna',['kakitangans' => $kakitangan]);
    }
    //delete the data for Kakitangan table
    public function deleteKakitangan($kakitangan_id)
    {
        kakitangan::find($kakitangan_id) -> delete();
        return redirect('/kategori_3/pengguna')->with('success','Berjaya Dihapuskan');
    }
    
}
