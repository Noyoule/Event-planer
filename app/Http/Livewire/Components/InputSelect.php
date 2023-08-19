<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class InputSelect extends Component
{

    public $element_position;
    public $choice = 4;

    public function mount($element_position){
        $this -> element_position = $element_position;
    }

    public function render()
    {
        return view('livewire.components.input-select');
    }
}
