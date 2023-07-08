<?php

namespace App\Http\Livewire\Client\Offre;

use App\Models\OffreTravail;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class OffreIndex extends Component
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
        return view('livewire.client.offre.offre-index',[
            'offres'    =>  OffreTravail::where('client_id',Auth::user()->id)->get()
        ]);
    }
}
