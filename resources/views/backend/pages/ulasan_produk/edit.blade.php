@extends('backend.master')

@section('content')
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        New Data Users
      </h1>
    </section>

    <section class="content">
      <div class="box">
        <form action="{{ url('/backend/ulasan_produk/'.$data->id) }}" method="post">
          {{ csrf_field() }}
          <input type="hidden" name="_method" value="PUT">

          <div class="box-body">
            <div class="row">
              <div class="col-md-8">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="users_id">Nama</label>
                      <select name="users_id" class="form-control select2" id="users_id">
                        @foreach($users as $item)
                          @if($data->users_id == $item->id)
                            <option value="{{ $item->id }}" selected>{{ $item->fullname }}</option>
                          @else
                            <option value="{{ $item->id }}">{{ $item->fullname }}</option>
                          @endif
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="produk_id">Produk</label>
                      <select name="produk_id" class="form-control select2" id="produk_id">
                        @foreach($produk as $item)
                          @if($data->produk_id == $item->id)
                            <option value="{{ $item->id }}" selected>{{ $item->nama_produk }}</option>
                          @else
                            <option value="{{ $item->id }}">{{ $item->nama_produk }}</option>
                          @endif
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="content">Content</label>
                      <textarea name="content" class="form-control">{{ $data->content }}</textarea>
                    </div>
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
