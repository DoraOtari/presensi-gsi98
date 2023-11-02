@push('styleku')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Tilt+Neon&display=swap" rel="stylesheet">
    <style>
        .fontku {
            font-family: 'Tilt Neon', sans-serif;
        }
        canvas {
            border-radius: 25px;
        }
    </style>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"/>
@endpush
{{-- ============================================================================= --}}
<x-app-layout>
    <div class="container">
        {{-- <livewire:foto-absen /> --}}
        <section id="camera">
            <div class="d-flex justify-content-between align-items-center">
                <h1 class="my-3 fontku text-uppercase"><i class="bi-webcam"></i> Presensi App</h1>
                <span class="rounded-4 shadow-sm">
                        <a href="{{ url('dashboard') }}" class="btn btn-light border">
                            <i class="bi-house"></i>
                        </a>
                    </span>
            </div>
            <h3 class="lead">Preview Foto</h3>
            <input id="my_result" type="hidden" name="foto_absen" readonly  />
            <div class="mx-auto" id="my_camera" style="width:320px; height:240px;"></div>
            <div id="tombol" class="mt-4 d-flex justify-content-evenly">
                <a href="javascript:void(take_snapshot())" class="btn btn-success"><i class="bi-camera"></i></a>
                <button onclick="batal()" class="btn btn-warning"><i class="bi-arrow-counterclockwise"></i></button>
            </div>

        </section>
        <section>
            <img src="" class="img-fluid" alt="">
        </section>
        <label for="" class="badge bg-primary">Keterangan</label>
        <div class="mb-3">
            <div class="form-check form-check-inline">
                <input class="form-check-input" checked type="radio" name="keterangan" id="" value="masuk">
                <label class="form-check-label" for="">Masuk</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="keterangan" id="" value="pulang">
                <label class="form-check-label" for="">Pulang</label>
              </div>
        </div>
        <input type="hidden" id="lokasi" name="lokasi">
        <h3 class="lead">Lokasi Anda</h3>
        <div id="map" style="height: 170px" class="my-2"></div>
        <button type="submit" class="btn bg-gradient btn-primary rounded-pill float-end">
            <i class="bi-send"></i> Kirim
        </button>
    </div> 
{{-- ========================================================================= --}}
    @push('scriptku')
    
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

    <script>

    navigator.geolocation.getCurrentPosition(berhasil, gagal);

    function berhasil(posisi){
        let latitude = posisi.coords.latitude;
        let longitude = posisi.coords.longitude;
        $('#lokasi').val(latitude+','+longitude);
        
        var map = L.map('map').setView([-2.966970, 104.748322], 16);
        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map);
        var marker = L.marker([latitude, longitude]).addTo(map);
        var circle = L.circle([-2.966970, 104.748322], {
        color: 'red',
        fillColor: '#f03',
        fillOpacity: 0.5,
        radius: 100
        }).addTo(map);
    }

function gagal(){
    alert("akses lokasi tidak diberikan");
}

</script>

<script src="{{ asset('webcam.js') }}"></script>
<script language="JavaScript">
    Webcam.attach( '#my_camera' );
    
    function take_snapshot() {
        Webcam.snap( function(data_uri) {
            $('#my_result').val(data_uri);
        } );
        Webcam.freeze();
    }

    function batal() {
        Webcam.unfreeze();
    }
</script>
@endpush
</x-app-layout>