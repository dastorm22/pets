<?php

namespace App\Http\Livewire;
use App\Models\Pet;
use Livewire\Component;

class DetailsComponent extends Component
{
    public $name_pet;

    public function mount($name_pet)
    {
        $this->name_pet = $name_pet;
    }


    public function render()
    {
        $pet = Pet::where('name_pet', $this->name_pet)->first();

        return view('livewire.details-component', [
            'pet' => $pet
        ])->layout('layouts.app');
    }
}
