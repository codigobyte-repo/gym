<?php

namespace App\Http\Livewire;

use App\Models\Musculo;
use App\Models\NombreMusculo;
use Livewire\Component;

class BodyMuscles extends Component
{
    /* Recibimos estos parametros de la vista body.blade.php */
    public $genero, $lado, $musculo;

    public function mount($genero, $lado, $musculo)
    {
        $this->genero = $genero;
        $this->lado = $lado;
        $this->musculo = $musculo;     
    }

    public function render()
    {
        $nombre_musculo_id = NombreMusculo::where('nombre', 'like', '%' . $this->musculo . '%')->pluck('id')->first();
        
        $musculos = Musculo::where('genero', $this->genero) 
                            ->where('lado_cuerpo', $this->lado) 
                            ->where('nombre_musculos_id', $nombre_musculo_id)
                            ->get();

        return view('livewire.body-muscles', compact('musculos'));
    }
}
