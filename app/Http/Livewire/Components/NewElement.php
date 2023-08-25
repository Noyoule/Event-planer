<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class NewElement extends Component
{

    public $element_position;

    public function mount($element_position){
        $this -> element_position = $element_position;
    }

    public function newQuestion(){
        $question_rang = $this -> element_position + 2;
        $this -> emitUp("updateConfigNext",array("type"=>"radio","label"=>"","default_label"=>"Question ".$question_rang,"options"=>[array("default_label"=>"Option1","label"=>"")],"required"=>false));
    }
    public function render()
    {
        return view('livewire.components.new-element');
    }
}
