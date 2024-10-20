<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use Illuminate\Http\Request;

class MobilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mobil = Mobil::all();
        return view('mobil.index')
            ->with('mobil' , $mobil);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mobil.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $val = $request->validate([
            'url_foto'=> 'required|url',
            'merk'=> 'required|max:50',
            'cabang'=> 'required|max:50',
            'stok' => 'required|integer|min:0',
            'harga' => 'required|integer',
            'tahun'=> 'required|integer|min:1900|max:' . date('Y')
        ]);
        Mobil::create($val);
        return redirect()->route('mobil.index')->with('success', $val['merk'].' Berhasi di Simpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Mobil $mobil)
    {
        return view('mobil.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mobil $mobil)
    {
        return view('mobil.edit')->with('mobil',$mobil);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mobil $mobil)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mobil $mobil)
    {
        //
    }
}
