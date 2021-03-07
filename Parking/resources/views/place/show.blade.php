
    @extends('place.layout')

    @section('content')
    <div class="row">
      <div class="col-lg-12 margin-tb">
        <div class="pull-left">
          <h2>Place</h2>
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
