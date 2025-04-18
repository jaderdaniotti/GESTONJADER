
<nav class="navbar ">
    <div class="container-fluid fs-2 d-flex justify-content-between">

        <button class="btn fs-2 text-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#menuOffCanvas" aria-controls="menuOffCanvas">
            <i class="bi bi-list" ></i>
        </button>
        <h1 class="px-2">GestionJader</h1>
        <button class="btn fs-2 text-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#userOffCanvas" aria-controls="userOffCanvas">
          <i class="bi bi-person-fill"></i>
        </button>
    </div>
  </nav>

  
  <div class="offcanvas offcanvas-start" tabindex="-1" id="menuOffCanvas" aria-labelledby="menuOffCanvasLabel">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <div>
        Some text as placeholder. In real life you can have the elements you have chosen. Like, text, images, lists, etc.
      </div>
      <div class="dropdown mt-3">
        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
          Dropdown button
        </button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Action</a></li>
          <li><a class="dropdown-item" href="#">Another action</a></li>
          <li><a class="dropdown-item" href="#">Something else here</a></li>
        </ul>
      </div>
    </div>
  </div>

  <div class="offcanvas offcanvas-end" tabindex="-1" id="userOffCanvas" aria-labelledby="userOffCanvasLabel">

    @guest
    <div class="offcanvas-header">
      <h2 class="offcanvas-title" id="offcanvasExampleLabel">Accedi <i class="bi bi-person-fill"></i></h2>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body p-0">
        <ul class="p-3">
          <li><a class="text-decoration-none fs-4 text-dark my-1" href="{{route('login')}}">Entra <i class="bi bi-person-fill-check"></i></a>
          </li>
        </ul>
      </div>
      <div class="offcanvas-footer">
        <h6 class="text-center"> GestionJader</h6>
      </div>
    </div>
    @endguest

    @auth
    <div class="offcanvas-header">
      <h2 class="offcanvas-title" id="offcanvasExampleLabel">Area personale <br> <span class="text-user">{{Auth::user()->name}}</span> <i class="bi bi-person-fill"></i></h2>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body p-0">
        <ul class="">
          {{-- @if (Auth::user()->isAdmin)
          <li><a class="text-decoration-none fs-4 text-dark" href="#">Crea utente <i class="bi bi-person-plus"></i></a></li>
          @endif --}}
          <li>
            <a class="text-decoration-none fs-4 text-dark" href="{{route('users.index')}}">Lista utenti <i class="bi bi-people-fill"></i></a>
          </li>
          <li>
            <form action="{{route('logout')}}" method="POST">
              @csrf
              <button class="text-decoration-none fs-4 text-dark border-0 bg-transparent" type="submit">Esci <i class="bi bi-box-arrow-left"></i></a>
            </form>
          </li>
        </ul>
      </div>
      <div class="offcanvas-footer">
        <h6 class="text-center"> GestionJader</h6>
      </div>
    </div>
    @endauth

  </div>