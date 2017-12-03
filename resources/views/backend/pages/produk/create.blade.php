@extends('backend.master')

@section('content')
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        New Data Produk
      </h1>
    </section>

    <section class="content">
      <div class="box">
        <form action="{{ url('/backend/produk') }}" method="post" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="box-body">
            <div class="row">
              <div class="col-md-8">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="users_id">Nama Pemilik Toko</label>
                      <select name="users_id" class="form-control select2" id="users_id">
                        @foreach($users as $item)
                          <option value="{{ $item->id }}">{{ $item->fullname }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="kategori_id">Kategori</label>
                      <select name="kategori_id" class="form-control select2" id="kategori_id">
                        @foreach($kategori as $item)
                          <option value="{{ $item->id }}">{{ $item->kategori }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="toko_id">Nama Toko</label>
                      <select name="toko_id" class="form-control select2" id="toko_id">
                        @foreach($toko as $item)
                          <option value="{{ $item->id }}">{{ $item->nama_toko }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="jenis_produk">Jenis Produk</label>
                      <input type="text" class="form-control" name="jenis_produk" placeholder="Jenis Produk" required>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="nama_produk">Nama Produk</label>
                      <input type="text" class="form-control" name="nama_produk" placeholder="Nama Produk" required>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="user-photo">
                      <input type="file" name="image" accept="image/*" id="image">
                      <input type="hidden" name="photo" id="photo">
                      <div class="text-center">Image</div>
                      <div class="upload">
                        <div class="upload-content">
                          <img src="{{ url('/img/default.jpg') }}" id="preview-image" class="img-responsive">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="deskripsi">Deskripsi</label>
                      <textarea name="deskripsi" class="form-control"></textarea>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="box-footer text-center">
            <a href="{{ url('/backend/produk') }}" class="btn btn-warning">Cancel</a>
            <button type="submit" name="submit" class="btn btn-success">Save</button>
          </div>
        </form>
      </div>
    </section>
  </div>
@stop
