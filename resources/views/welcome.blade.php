<x-layout>
 <h1 class="text-center">Ciao </h1>
    <form action="{{route('announcement.create')}}"  method="GET">
     @csrf
        <button class="btn btn-danger">Inserisci Articolo
        <i class="bi bi-box-arrow-right"></i>
        </button>
    </form>
    <div class="container">
        <div class="row">
            @foreach ($announcements as $announcement)
            <div class="col-12 col-md-4 my-4">
                <div class="card" style="width: 18rem;">
                    <img src="https://picsum.photos/200" class="card-img-top" alt="pic">
                    <div class="card-body">
                        <h5 class="card-title">{{$annoucement->title}}</h5>
                        <p class="card-text">{{$annoucement->description}}</p>
                        <p class="card-text">{{$annoucement->price}}</p>
                        <p class="card-text">{{$annoucement->category->name}}</p>
                        <p class="card-text">{{$annoucement->created_at->format('d/m/Y')}}</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                        <a href="{{ route('announcements.show', $announcement) }}" class="btn btn-warning">Visualizza</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-layout>