<nav class="navbar navbar-expand-lg bg-body-tertiary">
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
</nav>
