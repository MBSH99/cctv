<?php

namespace App\Http\Controllers;
use App\Models\Lokasi;
use App\Models\Maklumbalas;
use App\Models\Report;
use App\Models\Aduan;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Auth;
use DB;


class UserController extends Controller
{
    //User view other user register
    public function registerUser(Request $request)
    {
        $user = auth()->user();
        $id = $user->id;
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
        save->data();
    return redirect('/kategori_3/pengguna')->with('success','Pengguna Berjaya Daftar');
    }
    //show the data for Kakitangan table
    public function viewUser(User $user)
    {
        $user = auth()->user();
        $user = User::all();
        return view('/kategori_3/pengguna',['users' => $user]);
    }
    //delete the data for Kakitangan table
    public function deleteUser($id)
    {
        user::find($id) -> delete();
        return redirect('/kategori_3/pengguna')->with('success','Berjaya Dihapuskan');
    }

}
