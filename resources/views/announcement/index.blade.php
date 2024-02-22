<x-layout>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center display-1 bordi my-5 font-title">Annunci</h1>
        </div>
    </div>
</div>
<div class="container">
    <div class="row"> 
        @foreach ($announcements as $announcement)
            <div class="col-12 col-md-6 col-lg-4 my-3 d-flex justify-content-center">
                <div class="card" style="width: 20rem;">
                    <img src="https://picsum.photos/200" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title font-title fs-3 bordi">{{$announcement->title}}</h5>
                        <p class="card-text"><span class="fs-5">Descrizione:</span> {{$announcement->description}}</p>
                        <p class="card-text"><span class="fs-5">Prezzo:</span> {{$announcement->price}}€</p>
                        <p class="card-text"><span class="fs-5">Categoria:</span> {{$announcement->category->name}}</p>
                        <p class="card-text"><span class="fs-5">Data di crezione:</span> {{$announcement->created_at->format('d/m/Y')}}</p>
                        <div class="d-flex justify-content-center">
                            <a href="{{route('announcement.show', compact('announcement'))}}" class="btn btn-warning">Visualizza</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        {{$announcements->links()}}
    </div>
</div>  








</x-layout>