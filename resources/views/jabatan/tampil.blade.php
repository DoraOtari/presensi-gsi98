<x-app-layout>
    <div class="col-lg-6 mx-auto">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title">
                       <i class="bi-file-person"></i> Data Jabatan
                    </h4>
                    <a href="{{ url('jabatan/buat') }}" class="btn btn-warning">
                        <i class="bi-plus"></i> Buat
                    </a>
                </div>
                <hr>
                <div class="table-responsive">
                    <table class="table">
                        <thead class="table-info">
                            <tr>
                                <th scope="col">Nama</th>
                                <th scope="col">Status</th>
                                <th scope="col">Gaji</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Hapus</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- <tr class="">
                                <td scope="row">R1C1</td>
                                <td>R1C2</td>
                                <td>R1C3</td>
                                <td>R1C3</td>
                                <td>R1C3</td>
                            </tr> --}}
                            <tr>
                                <td colspan="5">
                                    <h4 class="text-center">
                                        <i class="bi-search"></i> Data tidak ada didatabase
                                    </h4>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
            </div>
        </div>
    </div>
</x-app-layout>