<div>
    <section class="d-flex justify-content-between align-items-center">
        <h1 class="my-3 fontku text-uppercase"><i class="bi-webcam"></i> Presensi App</h1>
        <span>
            <a href="{{ route('login') }}" class="btn btn-light shadow-sm border"><i class="bi-lock h3"></i></a>
        </span>
    </section>
    <h3 class="lead">Preview Foto</h3>
    <div class="mb-3 text-center">
        <div wire:loading wire:target="foto" class="text-center h-3">Uploading...</div>
        @if ($foto)
        <img src="{{ $foto->temporaryUrl() }}" class="rounded-5" width="300" height="150">
            
        @else
        <img class="rounded-5" style="border-style: dashed; border-color: grey;border-width: medium"  src="https://placehold.co/300x150?text=Foto+Anda" alt="">
            
        @endif
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Capture Camera</label>
        <input wire:model='foto' capture="user" type="file" class="form-control" name="foto_absen" id="" placeholder="" aria-describedby="fileHelpId">
    </div>
</div>
