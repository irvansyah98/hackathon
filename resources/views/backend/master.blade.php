<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>BangJas - Administrator</title>
    @section('css')
      <link href="https://fonts.googleapis.com/css?family=Hind:300,400,500,700" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="{{ url('vendor/bootstrap/css/bootstrap.min.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ url('vendor/slick/slick.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ url('vendor/slick/slick-theme.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ url('vendor/materialdesignicons/css/materialdesignicons.min.css') }}">
      <link rel="stylesheet" href="{{ url('css/font-awesome.min.css') }}">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
      <link rel="stylesheet" href="{{ url('vendor/highcharts-editor/highcharts-editor.min.css') }}">
      <link rel="stylesheet" href="{{ url('vendor/adminlte/plugins/select2/select2.min.css') }}">
      <link rel="stylesheet" href="{{ url('vendor/adminlte/plugins/iCheck/flat/blue.css') }}">
      <link rel="stylesheet" href="{{ url('vendor/adminlte/plugins/morris/morris.css') }}">
      <link rel="stylesheet" href="{{ url('vendor/adminlte/plugins/select2/select2.min.css') }}">
      <link rel="stylesheet" href="{{ url('vendor/adminlte/plugins/jvectormap/jquery-jvectormap-1.2.2.css') }}">
      <link rel="stylesheet" href="{{ url('vendor/adminlte/plugins/datepicker/datepicker3.css') }}">
      <link rel="stylesheet" href="{{ url('vendor/adminlte/plugins/daterangepicker/daterangepicker.css') }}">
      <link rel="stylesheet" href="{{ url('vendor/adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">
      <link rel="stylesheet" href="{{ url('vendor/adminlte/plugins/datatables/dataTables.bootstrap.css') }}">
      <link rel="stylesheet" href="{{ url('/vendor/jquery-steps/demo/css/jquery.steps.css') }}" type="text/css">
      <link rel="stylesheet" href="{{ url('vendor/adminlte/css/AdminLTE.min.css') }}">
      <link rel="stylesheet" href="{{ url('vendor/adminlte/css/skins/_all-skins.min.css') }}">
    @show

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition skin-blue-light sidebar-mini">
    @include('backend.partials.header')
    @include('backend.partials.sidemenu')

    <div class="wrapper">
      @yield('content')
    </div>

    @include('backend.partials.footer')

    @section('js')
      <script type="text/javascript" src="{{ url('js/jquery.min.js') }}"></script>
      <script type="text/javascript" src="{{ url('js/jquery.form.js') }}"></script>
      <script type="text/javascript" src="{{ url('js/jquery.MetaData.js') }}"></script>
      <script type="text/javascript" src="{{ url('js/jquery.MultiFile.js') }}"></script>
      <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
      <script>
        $.widget.bridge('uibutton', $.ui.button);
      </script>
      <script type="text/javascript" src="{{ url('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
      <script type="text/javascript" src="{{ url('vendor/bootstrap-notify/bootstrap-notify.min.js') }}"></script>
      <script type="text/javascript" src="{{ url('vendor/slick/slick.min.js') }}"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
      <!-- Select2 -->
      <script src="{{ url('vendor/adminlte/plugins/select2/select2.min.js') }}"></script>
      <script src="{{ url('vendor/adminlte/plugins/morris/morris.min.js') }}"></script>
      <script src="{{ url('vendor/adminlte/plugins/datatables/jquery.dataTables.min.js') }}"></script>
      <script src="{{ url('vendor/adminlte/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
      <script src="{{ url('vendor/adminlte/plugins/sparkline/jquery.sparkline.min.js') }}"></script>
      <!-- jQuery Knob Chart -->
      <script src="{{ url('vendor/adminlte/plugins/knob/jquery.knob.js') }}"></script>
      <!-- AdminLTE App -->
      <script src="{{ url('vendor/adminlte/js/app.min.js') }}"></script>
      <script type="text/javascript" src='http://maps.google.com/maps/api/js?libraries=places&key=AIzaSyAmal82_aZU_oMgsq9tIiPQ7mtalKXfwQ4'></script>
      <script type="text/javascript" src="{{ url('vendor/locationpicker/locationpicker.jquery.min.js') }}"></script>
      <script type="text/javascript" src="{{ url('vendor/highcharts/code/highcharts.src.js') }}"></script>
      <script type="text/javascript">
        $(document).ready(function(){
          $(".select2").select2();

          $('.upload').click(function(){
            $('.user-photo input[type="file"]').click();
              return false;
          });

          function readURL(input) {
              if (input.files && input.files[0]) {
                  var reader = new FileReader();

                  reader.onload = function (e) {
                      $('#preview-image').attr('src', e.target.result);
                      $('#photo').val(e.target.result);
                  }

                  reader.readAsDataURL(input.files[0]);
              }
          }

          $("#image").change(function(){
              if (window.File && window.FileReader && window.FileList && window.Blob) {
                  //get the file size and file type from file input field
                  var fsize = $(this)[0].files[0].size;

                  if(fsize > 1048576) { //do something if file size more than 1 MB (1048576)
                      alert("Ukuran file terlalu besar");
                      $(this).val('');
                  }else {
                      $("#preview-image").css('opacity','1');
                      readURL(this);
                  }
              }else{
                  alert("Silahkan upgrade browser untuk untuk mendapatkan fitur validasi file max size");
                  $("#preview-image").css('opacity','1');
                  readURL(this);
              }
          });
        });
      </script>
    @show

    @if (session('message'))
      <script type="text/javascript">
        $(document).ready(function() {

          $.notify({
            title: "<strong>{{ session('message')['title'] }}</strong> ",
            message: "{{ session('message')['msg'] }}",
          },{
            type: "{{ session('message')['type'] }}",
            placement: {
          		from: "top",
          		align: "right",
          	},
          });
        });
      </script>
    @endif
  </body>
</html>
