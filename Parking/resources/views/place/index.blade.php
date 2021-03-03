<!DOCTYPE html>
<html>
  <head>
    <title>Application Parking</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css">
  </head>
  <body>

    @extends('place.layout')

    @section('content')
      <div class="row" style="margin-top: 5rem;">
        <div class="col-lg-12 margin-tb">
          <div class="pull-left">
            <h2>PLace de Parking</h2>
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
        <th>Numéro de la place</th>
        <th width="280px">Action</th>
      </tr>
      @foreach ($data as $key => $value)
      <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $value->codeplace }}</td>
        <td>
          <form action="{{ route('place.destroy', $value->codeplace) }}" method="post">
            <a class="btn btn-info" href="{{ route('place.show', $value->codeplace) }}">Voir</a>
            <a class="btn btn-primary" href="{{ route('place.edit', $value->codeplace) }}">Modifier</a>
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Supprimer</button>
          </form>
        </td>
      </tr>
      @endforeach
    </table>
    {!! $data->links() !!}
    @endsection
  </body>
</html>
