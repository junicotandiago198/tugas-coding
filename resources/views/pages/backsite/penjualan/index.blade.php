@extends('layouts.app')

@section('title', 'Category')

@section('content')
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data Penjualan Barang</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item">Penjualan</div>
            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                <div class="card-header-action mb-3 ml-4">
                    <a href="{{ route('backsite.dashboard-penjualan.create') }}" class="btn btn-info"> <i class="fas fa-plus"></i> Tambah Data</a>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h4>Penjualan</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped" id="table-1">
                            <thead>                                 
                                <tr>
                                    <th>
                                        No
                                    </th>
                                    <th>Nama Barang</th>
                                    <th>Stok</th>
                                    <th>Jumlah Terjual</th>
                                    <th>Tanggal Transaksi</th>
                                    <th>Jenis Barang</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>                                 
                                @foreach ($data as $item)
                                    <tr>
                                        <td>
                                            {{ $item->id }}
                                        </td>
                                        <td>{{ $item->nama_barang }}</td>
                                        <td>{{ $item->stok }}</td>
                                        <td>{{ $item->jumlah_terjual }}</td>
                                        <td>{{ $item->tanggal_transaksi }}</td>
                                        <td>{{ $item->jenis_barang }}</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="{{ route('backsite.dashboard-penjualan.edit', $item->id) }}" class="btn btn-warning mr-1">Edit</a>
                                                <form action="{{ route('backsite.dashboard-penjualan.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Are you sure want to delete this data ?');">
                                                @method('delete')
                                                @csrf
                                                    <button  type="submit" class="btn btn-danger">Delete</a>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@push('after-script')
<script>
    $(document).ready(function() {
        $('#table-1').DataTable();
    });
</script>
@endpush