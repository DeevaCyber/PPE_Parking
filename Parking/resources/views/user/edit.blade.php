
    @extends('user.layout')

    @section('content')
    <div class="row">
      <div class="col-lg-12 margin-tb">
        <div class="pull-left">
          <h2>Ajouter un utilisateur</h2>
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

    <form action="{{ route('user.update', $user->id) }}" method="post">
      @csrf
      @method('PUT')

      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
            <strong>Nom de l'utilisateur</strong>
            <input type="text" name="name" value="{{ $user->name }}" class="form-control">
          </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
            <strong>Mail de l'utilisateur</strong>
            <input type="text" name="email" value="{{ $user->email }}" class="form-control">
          </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
            <strong>Not de passe de l'utilisateur</strong>
            <input type="text" name="password" value="{{ $user->password }}" class="form-control">
          </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
            <input type="hidden" name="estadmin" class="form-control" value="0">
          </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
            <input type="hidden" name="estenattente" class="form-control" value="0">
          </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
          <button type="submit" class="btn btn-primary">Valider</button>
        </div>
      </div>
    </form>
    @endsection
