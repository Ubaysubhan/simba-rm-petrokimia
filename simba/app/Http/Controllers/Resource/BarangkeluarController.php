<?php

namespace App\Http\Controllers\Resource;

use App\Models\barangkeluar;
use App\Models\produk;
use App\Http\Requests\StorebarangkeluarRequest;
use App\Http\Requests\UpdatebarangkeluarRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class BarangkeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     
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
     * @param  \App\Http\Requests\StorebarangkeluarRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      

        $barang =new barangkeluar();
        if($barang->jumlahbarang == null){
        $barang->id_product = $request->id_barang;
        $barang->tanggal= $request->input('tanggal');
        $barang->requester = $request->input('requester');
        $barang->keperluan = $request->input('keperluan');
        $barang->provinsi = $request->input('provinsi');
        $barang->kotakab = $request->input('kotakab');
        $barang->jumlahbarang = $request->input('jumlahbarang');
        $barang->jumlahbarangkeluar = $request->input('jumlahbarang');
        
        $stuff = produk::where('id',$request->id_barang)->get()->first();
        $jumlah = $stuff->barangsekarang - $request->jumlahbarang;

        $data['barangsekarang'] = $jumlah;
        produk::where('id', $request->id_barang)->update($data);

        $barang->save();
        return redirect('/Admin');
    }
    else{
            dd('test');
    }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\barangkeluar  $barangkeluar
     * @return \Illuminate\Http\Response
     */
    public function show(barangkeluar $barangkeluar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\barangkeluar  $barangkeluar
     * @return \Illuminate\Http\Response
     */
    public function edit(barangkeluar $barangkeluar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatebarangkeluarRequest  $request
     * @param  \App\Models\barangkeluar  $barangkeluar
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatebarangkeluarRequest $request, barangkeluar $barangkeluar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\barangkeluar  $barangkeluar
     * @return \Illuminate\Http\Response
     */
    public function destroy(barangkeluar $barangkeluar)
    {
        //
    }
}
