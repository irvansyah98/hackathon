@extends('backend.master')

@section('content')
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Master Data Kategori
        <small>List table</small>
      </h1>
    </section>

    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Table Data</h3
        </div>
        <div class="box-body">
          <a href="{{ url('/backend/kategori/create') }}" class="btn btn-success pull-right">Create New</a>
          <div class="clearfix"></div>
          <br>
          <table id="table" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>ID</th>
                <th>Kategori</th>
                <th>&nbsp;</th>
              </tr>
            </thead>
            <tbody>
              @foreach($data as $item)
                <tr>
                  <td>{{ $item->id }}</td>
                  <td>{{ $item->kategori }}</td>
                  <td width="150">
                    <form action="{{ url('backend/kategori/'.$item->id) }}" method="post">
                      {{ csrf_field() }}
                      <input type="hidden" name="_method" value="DELETE">
                      <a href="{{ url('backend/kategori/'.$item->id.'/edit') }}" class="btn btn-info"><i class="fa fa-pencil"></i> Edit</a>
          						<button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i> Delete</button>
                    </form>
                  </td>
                </tr>
              @endforeach
            </tbody>
            <tfoot>
              <tr>
                <th>ID</th>
                <th>Kategori</th>
                <th>&nbsp;</th>
              </tr>
            </tfoot>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

    </section>
  </div>
@endsection

@section('js')
  @parent
  <script type="text/javascript">
    $(document).ready(function(){
      $('#table').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": false,
        "info": true,
        "autoWidth": false
      });
    });
  </script>
@endsection
