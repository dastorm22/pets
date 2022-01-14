<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Pet;


class DashboardComponent extends Component
{

    public $sorting;
    public $pagesize;

    public function mount()
    {
        $this->sorting = "default";
        $this->pagesize = 12;
    }


    public function render()
    {

        if($this->sorting == 'date'){
            $pets = Pet::orderBy('created_at', 'DESC')->paginate($this->pagesize);
        }
        else if($this->sorting == 'price'){
            $pets = Pet::orderBy('weight_pet', 'ASC')->paginate($this->pagesize);
        }
        else if($this->sorting == 'price-desc'){
            $pets = Pet::orderBy('weight_pet', 'DESC')->paginate($this->pagesize);
        }
        else{
            $pets = Pet::paginate($this->pagesize);
        }

        return view('livewire.dashboard-component', [
            'pets' => $pets
        ])->layout('layouts.app');
    }
}
