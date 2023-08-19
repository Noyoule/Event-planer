<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class ChangeQestionType extends Component
{
    public $element_position;
    public $choice;

    public function mount($element_position){
        $this -> element_position = $element_position;
    }

    public function render()
    {
        return view('livewire.components.change-qestion-type');
    }
}
