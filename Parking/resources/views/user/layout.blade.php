<!DOCTYPE html>
<html>
  <head>
    <title>Application Parking</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css">
  </head>
  <body>

    @section('content')
    <div class="row">
      <div class="col-lg-12 margin-tb">
        <div class="pull-left">
        </div>
        <div class="pull-right">
          <a class="btn btn-primary" href="{{ route('user.index') }}">Liste des utilisateurs</a>
        </div>

        <div class="pull-right">
          <a class="btn btn-primary" href="{{ route('place.index') }}">Liste des places</a>
        </div>
      </div>
    </div>

    <div class="container">
        @yield('content')
    </div>


  </body>
</html>
