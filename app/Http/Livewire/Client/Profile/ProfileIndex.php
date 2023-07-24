<?php

namespace App\Http\Livewire\Client\Profile;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Livewire\Component;
use Livewire\WithFileUploads;

class ProfileIndex extends Component
{
    use WithFileUploads;

    public $name,$email,$profile_photo_path,$addresse,$client_website,$description,$cities,$ville,$client_responsable_name,$date_creation,$profile_photo_path_url,$cover,$cover_path,$status;
    public function mount() {
        $url = 'https://raw.githubusercontent.com/alaouy/sql-moroccan-cities/master/json/ville.json';
        $cities = json_decode(file_get_contents($url), true);
        $userAuth = Auth::user()->id;
        $users = User::findOrFail($userAuth);
        $this->name = $users->name;
        $this->email = $users->email;
        $this->profile_photo_path_url = $users->profile_photo_path;
        $this->addresse = $users->addresse;
        $this->client_website = $users->client_website;
        $this->description = $users->description;
        $this->cities = $cities;
        $this->ville = $users->ville;
        $this->client_responsable_name = $users->client_responsable_name;
        $this->date_creation = $users->date_creation;
        $this->cover_path = $users->cover_photo;
        $this->status   =   $users->status;    
    }
    public function update() {
        $id = Auth::user()->id;

        $data = [
            'name' => $this->name,
            'email' => $this->email,
            'addresse' => $this->addresse,
            'client_website' => $this->client_website,
            'description' => $this->description,
            'ville' => $this->ville,
            'client_responsable_name' => $this->client_responsable_name,
            'date_creation' => $this->date_creation,
            'status' => $this->status,
        ];

        if (!empty($this->profile_photo_path)) {
            $url = $this->profile_photo_path->store('profile-photos', 'public');
            $data['profile_photo_path'] =  $url;
        }

        if (!empty($this->cover)) {
            $url = $this->cover->store('cover-photos', 'public');
            $data['cover_photo'] =  $url;
        }

        User::where('id',$id)->update($data);
        return Redirect::to('/client/profile')->with('success', 'Post created successfully');
    }
    public function render()
    {
        return view('livewire.client.profile.profile-index');
    }
}
