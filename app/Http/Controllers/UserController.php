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
        $type = $user->user_type;
        $id = $user->id;
        $user_type = $request->input('user_type');
        $this->validate($request,[
            'username' => 'required|unique:users,username,'.$user->user_id,
            'password' => 'required|string|min:8|confirmed',
        ]);

        return User::create([
            'name' => $request->username,
            'user_type' => $request->user_type,
            'password' => Hash::make($request->password),
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
