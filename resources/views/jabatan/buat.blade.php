<x-app-layout>
    <div class="col-lg-6 mx-auto">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title"><i class="bi-plus"></i> Buat Jabatan</h4>
                <hr>
                <form action="{{ url('/jabatan') }}" method="post">
                    <div class="mb-3">
                      <label class="form-label">Nama</label>
                      <input type="text" class="form-control" name="nama" placeholder="masukan nama jabatan">
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Gaji</label>
                      <input type="number" class="form-control" name="gaji" placeholder="masukan gaji jabatan">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Status</label>
                        <select class="form-select" name="status">
                            <option selected disabled>--Pilih Satu--</option>
                            <option value="tetap">Tetap</option>
                            <option value="kontrak">Kontrak</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-dark">
                        <i class="bi-send"></i> Submit
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>