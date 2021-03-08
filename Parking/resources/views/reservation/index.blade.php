
    @extends('reservation.layout')

    @section('content')
      <div class="row" style="margin-top: 5rem;">
        <div class="col-lg-12 margin-tb">
          <div class="pull-left">
            <h2>Réservation place de Parking</h2>
        </div>
        <div class="pull-right">
          <a class="btn btn-success" href="{{route('reservation.create')}}">Création d'une réservation</a>
        </div>
      </div>
    </div>

    @if ($message = Session::get('success'))
      <div class="alert alert-success">
          <p>{{ $message }}</p>
      </div>
    @endif

    <table class="table table-bordered">
      <tr>
        <th>Réservation n°</th>
        <th>Date de début</th>
        <th>Date de fin</th>
        <th width="280px">Action</th>
      </tr>
      @foreach ($reservation as $reservation)
      <tr>
        <td>{{ $reservation->id }}</td>
        <td>{{ $reservation->datedebut }}</td>
        <td>{{ $reservation->datefin }}</td>
        <td>
          <form action="{{ route('reservation.destroy', $reservation->id) }}" method="post">
            <a class="btn btn-info" href="{{ route('reservation.show', $reservation->id) }}">Voir</a>
            <a class="btn btn-primary" href="{{ route('reservation.edit', $reservation->id) }}">Modifier</a>
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Supprimer</button>
          </form>
        </td>
      </tr>
      @endforeach
    </table>

    @endsection
