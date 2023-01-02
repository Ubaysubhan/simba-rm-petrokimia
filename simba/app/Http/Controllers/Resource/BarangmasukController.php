<?php

namespace App\Http\Controllers\Resource;

use App\Http\Controllers\Controller;
use App\Models\barangmasuk;
use App\Http\Requests\StorebarangmasukRequest;
use App\Http\Requests\UpdatebarangmasukRequest;
use Illuminate\Http\Response;
// use Illuminate\Http\Request;
use Illuminate\Http\Request;


class BarangmasukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('resource.masuk');

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
     * @param  \App\Http\Requests\StorebarangmasukRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $barang =new barangmasuk();
    
        $barang->tanggal= $request->input('tanggal');
        $barang->requester = $request->input('requester');
        $barang->jumlahbarang = $request->input('jumlahbarang');
     
    
        
        $barang->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\barangmasuk  $barangmasuk
     * @return \Illuminate\Http\Response
     */
    public function show(barangmasuk $barangmasuk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\barangmasuk  $barangmasuk
     * @return \Illuminate\Http\Response
     */
    public function edit(barangmasuk $barangmasuk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatebarangmasukRequest  $request
     * @param  \App\Models\barangmasuk  $barangmasuk
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatebarangmasukRequest $request, barangmasuk $barangmasuk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\barangmasuk  $barangmasuk
     * @return \Illuminate\Http\Response
     */
    public function destroy(barangmasuk $barangmasuk)
    {
        //
    }
}
