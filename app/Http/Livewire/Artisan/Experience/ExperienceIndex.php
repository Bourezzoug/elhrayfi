<?php

namespace App\Http\Livewire\Artisan\Experience;

use App\Models\Experience;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ExperienceIndex extends Component
{
    public ?string $term = null;

    public int $perPage = 10;

    public string $orderBy = 'id';
    public string $sortBy = 'asc';

    public $readyToLoad = false;

    public function loadItems()
    {
        $this->readyToLoad = true;
    }
    public function selectedItem($action ,$itemId = null){
        if ($action == 'create'){
            $this->emit('showCreateModel');
        }elseif ($action == 'update'){
            $this->emit('showUpdateModel', $itemId);
        }elseif ($action == 'show'){
            $this->emit('showItemModel', $itemId);
        }elseif ($action == 'delete'){
            $this->emit('showDeleteModel', $itemId);
        }elseif ($action == 'restore'){
            $this->emit('showRestoreModel', $itemId);
        }
    }
    public function render()
    {
        $artisan_id = Auth::user()->id;
        return view('livewire.artisan.experience.experience-index',[
            'experiences'   =>  Experience::where('artisan_id',$artisan_id)->get()
        ]);
    }
}
