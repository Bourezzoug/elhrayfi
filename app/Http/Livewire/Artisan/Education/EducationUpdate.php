<?php

namespace App\Http\Livewire\Artisan\Education;

use App\Models\Education;
use Illuminate\Support\Facades\Redirect;
use Livewire\Component;

class EducationUpdate extends Component
{
    public $itemId,$date_debut,$date_fin,$diplome,$school_city,$school_name;

    protected $listeners = ['showUpdateModel'];

    public bool $showUpdateModel = false;

    public function showUpdateModel($itemId){
        $this->itemId = $itemId;
        $this->showUpdateModel = true;

        if (!empty($this->itemId)){
            $item = Education::find($this->itemId);
            $this->diplome = $item->diplome;
            $this->school_name = $item->school_name;
            $this->date_debut = $item->date_debut;
            $this->date_fin = $item->date_fin;
            $this->school_city = $item->school_city;
        }

    }

    public function edit(){
        // $this->validate();

        $data = [
            'diplome' => $this->diplome,
            'school_name' => $this->school_name,
            'date_debut' => $this->date_debut,
            'date_fin' => $this->date_fin,
            'school_city' => $this->school_city,
        ];



        Education::where('id',$this->itemId)->update($data);
        return Redirect::to('/artisan/educations')->with('success', 'Post created successfully');

    }

    public function closeUpdateModel(){
        $this->showUpdateModel = false;
        $this->reset();
        $this->resetValidation();
        $this->resetErrorBag();
    }

    public function render()
    {
        $url = 'https://raw.githubusercontent.com/alaouy/sql-moroccan-cities/master/json/ville.json';
        $cities = json_decode(file_get_contents($url), true);
        return view('livewire.artisan.education.education-update',[
            'cities'      => $cities,
        ]);
    }
}
