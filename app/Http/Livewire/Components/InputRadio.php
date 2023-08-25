<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class InputRadio extends Component
{
    /* La position de la section de la question dans le formulaire */
    public $element_position;
    /* Chemin d’accès à la partie de la question dans le json*/ 
    public $config_path;
    /* Le nombre option défini par l’utilisateur pour la question */
    public $option_count;
    /* Le type de la question */
    public $choice = 2;

    public function mount($element_position, $config_path, $option_count){
        $this->element_position = $element_position;
        $this->config_path = $config_path;
        $this->option_count = $option_count;
    }
    
    public function render()
    {
        return view('livewire.components.input-radio');
    }
}
