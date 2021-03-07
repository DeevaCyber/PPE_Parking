<!DOCTYPE html>
<html>
  <head>
    <title>Application Parking</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css">
  </head>
  <body>

    @section('content')
    <div class="row">
      <div class="col-lg-12 margin-tb">
        <div class="pull-left">
        </div>
        <div class="pull-right">
          <a class="btn btn-primary" href="{{ route('user.index') }}">Liste des utilisateurs</a>
        </div>

        <div class="pull-right">
          <a class="btn btn-primary" href="{{ route('place.index') }}">Liste des places</a>
        </div>

        <div class="pull-right">
          <form method="POST" action="{{ route('logout') }}">
    @csrf
    <x-jet-dropdown-link href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();">
        {{ __('Logout') }}
    </x-jet-dropdown-link>
</form>
        </div>
      </div>
    </div>

    <h1>Bienvenue, Administrateur</h1>
    <p>Pour voir, modifier ou supprimer un utilisateur, cliquez sur "Liste des utilisateurs"</p>
    <p>Pour voir, modifier ou supprimer une place, cliquez sur "Liste des places"</p>
    <p>Pour voir, modifier ou supprimer une réservation, cliquez sur "Liste des réservations"</p>
  </body>
</html>
