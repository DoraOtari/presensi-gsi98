@push('styleku')
    <style>
        img {
            width: 30px;
            border-radius: 50%;
            aspect-ratio: 1/1
        }
    </style>
@endpush
<x-app-layout>
<div class="col-lg-8 mx-auto">
    <div class="card rounded-4 mx-2">
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <h4 class="lead"><i class="bi-person"></i> Data Karyawan</h4>
                <a href="{{ url('/karyawan/create') }}">
                    <h4><i class="bi-plus-circle"></i></h4>
                </a>
            </div>
            <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between">
                    <div id="data karyawan">
                        <img id="foto_karyawan" src="{{ asset('storage/'.Auth::user()->foto_profil) }}">
                        <h6 class="d-inline">Hera Setiawan</h6>
                        <span class="badge bg-info-subtle rounded-pill text-info">Direktur</span>
                        <div class="small ms-4 ps-2"><i class="bi-envelope-at"></i> email@gmail.com</div>
                    </div>
                    <div id="tombol aksi">
                        <i class="bi-eye fs-5 text-warning"></i>
                        <div class="vr mx-2"></div>
                        <i class="bi-pen fs-5 text-success"></i>
                    </div>
                </li>
                <li class="list-group-item">A second item</li>
              </ul>
        </div>
    </div>
</div>
{{-- notif --}}
<div class="toast-container position-fixed bottom-0 end-0 p-3 ">
  <div id="liveToast" class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header">
      <img src="{{ asset('notification-bell.gif') }}" class="rounded me-2" alt="...">
      <strong class="me-auto">Notifikasi</strong>
      <small>11 mins ago</small>
      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body">
      Hello, world! This is a toast message.
    </div>
  </div>
</div>
</x-app-layout>