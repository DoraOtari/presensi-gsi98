<div class="col-lg-8 mt-3 mx-auto">
  <div class="card">
   <div class="card-body">
       <h4><i class="bi-person-plus"></i> Create Karyawan</h4>
       <hr>
       <form action="{{ url('/karyawan') }}" method="post">
           <div class="mb-3">
             <label class="form-label badge bg-primary">NIK Otomatis</label>
             <input value="{{ $nik }}"  type="text" readonly class="form-control-plaintext" name="nik" >
           </div>

           <div class="mb-3">
             <label class="form-label">Nama</label>
             <input type="text" class="form-control" name="nama" placeholder="masukan nama karyawan">
           </div>

           <div class="mb-3">
             <label class="form-label">Tanggal Bekerja</label>
             <input wire:model="tgl" type="date" class="form-control" name="tgl_mulai_kerja" >
           </div>
           {{-- 1 baris 2 kolom --}}
           <div class="row">
                {{-- kolom 1 --}}
                <div class="col-6">
                    <div class="mb-3">
                        <label  class="form-label">User</label>
                        <select wire:model="user_id" class="form-select" name="user_id" >
                            <option value="null" selected disabled>--pilih satu--</option>
                            @foreach ($user as $item)
                            <option value="{{ $item->id }}">{{ $item->email }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                {{-- kolom 2 --}}
                <div class="col-6">
                    <div class="mb-3">
                        <label  class="form-label">Jabatan</label>
                        <select class="form-select" name="jabatan_id" >
                            <option selected disabled>--pilih satu--</option>
                            @foreach ($jabatan as $item)
                            <option value="{{ $item->id }}">{{ $item->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
           </div>
           {{-- akhir baris --}}
           {{-- -baris ke 2- --}}
           <div class="row">
            {{-- kolom 1 --}}
            <div class="col-6">
                <div id="pilih provinsi" class="mb-3">
                    <label  class="form-label">Provinsi</label>
                    <select class="form-select" name="provinsi" >
                        <option selected disabled>--pilih satu--</option>
                        @foreach ($provinsi as $item)
                        <option value="{{ $item['id'] }}">{{ $item['name'] }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            {{-- kolom 2 --}}
            <div class="col-6">
                <div id="pilih kota" class="mb-3">
                    <label  class="form-label">Kota</label>
                    <select class="form-select" name="kota" >
                        <option selected disabled>--pilih satu--</option>
                        @foreach ($jabatan as $item)
                        <option value="{{ $item->id }}">{{ $item->nama }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
           </div>
           {{-- akhir baris 2 --}}
       </form>
   </div>
  </div>
</div>