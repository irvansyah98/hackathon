@extends('backend.master')

@section('content')
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        New Data Toko
      </h1>
    </section>

    <section class="content">
      <div class="box">
        <form action="{{ url('/backend/ulasan_produk') }}" method="post">
          {{ csrf_field() }}
          <div class="box-body">
            <div class="row">
              <div class="col-md-8">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="users_id">Nama</label>
                      <select name="users_id" class="form-control select2" id="users_id">
                        @foreach($users as $item)
                          <option value="{{ $item->id }}">{{ $item->fullname }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="produk_id">Produk</label>
                      <select name="produk_id" class="form-control select2" id="produk_id">
                        @foreach($produk as $item)
                          <option value="{{ $item->id }}">{{ $item->nama_produk }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="content">Content</label>
                      <textarea name="content" class="form-control"></textarea>
                    </div>
                  </div>
              </div>
            </div>
          </div>
          <div class="box-footer text-center">
            <a href="{{ url('/backend/ulasan_produk') }}" class="btn btn-warning">Cancel</a>
            <button type="submit" name="submit" class="btn btn-success">Save</button>
          </div>
        </form>
      </div>
    </section>
  </div>
@stop