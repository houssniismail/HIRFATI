<?php

namespace App\Http\Livewire;

use App\Models\bricole;
use Livewire\Component;
use App\Models\Commentaire;
use Illuminate\Support\Facades\Auth;



class Coments extends Component
{
    public $bricole = ''; 
    public $id_bricole;
    public function mount($id_bricole){
        $this->id_bricole = $id_bricole;
        $this->read();
    }
    public function save()
    {
        $Commentaire = new Commentaire;
        $Commentaire->commentaire = $this->bricole;
        $Commentaire->bricole_id = $this->id_bricole;
        $Commentaire->user_id = Auth::user()->id;
        $Commentaire->save();
        $this->bricole='';
        $this->read();
    }
    public function read()
    {
        $this->bricole = bricole::where('id_bricole', $this->id_bricole)->get();
    }
    public function render()
    {
        return view('livewire.coments');
    }

    
}
