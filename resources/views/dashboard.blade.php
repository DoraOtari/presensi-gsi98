<x-app-layout>
    <div class="row justify-content-center mt-lg-3">
        {{-- kolom pertama --}}
        <div class="col-lg-6">
            <h2><i class="bi bi-webcam"></i> PRESENSI APP</h2>
            <h1 class="my-0 text-uppercase display-2">the productivity</h1>
            <h1 class="fw-bolder text-primary my-0" style="font-family: 'Trebuchet MS' ">WORKER</h1>
            <h5 class="text-capitalize text-muted lead">
                Monitoring performa kehadiran anda di aplikasi ini, pantau kehadiran mu semudah memantau
                <i class="bi-instagram text-danger"></i> IG Mantanmu
            </h5>
            <a href="{{ url('performa') }}" class="btn btn-primary bg-gradient rounded-pill mt-2">
                <i class="bi-bar-chart"></i> Performa
            </a>
        </div>
        {{-- kolom kedua --}}
        <div class="col-lg-4">
            <img class="img-fluid" src="https://img.freepik.com/free-vector/site-stats-concept-illustration_114360-1434.jpg?w=740&t=st=1696304202~exp=1696304802~hmac=54465a350a4005f1df02e8740f52f1876392de59cd3bcf9315430064cda75b99" alt="">
        </div>
    </div>
</x-app-layout>