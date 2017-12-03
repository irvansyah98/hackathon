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
        <form action="{{ url('/backend/toko') }}" method="post">
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
          <div class="box-footer text-center">
            <a href="{{ url('/backend/toko') }}" class="btn btn-warning">Cancel</a>
            <button type="submit" name="submit" class="btn btn-success">Save</button>
          </div>
        </form>
      </div>
    </section>
  </div>
@stop
@section('js')
  @parent

  <script type="text/javascript">
    $(document).ready(function(){

      var GeoFrom = {};
      var location_from_lat = "";
      var location_from_long = "";
      if (location_from_lat == '') {
          GeoFrom.lat = -7.2457901;
      }else {
          GeoFrom.lat = location_from_lat;
      }
      if (location_from_long == '') {
          GeoFrom.lng = 112.735386;
      }else {
          GeoFrom.lng = location_from_long;
      }
      $('#location_map').locationpicker({
          location: {latitude: GeoFrom.lat, longitude: GeoFrom.lng},
          radius: 0,
          inputBinding: {
            latitudeInput: $('#location_lat'),
            longitudeInput: $('#location_long'),
            locationNameInput: $('#location_description')
          },
          enableAutocomplete: true,
          oninitialized: function(component) {
            $('#location_name').val("");
            $.getJSON('http://maps.googleapis.com/maps/api/geocode/json', {latlng: GeoFrom.lat+','+GeoFrom.lng, sensor: false}, function(json, textStatus) {
              if (json.status == "OK") {
                var data = json.results[0].address_components;
                $.each(data, function(index, val) {
                  if (val.types[0] != undefined && val.types[0] == 'administrative_area_level_2') {
                    var city_name = val.long_name;
                    if (city_name.indexOf('Kota') == -1) {
                      city_name = 'Kota ' + city_name;
                    }
                    $('#location_name').val(city_name)
                  }
                });
              }
            });
          },
          onchanged: function(currentLocation, radius, isMarkerDropped) {
            $('#location_name').val("");
            $.getJSON('http://maps.googleapis.com/maps/api/geocode/json', {latlng: currentLocation.latitude+','+currentLocation.longitude, sensor: false}, function(json, textStatus) {
              if (json.status == "OK") {
                var data = json.results[0].address_components;
                $.each(data, function(index, val) {
                  if (val.types[0] != undefined && val.types[0] == 'administrative_area_level_2') {
                    var city_name = val.long_name;
                    if (city_name.indexOf('Kota') == -1) {
                      city_name = 'Kota ' + city_name;
                    }
                    $('#location_name').val(city_name)
                  }
                });
              }
            });
          }
      });
    });
  </script>
@endsection