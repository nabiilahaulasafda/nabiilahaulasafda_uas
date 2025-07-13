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
        $sertifikat = Sertifikat::find($id);
        $pengajuans = Pengajuan::all();
        $petugass = Petugas::all();
        return view('sertifikat.edit',compact('sertifikat', 'pengajuans', 'petugass'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
        'no_sertifikat' => 'required',
        'pengajuans_id' => 'required',
        'petugass_id' => 'required',
    ]);

    $sertifikat = Sertifikat::findOrFail($id);

    $sertifikat->no_sertifikat = $request->no_sertifikat;
    $sertifikat->pengajuans_id = $request->pengajuans_id;
    $sertifikat->petugass_id = $request->petugass_id;

    // Cek jika ada file baru diupload
    if ($request->hasFile('file_sertifikat')) {
        $file = $request->file('file_sertifikat');
        $filename = time().'_'.$file->getClientOriginalName();
        $file->move(public_path('file_sertifikat'), $filename);
        $sertifikat->file_sertifikat = $filename;
    }

    $sertifikat->save();

    return redirect('/sertifikat')->with('success', 'Data sertifikat berhasil diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $sertifikat = Sertifikat::find($id);
        $sertifikat->delete();

        return redirect('/sertifikat');
    }
}
