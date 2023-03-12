<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('register.index',[
            'active' => 'register'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        {
            $validatedData = $request->validate([
                'first_name' => 'required|max:255',
                'last_name' => 'required|max:255',
                'telepon' => 'required|max:255',
                'email' => 'required|email:dns|unique:users',
                'username' => ['required', 'min:3', 'max:255', 'unique:users'],
                'password' => 'required|min:5|max:255',
            ]);
    
            //$validatedData['password'] = bcrypt($validatedData['password']);
            $validatedData['password'] = Hash::make($validatedData['password']);
    
            User::create($validatedData);
    
            //$request->session()->flash('success', 'Registrasi berhasil! Silahkan login');
    
            return redirect('/')->with('success', 'Daftar Akun Berhasil! Silahkan login');
        }
    }
}
