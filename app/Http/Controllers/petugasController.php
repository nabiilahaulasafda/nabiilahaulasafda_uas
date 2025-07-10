<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Petugas;

class petugasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $petugas = Petugas::all();
        return view('petugas.index',compact('petugas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('petugas.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $petugas = new Petugas;
        $petugas->nip_petugas = $request->nip_petugas;
        $petugas->nama_petugas = $request->nama_petugas;
        $petugas->jabatan_petugas = $request->jabatan_petugas;
        $petugas->save();

        return redirect('/petugas');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $petugas = Petugas::find($id); // cari data berdasarkan id
        return view('petugas.open', compact('petugas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $petugas = Petugas::find($id);
        return view('petugas.edit',compact('petugas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $petugas = Petugas::find($id);
        $petugas->nip_petugas = $request->nip_petugas;
        $petugas->nama_petugas = $request->nama_petugas;
        $petugas->jabatan_petugas = $request->jabatan_petugas;
        $petugas->save();

        return redirect('/petugas');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $petugas = Petugas::find($id);
        $petugas->delete();

        return redirect('/petugas');
    }
}
