<x-layout>

<div class="container my-5">
    <div class="row">
        <div class="col-12 bordi">
            <h1 class="display-1 font-title text-center">{{__('ui.Benvenuti')}}</h1>
        </div>
    </div>
</div>
    @if (session()->has('message'))
        <div class="justify-content-center my-2 alert alert-success text-center">
        {{ session('message') }}
        </div>
    @endif
    <div class="container my-5 ">
        <div class="row">
            @foreach ($announcements as $announcement)
            <div class="col-12 col-md-6 col-lg-4 my-3 d-flex justify-content-center ">
                <div class="card" style="width: 20rem;">
                    <img src="{{!$announcement->images()->get()->isEmpty() ? Storage::url($announcement->images()->first()->path) : 'https:://picsum.photos/200'}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title font-title fs-3 bordi">{{$announcement->title}}</h5>
                        <p class="card-text"><span class="fs-5">{{__('ui.Descrizione')}}:</span> {{$announcement->description}}</p>
                        <p class="card-text"><span class="fs-5">{{__('ui.Prezzo')}}:</span> {{$announcement->price}}€</p>
                        <p class="card-text"><span class="fs-5">{{__('ui.Categoria')}}:</span> {{$announcement->category->name}}</p>
                        <p class="card-text"><span class="fs-5">{{__('ui.Data')}}:</span> {{$announcement->created_at->format('d/m/Y')}}</p>
                        <div class="d-flex justify-content-center">
                            <a href="{{route('announcement.show', compact('announcement'))}}" class="btn btn-warning">{{__('ui.Visualizza')}}</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            
        </div>
    </div>
    
</x-layout>