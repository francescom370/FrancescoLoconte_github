
<nav  class="navbar navbar-expand-lg fixed-top  transition" data-bs-theme="dark">
  
  <div class="container-fluid">
    
    <a class="navbar-brand ms-2 " href="{{route('welcome')}}"><img class="imgnav" src="{{ asset('storage/img/imgnav.png') }}" alt="Logo"></a>
    <a class="navbar-brand ms-2 font-title nav-link" href="{{route('welcome')}}">Presto.it</a>
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse ms-lg-5" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
        
        <li class="nav-item ms-lg-5 ">
          <a class="nav-link active ms-lg-5" aria-current="page" href="{{route('announcement.index')}}">Annunci</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categorie
          </a>
          
          <ul class="dropdown-menu">
            @foreach ($categories as $category)
            <li><a href="{{route('categoryShow', compact('category'))}}" class="dropdown-item">{{($category->name)}}</a></li>
            {{-- <li><hr class="dropdown-divider"></li> --}}
            @endforeach
          </ul>
        </li>
        
        @Auth
        <div class="">
          <a class="nav-link active" aria-current="page" href="{{route('announcement.create')}}">Inserisci annuncio</a>
        </div>
        
        @if (Auth::user()->is_revisor)
        <li class="nav-item">
          <a class="nav-link active " aria-current="page" href="{{route('revisor.index')}}">Zona revisore <span class="position-absolute top-0 start-100 translate-middle badge-rounded-pill bg-danger">
            {{App\Models\Announcement::toBeRevisionedCount()}}
            <span class="visually-hidden">Messaggi da leggere</span>
          </span>
        </a>
      </li>
      @endif
      
      @endAuth

      {{-- <div class="d-flex ms-lg-2 bg-info">
        <form class="form-inline my-2 my-lg-0 mr-auto" action="{{route('announcements.search')}}" method="GET">
          @csrf
          <input class="form-control mr-sm-2 " type="search" placeholder="Cerca" aria-label="Cerca" name="searched">
          <button class="btn btn nav-link" type="submit">Cerca</button>
        </form>
      </div> --}}
      <form class="form-inline my-2 my-lg-0 mr-auto ms-3"  action="{{route('announcements.search')}}" method="GET">
        @csrf
        <div class="input-group">
          <input class="form-control mr-sm-2 inputnav" type="search" placeholder="Cerca" aria-label="Cerca" name="searched">
          <button class="btn btn my-2 my-sm-0 ml-2 nav-link" type="submit">Cerca</button>
        </div>
      </form>
    
      
      
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
          <button class="btn  nav-link">
            <i class="bi bi-box-arrow-right"></i>
          </button>
        </form>
      </div>
    </ul>
    @endguest
    
  </ul>
</div>
</div>
</nav>     