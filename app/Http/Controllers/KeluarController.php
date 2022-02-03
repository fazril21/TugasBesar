<?php

namespace App\Http\Controllers;

use App\keluar;
use App\Barang;
use Illuminate\Http\Request;

class KeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $keluars = keluar::all();
        return view('keluar.index', ['keluars' => $keluars]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $barangs = Barang::all();
        return view('keluar.create', compact('barangs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'xs'     => 'required',
            'x'    => 'required',
            'm'            => 'required',
            'l'        => 'required',
            'xl'        => 'required',
            'xxl'        => 'required',
            'jumlah'        => 'required',
            'namapenjahit'        => 'required',
            'tglmasuk'        => 'required',
            'barang_id'        => 'required'

        ]);

        keluar::create($request->all());
        $barang = Barang::findOrFail($request->barang_id);
        $barang->xs += $request->xs;
        $barang->x += $request->x;
        $barang->m += $request->m;
        $barang->l += $request->l;
        $barang->xl += $request->xl;
        $barang->xxl += $request->xxl;
        $barang->jumlah += $request->jumlah;
        $barang->save();

       
        
        return redirect('keluar');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\keluar  $keluar
     * @return \Illuminate\Http\Response
     */
    public function show(keluar $keluar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\keluar  $keluar
     * @return \Illuminate\Http\Response
     */
    public function edit(keluar $keluar)
    {
        return view('keluar.edit', compact('keluar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\keluar  $keluar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, keluar $keluar)
    {
        $keluar->update($request->all());
        return redirect('keluar');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\keluar  $keluar
     * @return \Illuminate\Http\Response
     */
    public function destroy(keluar $keluar)
    {
        $keluar->delete();
        return redirect('keluar');
    }
}
