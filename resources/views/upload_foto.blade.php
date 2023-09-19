@extends('tema')
@section('konten')
<div class="col-lg-4 mx-auto"> 
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">
                <i class="bi bi-person-bounding-box"></i>
                Upload Foto Profil
            </h4>
            <p class="card-text">silahkan upload foto profil anda</p>
            <hr>
            <form action="" method="post">
                @csrf
                <div class="mb-3">
                  <label for="" class="form-label">Choose file</label>
                  <input type="file" class="form-control" name="foto_profil" id="" placeholder="" aria-describedby="fileHelpId">
                </div>
                <button type="submit" class="btn btn-primary">
                    <i class="bi bi-upload"></i>
                    Submit
                </button>
            </form>
        </div>
    </div>
</div>
@endsection