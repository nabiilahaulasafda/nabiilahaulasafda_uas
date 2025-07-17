<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengajuan;
use App\Models\Jadwal;
use App\Models\Sertifikat;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $totalPengajuan = Pengajuan::count();
        $totalJadwal = Jadwal::count();
        $totalSertifikat = Sertifikat::count();

    return view('home', compact('totalPengajuan', 'totalJadwal', 'totalSertifikat'));
    }
}
