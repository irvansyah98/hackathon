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
        <form action="{{ url('/backend/users/'.$data->id) }}" method="post" enctype="multipart/form-data">
          {{ csrf_field() }}
          <input type="hidden" name="_method" value="PUT">

          <div class="box-body">
            <div class="row">
              <div class="col-md-8">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="fullname">Nama Lengkap</label>
                      <input type="text" class="form-control" name="fullname" placeholder="Nama Lengkap" value="{{ $data->fullname }}" required>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="email" class="form-control" name="email" id="email" placeholder="Email" value="{{ $data->email }}" required>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="password">Password <small>(optional)</small></label>
                      <input type="password" class="form-control" name="password" id="password" placeholder="Password">
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
                      <label for="city">Kota</label>
                      <input type="text" class="form-control" name="city" placeholder="Kota" value="{{ $data->city }}" required>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="address">Alamat</label>
                      <textarea name="address" class="form-control" placeholder="Alamat" required>{{ $data->address }}</textarea>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="no_telp">No Telp</label>
                      <input type="text" class="form-control" name="no_telp" placeholder="No Telp" value="{{ $data->no_telp }}" required>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="role">Role</label>
                      <select name="role" class="form-control">
                        @if($data->role == 'Admin')
                          <option value="Admin" selected>Admin</option>
                        @else
                          <option value="Admin">Admin</option>
                        @endif
                        @if($data->role == 'Member')
                          <option value="Member" selected>Member</option>
                        @else
                          <option value="Member">Member</option>
                        @endif
                      </select>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="box-footer text-center">
            <a href="{{ url('/backend/users') }}" class="btn btn-warning">Cancel</a>
            <button type="submit" name="submit" class="btn btn-success">Save</button>
          </div>
        </form>
      </div>
    </section>
  </div>
@stop
