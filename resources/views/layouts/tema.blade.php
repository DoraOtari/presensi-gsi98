<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aplikasi Setiawan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  @livewireStyles
  @stack('styleku')
  </head>
  <body>
    @auth
      <nav class="navbar bg-white navbar-expand-lg">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <i class="bi bi-calendar-date"></i> Presensi App
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav nav-underline justify-content-start align-items-center flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class="nav-link {{ Request::is('dashboard') ? 'active' : ''  }}"  href="{{ url('/dashboard') }}"><i class="bi-house"></i> Dashboard</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link {{ Request::is('upload') ? 'active' : ''  }}" href="{{ url('/upload') }}"><i class="bi-person-bounding-box"></i> Profil</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link {{ Request::is('jabatan*') ? 'active' : ''  }}" href="{{ url('/jabatan/tampil') }}"><i class="bi-diagram-2"></i> Jabatan</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link {{ Request::is('karyawan*') ? 'active' : ''  }}" href="{{ url('/karyawan') }}"><i class="bi-people"></i> Karyawan</a>
                </li>
              </ul>
              <div class="me-3">
                <div class="dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <img src="{{ asset('storage/'.Auth::user()->foto_profil) ?? 'https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png' }}" style="width: 30px; aspect-ratio:1/1" class="rounded-circle">
                      <h4 class="lead ms-2 text-capitalize d-inline">{{ Auth::user()->name ?? 'Guest' }} </h4>
                  </a>
                  <ul class="dropdown-menu mt-2">
                    <li>
                      <a class="dropdown-item" href="#">
                        <form action="{{ route('logout') }}" method="post">
                          @csrf
                          <button type="submit" class="btn border-0">
                            <i class="bi-power"></i> Logout
                          </button>
                        </form>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </nav>
    @endauth
    <main>
        {{ $slot }}
    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  @livewireScripts
  @stack('scriptku')
  </body>
</html>