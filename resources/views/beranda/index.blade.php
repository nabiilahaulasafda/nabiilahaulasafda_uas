@extends('layouts.template')
@section('title')
    Halaman Beranda
@endsection

@section('headline')
    BERANDA
@endsection

@section('content')
<div class="card">
        <div class="card-header text-center">
        <div class="card-body">
                <h1>HALO ADMIN!</h1>
                <p><strong>Tanggal:</strong> <span id="date"></span></p>


            <!-- Cuaca & Tanggal langsung di background -->
            <div class="weather-box">

            </div>

            <div class="mx-5">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </div>
        </div>
         </div>
    </div>

<script src={{ asset('js/app.js') }}></script>
<script src={{ asset('js/all.js') }}></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
@endsection
