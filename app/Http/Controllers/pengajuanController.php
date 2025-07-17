<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengajuan;

class pengajuanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // menampilkan data pengajuan
        $pengajuan = Pengajuan::all();
        return view('pengajuan.index',compact('pengajuan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //menampilkan form add data pengajuan
        return view('pengajuan.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // proses tambah
        $request->validate([
        'file_suratpermohonan' => 'required|file|mimes:pdf,jpg,jpeg,png|max:2048', // sesuaikan jenis file
    ]);

        $pengajuan = new Pengajuan;
        $pengajuan->nim_mahasiswa = $request->nim_mahasiswa;
        $pengajuan->nama_mahasiswa = $request->nama_mahasiswa;
        $pengajuan->tanggallahir_mahasiswa = $request->tanggallahir_mahasiswa;
        $pengajuan->tempatlahir_mahasiswa = $request->tempatlahir_mahasiswa;
        $pengajuan->hp_mahasiswa = $request->hp_mahasiswa;
        $pengajuan->email_mahasiswa = $request->email_mahasiswa;
        $pengajuan->alamat_mahasiswa = $request->alamat_mahasiswa;
        $pengajuan->asal_kampus = $request->asal_kampus;
        $pengajuan->file_suratpermohonan = $request->file_suratpermohonan->getClientOriginalName();;

        $request->file_suratpermohonan->move('file_suratpermohonan',$request->file_suratpermohonan->getClientOriginalName());

        $pengajuan->save();

        return redirect('/pengajuan');
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
        //tampilan edit
        $pengajuan = Pengajuan::find($id);
        return view('pengajuan.edit',compact('pengajuan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //proses edit
        $pengajuan = Pengajuan::find($id);
        $pengajuan->nim_mahasiswa = $request->nim_mahasiswa;
        $pengajuan->nama_mahasiswa = $request->nama_mahasiswa;
        $pengajuan->tanggallahir_mahasiswa = $request->tanggallahir_mahasiswa;
        $pengajuan->tempatlahir_mahasiswa = $request->tempatlahir_mahasiswa;
        $pengajuan->hp_mahasiswa = $request->hp_mahasiswa;
        $pengajuan->email_mahasiswa = $request->email_mahasiswa;
        $pengajuan->alamat_mahasiswa = $request->alamat_mahasiswa;
        $pengajuan->asal_kampus = $request->asal_kampus;
        $pengajuan->file_suratpermohonan = $request->file_suratpermohonan;

        if ($request->hasFile('file_suratpermohonan')) {
        $file = $request->file('file_suratpermohonan');
        $filename = time().'_'.$file->getClientOriginalName();
        $file->move(public_path('file_suratpermohonan'), $filename);
        $pengajuan->file_suratpermohonan = $filename;
    }


        $pengajuan->save();

        return redirect('/pengajuan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $pengajuan = Pengajuan::find($id);
        $pengajuan->delete();

        return redirect('/pengajuan');
    }
}
