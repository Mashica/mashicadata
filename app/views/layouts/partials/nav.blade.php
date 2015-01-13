 <div class="container">

  <!-- Static navbar -->
  <nav class="navbar navbar-default navbar-inverse" role="navigation">
    <div class="container-fluid">
      <div class="navbar-header">
       <!--  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button> -->
        {{ link_to_route('home', 'Mashica Sport Data', $parameters = array(), $attributes = ['class' => 'navbar-brand']) }}
      </div>
      <div id="navbar" class="navbar-collapse">
        <ul class="nav navbar-nav">
          <!-- <li class="active">{{ link_to_route('home', 'Home', $parameters = array(), $attributes = []); }}</li> -->
          <!-- <li><a href="#">About</a></li> -->
          <!-- <li><a href="#">Contact</a></li> -->
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Atletas <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li>{{ link_to_route('users.create', 'Nueva Cuenta de Atleta', $parameters = array(), $attributes = []); }}</li>
              <li class="divider"></li>

              @if ($users->count())

                <li><a href="/users">Todos</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Atletas Activos</li>
                

                @foreach ($users as $user)
                  <li>{{ link_to("/users/{$user->username}", $user->name . " " . $user->lastname) }}</li>
                @endforeach

              @else

                <li>...</li>

              @endif

            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Captura <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
          <!-- list athletes -->    
              <li class="dropdown-header">Salud</li>
              <li>{{ link_to_route('peso.index', 'Peso', $parameters = array(), $attributes = array()) }}</li>
              <li class="divider"></li>
              <li class="dropdown-header">Pruebas</li>
              <li><a href="#">MAF</a></li>
              <li><a href="#">Viguera-Muro</a></li>
<!--               <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li class="divider"></li>
              <li class="dropdown-header">Carreras</li>
              <li><a href="#">Separated link</a></li>
              <li><a href="#">One more separated link</a></li>
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li><a href="#">Separated link</a></li>
              <li><a href="#">One more separated link</a></li>
 -->          <!-- En Prueba list -->
            </ul>
          </li>
        </ul>
        <p class="navbar-text navbar-right"><a href="/logout" class="navbar-link">Cerrar sesión</a> | <a href="/users/{{ Auth::user()->username }}" class="navbar-link">{{ Auth::user()->name . " " . Auth::user()->lastname }}</a></p>
        
        <!-- <ul class="nav navbar-nav navbar-right">
          <li class="active"><a href="./">Default <span class="sr-only">(current)</span></a></li>
          <li><a href="../navbar-static-top/">Static top</a></li>
          <li><a href="../navbar-fixed-top/">Fixed top</a></li>
        </ul> -->

      </div><!--/.nav-collapse -->
    </div><!--/.container-fluid -->
  </nav>
</div>
