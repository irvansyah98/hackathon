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
        <form action="{{ url('/backend/produk/'.$data->id) }}" method="post" enctype="multipart/form-data">
          {{ csrf_field() }}
          <input type="hidden" name="_method" value="PUT">

          <div class="box-body">
            <div class="row">
              <div class="col-md-8">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="users_id">Nama Pemilik Toko</label>
                      <select name="users_id" class="form-control select2" id="users_id">
                        @foreach($users as $item)
                          @if($data->users_id == $item->id)
                            <option value="{{ $item->id }}" selected>{{ $item->fullname }}</option>
                          @else
                            <option value="{{ $item->id }}" selected>{{ $item->fullname }}</option>
                          @endif
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="kategori_id">Kategori</label>
                      <select name="kategori_id" class="form-control select2" id="kategori_id">
                        @foreach($kategori as $item)
                          @if($data->kategori_id == $item->id)
                            <option value="{{ $item->id }}" selected>{{ $item->kategori }}</option>
                          @else
                            <option value="{{ $item->id }}">{{ $item->kategori }}</option>
                          @endif
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="toko_id">Nama Toko</label>
                      <select name="toko_id" class="form-control select2" id="toko_id">
                        @foreach($toko as $item)
                          @if($data->toko_id == $item->id)
                            <option value="{{ $item->id }}" selected>{{ $item->nama_toko }}</option>
                          @else
                            <option value="{{ $item->id }}">{{ $item->nama_toko }}</option>
                          @endif
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="jenis_produk">Jenis Produk</label>
                      <input type="text" class="form-control" name="jenis_produk" placeholder="Jenis Produk" value="{{ $data->jenis_produk }}" required>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="nama_produk">Nama Produk</label>
                      <input type="text" class="form-control" name="nama_produk" placeholder="Nama Produk" value="{{ $data->nama_produk }}" required>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="user-photo">
                      <input type="file" name="image" accept="image/*" id="image">
                      <input type="hidden" name="photo" id="photo">
                      <div class="text-center">Image</div>
                      <div class="upload">
                        <div class="upload-content">
                          @if (empty($data->photo))
                            <img src="{{ url('img/default.jpg') }}" id="preview-image">
                          @else
                            @if (file_exists(public_path('img/'.$data->photo)))
                              <img src="{{ url('img/'.$data->photo) }}" id="preview-image" class="img-responsive">
                            @else
                              <img src="{{ url('img/default.jpg') }}" id="preview-image" class="img-responsive">
                            @endif
                          @endif
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="deskripsi">Deskripsi</label>
                      <textarea name="deskripsi" class="form-control">{{ $data->deskripsi }}</textarea>
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
