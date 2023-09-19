@extends('layouts.app') @section('title', 'Buat Penjualan') @section('content')
<!-- Main Content -->
<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Buat Penjualan</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Forms</a></div>
        <div class="breadcrumb-item">Editor</div>
      </div>
    </div>

    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <form action="{{ route('backsite.dashboard-penjualan.store') }}" method="POST">
                @csrf
                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Barang</label>
                  <div class="col-sm-12 col-md-7">
                    <input type="text" name="nama_barang" id="name" class="form-control" />
                  </div>
                </div>
                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Stok</label>
                  <div class="col-sm-12 col-md-7">
                    <input type="number" name="stok" id="stok" class="form-control" />
                  </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tanggal Transaksi</label>
                    <div class="col-sm-12 col-md-7">
                        <input type="date" name="tanggal_transaksi" id="tanggal_transaksi" class="form-control" />
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jenis Barang</label>
                    <div class="col-sm-12 col-md-7">
                        <input type="text" name="jenis_barang" id="jenis_barang" class="form-control" />
                    </div>
                </div>
                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                  <div class="col-sm-12 col-md-7">
                    <button type="submit" class="btn btn-info">Save</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection