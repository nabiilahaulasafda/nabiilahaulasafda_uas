<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jadwal;
use App\Models\Pengajuan;
use App\Models\Petugas;

class jadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $jadwal = Jadwal::all();
        return view('jadwal.index',compact('jadwal'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $pengajuan = Pengajuan::all();
        $petugas = Petugas::all();
        return view('jadwal.add',compact('pengajuan','jadwal'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $jadwal = new Jadwal;
        $jadwal->petugass_id = $request->petugas;
        $jadwal->pengajuans_id = $request->pengajuan;
        $jadwal->nama_petugas = $request->nama_petugas;
        $jadwal->jadwal = $request->jadwal;
        $jadwal->tgl_mulaimagang = $request->tgl_mulaimagang;
        $jadwal->tgl_selesaimagang = $request->tgl_selesaimagang;
        $jadwal->senin = $request->senin;
        $jadwal->selasa = $request->selasa;
        $jadwal->rabu = $request->rabu;
        $jadwal->kamis = $request->kamis;
        $jadwal->jumat = $request->jumat;
        $jadwal->save();

        return redirect('/jadwal');
    }

    /**
     * Display the specified resource.
     */
    public function show() //string $id
    {
        //
        $jadwal = Jadwal::all();
        return view('jadwal.open',compact('jadwal'));
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
