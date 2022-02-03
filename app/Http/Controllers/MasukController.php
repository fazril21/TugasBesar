<?php

namespace App\Http\Controllers;

use App\Masuk;
use App\Barang;
use Illuminate\Http\Request;

class MasukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $masuks = Masuk::all();
        return view('masuk.index', ['masuks' => $masuks]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $barangs = Barang::all();
        return view('masuk.create', compact('barangs'));
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

        Masuk::create($request->all());
        $barang = Barang::findOrFail($request->barang_id);
        $barang->xs += $request->xs;
        $barang->x += $request->x;
        $barang->m += $request->m;
        $barang->l += $request->l;
        $barang->xl += $request->xl;
        $barang->xxl += $request->xxl;
        $barang->jumlah += $request->jumlah;
        $barang->save();

       
        
        return redirect('masuk');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Masuk  $masuk
     * @return \Illuminate\Http\Response
     */
    public function show(Masuk $masuk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Masuk  $masuk
     * @return \Illuminate\Http\Response
     */
    public function edit(Masuk $masuk)
    {
        return view('masuk.edit', compact('masuk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Masuk  $masuk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Masuk $masuk)
    {
        $masuk->update($request->all());
        return redirect('masuk');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Masuk  $masuk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Masuk $masuk)
    {
        $masuk->delete();
        return redirect('masuk');
    }
}
