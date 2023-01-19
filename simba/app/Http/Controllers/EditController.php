<?php

namespace App\Http\Controllers;

use App\Models\Province;
use App\Models\Regency;
use App\Models\produk;
use App\Models\barangkeluar;
use App\Models\barangmasuk;
use App\Models\distribusibarang;

use App\Models\User;
use App\Http\Controllers\Controller;
use App\Models\Dashboard;
use Illuminate\Http\Response;
// use Illuminate\Http\Request;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;



class EditController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(request $request)
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'date' => 'required|date',
            'requester' => 'required',
            'deskripsi' => 'required',

        ]);
       
       

        if ($request->file('foto')) {
            $value = $request->file('foto');
            $filename = date('YmdHi') . "." . $value->getClientOriginalExtension();
            $value->move(public_path('dist'), $filename);
            $data['foto'] = $filename;
            $barang = new produk();
            $test =  produk::where('id',$barang->id)->get();
    
            $barang->id = $request->id_barang;
    
            $barang->tanggal = $request->input('date');
            $barang->requester = $request->input('requester');
            $barang->deskripsi = $request->input('deskripsi');
            $barang->foto = $request->input('foto');
            $data['tanggal'] = $barang->tanggal;
            $data['requester'] = $barang->requester;
            $data['deskripsi'] = $barang->deskripsi;
            produk::where('id',$barang->id)->update($data);
       
            return redirect('/Admin');
        }
        else{
            $barang = new produk();
            $test =  produk::where('id',$barang->id)->get();
    
            $barang->id = $request->id_barang;
    
            $barang->tanggal = $request->input('date');
            $barang->requester = $request->input('requester');
            $barang->deskripsi = $request->input('deskripsi');
            $barang->foto = $request->input('foto');
            $data['tanggal'] = $barang->tanggal;
            $data['requester'] = $barang->requester;
            $data['deskripsi'] = $barang->deskripsi;
            produk::where('id',$barang->id)->update($data);
       
         
            return redirect('/Admin');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
