<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">Esplora la tua Categoria</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    @forelse($category->announcements as $annoucement)                    
                    <div class="col-12 col-md-4 my-4 ">
                        <div class="card" style="width: 18rem;">
                            <img src="https://picsum.photos/200" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{$annoucement->title}}</h5>
                                <p class="card-text">{{$annoucement->description}}</p>
                                <p class="card-text">{{$annoucement->price}}</p>
                                <p class="card-text">{{$annoucement->category->name}}</p>
                                <p class="card-text">{{$annoucement->created_at->format('d/m/Y')}}</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                                <a href="" class="btn btn-warning">Visualizza</a> 
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="col-12">
                        <p>Non sono presenti annunci per questa categoria</p>
                        <p>Pubblicane uno: <a href="{{route('announcement.create')}}" class="btn btn-warning">Nuovo annuncio</a></p>
                    </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div> 
</x-layout>