<!DOCTYPE html>
<html>
  <head>
    <title>Application Parking</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css">
  </head>
  <body>

    @extends('place.layout')

    @section('content')
    <div class="row">
      <div class="col-lg-12 margin-tb">
        <div class="pull-left">
          <h2>Place</h2>
        </div>
        <div class="pull-right">
          <a class="btn btn-primary" href="{{ route('place.index') }}">Retour</a>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
          <strong>Nom de la place:</strong>
          {{ $place->codeplace }}
        </div>
      </div>
    </div>
    @endsection

  </body>
</html>
