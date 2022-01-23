<?php

namespace App\Http\Controllers;

use App\masuk;
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
        return view('masuk.index');
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
        Barang::create($request->all());
        return redirect('masuk');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\masuk  $masuk
     * @return \Illuminate\Http\Response
     */
    public function show(masuk $masuk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\masuk  $masuk
     * @return \Illuminate\Http\Response
     */
    public function edit(masuk $masuk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\masuk  $masuk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, masuk $masuk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\masuk  $masuk
     * @return \Illuminate\Http\Response
     */
    public function destroy(masuk $masuk)
    {
        //
    }
}
