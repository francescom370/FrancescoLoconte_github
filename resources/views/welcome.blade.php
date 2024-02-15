<x-layout>
 <h1 class="text-center">Ciao </h1>

    <form action="{{route('announcement.create')}}"  method="GET">
     @csrf
        <button class="btn btn-danger">Inserisci Articolo
        <i class="bi bi-box-arrow-right"></i>
        </button>
    </form>


</x-layout>