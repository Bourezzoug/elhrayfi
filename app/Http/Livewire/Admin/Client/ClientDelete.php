<?php

namespace App\Http\Livewire\Admin\Client;

use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Redirect;
use Laravel\Jetstream\InteractsWithBanner;
use Livewire\Component;

class ClientDelete extends Component
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


        $post = User::findOrFail($this->itemId);

        $post->forceDelete();
        $this->reset();
        $this->closeDeleteModel();
        return Redirect::to('/admin/clients')->with('success', 'Post created successfully');

        // $this->toast(__('Article supprimée'));


    }
    public function render()
    {
        return view('livewire.admin.client.client-delete');
    }
}
