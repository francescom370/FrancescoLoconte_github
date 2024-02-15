
    <x-layout>
        <div class="container">
                <div class="row">
                        <div class="col-12">
                                <h1 class="display-1 text-center text-danger">Accedi</h1>
                        </div>
                        <form action="{{route('login')}}" method="POST">
                                @csrf
                              

                                <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Indirizzo Mail</label>
                                        <input type="email" class="form-control"  aria-describedby="emailHelp" name="email">
                                        
                                </div>
                                
                                <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Password</label>
                                        <input type="password" class="form-control" name="password"> 
                                </div>

                            
                                
                                <button type="submit" class="btn btn-primary">Accedi</button>
                        </form>
                </div>
        </div>
</x-layout>



