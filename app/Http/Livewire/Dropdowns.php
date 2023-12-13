<?php

namespace App\Http\Livewire;

use App\Models\Distrito;
use App\Models\Provincia;
use Livewire\Component;

class Dropdowns extends Component
{
    public $provincias;
    public $distritos;

public $SelectedProvincia=null;
public $SelectedDistrito=null;

    public function mount()
    {
        $this->provincias = Provincia::all();
        
    }
   
    public function updatedSelectedProvincia($provincia)
    {
   
    $this->distritos=Distrito::where('idprovincia',$provincia)->get();
   
    }
    public function render()
    {
        return view('livewire.dropdowns');
    }
}
