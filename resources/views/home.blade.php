@extends('layouts.template')

@section('title')
    Dashboard Admin
@endsection

@section('headline')
    Dashboard
@endsection

@section('content')
<div class="card border-0 shadow-sm rounded-4">
    <div class="card-body px-5 py-4">

        {{-- Sapaan --}}
        <div class="mb-4">
            <h3 class="fw-semibold mb-0">Halo, Admin 👋</h3>
            <small class="text-muted">Hari ini <span id="todayDate"></span></small>
        </div>

        {{-- Statistik Singkat --}}
        <div class="row text-center">
            <div class="col-md-4 mb-3">
                <a href="{{ url('/pengajuan') }}" class="text-decoration-none text-dark">
                    <div class="p-4 bg-light rounded-3 shadow-sm h-100">
                        <i data-feather="file-text" class="mb-2"></i>
                        <div class="fw-semibold">Pengajuan</div>
                        <small class="text-muted">{{ $totalPengajuan }} Data</small>
                    </div>
                </a>
            </div>
            <div class="col-md-4 mb-3">
                <a href="{{ url('/jadwal') }}" class="text-decoration-none text-dark">
                    <div class="p-4 bg-light rounded-3 shadow-sm h-100">
                        <i data-feather="calendar" class="mb-2"></i>
                        <div class="fw-semibold">Jadwal</div>
                        <small class="text-muted">{{ $totalJadwal }} Agenda</small>
                    </div>
                </a>
            </div>
            <div class="col-md-4 mb-3">
                <a href="{{ url('/sertifikat') }}" class="text-decoration-none text-dark">
                    <div class="p-4 bg-light rounded-3 shadow-sm h-100">
                        <i data-feather="award" class="mb-2"></i>
                        <div class="fw-semibold">Sertifikat</div>
                        <small class="text-muted">{{ $totalSertifikat }} Terbit</small>
                    </div>
                </a>
            </div>
        </div>

    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const today = new Date().toLocaleDateString('id-ID', {
            weekday: 'long', year: 'numeric', month: 'long', day: 'numeric'
        });
        document.getElementById('todayDate').textContent = today;

        if (typeof feather !== 'undefined') {
            feather.replace();
        }
    });
</script>
@endsection
