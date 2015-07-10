<!DOCTYPE html>
<html>
  <head>
    <title>Bootstrap 101 Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <div class="content">
      @if (Session::has('message'))
        <div class="flash alert-info">
          <p>{{ Session::get('message') }}</p>
        </div>
      @endif
      @if ($errors->any())
        <div class='flash alert-danger'>
          @foreach ( $errors->all() as $error )
            <p>{{ $error }}</p>
          @endforeach
        </div>
      @endif
      @yield('content')
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{ asset('/js/jquery-1.11.3.min.js') }}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
  </body>
</html>
