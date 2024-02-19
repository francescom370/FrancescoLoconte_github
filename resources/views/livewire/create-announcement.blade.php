<div>


@if (session()->has('message'))
<div class="justify-content-center my-2 alert alert-success">
{{ session('message') }}
</div>
@endif
<form wire:submit.prevent="store">
    @csrf
    <div class="mb-3">
        <label class="form-label">Titolo annuncio</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" wire:model.live="title">
        @error('title')
        {{$message}}
        @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Descrizione</label>
        <input type="text" class="form-control @error('description') is-invalid @enderror" wire:model.live="description">
        @error('description')
        {{$message}}
        @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Prezzo</label>
        <input type="number" class="form-control @error('price') is-invalid @enderror" wire:model.live="price">
        @error('price')
        {{$message}}
        @enderror
    </div>

    <div class="mb-3">
    <select wire:model.defer="category" class="form-select  @error('category') is-invalid @enderror"  aria-label="Default select example">
        <option value="" selected>Scegli la tua categoria</option>
        @foreach ($categories as $category)
        <option value="{{$category->id}}">{{$category->name}}</option>
        @endforeach
    </select>
    @error('category')
    {{$message}}
    @enderror
    </div>
    



    <button type="submit" class="btn btn-primary">Inserisci articolo</button>
</form>
</div>
