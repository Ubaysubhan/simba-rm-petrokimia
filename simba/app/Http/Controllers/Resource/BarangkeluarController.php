<?php

namespace App\Http\Controllers\Resource;

use App\Models\distribusibarang;
use App\Models\Province;
use App\Models\Regency;
use App\Models\District;
use App\Models\Village;
use App\Models\Province as ModelsProvince;
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
        $request->validate([
            'tanggal' => 'required|date',
            'requester' => 'required',
            'keperluan' => 'required',
            'jumlahbarang' => 'required|numeric',

        ]);

        $provinsi = Province::select('name')->where('id', $request->input('provinsi'))->first();
        $kabupaten = Regency::select('name')->where('id', $request->input('kabupaten'))->first();

        $barang =new barangkeluar();
      
        $barang->id_product = $request->id_barang;
        $barang->tanggal= $request->input('tanggal');
        $barang->requester = $request->input('requester');
        $barang->keperluan = $request->input('keperluan');
        $barang->provinsi = $provinsi->name;
        $barang->kabupaten = $kabupaten->name;
        $barang->jumlahbarang = $request->input('jumlahbarang');
        $barang->jumlahbarangkeluar = $request->input('jumlahbarang');
      

        
        $stuff = produk::where('id',$request->id_barang)->get()->first();
        $jumlah = $stuff->barangsekarang - $request->jumlahbarang;
         $data['barangsekarang'] = $jumlah;
        produk::where('id', $request->id_barang)->update($data);

        $barang->save();

        $keluar =new distribusibarang();

        $keluar->id_product = $request->id_barang;
        $keluar->tanggal= $request->input('tanggal');
        $keluar->requester = $request->input('requester');
        $keluar->keperluan = $request->input('keperluan');
        $keluar->provinsi = $provinsi->name;
        $keluar->kabupaten = $kabupaten->name;
        $keluar->jumlahbarang = $request->input('jumlahbarang');
        $keluar->status = 'barangkeluar';
        
        $keluar->save();

        return redirect('/Admin');
    }
   

    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\barangkeluar  $barangkeluar
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        $provinces = Province::all();
        $regencies = Regency::all();
        $districts = District::all();
        $villages = Village::all();

        return redirect('/barangkeluar')->with('provinsi',$provinces);
    }

    public function findKabupatenName(Request $request)
    {
        $data = Regency::select('name', 'id')->where('province_id', $request->id)->get();
        return response()->json($data);
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
