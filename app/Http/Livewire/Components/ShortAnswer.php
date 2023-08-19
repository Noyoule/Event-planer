<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class ShortAnswer extends Component
{

  public $config_path;
  public $element_position;
  public $choice = 0;


  public function mount($config_path, $element_position)
  {
    $this->element_position = $element_position;
    $this->config_path = $config_path;
  }

  public function render()
  {
    return view('livewire.components.short-answer');
  }
}
