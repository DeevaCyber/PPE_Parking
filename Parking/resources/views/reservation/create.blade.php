
    @extends('reservation.layout')

    @section('content')
    <div class="row">
      <div class="col-lg-12 margin-tb">
        <div class="pull-left">
          <h2>Ajouter une réservation</h2>
        </div>
      </div>
    </div>

    @if($errors->any())
    <div class="alert alert-danger">
      <strong>ALERTE !</strong><br>
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif

    <form action="{{ route('reservation.store') }}" method="post">
      @csrf

      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
            <strong>Date début de la réservation</strong>
            <input type="date" name="datedebut" class="form-control" >
          </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
            <strong>Date fin de la réservation</strong>
            <input type="date" name="datefin" class="form-control" >
          </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
          <button type="submit" class="btn btn-primary">Valider</button>
        </div>
      </div>
    </form>
    @endsection
