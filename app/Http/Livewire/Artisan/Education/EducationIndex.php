<?php

namespace App\Http\Livewire\Artisan\Education;

use App\Models\Education;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class EducationIndex extends Component
{

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
        return view('livewire.artisan.education.education-index',[
            'educations'   =>  Education::where('artisan_id',$artisan_id)->get()
        ]);
    }
}
