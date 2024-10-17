<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/">Inicio</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
          @if(!request()->is('login') && !request()->is('register'))
              <li class="nav-item">
                  <a class="nav-link" href="{{ url('catalog') }}">Catálogo de Películas</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('catalog.create') }}">Añadir Película</a>
              </li>
          @endif
          <!-- Opciones de login y registro siempre visibles -->
          <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">Iniciar Sesión</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="{{ route('register') }}">Registrarme</a>
          </li>
      </ul>
  </div>
</nav>
