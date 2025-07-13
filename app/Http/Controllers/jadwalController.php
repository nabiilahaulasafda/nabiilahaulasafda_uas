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
        return view('jadwal.add',compact('pengajuan','petugas'));
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
    public function show(string $id) //string $id
    {
        //
        $jadwal = Jadwal::find($id);
        $pengajuan = Pengajuan::all();
        $petugas = Petugas::all();
        return view('jadwal.open',compact('jadwal', 'pengajuan', 'petugas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $jadwal = Jadwal::find($id);
        $pengajuans = Pengajuan::all();
        $petugass = Petugas::all();
        return view('jadwal.edit',compact('jadwal', 'pengajuans', 'petugass'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
        'pengajuans_id' => 'required',
    'petugass_id' => 'required',
    'jadwal' => 'required',
    'tgl_mulaimagang' => 'required',
    'tgl_selesaimagang' => 'required',
    'senin' => 'required',
    'selasa' => 'required', // typo "seelasa" diperbaiki
    'rabu' => 'required',
    'kamis' => 'required',
    'jumat' => 'required'
    ]);

        $jadwal = Jadwal::findOrFail($id);
        $jadwal->pengajuans_id = $request->pengajuans_id;
        $jadwal->petugass_id = $request->petugass_id;
        $jadwal->jadwal = $request->jadwal;
        $jadwal->tgl_mulaimagang = $request->tgl_mulaimagang;
        $jadwal->tgl_selesaimagang = $request->tgl_selesaimagang;
        $jadwal->senin = $request->senin;
        $jadwal->selasa= $request->selasa;
        $jadwal->rabu = $request->rabu;
        $jadwal->kamis = $request->kamis;
        $jadwal->jumat = $request->jumat;
        $jadwal->save();

        return redirect('/jadwal')->with('success', 'Jadwal berhasil diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $jadwal = Jadwal::find($id);
        $jadwal->delete();

        return redirect('/jadwal');
    }
}
