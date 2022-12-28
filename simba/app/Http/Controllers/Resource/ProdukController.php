<?php

namespace App\Http\Controllers\Resource;


use App\Models\User;
use App\Http\Controllers\Controller;
use App\Models\Dashboard;
use Illuminate\Http\Response;
// use Illuminate\Http\Request;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
             
        $request->validate([
            'nomorakta' => 'required',
            'tanggalakta' => 'required|date',
            'image' => 'required|mimes:pdf|max:10000',
    
    
        ]);
       
        $user = auth('sanctum')->user();
        $barang =new Dashboard();
    
        $barang->tanggal= $request->input('date');
        $barang->requester = $request->input('Requester');
        $barang->foto = $request->input('foto');
        $barang->barang = $request->input('barang');
        $barang->deskripsi = $request->input('deskripsi');
        $barang->barangmasuk = $request->input('barangmasuk');
    
        $barang->save();
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // return redirect ('/produk');
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // return redirect ('/produk');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // return redirect ('/produk');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // return redirect ('/produk');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // return redirect ('/produk');
    }
}
