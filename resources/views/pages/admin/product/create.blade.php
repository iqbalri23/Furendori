@extends('layouts.admin')

@section('title')
      Admin Furendori - Produk
@endsection

@section('content')

<div
  class="section-content section-dashboard-home"
  data-aos="fade-up"
>
  <div class="container-fluid">
    <div class="dashboard-heading">
        <h2 class="dashboard-title">Produk</h2>
        <p class="dashboard-subtitle">
            Buat Produk Baru
        </p>
    </div>
    <div class="dashboard-content">
      <div class="row">
        <div class="col-12">
          @if ($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif
          <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Nama Produk</label>
                      <input type="text" class="form-control" name="name" required />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Pemilik Produk</label>
                      <select name="users_id" class="form-control">
                        @foreach ($users as $user)
                          <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Kategori Produk</label>
                      <select name="categories_id" class="form-control">
                        @foreach ($categories as $category)
                          <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Harga Produk</label>
                      <input type="number" class="form-control" name="price" required />
                    </div>
                  </div>
                   <div class="col-md-12">
                    <div class="form-group">
                      <label>Harga Diskon</label>
                      <input type="number" class="form-control" name="price_discount"/>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Deskripsi Produk</label>
                      <textarea type="number" id="editor" name="description"/></textarea>
                    </div>
                  </div>
                </div>  
                <div class="row">
                  <div class="col text-right">
                    <button
                      type="submit"
                      class="btn btn-success px-5"
                    >
                      Simpan
                    </button>
                  </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@push('addon-script')
  <script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
    <script>
      CKEDITOR.replace('editor');
    </script>
@endpush