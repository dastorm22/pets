<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Pet;


class PetsComponent extends Component
{
    public $pet_id, $name_pet, $date_birth_pet, $pet_type, $weight_pet, $breed_pet, $other_breed;
    public $isModalOpen = 0;


    public function store()
    {
        $this->validate([
            'name_pet' => 'required',
            'date_birth_pet' => 'required',
            'pet_type' => 'required',
            'weight_pet' => 'required',
            'breed_pet' => 'required',
        ]);

        Pet::updateOrCreate(['id' => $this->pet_id], [
            'name_pet'        => $this->name_pet,
            'user_id' => auth()->user() ? auth()->user()->id : null,
            'date_birth_pet' => $this->date_birth_pet,
            'pet_type'    => $this->pet_type,
            'weight_pet'       => $this->weight_pet,
            'breed_pet'       => $this->breed_pet,
            'other_breed'       => $this->other_breed,
        ]);

        session()->flash('message', $this->pet_id ? 'Student updated.' : 'Student created.');

        $this->closeModalPopover();
        $this->resetCreateForm();
    }

    public function create()
    {
        $this->resetCreateForm();
        $this->openModalPopover();
    }

    public function render()
    {
        $this->pets = Pet::all();
        return view('livewire.pets-component');
    }

    public function openModalPopover()
    {
        $this->isModalOpen = true;
    }

    public function closeModalPopover()
    {
        $this->isModalOpen = false;
    }

    private function resetCreateForm(){
        $this->name_pet = '';
        $this->date_birth_pet = '';
        $this->pet_type = '';
        $this->weight_pet = '';
        $this->breed_pet = '';
        $this->other_breed = '';
    }

    public function edit($id)
    {
        $pet = Pet::findOrFail($id);
        $this->pet = $id;
        $this->name = $pet->name_pet;
        $this->email = $pet->weight_pet;
        $this->mobile = $pet->breed_pet;

        $this->openModalPopover();
    }

    public function delete($id)
    {
        Pet::find($id)->delete();
        session()->flash('message', 'Studen deleted.');
    }

}
