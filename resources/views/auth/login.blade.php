<x-app-layout>
   <div class="container-fluid px-0 vh-100">
    @if ($errors->any())
    <div class="toast-container position-fixed top-0 end-0  p-3">
        <div id="liveToast" class="toast show"  role="alert" aria-live="assertive" aria-atomic="true">
          <div class="toast-header">
            <i class="bi-bell me-2"></i>
            <strong class="me-auto"> Notif</strong>
            <small>{{ date('H:i') }}</small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
          </div>
          <div class="toast-body">
            Ups.. akun tidak ditemukan
          </div>
        </div>
      </div>
    @endif
        <div class="col-lg-4 mx-lg-auto">
            <div class="card border-0">
                <div class="card-body">
                    <div class="text-center">
                        <h3 class="fw-bolder font-monospace text-uppercase ">Welcome to <i class="bi-webcam"></i> Presensi</h3>
                    </div>
                    <img src="{{ asset('login.png') }}" class="w-25 d-block mx-auto">
                    <h4 style="font-family: 'Courier New', Courier, monospace" class="card-title fw-bolder mb-0">Sign In</h4>
                    <small class="card-text text-muted">Gunakan email dan password untuk masuk sebelum anda absen</small>
                    <a  class="btn btn-outline-primary my-2 d-block" href="" role="button">
                        <img width="40" height="40" src="https://img.icons8.com/color/48/google-logo.png" alt="google-logo"/>
                        <b>Sign In with Google</b> 
                    </a>
                    <div class=" border-top my-4 position-relative border-2 ">
                        <div class="border rounded-circle position-absolute top-0 start-50 translate-middle bg-body" style="height: 20px;width: 20px;"></div>
                    </div>
                    <form action="{{ route('login') }}" method="post">
                        @csrf
                        <div class="input-group mb-3 ">
                            <span class="input-group-text text-bg-primary bg-gradient" id="prefixId">
                                <i class="bi-envelope-at"></i>
                            </span>
                            <div class="form-floating ">
                              <input type="email" class="form-control" name="email" id="formId1" placeholder="">
                              <label for="formId1">Email</label>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text text-bg-primary bg-gradient" id="prefixId"><i class="bi-lock"></i></span>
                            <div class="form-floating">
                              <input type="password" class="form-control" name="password" id="formId1" placeholder="">
                              <label for="formId1">Password</label>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between mb-3">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="remember" name="remember" value="option1">
                                <label class="form-check-label" for="remember">Remember Me</label>
                            </div>
                            <a class="link-info" href="{{ route('password.request') }}" role="button">Lupa Password?</a>
                        </div>
                        <div class="d-flex justify-content-between ">
                            <a class=" btn btn-lg btn-outline-dark" href="{{ route('register') }}" role="button">
                              <i class="bi-person-plus"></i>  Buat Akun Baru
                            </a>
                            <button type="submit" class="btn btn-lg btn-primary bg-gradient shadow">Submit</button>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
   </div> 
   {{-- ========================================================================== --}}
   @push('scriptku')
       <script>
        setTimeout(() => {
            $('#liveToast').remove()
        }, 5000);
       </script>
   @endpush
</x-app-layout>
