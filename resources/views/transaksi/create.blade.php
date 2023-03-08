@extends('layouts.main')

@section('content')
    <div class="mb-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
              <li class="breadcrumb-item text-sm opacity-5 text-dark">Halaman</li>
              <li class="breadcrumb-item text-sm opacity-5 text-dark"><a href="/transaksi">Transaksi</a></li>
              <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Tambah Transaksi</li>
            </ol>
            <h6 class="font-weight-bolder mb-0">Tambah Transaksi</h6>
        </nav>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">
            <form action="/transaksi" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Nama Pembeli</label>
                    <div class="mb-3">
                        <input type="text" name="pembeli" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label>Produk</label>
                    <div class="mb-3">
                        <select name="produk_id" class="form-select">
                            @foreach ($produks as $produk)
                                @if(old('produk_id') == $produk->id)
                                    <option value="{{ $produk->id }}" selected>{{ $produk->nama }}</option>
                                @else
                                    <option value="{{ $produk->id }}">{{ $produk->nama }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Tambahkan</button>
                </div>
            </form>
        </div>
    </div>

@endsection