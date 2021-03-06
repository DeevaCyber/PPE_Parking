
    @extends('place.layout')

    @section('content')
      <div class="row" style="margin-top: 5rem;">
        <div class="col-lg-12 margin-tb">
          <div class="pull-left">
            <h2>Place de Parking</h2>
        </div>
        <div class="pull-right">
          <a class="btn btn-success" href="{{route('place.create')}}">Création d'une place</a>
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
        <th>Place n°</th>
        <th>Nom</th>
        <th width="280px">Action</th>
      </tr>
      @foreach ($place as $place)
      <tr>
        <td>{{ $place->id }}</td>
        <td>{{ $place->codeplace }}</td>
        <td>
          <form action="{{ route('place.destroy', $place->id) }}" method="post">
            <a class="btn btn-info" href="{{ route('place.show', $place->id) }}">Voir</a>
            <a class="btn btn-primary" href="{{ route('place.edit', $place->id) }}">Modifier</a>
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Supprimer</button>
          </form>
        </td>
      </tr>
      @endforeach
    </table>

    @endsection
