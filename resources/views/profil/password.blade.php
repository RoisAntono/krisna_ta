@extends('layouts.main')

@section('content')

<div class="container">
    <div class="card shadow-sm">
        <div class="card-body">
            <h5 class="card-title mb-4">Ubah Password</h5>
            <form class="needs-validation" action="/password/{{ $password->id }}" method="POST" enctype="multipart/form-data" novalidate>
                @method('put')
                @csrf
                <div class="modal-body">
                    <div class="form-grup">
                      <label>Username</label>
                      <div class="mb-3">
                        <input type="text" class="form-control" value="{{ old('last_name', $password->username ) }}" disabled>
                      </div>
                    </div>
                    <div class="form-grup">
                      <label>Password Baru</label>
                      <div class="mb-3">
                        <input name="password" type="password" class="form-control" placeholder="Password Baru" required autofocus>
                        <div class="invalid-feedback">
                          Perlu diisi!
                        </div>
                      </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-primary">Ubah Password</button>
                </div>
            </form>
        </div>
    </div>
</div>
  
@endsection