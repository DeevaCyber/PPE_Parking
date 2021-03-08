
    @extends('user.layout')

    @section('content')
      <div class="row" style="margin-top: 5rem;">
        <div class="col-lg-12 margin-tb">
          <div class="pull-left">
            <h2>Liste des utilisateurs</h2>
        </div>
        <div class="pull-right">
          <a class="btn btn-success" href="{{route('user.create')}}">Création d'un utilisateur</a>
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
        <th>Nom</th>
        <th>Mail</th>
        <th width="280px">Action</th>
      </tr>
      @foreach ($user as $user)
      <tr>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>
          <form action="{{ route('user.destroy', $user->id) }}" method="post">
            <a class="btn btn-info" href="{{ route('user.show', $user->id) }}">Voir</a>
            <a class="btn btn-primary" href="{{ route('user.edit', $user->id) }}">Modifier</a>
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Supprimer</button>
          </form>
        </td>
      </tr>
      @endforeach
    </table>

    @endsection
