 @extends('layouts.template')
@section('title')
    Halaman Dashboard
@endsection

@section('headline')
    BERANDA
@endsection

@section('content')
 <div class="content-bg">
    <div class="container-fluid">
        <div class="card-transparan text-center">
                <h1>HALO ADMIN!</h1>
                <p><strong>Cuaca Saat Ini:</strong> <span id="weather">Loading...</span></p>
                <p><strong>Tanggal:</strong> <span id="date"></span></p>
            </div>

            <!-- Cuaca & Tanggal langsung di background -->
            <div class="weather-box">

            </div>

            <div class="mx-5">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Menampilkan tanggal sekarang
        function updateDate() {
            let now = new Date();
            let options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
            document.getElementById('date').innerText = now.toLocaleDateString('id-ID', options);
        }

        // Mengambil Cuaca dari API (Ganti API_KEY dengan API asli dari OpenWeather)
        function fetchWeather() {
            let apiKey = "YOUR_OPENWEATHER_API_KEY";
            let city = "Jakarta"; // Ubah sesuai lokasi
            let url = `https://api.openweathermap.org/data/2.5/weather?q=${city}&appid=${apiKey}&units=metric`;

            fetch(url)
            .then(response => response.json())
            .then(data => {
                let temp = data.main.temp;
                let weatherDesc = data.weather[0].description;
                document.getElementById('weather').innerText = `${temp}°C, ${weatherDesc}`;
            })
            .catch(error => {
                console.error("Gagal mengambil data cuaca", error);
                document.getElementById('weather').innerText = "Tidak tersedia";
            });
        }

        // Jalankan fungsi saat halaman dimuat
        updateDate();
        fetchWeather();
    </script>
@endsection
