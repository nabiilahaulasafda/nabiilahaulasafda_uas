<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sertifikat;
use App\Models\Pengajuan;
use App\Models\Petugas;

class sertifikatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $sertifikat = Sertifikat::all();
        return view('sertifikat.index',compact('sertifikat'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $pengajuan = Pengajuan::all();
        $petugas = Petugas::all();
        return view('sertifikat.add',compact('pengajuan','petugas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $sertifikat = new Sertifikat;
        $sertifikat->no_sertifikat = $request->no_sertifikat;
        $sertifikat->pengajuans_id = $request->pengajuan;
        $sertifikat->petugass_id = $request->petugas;
        $sertifikat->file_sertifikat = $request->file_sertifikat->getClientOriginalName();;

        $request->file_sertifikat->move('file_sertifikat',$request->file_sertifikat->getClientOriginalName());

        $sertifikat->save();

        return redirect('/sertifikat');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
