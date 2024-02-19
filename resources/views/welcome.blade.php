<x-layout>
    
    <div class="d-flex justify-content-center">
       
        
    </div>
    <div class="container my-5 ">
        <div class="row">
            @foreach ($announcements as $announcement)
            <div class="col-12 col-md-4 my-4 ">
                <div class="card" style="width: 18rem;">
                    <img src="https://picsum.photos/200" class="card-img-top" alt="pic">
                    <div class="card-body ">
                        <h5 class="card-title font-title fs-3 bordi">{{$announcement->title}}</h5>
                        <p class="card-text">Descrizione: {{$announcement->description}}</p>
                        <p class="card-text">Prezzo: {{$announcement->price}}€</p>
                        <p class="card-text">Categoria: 
                            @if ($announcement->category)
                            {{ $announcement->category->name }}
                            @else
                            <h2> Categoria non disponibile</h2>
                            @endif
                        </p>
                        <p class="card-text">Data di crezione: {{$announcement->created_at->format('d/m/Y')}}</p>
                        <div class="d-flex justify-content-center">
                            <a href="{{route('announcement.show', compact('announcement'))}}" class="btn btn-warning">Visualizza</a>
                            
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            
        </div>
    </div>
    
</x-layout>