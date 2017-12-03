@extends('backend.master')

@section('content')
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        New Data Kategori
      </h1>
    </section>

    <section class="content">
      <div class="box">
        <form action="{{ url('/backend/kategori') }}" method="post">
          {{ csrf_field() }}
          <div class="box-body">
            <div class="row">
              <div class="col-md-8">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="kategori">Kategori</label>
                      <input type="text" class="form-control" name="kategori" placeholder="Kategori" required>
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
