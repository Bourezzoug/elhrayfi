<?php

namespace App\Http\Livewire\Artisan\Experience;

use App\Models\Experience;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Livewire\Component;

class ExperienceCreate extends Component
{
    public $artisan_exp_startdate,$artisan_exp_enddate,$artisan_job_title,$artisan_company_name,$artisan_job_city,$artisan_job_desc;

    protected function rules()
    {
        $rules =  [
            'artisan_exp_startdate' =>  ['required'],
            'artisan_exp_enddate'   =>  ['required'],
            'artisan_job_title'     =>  ['required', 'string'],
            'artisan_company_name'  =>  ['required','string'],
            'artisan_job_city'      =>  ['required','string'],
            'artisan_job_desc'      =>  ['required','string'],
        ];
        return $rules;
    }
    public function create() {
        $data = [
            'artisan_id'            =>  Auth::user()->id,
            'date_debut' =>  $this->artisan_exp_startdate,
            'date_fin'   =>  $this->artisan_exp_enddate,
            'titre'     =>  $this->artisan_job_title,
            'company_name'  =>  $this->artisan_company_name,
            'company_city'      =>  $this->artisan_job_city,
            'description'      =>  $this->artisan_job_desc,
        ];

        Experience::create($data);
        $this->emit('refreshParent');
        return Redirect::to('/artisan/experiences')->with('success', 'Post created successfully');
    }
    public function render()
    {
        $url = 'https://raw.githubusercontent.com/alaouy/sql-moroccan-cities/master/json/ville.json';
        $cities = json_decode(file_get_contents($url), true);
        return view('livewire.artisan.experience.experience-create',[
            'cities'      => $cities,
        ]);
    }
}
