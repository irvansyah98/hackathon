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
        <form action="{{ url('/backend/users') }}" method="post" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="box-body">
            <div class="row">
              <div class="col-md-8">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="fullname">Nama Lengkap</label>
                      <input type="text" class="form-control" name="fullname" placeholder="Nama Lengkap" required>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="password">Password</label>
                      <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
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
                      <label for="city">Kota</label>
                      <input type="text" class="form-control" name="city" placeholder="Kota" required>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="address">Alamat</label>
                      <textarea name="address" class="form-control" placeholder="Alamat" required></textarea>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="no_telp">No Telp</label>
                      <input type="text" class="form-control" name="no_telp" placeholder="No Telp" required>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="role">Role</label>
                      <select name="role" class="form-control">
                        <option value="Admin">Admin</option>
                        <option value="Member">Member</option>
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
