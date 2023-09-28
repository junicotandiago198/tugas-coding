@extends('layouts.app') @section('title', 'Edit Penjualan Barang') @section('content')
<!-- Main Content -->
<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Edit Penjualan Barang</h1>
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
              <form action="{{ route('backsite.dashboard-barang.update', $data->id) }}" method="POST">
                @method('put')
                @csrf
                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Barang</label>
                  <div class="col-sm-12 col-md-7">
                    <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $data->name) }}" required />
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                  </div>
                </div>

                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Category</label>
                  <div class="col-sm-12 col-md-7">
                    <select name="id_category" class="form-control selectric">
                      <option value="{{ $data->id_category }}" selected disabled>{{ $data->category->name }}</option>
                      @foreach ($categories as $item)
                          <option value="{{ $item->id }}">{{ $item->name }}</option>
                      @endforeach
                      @error('id_category')
                          <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </select>
                  </div>
                </div>

                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Stok</label>
                  <div class="col-sm-12 col-md-7">
                    <input type="number" name="stok" id="stok" class="form-control @error('stok') is-invalid @enderror" value="{{ old('stok', $data->stok) }}" required />
                    @error('stok')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                    @enderror
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

@push('after-script')
  <script>
    const name = document.querySelector('#name');
    const slug = document.querySelector('#slug');

    name.addEventListener('change', function() {
      fetch('/backsite/category/checkSlug?name=' + name.value)
      .then(response => response.json())
      .then(data => slug.value = data.slug)
    });
  </script>
@endpush