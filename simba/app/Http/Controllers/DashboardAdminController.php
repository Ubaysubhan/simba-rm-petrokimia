<?php

namespace App\Http\Controllers;

use App\Models\DashboardAdmin;
use App\Http\Requests\StoreDashboardAdminRequest;
use App\Http\Requests\UpdateDashboardAdminRequest;
use App\Models\produk;
use App\Models\barangkeluar;
use App\Models\barangmasuk;
use Illuminate\Http\Request;


class DashboardAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $barang = produk::with(['barangmasuk','barangkeluar'])->get();
    
        return view('resource.DashboardAdmin')->with('produk',$barang);
        
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
     * @param  \App\Http\Requests\StoreDashboardAdminRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDashboardAdminRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DashboardAdmin  $dashboardAdmin
     * @return \Illuminate\Http\Response
     */
    public function show(DashboardAdmin $dashboardAdmin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DashboardAdmin  $dashboardAdmin
     * @return \Illuminate\Http\Response
     */
    public function edit(DashboardAdmin $dashboardAdmin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDashboardAdminRequest  $request
     * @param  \App\Models\DashboardAdmin  $dashboardAdmin
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDashboardAdminRequest $request, DashboardAdmin $dashboardAdmin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DashboardAdmin  $dashboardAdmin
     * @return \Illuminate\Http\Response
     */
    public function destroy(DashboardAdmin $dashboardAdmin)
    {
        //
    }
}
