<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProdukModel;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('produk.index', [
            'active' => 'produk',
            'produks' => ProdukModel::latest()->paginate(3)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('produk.create', [
            'active' => 'produk',
            'produks' => ProdukModel::all()
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
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'kategori' => 'required|max:255',
            'deskripsi' => 'required|max:255',
            'stock' => 'required|max:255',
            'harga' => 'required|max:255',
            
        ]);
        
        ProdukModel::create($validatedData);

        return redirect('/produk')->with('success', 'Produk berhasil ditambahkan');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(ProdukModel $produk)
    {
        return view('produk.edit', [
            'active' => 'produk',
            'produk' => $produk,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,ProdukModel $produk)
    {
        $rules = [
            'nama' => 'required|max:255',
            'kategori' => 'required|max:255',
            'deskripsi' => 'required|max:255',
            'stock' => 'required|max:255',
            'harga' => 'required|max:255',
        ];

        $validatedData = $request->validate($rules);
        
        ProdukModel::where('id', $produk->id)
            ->update($validatedData);

        return redirect('/produk')->with('info', 'Produk berhasil diedit');
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
