<x-app-layout>
    <div class="row justify-content-center mt-lg-3">
        {{-- kolom pertama --}}
        <div class="col-lg-6">
            <h2>PRESENSI APP</h2>
            <h5 class="text-capitalize text-muted">Monitoring performa kehadiran anda di aplikasi ini</h5>
            <a href="{{ url('performa') }}" class="btn btn-primary bg-gradient rounded-pill">
                <i class="bi-bar-chart"></i> Performa
            </a>
        </div>
        {{-- kolom kedua --}}
        <div class="col-lg-4">
            <img class="img-fluid" src="https://img.freepik.com/free-vector/site-stats-concept-illustration_114360-1434.jpg?w=740&t=st=1696304202~exp=1696304802~hmac=54465a350a4005f1df02e8740f52f1876392de59cd3bcf9315430064cda75b99" alt="">
        </div>
    </div>
</x-app-layout>