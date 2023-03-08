<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $profil
     * @return \Illuminate\Http\Response
     */
    public function edit(User $profil)
    {
        return view('Profil.index', [
            'active' => '',
            'profil' => $profil,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $profil)
    {
        $rules = [
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'alamat' => 'required|max:255',
            'email' => 'required|max:255',
            'telepon' => 'required|max:255',
            'image' => 'image|file|max:1024',
        ];

        $validatedData = $request->validate($rules);

        if($request->file('image')) {
            if($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('profil-images');
        }
        
        User::where('id', $profil->id)
            ->update($validatedData);

        return redirect()->back()->with('info', 'Profil berhasil diperbarui');
    }

    public function proses_password(Request $request, User $profil)
    {
        $rules = [
            'password' => 'required|min:5|max:255',
        ];

        $validatedData = $request->validate($rules);
        
        $validatedData['password'] = Hash::make($request->password);
        
        User::where('id', $profil->id)
            ->update($validatedData);

        return redirect()->back()->with('success', 'Password berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
