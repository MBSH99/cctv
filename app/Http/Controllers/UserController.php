<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use DB;
use Auth;
use Session;

class userController extends Controller
{
    //create new data for Kakitangan table
    public function addUser(Request $request)
    {
        $user = auth()->user();
        $data=user::create([
        ''=>$request->,
        ''=>$request->,
        ''=>$request->,
        
    ]);
    $data->save();

    return redirect('/kategori_3/pengguna')->with('success','Pengguna Berjaya Daftar');
    }
    //show the data for Kakitangan table
    public function viewUser(Kakitangan $kakitangan)
    {
        $user = auth()->user();
        $user = User::all();
        return view('/kategori_3/pengguna',['user' => $user]);
    }
    //delete the data for Kakitangan table
    public function deleteUser($id)
    {
        user::find($id) -> delete();
        return redirect('/kategori_3/pengguna')->with('success','Berjaya Dihapuskan');
    }
   
                                        
}


