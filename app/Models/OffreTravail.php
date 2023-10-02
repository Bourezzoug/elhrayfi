<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OffreTravail extends Model
{
    use HasFactory;
    // protected $table = 'offre_travails';
    protected $fillable = ['client_id','title','description','catégorie','image_offre','salaire_montant','ville','address'];
    // public function user() {
    //     return $this->belongsTo(User::class);
    // }
    public function client()
    {
        return $this->belongsTo(User::class, 'client_id');
    }
    
}
