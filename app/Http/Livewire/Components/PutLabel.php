<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;
use Livewire\Features\Placeholder;

class PutLabel extends Component
{
    public $config_path;
    public $text;
    public $big;
    public $large;

    public function mount($config_path, $big, $large){
        $this -> config_path = $config_path;
        $this -> big = $big;
        $this -> large = $large;
    }

    public function updatedText(){
        $this -> emitUp("updateConfigIn",$this->text);
    }

    public function render()
    {
        return view('livewire.components.put-label');
    }
}
