{{-- <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Presto.it</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('welcome')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('announcement.index')}}">Annunci</a>
        </li>
        <li class="nav-item-dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="categoriesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="fasle">Categorie</a>
         <ul class="dropdown-menu" area-labelledby="categoriesDropdown">
          @foreach ($categories as $category)
          <li><a href="{{route('categoryShow', compact('category'))}}" class="dropdown-item">{{($category->name)}}</a></li>
          <li><hr class="dropdown-divider"></li>
          @endforeach
          </ul>
        </li>
        @guest
        <li class="nav-item">
          <a class="nav-link" href="{{route('register')}}">Registrati</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('login')}}">Accedi</a>
        </li>
            @else
            <a class="nav-link active" aria-current="page" href="{{route('announcement.create')}}">Inserisci annuncio</a>
            <div class="d-flex">
              <li class="nav-item">
                <a class="nav-link" href="">Benvenuto: <i class="bi bi-person-fill fs-6"></i>{{Auth::user()->name}}</a>
              </li>
             
              <form action="{{route('logout')}}" method="POST">
                @csrf
                <button class="btn btn-danger">Esci
                  <i class="bi bi-box-arrow-right"></i>
                </button>
              </form>
            </div>
          </ul>
          @endguest
    </div>
  </div>
</nav> --}}


 <nav  class="navbar navCust  navbar-expand-lg" data-bs-theme="dark">
  
      <div class="container-fluid">
        {{-- <img class="LogoPanda" src="./immagini/LogoPanda.svg" alt="LogoPanda">  --}}
        <a class="navbar-brand ms-2" href="#">Presto.it</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{route('welcome')}}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{route('announcement.index')}}">Annunci</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Categorie
              </a>

              <ul class="dropdown-menu">
                @foreach ($categories as $category)
                <li><a href="{{route('categoryShow', compact('category'))}}" class="dropdown-item">{{($category->name)}}</a></li>
                <li><hr class="dropdown-divider"></li>
                @endforeach
                {{-- <li><a class="dropdown-item" href="#">Accessori</a></li>
                <li><a class="dropdown-item" href="#">Arredamento</a></li>
                <li><a class="dropdown-item" href="#">Musica</a></li>
                <li><a class="dropdown-item" href="#">Reliquia</a></li>
                <li><a class="dropdown-item" href="#">Gioielli</a></li> --}}
              </ul>
            </li>
           
            @Auth
            <a class="nav-link active" aria-current="page" href="{{route('announcement.create')}}">Inserisci annuncio</a>
            @endAuth
            {{-- <li class="nav-item dropdown">
              <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Prodotti
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="./prodotti.html">Lista Prodotti</a></li>
                <li><a class="dropdown-item" href="#">Novità</a></li>
                <li><a class="dropdown-item" href="#">Best Seller</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Prodotti in sconto</a></li>
              </ul>
            </li> --}}
            {{-- <li class="nav-item">
              <a class="nav-link active" href="#">Chi siamo</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#">Contatti</a>
            </li>             --}}
          </ul>
          <ul class="navbar-nav">
            @guest
            <li class="nav-item">
              <a class="nav-link" href="{{route('register')}}">Registrati</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('login')}}">Accedi</a>
            </li>
                @else
                
                <div class="d-flex">
                  <li class="nav-item">
                    <a class="nav-link" href="">Benvenuto: <i class="bi bi-person-fill fs-6"></i>{{Auth::user()->name}}</a>
                  </li>
                 
                  <form action="{{route('logout')}}" method="POST">
                    @csrf
                    <button class="btn btn-danger">
                      <i class="bi bi-box-arrow-right"></i>
                    </button>
                  </form>
                </div>
              </ul>
              @endguest
            {{-- <li class="nav-item mx-3">
              <a class="nav-link active p-0" href="#"><i class="bi bi-person-fill fs-4"></i></a>
            </li>
            <li class="nav-item mx-3">
              <a class="nav-link active p-0" href="#"><i class="bi bi-cart3 fs-4"></i></a>
            </li> --}}
          </ul>
        </div>
      </div>
    </nav>     