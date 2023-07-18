<?php

namespace App\Http\Livewire\Client\Offre;

use App\Models\OffreTravail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Livewire\Component;

class OffreCreate extends Component
{
    public $title,$description,$catégorie,$type_travail,$salaire_type,$travail_periode,$salaire_montant,$ville,$address;
    protected function rules()
    {
        
    $rules =  [
        'title'                 =>  ['required', 'string', 'max:255', 'min:5'],
        'excerpt'               =>  ['required', 'string','min:10'],
        'body'                  =>  ['required', 'string'],
        'slug'                  =>  ['required','string','max:255', 'min:5'],
        'seo_title'             =>  ['nullable','string','max:255', 'min:5'],
        'meta_description'      =>  ['nullable','string','max:255', 'min:5'],
        'photo'                 =>  'required|image|mimes:jpeg,png,jpg,webp',
        'status'                =>  ['required', 'string', 'max:50'],
    ];

    return $rules;
    }
    public function create(){
        // $this->validate();
        // $publicationDate = date('Y-m-d H:i:s', strtotime($this->publication_date));
        $data = [
            'client_id'         =>  Auth::user()->id,
            'title'             =>  $this->title,
            'description'       =>  $this->description,
            'catégorie'         =>  $this->catégorie,
            'type_travail'      =>  $this->type_travail,
            'salaire_type'      =>  $this->salaire_type,
            'travail_periode'   =>  $this->travail_periode,
            'salaire_montant'   =>  $this->salaire_montant,
            'ville'             =>  $this->ville,
            'address'           =>  $this->address,
        ];

        OffreTravail::create($data);
        $this->emit('refreshParent');
        return Redirect::to('/offre')->with('success', 'Post created successfully');
    }
    public function render()
    {
        $url = 'https://raw.githubusercontent.com/alaouy/sql-moroccan-cities/master/json/ville.json';
        $cities = json_decode(file_get_contents($url), true);
        return view('livewire.client.offre.offre-create',[
            'cities'      => $cities,
        ]);
    }
}
