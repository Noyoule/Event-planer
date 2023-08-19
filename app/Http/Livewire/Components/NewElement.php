<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class NewElement extends Component
{

    public function newQuestion(){
        $this -> emitUp("updateConfigNext",array("type"=>"radio","label"=>"","options"=>[],"required"=>false));
    }
    public function render()
    {
        return view('livewire.components.new-element');
    }
}
