
    @extends('place.layout')

    @section('content')
    <div class="row">
      <div class="col-lg-12 margin-tb">
        <div class="pull-left">
          <h2>Ajouter une place</h2>
        </div>
        <div class="pull-right">
          <a class="btn btn-primary" href="{{ route('place.index') }}">Retour</a>
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

    <form action="{{ route('place.store') }}" method="post">
      @csrf

      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
            <strong>Nom de la place</strong>
            <input type="text" name="codeplace" class="form-control" placeholder="ENTREZ LE NOM">
          </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
          <button type="submit" class="btn btn-primary">Valider</button>
        </div>
      </div>
    </form>
    @endsection
