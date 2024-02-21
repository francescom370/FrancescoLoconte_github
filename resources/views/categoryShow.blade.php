<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center display-1 bordi my-5 font-title color-A">Esplora la tua Categoria</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    @forelse($category->announcements as $announcement)                    
                    <div class="col-12 col-md-4 my-4 ">
                        <div class="card" style="width: 18rem;">
                            <img src="https://picsum.photos/200" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title font-title fs-3 bordi">{{$announcement->title}}</h5>
                                <p class="card-text"><span class="fs-5 color-A">Descrizione:</span> {{$announcement->description}}</p>
                                <p class="card-text"><span class="fs-5 color-A">Prezzo:</span> {{$announcement->price}}€</p>
                                <p class="card-text"><span class="fs-5 color-A">Categoria:</span> {{$announcement->category->name}}</p>
                                <p class="card-text"><span class="fs-5 color-A">Data di crezione:</span> {{$announcement->created_at->format('d/m/Y')}}</p>
                              <div class="d-flex justify-content-center">
                                <a href="{{route('announcement.show', compact('announcement'))}}" class="btn btn-warning">Visualizza</a>
                              </div>
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