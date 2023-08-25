<?php

namespace App\Http\Livewire;

use Livewire\Component;

class MakeForm extends Component
{
    public $config;
    public $current_path = "";
    protected $listeners = ['updateConfigIn'=>'updateConfigIn','updateConfigNext'=>'updateConfigNext','update-question-rang' => 'QuestionOrder'];

    public function mount()
    {
        $this->config  = array(
            "title" => "",
            "default_title" =>"Sans titre",
            "description" => "",
            "default_description" =>"Aucune description",
            "image" => "",
            "theme" => "",
            "title_font" => "",
            "font" => "",
            "elements" => array(
                
            )
        );
    }

    public function updateConfigIn($data){
         /* Créer un tableaux d'index en séparent divisant le chemin concaténer par des points  */ 
        $segments = explode('.', $this -> current_path);
        $currentConfig = &$this->config;
        /* Parcourir le json de configuration */
        foreach ($segments as $segment) {
            if ($segment=="") {
                continue; 
            }
            $currentConfig = &$currentConfig[$segment];
        }
        $currentConfig = $data;
    }

    public function updateConfigNext($data){
        /* Créer un tableaux d'index en séparent divisant le chemin concaténer par des points  */ 
        $segments = explode('.', $this -> current_path);
        $indice = $segments[count($segments)-1];
        $elements = &$this -> config["elements"];
        /* Si $indice = "" c'est à dire qu'il faut ajouter l'élément à la première position */
        if($indice==''){
            array_unshift($elements,$data);
        } else $elements =  array_merge(array_slice($elements,0, $indice+1), [$data], array_slice($elements, $indice+1));
        $this-> QuestionOrder();
    }


    /* fonction pour mettre à jours l'ordre des questions */
    public function QuestionOrder(){
        $elements = &$this->config['elements'];
        
        for($i = 0;  $i < count($elements); $i++){
            $element = &$elements[$i];
            if(!isset($element['default_label'])){
                continue;
            }
            $element['default_label'] = "Question ".$i +1;
        }
    }


    public function render()
    {
        return view('livewire.make-form');
    }
}
