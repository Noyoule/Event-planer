<?php

namespace App\Http\Livewire;

use Livewire\Component;

class MakeForm extends Component
{
    public $config;
    public $current_path = "";
    protected $listeners = ['updateConfig'=>'updateConfig'];

    public function mount()
    {
        $this->config  = array(
            "titre" => "Sans titre",
            "description" => "",
            "image" => "",
            "theme" => "",
            "title_font" => "",
            "font" => "",
            "elements" => array(
                [],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[]
            )
        );
    }

    public function updateConfig($data){
        $segments = explode('.', $this -> current_path);
        $currentConfig = &$this->config;

        foreach ($segments as $segment) {
            if (!isset($currentConfig[$segment])) {
                dd("chemin invalide");
                return; 
            }
            $currentConfig = &$currentConfig[$segment];
        }
        $currentConfig = $data;
    }
    public function render()
    {
        return view('livewire.make-form');
    }
}
