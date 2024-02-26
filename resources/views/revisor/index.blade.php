<x-layout>
<div class="container my-5 bordi">
    <div class="row">
        <div class="col-12">
            <h1 class="display-1 text-center font-title">{{$announcement_to_check ? 'Ecco l\'annuncio da rivisionare' : 'Non ci sono annunci'}}</h1>
        </div>
    </div>
</div>
    @if($announcement_to_check)
    <div class="container">
        <div class="row">
            <div class="col-8">
                <div id="ShowCarousel" class="carousel slide carosellopreview" data-bs-ride="carousel">
                    @if ($announcement_to_check-> images)
                    <div class="carousel-inner">
                        @foreach ($announcement_to_check->images as $image)
                        <div class="carousel-item @if($loop->first)active @endif">
                            <img src="{{Storage::url($image->path)}}" class="img-fluid p-3 roundend" alt="...">
                        </div>
                        @endforeach
                    </div>
                    @else
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://picsum.photos/200" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://picsum.photos/202" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://picsum.photos/203" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    @endif
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-4">
                <div class="card" style="width: 25rem;">
                    <div class="card-body">
                        <h5 class="card-title font-title fs-3 bordi">{{$announcement_to_check->title}}</h5>
                        <p class="card-text"><span class="fs-5">{{__('ui.Descrizione')}}:</span> {{$announcement_to_check->description}}</p>
                        <p class="card-text"><span class="fs-5">{{__('ui.Prezzo')}}:</span> {{$announcement_to_check->price}}€</p>
                        <p class="card-text"><span class="fs-5">{{__('ui.Categoria')}}:</span> {{$announcement_to_check->category->name}}</p>
                        <p class="card-text"><span class="fs-5">{{__('ui.Data')}}:</span> {{$announcement_to_check->created_at->format('d/m/Y')}}</p>
                        <!-- <p class="card-text"><span class="fs-5">{{__('ui.Venditore')}}:</span> {{$announcement_to_check->name}}</p> -->
                        <form action="{{route('revisor.accept_announcement',['announcement'=>$announcement_to_check])}}" method="POST">
                             @csrf
                             @method('PATCH')
                            <button type="submit" class="btn btn-success my-2">
                             Accetta
                            </button>
                        </form>                         
                        <form action="{{route('revisor.reject_announcement',['announcement'=>$announcement_to_check])}}" method="POST">
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="btn btn-danger my-2 ">
                            Rifiuta
                            </button>
                        </form>
                    </div>
                </div>
            </div> 
        </div>        
    </div>
    @endif            
</x-layout>