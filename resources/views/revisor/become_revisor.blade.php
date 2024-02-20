<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Diventa un revisionatore</h1>
            </div>
            <form action="{{route('become.revisor')}}" method="POST">
                @csrf
        
                <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nome e cognome</label>
                        <input type="text" class="form-control" aria-describedby="emailHelp" name="name">
                        
                </div>
        
                <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Indirizzo Mail</label>
                        <input type="email" class="form-control"  aria-describedby="emailHelp" name="email">
                        
                </div>
        
        
                <button type="submit" class="btn btn-warning">Diventa revisionatore</button> 
        
        
            </form>
        </div>
    </div>
   






</x-layout>