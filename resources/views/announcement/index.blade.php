<x-layout>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center my-5">Index annunci</h1>
        </div>
            @foreach ($announcements as $announcement)
            <div class="col-4 justify-content-center">
                <div class="card" style="width: 18rem;">
                    <img src="https://picsum.photos/200" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$announcement->title}}</h5>
                        <p class="card-text">{{$announcement->description}}</p>
                        <p class="card-text">{{$announcement->price}}</p>
                        <p class="card-text">{{$announcement->category->name}}</p>
                        <p class="card-text">{{$announcement->created_at->format('d/m/Y')}}</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                        <a href="{{route('announcement.show', compact('announcement'))}}" class="btn btn-warning">Visualizza</a> 
                    </div>
                </div>

            </div>
            @endforeach
            {{$announcements->links()}}
        
    </div>
</div>








</x-layout>