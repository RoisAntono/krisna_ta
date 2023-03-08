<div class="container-fluid py-1 px-3">
    <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
      <div class="ms-md-auto pe-md-3 d-flex align-items-center">
      </div>
      <ul class="navbar-nav  justify-content-end">
        <li class="nav-item d-flex align-items-center">
          <div class="d-flex px-2 py-1">
            <div class="dropdown">
              <a class="text-white cursor-pointer" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <div class="row">
                  <div class="col-sm-3">
                    @if(Auth()->user()->image)
                      <img src="{{asset('storage/'.Auth()->user()->image)}}" class="avatar avatar-sm me-3">
                    @else
                      <img src="{{asset("img/profil.jpg")}}" class="avatar avatar-sm me-3">
                    @endif
                  </div>
                  <div class="col-sm-9">
                    <h6 class="mb-0 text-xs">{{ auth()->user()->first_name }} {{ auth()->user()->last_name }}</h6>
                    @if(Auth()->user()->level_admin)
                    <p class="text-xs text-secondary mb-0">Admin</p>
                    @else
                    <p class="text-xs text-secondary mb-0">Operator</p>
                    @endif
                  </div>
                </div>
              </a>
              <ul class="dropdown-menu dropdown-menu-right py-3 ms-n4" aria-labelledby="dropdownMenuButton">
                @if(Auth()->user()->level_admin)
                <li>
                  <a class="dropdown-item" href="/profil/{{ auth()->user()->id }}/edit">Akun Saya</a>
                </li>
                @else
                  <a class="dropdown-item" href="/profil/{{ auth()->user()->id }}/edit">Akun Saya</a>
                @endif
                <hr>
                <li>
                  <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="dropdown-item">Logout</button>
                  </form>
                </li>
              </ul>
            </div>
          </div>
        </li>
      </ul>
    </div>
</div>