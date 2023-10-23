@push('styleku')
    <style>
        img {
            width: 30px;
            border-radius: 50%;
            aspect-ratio: 1/1
        }
    </style>
@endpush
@push('scriptku')
    <script>
            $('.toast-container').delay('3000').fadeOut('slow');
    </script>
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
                @forelse ($karyawan as $item)
                    <li class="list-group-item d-flex justify-content-between mb-2 border">
                        <div id="data karyawan">
                            <img id="foto_karyawan" src="{{ asset('profile.gif') }}">
                            <h6 class="d-inline text-capitalize">{{ $item->nama }}</h6>
                            <span class="badge bg-info-subtle rounded-pill text-info">{{ $item->jabatan->nama }}</span>
                            <div class="small ms-4 ps-2"><i class="bi-envelope-at"></i> {{ $item->user->email }}</div>
                        </div>
                        <div id="tombol aksi">
                            <i class="bi-eye fs-5 text-warning"></i>
                            <div class="vr mx-2"></div>
                            <i class="bi-pen fs-5 text-success"></i>
                            <div class="vr mx-2"></div>
                            <form class="d-inline-flex" action="{{ url('karyawan', $item->id) }}" method="post">
                                @csrf
                                @method("delete")
                                <button type="submit" class="btn border-0 p-0">
                                    <i class="bi-trash2 fs-5 text-danger"></i>
                                </button>
                            </form>
                        </div>
                    </li>
                @empty
                <li class="list-group-item"><i class="bi-search"></i> Data karyawan tidak ditemukan di database</li>
                @endforelse
              </ul>
        </div>
    </div>
</div>
@if(session('pesan'))
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
            {{ session('pesan') }}
        </div>
        </div>
    </div>
@endif
</x-app-layout>