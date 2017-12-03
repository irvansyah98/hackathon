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
        <form action="{{ url('/backend/kategori/'.$data->id) }}" method="post">
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
                            <option value="{{ $item->id }}">{{ $item->fullname }}</option>
                          @endif
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="nama_toko">Nama Toko</label>
                      <input type="text" class="form-control" name="nama_toko" placeholder="Nama Toko" required>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="deskripsi_toko">Deskripsi Toko</label>
                      <textarea name="deskripsi_toko" class="form-control"></textarea>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="location_map">Location Map</label>
                      <div id="location_map" style="width: 500px; height: 400px;margin-bottom: 20px;"></div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="location_lat">Location Latitude</label>
                      <input type="text" class="form-control" name="location_lat" id="location_lat" placeholder="Location Latitude From" readonly required>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="location_long">Location Longitude</label>
                      <input type="text" class="form-control" name="location_long" id="location_long" placeholder="Location Longitude From" readonly required>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="location_name">Location Name</label>
                      <input type="text" class="form-control" name="location_name" id="location_name" placeholder="Location Name From" required>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="location_description">Location Description</label>
                      <input type="text" class="form-control" name="location_description" id="location_description" placeholder="Location Description From" required>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="box-footer text-center">
            <a href="{{ url('/backend/kategori') }}" class="btn btn-warning">Cancel</a>
            <button type="submit" name="submit" class="btn btn-success">Save</button>
          </div>
        </form>
      </div>
    </section>
  </div>
@stop
