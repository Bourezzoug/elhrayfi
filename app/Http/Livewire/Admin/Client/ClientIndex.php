<?php

namespace App\Http\Livewire\Admin\Client;

use App\Models\User;
use Livewire\Component;
use Spatie\SimpleExcel\SimpleExcelWriter;

class ClientIndex extends Component
{
    public $villes = [];

    public ?string $term = null;

    public int $perPage = 10;

    public string $orderBy = 'id';
    public string $sortBy = 'asc';

    public $readyToLoad = false;


    public function loadItems()
    {
        $this->readyToLoad = true;
        $url = 'https://raw.githubusercontent.com/alaouy/sql-moroccan-cities/master/json/ville.json';
        $this->villes =  json_decode(file_get_contents($url), true);
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

    public function ExportCSV() {
        $rows = [];
        $writer = SimpleExcelWriter::create('clients.xlsx');
        User::chunk(2000,function($inscrits) use (&$rows) {
            foreach($inscrits->toArray() as $inscrit) {
                // unset($inscrit['code_verification']);
                // unset($inscrit['updated_at']);
                // $inscrit['verified'] = ($inscrit['verified'] == 1 ? 'oui' : 'non');
                $rows[] =  $inscrit;
            }
            
        });
        
    
        $writer
        ->addHeader(['id', 'Nom d\'Entreprise','Email','Ville','Date de création'])
        ->addRows($rows);
            return response()->download('clients.xlsx');
            // dd($rows);
        }

    public function getItem(){
        $clients = User::query()->where('user_type',3);
        // * Search
        if (!empty($this->term)&& $this->term != null){
            $clients = $clients->search(trim($this->term));
        }

        $clients = $clients->orderBy($this->orderBy, $this->sortBy)->paginate($this->perPage);

        return $clients;

    }
    public function render()
    {

        return view('livewire.admin.client.client-index',[
            'clients'  =>  $this->readyToLoad ? $this->getItem() : [],

        ]);
    }
}
