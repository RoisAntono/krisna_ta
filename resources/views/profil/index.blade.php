@extends('layouts.main')

@section('content')
<div class="container-fluid mb-4">
    <div class="page-header min-height-200 border-radius-xl mt-4" style="background-image: url('{{asset("img/curved-images/curved0.jpg")}}'); background-position-y: 50%;">
      <span class="mask bg-gradient-primary opacity-6"></span>
    </div>
    <div class="card card-body blur shadow-sm mx-4 mt-n7 overflow-hidden">
      <div class="row gx-4">
        <div class="col-auto">
          <div class="avatar avatar-xl position-relative">
            @if ($profil->image)
              <img src="{{asset('storage/'.$profil->image)}}" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
            @else
              <img src="{{asset("img/profil.jpg")}}" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
            @endif
          </div>
        </div>
        <div class="col-auto my-auto">
          <div class="h-100">
            <h5 class="mb-1">
              {{ auth()->user()->first_name }} {{ auth()->user()->last_name }}
            </h5>
            <p class="mb-0 font-weight-bold text-sm">
              @if(Auth()->user()->level_admin)
                <p>Admin</p>
              @else
              <p class="mb-0 font-weight-bold text-sm">Operator</p>
              @endif
            </p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
          <div class="nav-wrapper position-relative end-0">
            <ul class="nav nav-pills nav-fill p-1 bg-transparent" role="tablist">
              <li class="nav-item">
              </li>
              <li class="nav-item">
                <button class="nav-link mb-0 px-0 py-1 " data-bs-toggle="modal" data-bs-target="#password{{ auth()->user()->id }}">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-shield-lock-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 0c-.69 0-1.843.265-2.928.56-1.11.3-2.229.655-2.887.87a1.54 1.54 0 0 0-1.044 1.262c-.596 4.477.787 7.795 2.465 9.99a11.777 11.777 0 0 0 2.517 2.453c.386.273.744.482 1.048.625.28.132.581.24.829.24s.548-.108.829-.24a7.159 7.159 0 0 0 1.048-.625 11.775 11.775 0 0 0 2.517-2.453c1.678-2.195 3.061-5.513 2.465-9.99a1.541 1.541 0 0 0-1.044-1.263 62.467 62.467 0 0 0-2.887-.87C9.843.266 8.69 0 8 0zm0 5a1.5 1.5 0 0 1 .5 2.915l.385 1.99a.5.5 0 0 1-.491.595h-.788a.5.5 0 0 1-.49-.595l.384-1.99A1.5 1.5 0 0 1 8 5z"/>
                  </svg>
                  <span class="ms-1">Ubah Password</span>
                </button>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
</div>

<div class="container">
  <div class="card shadow-sm">
    <div class="card-body">
      <div class="row">
        <div class="col-6">
          <h5 class="card-title mb-4">Data Profil</h5>
          <div class="shadow-none">
            <div class="container">
              <h4 class="card-title text-primary text-gradient">Nama Lengkap</h4>
              <blockquote class="blockquote text-white">
                <p class="text-dark ms-3">{{ auth()->user()->first_name }} {{ auth()->user()->last_name }}</p>
              </blockquote>
            </div>
          </div>
          <div class="shadow-none">
            <div class="container">
              <h4 class="card-title text-primary text-gradient">Alamat Lengkap</h4>
              <blockquote class="blockquote text-white">
                <p class="text-dark ms-3">{{ auth()->user()->alamat }}</p>
              </blockquote>
            </div>
          </div>
          <div class="shadow-none">
            <div class="container">
              <h4 class="card-title text-primary text-gradient">Email</h4>
              <blockquote class="blockquote text-white">
                <p class="text-dark ms-3">{{ auth()->user()->email }}</p>
              </blockquote>
            </div>
          </div>
          <div class="shadow-none">
            <div class="container">
              <h4 class="card-title text-primary text-gradient">Nomor Telephone</h4>
              <blockquote class="blockquote text-white">
                <p class="text-dark ms-3">{{ auth()->user()->telepon }}</p>
              </blockquote>
            </div>
          </div>
        </div>
        <div class="col-6">
          <h5 class="card-title mb-4">Update Profil</h5>
          <form action="/profil/{{ $profil->id }}" method="POST" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="form-group">
              <label>Foto Profil</label>
              <div class="mb-3">
                  <input type="hidden" name="oldImage" value="{{ $profil->image }}" >
                  <input name="image" type="file" class="form-control" id="image" onchange="previewImage()">
              </div>
            </div>
            <div class="form-grup">
              <div class="row">
                <label>Nama Lengkap</label>
                <div class="col-sm-6">
                  <div class="mb-3">
                    <input type="text" class="form-control" name="first_name" value="{{ old('last_name', $profil->first_name ) }}" placeholder="Nama Depan">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="mb-3">
                    <input type="text" class="form-control" name="last_name" value="{{ old('last_name', $profil->last_name ) }}" placeholder="Nama Belakang">
                  </div>
                </div>
              </div>
            </div>
            <div class="form-grup">
              <label>Alamat</label>
              <div class="mb-3">
                <input type="text" class="form-control" name="alamat" value="{{ old('alamat', $profil->alamat ) }}" placeholder="Alamat Lengkap">
              </div>
            </div>
            <div class="form-grup">
              <label>Email</label>
              <div class="mb-3">
                <input type="email" class="form-control" name="email" value="{{ old('email', $profil->email ) }}" placeholder="Email">
              </div>
            </div>
            <div class="form-grup">
              <label>Nomor Telephone</label>
              <div class="mb-3">
                <input type="text" class="form-control" name="telepon" value="{{ old('telepon', $profil->telepon ) }}" placeholder="Nomer Telephone">
              </div>
            </div>
            <div class="text-center">
              <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Perbarui Profil</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal Password -->
<div class="modal fade" id="password{{ auth()->user()->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Ubah Password</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form class="needs-validation" action="/password/{{ $profil->id }}" method="POST" enctype="multipart/form-data" novalidate>
        @method('put')
        @csrf
        <div class="modal-body">
            <div class="form-grup">
              <label>Username</label>
              <div class="mb-3">
                <input type="text" class="form-control" value="{{ old('username', $profil->username ) }}" disabled>
              </div>
            </div>
            <div class="form-grup">
              <label>Password Baru</label>
              <div class="mb-3">
                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password Baru" autofocus required>
                <div class="invalid-feedback">
                  Perlu diisi!
                </div>
              </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">Ubah Password</button>
        </div>
      </form>
    </div>
  </div>
</div>
  
@endsection