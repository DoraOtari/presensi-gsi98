@push('styleku')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Tilt+Neon&display=swap" rel="stylesheet">
    <style>
        .fontku {
            font-family: 'Tilt Neon', sans-serif;
        }
    </style>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"/>
@endpush
{{-- ============================================================================= --}}
<x-app-layout>
    <div class="container">
        <livewire:foto-absen />
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
@endpush
</x-app-layout>