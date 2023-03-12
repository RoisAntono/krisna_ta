@extends('layouts.main')

@section('content')
    <div class="mb-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
              <li class="breadcrumb-item text-sm opacity-5 text-dark">Halaman</li>
              <li class="breadcrumb-item text-sm opacity-5 text-dark"><a href="/produk">Produk</a></li>
              <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Edit Produk</li>
            </ol>
            <h6 class="font-weight-bolder mb-0">Edit Produk</h6>
        </nav>
    </div>

    <div class="card">
        <div class="card-body">
            <form action="/produk/{{ $produk->id }}" method="POST" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="row">
                    <div class="col-4">
                        @if ($produk->image)
                            <img src="{{ asset('storage/' . $produk->image) }}" class="img-preview img-fluid height-300 d-block">
                        @else
                            <img src="{{ asset('img/produk/nothing.jpg') }}" class="img-preview img-fluid height-300 col-sm-5">
                        @endif
                    </div>
                    <div class="col-4">
                        @if ($produk->image1)
                            <img src="{{ asset('storage/' . $produk->image1) }}" class="img-preview img-fluid height-300 d-block">
                        @else
                            <img src="{{ asset('img/produk/nothing.jpg') }}" class="img-preview img-fluid height-300 col-sm-5">
                        @endif
                    </div>
                    <div class="col-4">
                        @if ($produk->image2)
                            <img src="{{ asset('storage/' . $produk->image2) }}" class="img-preview img-fluid height-300 d-block">
                        @else
                            <img src="{{ asset('img/produk/nothing.jpg') }}" class="img-preview img-fluid height-300 col-sm-5">
                        @endif
                    </div>
                </div>
                <div class="form-group">
                            <label>Foto Produk</label>
                            <div class="mb-3">
                                <input type="hidden" name="oldImage" value="{{ $produk->image }}" >
                                <input name="image" type="file" class="form-control" id="image" onchange="previewImage()">
                            </div>
                </div>
                <div class="form-group">
                            <label>Foto Produk</label>
                            <div class="mb-3">
                                <input type="hidden" name="oldImage" value="{{ $produk->image1 }}" >
                                <input name="image" type="file" class="form-control" id="image" onchange="previewImage()">
                            </div>
                </div>
                <div class="form-group">
                            <label>Foto Produk</label>
                            <div class="mb-3">
                                <input type="hidden" name="oldImage" value="{{ $produk->image2 }}" >
                                <input name="image" type="file" class="form-control" id="image" onchange="previewImage()">
                            </div>
                </div>
                <div class="form-group">
                    <label>Nama Produk</label>
                    <div class="mb-3">
                        <input type="text" name="nama" class="form-control" value="{{ old('nama', $produk->nama ) }}">
                    </div>
                </div>
                <div class="form-group">
                    <label>Kategori</label>
                    <div class="mb-3">
                        <select name="kategori" class="form-select" aria-label="Default select example" value="{{ old('kategori', $produk->kategori ) }}">
                            <option value="{{ old('kategori', $produk->kategori ) }}" selected>{{ old('kategori', $produk->kategori ) }} - Dipilih</option>
                            <option value="Elektronik">Elektronik</option>
                            <option value="Software">Software</option>
                            <option value="Hardware">Hardware</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label>Harga</label>
                    <div class="mb-3">
                        <input type="text" name="harga" class="form-control" value="{{ old('harga', $produk->harga ) }}">
                    </div>
                </div>
                <div class="form-group">
                    <label>Deskripsi</label>
                    <div class="mb-3">
                        <textarea type="text" name="deskripsi" class="form-control" value="{{ old('deskripsi', $produk->deskripsi ) }}">{{ $produk->deskripsi }}</textarea>
                    </div>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Perbarui</button>
                </div>
              </form>
        </div>
    </div>

@endsection