<x-app-layout>
    <div class="col-lg-6 mx-auto">
        @if (session('pesan'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                <strong><i class="bi-bell"></i></strong> {{ session('pesan') }}
            </div>
        @endif 
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title">
                       <i class="bi-file-person"></i> Data Jabatan
                    </h4>
                    <a href="{{ url('jabatan/buat') }}" class="btn btn-dark">
                        <i class="bi-plus"></i> Buat
                    </a>
                </div>
                <hr>
                <div class="table-responsive">
                    <table class="table">
                        <thead class="table-secondary">
                            <tr>
                                <th>No.</th>
                                <th>Nama</th>
                                <th>Status</th>
                                <th>Gaji</th>
                                <th>Edit</th>
                                <th>Hapus</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($jabatan as $item)
                                <tr>
                                    <td scope="row">{{ $loop->iteration }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->status }}</td>
                                    <td>Rp. {{ number_format($item->gaji,2,',','.')  }}</td>
                                    <td>
                                        <a href="{{ route('ubah jabatan', $item->id) }}" class="btn btn-sm btn-success rounded-circle">
                                            <i class="bi-pen"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <form action="{{ route('hapus jabatan', $item->id) }}" method="post">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="btn btn-sm btn-danger rounded-circle">
                                                <i class="bi-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>  
                            @empty
                                <tr>
                                    <td colspan="5">
                                        <h4 class="text-center">
                                            <i class="bi-search"></i> Data tidak ada didatabase
                                        </h4>
                                    </td>
                                </tr> 
                            @endforelse
                        </tbody>
                    </table>
                </div>
                
            </div>
        </div>
    </div>
</x-app-layout>