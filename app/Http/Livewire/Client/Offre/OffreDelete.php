<?php

namespace App\Http\Livewire\Client\Offre;

use App\Models\OffreTravail;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Redirect;
use Laravel\Jetstream\InteractsWithBanner;
use Livewire\Component;

class OffreDelete extends Component
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

    public function closeDeleteModel(){
        $this->showDeleteModel = false;
        $this->reset();
    }
    public function delete(){


        $post = OffreTravail::findOrFail($this->itemId);

        $post->forceDelete();
        $this->reset();
        $this->closeDeleteModel();
        return Redirect::to('/offre')->with('success', 'Post created successfully');

        // $this->toast(__('Article supprimée'));


    }
    public function render()
    {
        return view('livewire.client.offre.offre-delete');
    }
}
