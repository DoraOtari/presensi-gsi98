<div class="col-lg-8 mt-3 mx-auto">
   <div class="card">
    <div class="card-body">
        <h4><i class="bi-person-plus"></i> Create Karyawan</h4>
        <hr>
        <form action="{{ url('/karyawan') }}" method="post">
            <div class="mb-3">
              <label class="form-label badge bg-primary">NIK Otomatis</label>
              <input type="text" class="form-control form-control-plaintext" name="nik" >
            </div>

            <div class="mb-3">
              <label class="form-label">Nama</label>
              <input type="text" class="form-control" name="nama" placeholder="masukan nama karyawan">
            </div>

            <div class="mb-3">
              <label class="form-label">Tanggal Bekerja</label>
              <input type="date" class="form-control" name="tgl_mulai_kerja" >
            </div>

            <div class="mb-3">
                <label  class="form-label">Jabatan</label>
                <select class="form-select" name="jabatan_id" >
                    <option selected disabled>--pilih satu--</option>
                    @foreach ($jabatan as $item)
                        <option value="{{ $item->id }}">{{ $item->nama }}</option>
                    @endforeach
                </select>
            </div>
        </form>
    </div>
   </div>
</div>
