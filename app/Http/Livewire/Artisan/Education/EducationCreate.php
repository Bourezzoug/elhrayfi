<?php

namespace App\Http\Livewire\Artisan\Education;

use App\Models\Education;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Livewire\Component;

class EducationCreate extends Component
{
    public $date_debut,$date_fin,$diplome,$school_name,$school_city;

    protected function rules()
    {
        $rules =  [
            'date_debut'    =>  ['required'],
            'date_fin'      =>  ['required'],
            'diplome'       =>  ['required', 'string'],
            'school_name'   =>  ['required','string'],
            'school_city'   =>  ['required','string'],
        ];
        return $rules;
    }

    public function create() {
        $data = [
            'artisan_id'    =>  Auth::user()->id,
            'date_debut'    =>  $this->date_debut,
            'date_fin'      =>  $this->date_fin,
            'diplome'       =>  $this->diplome,
            'school_name'   =>  $this->school_name,
            'school_city'   =>  $this->school_city,
        ];

        Education::create($data);
        $this->emit('refreshParent');
        return Redirect::to('/artisan/educations')->with('success', 'Post created successfully');
    }
    public function render()
    {
        $url = 'https://raw.githubusercontent.com/alaouy/sql-moroccan-cities/master/json/ville.json';
        $cities = json_decode(file_get_contents($url), true);
        return view('livewire.artisan.education.education-create',[
            'cities'      => $cities,
        ]);
    }
}
