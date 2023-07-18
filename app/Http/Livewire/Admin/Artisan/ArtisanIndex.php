<?php

namespace App\Http\Livewire\Admin\Artisan;

use App\Models\User;
use Livewire\Component;

class ArtisanIndex extends Component
{
    public $categories;
    public ?string $term = null;

    public int $perPage = 10;

    public string $orderBy = 'id';
    public string $sortBy = 'asc';

    public $readyToLoad = false;

    public function loadItems()
    {
        $this->readyToLoad = true;
    }

    public function getItem(){
        $artisans = User::query()->where('user_type',2);
        // * Search
        if (!empty($this->term)&& $this->term != null){
            $artisans = $artisans->search(trim($this->term));
        }
        if (!empty($this->categories)){
            $artisans = $artisans->where('artisan_job_category',$this->categories);
        }
        $artisans = $artisans->orderBy($this->orderBy, $this->sortBy)->paginate($this->perPage);

        return $artisans;

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
        $url = 'https://raw.githubusercontent.com/alaouy/sql-moroccan-cities/master/json/ville.json';
        $villes = json_decode(file_get_contents($url), true);
        return view('livewire.admin.artisan.artisan-index',[
            'artisans'  =>  $this->readyToLoad ? $this->getItem() : [],
            'villes'    =>  $villes,
        ]);
    }
}
