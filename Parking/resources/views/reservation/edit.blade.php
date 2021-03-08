
    @extends('reservation.layout')

    @section('content')
    <div class="row">
      <div class="col-lg-12 margin-tb">
        <div class="pull-left">
          <h2>Modifier la réservation</h2>
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

    <form action="{{ route('reservation.update', $reservation->id) }}" method="post">
      @csrf
      @method('PUT')

      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
            <strong>Date début de la réservation</strong>
            <input type="date" name="datedebut" value="{{ $reservation->datedebut }}" class="form-control">
          </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
            <strong>Nom de la place</strong>
            <input type="date" name="datefin" value="{{ $reservation->datefin }}" class="form-control">
          </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
          <button type="submit" class="btn btn-primary">Valider</button>
        </div>
      </div>
    </form>
    @endsection
