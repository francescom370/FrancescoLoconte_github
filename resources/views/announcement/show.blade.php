<x-layout>
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center display-1 bordi my-5 font-title">{{__('ui.Ann')}}: {{$announcement->title}}</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-8 d-flex justify-content-center align-items-center ">
               
                <div class="card " style="width: 35rem;">
                    <div id="carouselExample" class="carousel slide">
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
        </div>
        <div class="col-4"><div class="card" style="width: 30rem;">
                    <div class="card-body">
                        <h5 class="card-title font-title fs-3 bordi">{{$announcement->title}}</h5>
                        <p class="card-text"><span class="fs-5">{{__('ui.Descrizione')}}:</span> {{$announcement->description}}</p>
                        <p class="card-text"><span class="fs-5">{{__('ui.Prezzo')}}:</span> {{$announcement->price}}€</p>
                        <p class="card-text"><span class="fs-5">{{__('ui.Categoria')}}:</span> {{$announcement->category->name}}</p>
                        <p class="card-text"><span class="fs-5">{{__('ui.Data')}}:</span> {{$announcement->created_at->format('d/m/Y')}}</p>
                        <!-- <p class="card-text"><span class="fs-5">{{__('ui.Venditore')}}:</span> {{$announcement->name}}</p> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>



                    