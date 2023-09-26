<div class="col-lg-4 mx-auto"> 
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">
                <i class="bi bi-person-bounding-box"></i>
                Upload Foto Profil
            </h4>
            <p class="card-text">silahkan upload foto profil anda</p>
            <hr>
            @if($foto)
                <p>Foto Preview:</p> 
                <img style="aspect-ratio:1/1; width:150px" class="img-thumbnail rounded-circle d-block mx-auto" src="{{ $foto->temporaryUrl() }}" alt="">
            @endif
            <form wire:submit.prevent='simpan' method="post">
                @csrf
                <div class="mb-3">
                  <label for="" class="form-label">Choose file</label>
                  <input accept="image/*" wire:model='foto' type="file" class="form-control @error('foto') is-invalid @enderror" name="foto_profil" >
                  @error('foto')
                      <small class="text-danger">{{ $message }}</small>
                  @enderror
                </div>
                <button type="submit" class="btn btn-primary">
                    <i class="bi bi-upload"></i>
                    Submit
                </button>
            </form>
        </div>
    </div>
</div>