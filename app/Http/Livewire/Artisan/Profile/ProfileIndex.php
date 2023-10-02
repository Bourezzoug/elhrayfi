<?php

namespace App\Http\Livewire\Artisan\Profile;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Livewire\Component;
use Livewire\WithFileUploads;

class ProfileIndex extends Component
{
    use WithFileUploads;
    public $name,$email,$profile_photo_path,$profile_photo_path_url,$age,$addresse,$client_website,$description,$cities,$ville,$artisan_job_category,$artisan_experience,$artisan_portfolio,$cover,$cover_path,$artisan_cv,$artisan_portfolio_images,$status,$artisan_cv_name;
    public function mount() {
        $url = 'https://raw.githubusercontent.com/alaouy/sql-moroccan-cities/master/json/ville.json';
        $cities = json_decode(file_get_contents($url), true);
        $userAuth = Auth::user()->id;
        $users = User::findOrFail($userAuth);
        $this->name = $users->name;
        $this->email = $users->email;
        $this->profile_photo_path_url = $users->profile_photo_path;
        $this->addresse = $users->addresse;
        $this->age = $users->age;
        $this->description = $users->description;
        $this->cities = $cities;
        $this->ville = $users->ville;
        $this->artisan_job_category = $users->artisan_job_category;
        $this->artisan_experience = $users->artisan_experience;
        $this->artisan_cv_name = $users->artisan_cv;
        $this->artisan_portfolio_images = $users->artisan_portfolio;
        
        $this->cover_path = $users->cover_photo;
        $this->status   =   $users->status;    
        // dd($this->artisan_portfolio);
    }
    public function update() {
        $id = Auth::user()->id;

        $data = [
            'name' => $this->name,
            'email' => $this->email,
            'addresse' => $this->addresse,
            'age' => $this->age,
            'description' => $this->description,
            'artisan_job_category' => $this->artisan_job_category,
            'artisan_experience' => $this->artisan_experience,
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
        if (!empty($this->artisan_cv)) {
                $filename = $this->artisan_cv->getClientOriginalName();
                $url = $this->artisan_cv->storeAs('cv-photos', $filename);
                $data['artisan_cv'] = $url;
        }

        

        if (!empty($this->artisan_portfolio)) {
            $artisan_portfolioUrls = [];
            foreach ($this->artisan_portfolio as $artisan_portfolioImage) {
                $artisan_portfolioUrl = $artisan_portfolioImage->store('images', 'public');
                $artisan_portfolioUrls[] =  $artisan_portfolioUrl;
            }
            $data['artisan_portfolio'] = implode(',', $artisan_portfolioUrls);
        }

        User::where('id',$id)->update($data);
        return Redirect::to('/artisan/profile')->with('success', 'Post created successfully');
    }
    public function deleteImage($imageName)
    {
        // Remove the image from the array
        $imagesArray = explode(',', $this->artisan_portfolio);
        $filteredImages = array_filter($imagesArray, function ($image) use ($imageName) {
            return trim($image) !== trim($imageName);
        });
    
        // Update the $artisan_portfolio property with the new images list
        $this->artisan_portfolio = implode(',', $filteredImages);

        $data = [
            'artisan_portfolio' =>  $this->artisan_portfolio
        ];
        $id = Auth::user()->id;
        User::where('id',$id)->update($data);
    }
    public function render()
    {
        return view('livewire.artisan.profile.profile-index');
    }
}
