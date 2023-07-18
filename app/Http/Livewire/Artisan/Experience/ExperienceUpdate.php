<?php

namespace App\Http\Livewire\Artisan\Experience;

use App\Models\Experience;
use Illuminate\Support\Facades\Redirect;
use Livewire\Component;

class ExperienceUpdate extends Component
{
    public $itemId,$date_debut,$date_fin,$titre,$company_city,$company_name,$description;

    protected $listeners = ['showUpdateModel'];

    public bool $showUpdateModel = false;

    public function showUpdateModel($itemId){
        $this->itemId = $itemId;
        $this->showUpdateModel = true;

        if (!empty($this->itemId)){
            $item = Experience::find($this->itemId);
            $this->titre = $item->titre;
            $this->company_name = $item->company_name;
            $this->date_debut = $item->date_debut;
            $this->date_fin = $item->date_fin;
            $this->company_city = $item->company_city;
            $this->description = $item->description;
        }

    }

    public function edit(){
        // $this->validate();

        $data = [
            'titre' => $this->titre,
            'company_name' => $this->company_name,
            'date_debut' => $this->date_debut,
            'date_fin' => $this->date_fin,
            'company_city' => $this->company_city,
            'description' => $this->description,
        ];



        Experience::where('id',$this->itemId)->update($data);
        return Redirect::to('/artisan/experiences')->with('success', 'Post created successfully');

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
        return view('livewire.artisan.experience.experience-update',[
            'cities'      => $cities,
        ]);
    }
}
