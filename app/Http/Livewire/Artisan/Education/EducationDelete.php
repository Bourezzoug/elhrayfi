<?php

namespace App\Http\Livewire\Artisan\Education;

use App\Models\Education;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Redirect;
use Laravel\Jetstream\InteractsWithBanner;
use Livewire\Component;

class EducationDelete extends Component
{
    use InteractsWithBanner;
    use AuthorizesRequests;

    public $showDeleteModel = false;
    public $showRestoreModel = false;
    public $showForceDeleteModel = false;
    public $itemId;

    protected $listeners = ['showDeleteModel','showRestoreModel','showForceDeleteModel'];

    public function showDeleteModel($itemId){
        $this->itemId = $itemId;
        $this->showDeleteModel = true;
    }

    public function delete(){


        $experience = Education::findOrFail($this->itemId);

        // $this->authorize('delete', $experience);
        $experience->forceDelete();
        $this->reset();
        $this->closeDeleteModel();
        return Redirect::to('/artisan/educations')->with('success', 'Experience created successfully');

        // $this->toast(__('Article supprimée'));


    }

    public function closeDeleteModel(){
        $this->showDeleteModel = false;
        $this->reset();
    }

    public function render()
    {
        return view('livewire.artisan.education.education-delete');
    }
}
