<?php

namespace App\Http\Controllers\Resource;


use App\Models\produk;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Models\Dashboard;
use Illuminate\Http\Response;
// use Illuminate\Http\Request;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       
        return view('resource.produk');

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
        
        $barang = new produk();

        $barang->tanggal = $request->input('date');
        $barang->requester = $request->input('requester');
        $barang->deskripsi = $request->input('deskripsi');
        $barang->barangawal = $request->input('barangmasuk');
        $barang->barangsekarang = $request->input('barangmasuk');

        if ($request->file('foto')) {
            $value = $request->file('foto');
            $filename = date('YmdHi') . "." . $value->getClientOriginalExtension();
            $value->move(public_path('dist'), $filename);
            $barang->foto = $filename;

            $barang->save();
            return redirect('/');
        }
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

    public function barangmasuk(produk $produk){
       
        return view ('resource.masuk')->with('produk', $produk);
    }

    public function barangkeluar(produk $produk){
       
        return view ('resource.keluar')->with('produk', $produk);
    }


}
