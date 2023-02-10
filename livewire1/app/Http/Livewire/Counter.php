<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    // Variable para definir variable con valor numerico
    public $count = 3;

    // Funcion para incrementar variable count
    public function increment(){
        $this->count++; //count + 1
    }

    // Funcion para renderizar componente en vista blade
    public function render()
    {
        //Se pasan parametros a la vista por medio de this, counter es solo un alias que se debe colocar en blade, para llamarlo a la vista blade requerida
        return view('livewire.counter', ['counter' => $this->count]);
    }

    // Funcion para decrementar variable count

    public function decrement(){
        $this->count--; //count - 1
    }
}
