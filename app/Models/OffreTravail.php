<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OffreTravail extends Model
{
    use HasFactory;
    protected $table = 'offre_travails';
    protected $fillable = ['client_id','title','description','catégorie','type_travail','salaire_type','travail_periode','salaire_montant','ville','address'];
    public function user() {
        return $this->belongsTo(User::class);
    }
}
