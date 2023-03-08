@extends('layouts.main')

@section('content')

  <div class="row justify-content-between">
    <div class="col-4">
        <div class="mb-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                  <li class="breadcrumb-item text-sm opacity-5 text-dark">Halaman</li>
                  <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Dashboard</li>
                </ol>
                <h6 class="font-weight-bolder mb-0">Dashboard</h6>
            </nav>
        </div>
    </div>
  </div>

  @if(Auth()->user()->level_admin)
    <div class="row">
        <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
          <div class="card shadow-sm">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Jumlah Produk</p>
                    <h5 class="font-weight-bolder mb-0">
                      {{ $produk }}
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                    <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
          <div class="card shadow-sm">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Jumlah Transaksi</p>
                    <h5 class="font-weight-bolder mb-0">
                      {{ $transaksi }}
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                    <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
          <div class="card shadow-sm">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Jumlah Akun Terdaftar</p>
                    <h5 class="font-weight-bolder mb-0">
                      {{ $karyawan }}
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                    <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  @else
    <div class="card shadow-sm">
      <div class="card-body p-3">
        <div class="d-flex flex-column h-100">
          <h5 class="font-weight-bolder">Selamat Datang, <span class="text-uppercase">{{ auth()->user()->first_name }}</span></h5>
          <p class="mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima ratione obcaecati, et beatae quo cum culpa perferendis est consectetur quis eligendi quibusdam eos omnis magni numquam architecto totam repudiandae labore?</p>
            <a class="text-body text-sm font-weight-bold mb-0 icon-move-right mt-auto" href="/transaksiop">
              <button class="btn btn-primary" type="button">Ayo Bekerja</button>
            </a>
        </div>
      </div>
    </div>
  @endif

@endsection