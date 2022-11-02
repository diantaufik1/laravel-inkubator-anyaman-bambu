<?php

namespace App\Http\Controllers;

use App\Models\Role;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DaftarController extends Controller
{
    public function index() {
        return view('daftar.index'
        );
    }
    public function store(Request $request){

        $validateData = $request->validate([
        'nama' => 'required|max:255',
        'email' => ['required', 'unique:users'],
        'password' => 'required|same:konfirpassword',
    ]);
    $validateData['role_id'] = 2;
    $validateData['password'] = Hash::make($validateData['password']);

    User::Create($validateData);

    return redirect('/')
    -> with('Success', 'Berhasil Daftar');
    }   
}