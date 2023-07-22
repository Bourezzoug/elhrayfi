<?php

namespace App\Http\Livewire\Client\Offre;

use App\Models\OffreTravail;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Redirect;
use Livewire\Component;

class OffreUpdate extends Component
{
    public $itemId;
    public $title,$description,$catégorie,$type_travail,$salaire_type,$travail_periode,$salaire_montant,$ville,$address;
    public function mount($id) {
        $this->itemId = $id;
        // $user = OffreTravail::findOrFail($id);
        if (!empty($this->itemId)){
            $item = OffreTravail::find($this->itemId);
            $this->title = $item->title;
            $this->description = $item->description;
            $this->catégorie = $item->catégorie;
            $this->type_travail = $item->type_travail;
            $this->salaire_type = $item->salaire_type;
            $this->travail_periode = $item->travail_periode;
            $this->salaire_montant = $item->salaire_montant;
            $this->ville = $item->ville;
            $this->address = $item->address;

        }
    }
    public function edit(){
        // $this->validate();

        $data = [
            'title'             => $this->title,
            'description'       => $this->description,
            'catégorie'         => $this->catégorie,
            'type_travail'      => $this->type_travail,
            'salaire_type'      => $this->salaire_type,
            'travail_periode'   => $this->travail_periode,
            'salaire_montant'   => $this->salaire_montant,
            'ville'             => $this->ville,
            'address'           => $this->address,
        ];



        OffreTravail::where('id',$this->itemId)->update($data);
        return Redirect::to('/offre')->with('success', 'Post created successfully');

    }
    public function render()
    {
        $url = 'https://raw.githubusercontent.com/alaouy/sql-moroccan-cities/master/json/ville.json';
        $cities = json_decode(file_get_contents($url), true);
        return view('livewire.client.offre.offre-update',[
            'cities'      => $cities,
        ]);
    }
}
