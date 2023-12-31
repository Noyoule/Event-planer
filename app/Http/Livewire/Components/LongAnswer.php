<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class LongAnswer extends Component
{
    public $element_position;
    public $choice = 1;
    public $config_path;

    public function mount($config_path ,$element_position){
        $this -> config_path = $config_path;
        $this -> element_position = $element_position;
    }

    public function render()
    {
        return view('livewire.components.long-answer');
    }
}
