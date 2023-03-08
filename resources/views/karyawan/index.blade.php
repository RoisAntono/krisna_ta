@extends('layouts.main')

@section('content')

<div class="row justify-content-between">
  <div class="col-4">
      <div class="mb-3">
          <nav aria-label="breadcrumb">
              <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                <li class="breadcrumb-item text-sm opacity-5 text-dark">Halaman</li>
                <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Karyawan</li>
              </ol>
              <h6 class="font-weight-bolder mb-0">Karyawan</h6>
          </nav>
      </div>
  </div>
</div>
    
<div class="card shadow-sm">
    <div class="card-body">
        <table class="table align-items-center">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Username</th>
                <th scope="col">Nama Lengkap</th>
                <th scope="col">Alamat</th>
                <th scope="col">Email</th>
                <th scope="col">No Telphone</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($users->skip(1) as $user)
                <tr>
                  <th class="ps-4">{{ $loop->iteration }}</th>
                  <td class="ps-4">{{ $user->username }}</td>
                  <td class="ps-4">{{ $user->first_name }} {{ $user->last_name }}</td>
                  <td class="ps-4">{{ $user->alamat }}</td>
                  <td class="ps-4">{{ $user->email }}</td>
                  <td class="ps-4">{{ $user->telepon }}</td>
                  <td class="ps-4">
                      <a href="#">
                          <button type="button" class="btn bg-gradient-primary" data-bs-toggle="modal" data-bs-target="#hapus{{ $user->id }}">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                  <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
                              </svg>
                          </button>
                      </a>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
    </div>
</div>

<!-- Modal -->

@foreach ($users->skip(1) as $user)
<div class="modal fade" id="hapus{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Hapus Karyawan</h5>
          <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Kamu yakin ingin menghapus karyawan <strong>{{ $user->first_name }} {{ $user->last_name }}</strong>
        </div>
        <div class="modal-footer">
            <a href="/karyawandelete/{{ $user->id }}">
                <button type="submit" class="btn bg-gradient-primary">Hapus</button>
            </a>
        </div>
      </div>
    </div>
</div>
@endforeach

@endsection