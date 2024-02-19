<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Announcement;
use Livewire\Attributes\Validate;

class CreateAnnouncement extends Component
{
    public $category;
    // #[Validate]
    public $title = '';
    // #[Validate]
    public $price = '';
    // #[Validate] 
    public $description = '';

    protected $rules = 
    [
        'title'=> "required|min:4",
        'price'=> "required|numeric",
        'description'=> "required|min:4",
        'category'=>"required",
        
    ];


    protected $messages=[
        'required'=>'il campo :attribute è obbligatorio',
        // 'title.required'=>'Il campo è obbligatorio',
        'title.min'=>'Inserire piu di 4 caratteri',
        // 'price.required'=>'Il campo è obbligatorio',
        'price.numeric'=>'Inserisci un importo valido',
        // 'description.required'=>'Il campo è obbligatorio',
        'description.min'=>'Inserire piu di 4 caratteri',
        // 'category.required'=>'Il campo è obbligatorio',
    ];


    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }
    
    // public function store()
    // {
    //     $category= Category::find($this->category);
    //     $category->announcements()->create([
    //         'title'=>$this->title,
    //         'price'=>$this->price,
    //         'description'=>$this->description,
    //     ]);
    //     $this->cleanForm();
    //     return redirect(route("announcement.create"))->with('message', 'Annuncio creato con successo!');
    // }
    
    public function store()
{
    $this->validate();
    $category = Category::find($this->category);
    
   
    if ($category) {
        $category->announcements()->create([
            'title' => $this->title,
            'price' => $this->price,
            'description' => $this->description,
        ]);
        
        $this->cleanForm();
        return redirect(route("announcement.create"))->with('message', 'Annuncio creato con successo!');
    } else {
       
        return redirect()->back()->with('error', 'Categoria non valida!');
    }
}


    public function cleanForm(){
        $this->title = "";
        $this->price = "";
        $this->description = "";
    }


    

    public function render()
    {
        return view('livewire.create-announcement');
    }
}
