@extends('layouts.main')

@section('content')
    <div class="mb-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
              <li class="breadcrumb-item text-sm opacity-5 text-dark">Halaman</li>
              <li class="breadcrumb-item text-sm opacity-5 text-dark"><a href="/produk">Produk</a></li>
              <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Tambah Produk</li>
            </ol>
            <h6 class="font-weight-bolder mb-0">Tambah Produk</h6>
        </nav>
    </div>

    <div class="card">
        <div class="card-body">
            <form action="/produk" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Nama Produk</label>
                    <div class="mb-3">
                        <input type="text" name="nama" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label>Kategori</label>
                    <div class="mb-3">
                        <select name="kategori" class="form-select" aria-label="Default select example">
                            <option value="Elektronik">Elektronik</option>
                            <option value="Software">Software</option>
                            <option value="Hardware">Hardware</option>
                          </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label>Stock</label>
                            <div class="mb-3">
                                <input type="text" name="stock" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label>Harga</label>
                            <div class="mb-3">
                                <input type="text" name="harga" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Deskripsi</label>
                    <div class="mb-3">
                        <textarea type="text" name="deskripsi" class="form-control" ></textarea>
                    </div>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Tambahkan</button>
                </div>
              </form>
        </div>
    </div>

@endsection