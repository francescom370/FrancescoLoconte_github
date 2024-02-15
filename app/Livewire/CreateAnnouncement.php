<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Announcement;
use Livewire\Attributes\Validate;

class CreateAnnouncement extends Component
{
    // #[Validate]
    public $title = '';
    // #[Validate]
    public $price = '';
    // #[Validate] 
    public $description = '';

    // protected $rules = 
    // [
    //     'title'=> "required|min:4",
    //     'price'=> "required|numeric",
    //     'description'=> "required|min:4",

    // ];

    // public function save()
    // {
    //     $validated = $this->validate([ 
    //         'title' => 'required|min:3',
    //         'price' => 'required|min:3',
    //         'description' => 'required|min:3',
    //     ]);
 
    //     Announcement::create($validated);
 
    //     // return redirect()->to('/posts');
    // }


    
    public function store()
    {
        Announcement::create([
            'title'=>$this->title,
            'price'=>$this->price,
            'description'=>$this->description,
        ]);
        // return redirect(route('welcome'));
        $this->cleanForm();
        return redirect(route("announcement.create"))->with('message', 'Annuncio creato con successo!');
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
