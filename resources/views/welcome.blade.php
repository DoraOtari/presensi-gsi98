@push('styleku')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Tilt+Neon&display=swap" rel="stylesheet">
    <style>
        .fontku {
            font-family: 'Tilt Neon', sans-serif;
        }
    </style>
    
@endpush
<x-app-layout>
    <div class="container">
        <h1 class="my-3 fontku text-uppercase"><i class="bi-webcam"></i> Presensi App</h1>
        <h3 class="lead">Preview Foto</h3>
        <div class="mb-3 text-center">
            <img class="rounded-5" style="border-style: dashed; border-color: grey;border-width: medium" 
            src="https://placehold.co/300x150?text=Foto+Anda" alt="">
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Choose file</label>
          <input capture="user" type="file" class="form-control" name="" id="" placeholder="" aria-describedby="fileHelpId">
        </div>
        <div id="map" style="height: 180px"></div>
        <button type="submit" class="btn bg-gradient btn-primary rounded-pill float-end">
            <i class="bi-send"></i> Kirim
        </button>
    </div> 
</x-app-layout>