<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class InputCheckBox extends Component
{
    public $element_position;
    public $choice = 3;

    public function mount($element_position){
        $this -> element_position = $element_position;
    }

    public function render()
    {
        return view('livewire.components.input-check-box');
    }
}
