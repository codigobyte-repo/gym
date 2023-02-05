<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Cuerpo extends Component
{
    public $seleccionarSexo = 'hombre';

    public function render()
    {
        return view('livewire.cuerpo');
    }
}
