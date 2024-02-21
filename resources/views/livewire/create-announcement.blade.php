<div>

@if (session()->has('message'))
<div class="justify-content-center my-2 alert alert-success">
{{ session('message') }}
</div>
@endif
<div class="container contenitore-custom">
    <div class="row">
        <div class="col-12">
        <form wire:submit.prevent="store">
    @csrf
    <div class="mb-3 my-4">
        <label class="form-label fs-5 color-A">Titolo annuncio</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" wire:model.live="title">
        @error('title')
        {{$message}}
        @enderror
    </div>

    <div class="mb-3 my-3">
        <label class="form-label fs-5 color-A">Descrizione</label>
        <input type="text" class="form-control @error('description') is-invalid @enderror" wire:model.live="description">
        @error('description')
        {{$message}}
        @enderror
    </div>

    <div class="mb-3 my-3">
        <label class="form-label fs-5 color-A">Prezzo</label>
        <input type="number" class="form-control @error('price') is-invalid @enderror" wire:model.live="price">
        @error('price')
        {{$message}}
        @enderror
    </div>

    <div class="mb-3 my-4">
        <p class="fs-5 color-A">Scegli la categoria</p>
    <select wire:model.defer="category" class="form-select  @error('category') is-invalid @enderror"  aria-label="Default select example">
        <option value="" selected></option>
        @foreach ($categories as $category)
        <option value="{{$category->id}}">{{$category->name}}</option>
        @endforeach
    </select>
    @error('category')
    {{$message}}
    @enderror
    </div>
    <div class="text-center mt-5">
        <button type="submit" class="btn btn-warning">Inserisci articolo</button>
    </div>  
</form>

        </div>
    </div>
</div>

</div>
