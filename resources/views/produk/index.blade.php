@extends('layouts.main')

@section('content')
    
<div class="row justify-content-between">
    <div class="col-4">
        <div class="mb-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                  <li class="breadcrumb-item text-sm opacity-5 text-dark">Halaman</li>
                  <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Produk</li>
                </ol>
                <h6 class="font-weight-bolder mb-0">Produk</h6>
            </nav>
        </div>
    </div>
    <div class="col-4 text-end">
        <a href="/produk/create">
            <button class="btn btn-primary" type="button">Tambah Produk</button>
        </a>
    </div>
</div>
<div class="row mb-5">
    @foreach($produks as $produk) 
    <div class="col-sm-4 mb-3">
        <div class="card" style="width: 18rem;">
            @if ($produk->image)
              <img src="{{asset('storage/'.$produk->image)}}" class="card-img-top" alt="...">
            @else
              <img src="{{asset("img/produk/nothing.jpg")}}" class="card-img-top" alt="...">
            @endif
            <div class="card-body">
              <h5 class="card-title">{{ $produk->nama }} <span style="font-size: 10px" class="badge bg-secondary">{{ $produk->kategori}}</span></h5>
              <p class="card-text">{{ $produk->deskripsi }}</p>
            </div>
            <div class="container">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Harga : Rp. {{ number_format($produk->harga) }}</li>
                </ul>
            </div>
            <div class="card-body mx-auto">
                <a href="/produk/{{ $produk->id }}/edit">
                    <button class="btn btn-primary" type="button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                            </svg>
                    </button>
                </a>
                <a href="#">
                    <button type="button" class="btn bg-gradient-primary" data-bs-toggle="modal" data-bs-target="#hapus{{ $produk->id }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                            <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
                        </svg>
                    </button>
                </a>
            </div>
        </div>
    </div>
    @endforeach
</div>
<div class="d-grid gap-2 col-3 mx-auto">
    {{ $produks->links() }}
</div>

  
  <!-- Modal -->
  @foreach($produks as $produk) 
  <div class="modal fade" id="hapus{{ $produk->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Hapus Produk</h5>
          <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Kamu yakin ingin menghapus produk <strong>{{ $produk->nama }}</strong>
        </div>
        <div class="modal-footer">
            <a href="/produkdelete/{{ $produk->id}}">
                <button type="submit" class="btn bg-gradient-primary">Hapus</button>
            </a>
        </div>
      </div>
    </div>
  </div>
  @endforeach
@endsection